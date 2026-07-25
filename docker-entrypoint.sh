#!/bin/sh
set -e

# Render provides dynamic PORT (defaults to 10000 if unset)
PORT="${PORT:-10000}"
echo "Configuring Nginx to listen on port ${PORT}..."

# Replace PORT_PLACEHOLDER in Nginx configuration
sed -i "s/PORT_PLACEHOLDER/${PORT}/g" /etc/nginx/http.d/default.conf 2>/dev/null || sed -i "s/PORT_PLACEHOLDER/${PORT}/g" /etc/nginx/conf.d/default.conf

# Ensure essential Laravel storage and database directories exist
mkdir -p storage/framework/views \
         storage/framework/sessions \
         storage/framework/cache \
         storage/logs \
         bootstrap/cache \
         database

# Initialize SQLite database if it does not exist
if [ ! -f "database/database.sqlite" ]; then
    echo "Creating database.sqlite file..."
    touch database/database.sqlite
fi

# Set directory permissions for web server process
chown -R www-data:www-data storage bootstrap/cache database
chmod -R 775 storage bootstrap/cache database

# Generate application key if missing

# Execute production caching and database migrations
echo "Optimizing Laravel configuration, routes, and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force --no-interaction

echo "Starting PHP-FPM and Nginx..."
php-fpm -D
exec nginx -g 'daemon off;'
