# Use official PHP image with required extensions
FROM php:8.2-fpm

WORKDIR /app

# Copy package files and install frontend deps
COPY package*.json vite.config.js ./
COPY resources resources
RUN npm install && npm run build

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Install Node.js (for asset building)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs


# Copy project files (including resources/ for Vite build)
COPY . .

# Copy built Vite assets from Node stage
COPY --from=node_builder /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel config
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 8000 and set the entrypoint
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000