FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    curl \
    libonig-dev \
    libxml2-dev \
    libpng-dev \
    libzip-dev \
    libmcrypt-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd sockets \
    && pecl install redis \
    && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html
