<?php

/**
 * Hostinger's document root is the project folder, so "/" never reaches public/index.php.
 * Forward that layout into Laravel's front controller. When the document root is already
 * public/ or public_html, this file is not used.
 */
require __DIR__.'/public/index.php';
