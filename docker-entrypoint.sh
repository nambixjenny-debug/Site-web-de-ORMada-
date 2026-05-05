#!/bin/bash
set -e

# Warmup au démarrage — la DB est accessible ici
php bin/console cache:warmup --env=prod

# Lancer Apache
exec apache2-foreground