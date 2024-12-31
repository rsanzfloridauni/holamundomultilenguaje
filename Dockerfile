FROM php:8.3-apache

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia el código fuente de tu aplicación al contenedor
COPY . /var/www/html/

# Establece los permisos adecuados para el directorio de la aplicación
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Expone el puerto 80 para que Apache pueda recibir tráfico web
EXPOSE 80

# Comando para mantener el contenedor en ejecución mientras Apache funcione
CMD ["apache2-foreground"]
