# Use the official PHP image with Apache
FROM php:7.4-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Enable the mysqli extension
RUN docker-php-ext-enable mysqli
