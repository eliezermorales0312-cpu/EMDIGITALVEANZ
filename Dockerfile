FROM php:8.1-apache
COPY . /var/www/html/
RUN cp -r digital/* /var/www/html/ 2>/dev/null || true
