FROM phpdockerio/php:8.2-fpm

WORKDIR /tmp

WORKDIR "/examples"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php8.2-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git, golang
RUN apt-get update \
    && apt-get -y install golang-go gcc build-essential \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


# Install highly useful utilities, not strictly required for php/go/ffi
RUN apt-get update \
    && apt-get -y --no-install-recommends install nano \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
