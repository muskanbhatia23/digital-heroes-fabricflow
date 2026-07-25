# =========================================================
# Stage 1: Build Frontend Assets (Vite)
# =========================================================
FROM node:20-alpine AS node-builder

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY vite.config.js ./
COPY resources ./resources
COPY public ./public

RUN npm run build

# =========================================================
# Stage 2: Install PHP Composer Dependencies
# =========================================================
FROM composer:2 AS composer-builder

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-scripts

COPY . .
RUN composer dump-autoload --optimize --no-dev

# =========================================================
# Stage 3: Production Runtime (PHP 8.2 FPM + Nginx)
# =========================================================
FROM php:8.2-fpm-alpine AS runtime

LABEL maintainer="FabricFlow <dev@fabricflow.com>"

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    nginx \
    sqlite-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    icu-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) pdo_sqlite bcmath opcache intl zip gd

# Copy PHP and Nginx configurations
COPY docker/php.ini /usr/local/etc/php/conf.d/custom-php.ini
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

WORKDIR /var/www/html

# Copy PHP application dependencies and source code
COPY --from=composer-builder /app /var/www/html

# Copy compiled frontend assets from Node builder
COPY --from=node-builder /app/public/build /var/www/html/public/build

# Copy entrypoint script and make executable
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set directory permissions
RUN mkdir -p storage bootstrap/cache database \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

EXPOSE 10000

ENTRYPOINT ["docker-entrypoint.sh"]
