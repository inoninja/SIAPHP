# Use the official PHP 8.2.12 image with the Apache web server
FROM php:8.2.12-apache

# Install system dependencies, INCLUDING THE cURL DEV HEADERS
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libcurl4-openssl-dev \
    unzip \
    curl \
    git \
    gnupg2 \
    ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# 🚀 CRITICAL FIX FOR NEON/SSL CONNECTIONS:
RUN update-ca-certificates

# Install the necessary PHP extensions.
# Note: curl is added here after its dev headers are installed above.
RUN docker-php-ext-install pdo pdo_pgsql curl

# Copy Composer from the official image.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache's rewrite module.
RUN a2enmod rewrite

# Set the working directory for the rest of the commands.
WORKDIR /var/www/html

# Copy composer files and install dependencies.
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copy the rest of your application code into the container.
COPY . .

# Copy your custom Apache configuration to overwrite the default.
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Configure Apache for your project
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf