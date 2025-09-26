# Use the official PHP 8.2.12 image with the Apache web server
FROM php:8.2.12-apache

# Install system dependencies. `unzip` is often needed by Composer.
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    curl \
    git \
    && rm -rf /var/lib/apt/lists/*

# Install the PostgreSQL driver for PHP.
RUN docker-php-ext-install pdo pdo_pgsql

# Copy Composer from the official image.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache's rewrite module.
RUN a2enmod rewrite

# Set the working directory for the rest of the commands.
WORKDIR /var/www/html

# Copy composer files and install dependencies. This is done before
# copying the rest of the app to take advantage of Docker's caching.
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copy the rest of your application code into the container.
COPY . .

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy your custom Apache configuration to overwrite the default.
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Configure Apache for your project
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
