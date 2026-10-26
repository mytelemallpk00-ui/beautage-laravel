#!/usr/bin/env bash
#
# One command: fix Hostinger 403 + missing APP_KEY + wrong public_html layout.
# Run on the server:
#   cd /home/u662960912/domains/beige-ape-286733.hostingersite.com
#   bash scripts/hostinger-fix-all.sh
#
set -euo pipefail

DOMAIN_ROOT="${DOMAIN_ROOT:-/home/u662960912/domains/beige-ape-286733.hostingersite.com}"
PHP_BIN="${PHP_BIN:-/usr/bin/php}"
COMPOSER_BIN="${COMPOSER_BIN:-/usr/local/bin/composer}"

APP_ROOT="$DOMAIN_ROOT"
if [[ ! -f "$APP_ROOT/artisan" && -f "$APP_ROOT/public_html/artisan" ]]; then
  # Live layout: the Laravel project was uploaded into the document root.
  APP_ROOT="$APP_ROOT/public_html"
fi

cd "$APP_ROOT"

if [[ ! -f artisan ]]; then
  echo "ERROR: artisan not found in $DOMAIN_ROOT or $DOMAIN_ROOT/public_html" >&2
  exit 1
fi

echo "==> Beautage Hostinger fix-all (403 + deploy)"
echo "==> App root: $APP_ROOT"

if [[ -d .git ]]; then
  echo "==> Git pull origin main"
  git pull origin main || echo "WARN: git pull failed — continuing with local files"
fi

echo "==> Path permissions (Apache must traverse to the document root)"
for dir in "${HOME}" "${HOME}/domains" "$DOMAIN_ROOT" "$APP_ROOT"; do
  if [[ -d "$dir" ]]; then
    chmod 755 "$dir" 2>/dev/null || true
  fi
done

echo "==> Composer install"
if [[ -f "$COMPOSER_BIN" ]]; then
  "$PHP_BIN" "$COMPOSER_BIN" install --optimize-autoloader --no-dev --no-interaction
else
  composer install --optimize-autoloader --no-dev --no-interaction
fi

if [[ ! -f .env ]]; then
  cp .env.example .env
  echo "WARN: Created .env from example — set MySQL DB_* in hPanel, then re-run this script."
fi

if ! grep -q '^APP_KEY=base64:' .env 2>/dev/null; then
  "$PHP_BIN" artisan key:generate --force
fi

if [[ "$(basename "$APP_ROOT")" == "public_html" ]]; then
  echo "==> Document root is the Laravel project. /index.php forwards into public/."
  chmod 644 .htaccess index.php public/.htaccess public/index.php 2>/dev/null || true
else
  echo "==> Rebuild public_html from public/ (includes .htaccess)"
  rm -rf public_html
  mkdir -p public_html
  cp -a public/. public_html/

  # Undo a broken manual edit that points vendor/bootstrap into public_html
  sed -i "s|__DIR__\\.'/vendor/autoload.php'|__DIR__.'/../vendor/autoload.php'|g" public_html/index.php
  sed -i "s|__DIR__\\.'/bootstrap/app.php'|__DIR__.'/../bootstrap/app.php'|g" public_html/index.php

  for bad in resources vendor app bootstrap config database routes storage artisan .env .git public; do
    rm -rf "public_html/${bad}"
  done

  ln -sfn "${APP_ROOT}/storage/app/public" "${APP_ROOT}/public_html/storage"
  chmod 644 public_html/.htaccess public_html/index.php 2>/dev/null || true
  find public_html -type d -exec chmod 755 {} \;
  find public_html -type f -exec chmod 644 {} \;

  echo "==> public_html check"
  grep "vendor/autoload" public_html/index.php
  ls -la public_html/index.php public_html/.htaccess
fi

chmod -R 755 storage bootstrap/cache

echo "==> Database"
"$PHP_BIN" artisan config:clear
if "$PHP_BIN" artisan migrate --force; then
  "$PHP_BIN" artisan db:seed --force || true
else
  echo "WARN: migrate failed — fix DB_CONNECTION/DB_* in .env, then re-run." >&2
fi

echo "==> Laravel caches"
"$PHP_BIN" artisan config:cache
"$PHP_BIN" artisan route:cache
"$PHP_BIN" artisan view:cache

APP_URL=$(grep -E '^APP_URL=' .env | cut -d= -f2- | tr -d '"' | tr -d "'" || true)
echo ""
echo "==> DONE"
echo "    Visit: ${APP_URL:-https://beige-ape-286733.hostingersite.com}"
