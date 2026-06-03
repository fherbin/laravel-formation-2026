FROM dunglas/frankenphp:latest

RUN apt-get update && apt-get install -y \
    unzip micro git htop \
    && rm -rf /var/lib/apt/lists/*

RUN install-php-extensions redis pcntl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
