FROM php:8.2-apache
RUN apt-get update && apt-get install -y git zip
COPY . /var/www/html
WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer update --no-autoloader && composer install --no-autoloader
RUN a2enmod rewrite
RUN a2enmod actions
RUN service apache2 restart