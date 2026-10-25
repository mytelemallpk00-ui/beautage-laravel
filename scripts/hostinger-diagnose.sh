#!/usr/bin/env bash
# Print Hostinger Laravel health checks (safe to share — no passwords).
set -euo pipefail

ROOT="${DOMAIN_ROOT:-/home/u662960912/domains/beige-ape-286733.hostingersite.com}"
cd "$ROOT"

echo "=== Beautage Hostinger diagnose ==="
echo "PWD: $(pwd)"
echo "PHP: $(/usr/bin/php -v | head -1)"
echo ""

echo "--- index.php autoload path ---"
grep "vendor/autoload" public_html/index.php 2>/dev/null || echo "MISSING public_html/index.php"
echo ""

echo "--- key paths ---"
for f in artisan vendor/autoload.php bootstrap/app.php .env public/index.php; do
  if [[ -e "$f" ]]; then echo "OK  $f"; else echo "NO  $f"; fi
done
echo ""

echo "--- public_html should NOT contain app code ---"
for bad in resources vendor app bootstrap .env; do
  if [[ -e "public_html/$bad" ]]; then echo "BAD public_html/$bad exists"; fi
done
echo "(if no BAD lines above, public_html layout is OK)"
echo ""

echo "--- .env DB (names only, no secrets) ---"
if [[ -f .env ]]; then
  grep -E '^DB_CONNECTION=|^DB_HOST=|^DB_DATABASE=|^DB_USERNAME=' .env || true
else
  echo "NO .env file"
fi
echo ""

echo "--- artisan db:show ---"
/usr/bin/php artisan config:clear -q 2>/dev/null || true
/usr/bin/php artisan db:show 2>&1 || true
echo ""
echo "=== end ==="
