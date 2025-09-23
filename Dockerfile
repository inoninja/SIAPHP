# Use the official PHP 8.2.12 image with the Apache web server
FROM php:8.2.12-apache

# Copy all your project files into the web server's root directory
COPY . /var/www/html/

# Install the PostgreSQL driver for PHP
RUN docker-php-ext-install pdo pdo_pgsql
