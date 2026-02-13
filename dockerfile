FROM php:8.2-apache

# Copiar todos los archivos al servidor
COPY . /var/www/html/

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Dar permisos (opcional pero recomendado)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
