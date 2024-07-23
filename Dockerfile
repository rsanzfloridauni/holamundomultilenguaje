# Usa una imagen base con PHP y Composer
FROM php:8.1-cli

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia el código fuente al contenedor
COPY . .

# Instala las dependencias de Composer
RUN composer install

# Comando por defecto
CMD ["php", "-S", "0.0.0.0:8000"]
