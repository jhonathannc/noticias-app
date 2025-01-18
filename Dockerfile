FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
  git \
  curl \
  libpng-dev \
  zip \
  libzip-dev \
  unzip \
  default-mysql-client

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install bcmath gd opcache mysqli pdo_mysql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u 1000 -d /home/ubuntu ubuntu
RUN groupmod -g 1000 ubuntu

RUN mkdir -p /home/ubuntu/.composer && \
  chown -R ubuntu:ubuntu /home/ubuntu

USER ubuntu