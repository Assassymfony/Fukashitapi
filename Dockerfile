FROM php:8.2-apache

RUN apt-get update && apt-get install -y git zip

COPY . /var/www/html
WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-interaction

RUN a2enmod rewrite
RUN a2enmod actions

COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf
RUN service apache2 restart

ENTRYPOINT ["php","-S","0.0.0.0:8383","-t","./public"]