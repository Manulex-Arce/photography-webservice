FROM wordpress:php8.1-apache

# Copia el contenido de tu WordPress al contenedor
COPY . /var/www/html/

# Da permisos correctos
RUN chown -R www-data:www-data /var/www/html
