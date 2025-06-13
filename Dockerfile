FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy your PHP files to Apache's default root
COPY . /var/www/html/

# Open port 80
EXPOSE 80

# Start Apache (this keeps the container running)
CMD ["apache2-foreground"]
