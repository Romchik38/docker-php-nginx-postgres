FROM php:8.3-fpm

ENV PHPIZE_DEPS \
		autoconf \
		dpkg-dev \
		file \
		g++ \
		gcc \
		libc-dev \
		make \
		pkg-config \
		re2c

RUN set -eux; \
apt-get update; \
apt-get install -y --no-install-recommends \
    $PHPIZE_DEPS \
    ca-certificates \
    curl \
    xz-utils \
    mailutils \
    msmtp

RUN rm -rf /var/lib/apt/lists/*

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN install-php-extensions pgsql xdebug GD
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

ENV $PHP_INI_DIR=/usr/local/etc/php
COPY php/conf.d/site.ini $PHP_INI_DIR/conf.d/
COPY php/conf.d/xdebug.ini $PHP_INI_DIR/conf.d/

COPY php/msmtprc /etc/msmtprc