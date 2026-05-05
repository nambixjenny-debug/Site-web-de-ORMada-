#!/bin/bash
set -e

echo "==> Clearing cache..."
php bin/console cache:clear --env=prod --no-warmup

echo "==> Warming up cache..."
php bin/console cache:warmup --env=prod

echo "==> Installing assets..."
php bin/console assets:install public --env=prod

echo "==> Installing importmap..."
php bin/console importmap:install

echo "==> Starting Apache..."
exec apache2-foreground