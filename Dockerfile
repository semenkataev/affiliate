FROM php:8.1.0-apache
WORKDIR /var/www/affiliate

RUN a2enmod rewrite
