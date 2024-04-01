FROM php:7.4
WORKDIR /var/www/html
COPY . /var/www/html
CMD ["php", "-S", "0.0.0.0:8080" ]