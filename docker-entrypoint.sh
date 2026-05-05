#!/bin/bash
set -e

cat > /var/www/html/.env <<EOF
APP_ENV="${APP_ENV:-prod}"
APP_SECRET="${APP_SECRET}"
APP_SHARE_DIR=var/share
DEFAULT_URI=http://localhost
DATABASE_URL="${DATABASE_URL}"
MESSENGER_TRANSPORT_DSN="${MESSENGER_TRANSPORT_DSN:-doctrine://default?auto_setup=0}"
MAILER_DSN="${MAILER_DSN:-null://null}"
EOF

echo "==> Clearing cache..."
php bin/console cache:clear --env=prod --no-warmup

echo "==> Warming up cache..."
php bin/console cache:warmup --env=prod

echo "==> Installing assets..."
php bin/console assets:install public --env=prod

echo "==> Installing importmap..."
# ✅ --env=prod manquait ici !
php bin/console importmap:install --env=prod

echo "==> Starting Apache..."
exec apache2-foreground