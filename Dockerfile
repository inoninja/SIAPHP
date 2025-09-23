# Use the official PHP 8.2.12 image with the Apache web server
FROM php:8.2.12-apache

# Install system dependencies required for PHP extensions.
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Install the PostgreSQL driver for PHP.
RUN docker-php-ext-install pdo pdo_pgsql

# Copy your custom Apache configuration to overwrite the default.
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable Apache's rewrite module (useful for clean URLs).
RUN a2enmod rewrite

# Copy all your project files into the web server's root directory.
COPY . /var/www/html/
