FROM php:8.1-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy app to /var/www/html
COPY public/ /var/www/html/

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
