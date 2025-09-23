# Use the official PHP 8.2.12 image with the Apache web server
FROM php:8.2.12-apache

# Install system dependencies required for PHP extensions.
# libpq-dev is essential for the PostgreSQL driver (pdo_pgsql).
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Now, install the PostgreSQL driver for PHP. This will succeed because
# the required system libraries are now present.
RUN docker-php-ext-install pdo pdo_pgsql

# Copy all your project files into the web server's root directory
COPY . /var/www/html/
