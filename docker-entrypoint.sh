#!/bin/bash
set -e

# ✅ Créer le .env à partir des variables Railway injectées
echo "APP_ENV=${APP_ENV:-prod}" > /var/www/html/.env
echo "APP_SECRET=${APP_SECRET}" >> /var/www/html/.env
echo "DATABASE_URL=${DATABASE_URL}" >> /var/www/html/.env

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
