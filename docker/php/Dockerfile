FROM php:7.3-fpm

ENV UID=1000
ENV USER=phpuser
ENV HOME=/home/${USER}

RUN adduser -u ${UID} --disabled-password --gecos "" ${USER} || true
RUN mkdir -p ${HOME}/.ssh && mkdir -p ${HOME}/appdata/
RUN chown -R ${USER}:${USER} ${HOME} 
RUN echo "StrictHostKeyChecking no" >> ${HOME}/.ssh/config \
    && echo "export COLUMNS=300" >> ${HOME}/.bashrc \
    && echo "alias sf=/appdata/bin/console" >> ${HOME}/.bashrc

# RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys AA8E81B4331F7F50

RUN apt-get update --fix-missing \
    && apt-get install -y libncurses-dev apt-utils libxml2-dev \
        libcurl3-dev pkg-config zlib1g-dev libzip-dev wget git \
    && docker-php-ext-install iconv curl mbstring xml json mysqli pdo pdo_mysql zip \
    && apt-get purge -y --auto-remove \
    && rm -rf /var/cache/apt/* \
    && rm -rf /var/lib/apt/lists/* \
    && rm -rf /pecl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

USER ${USER}

WORKDIR ${HOME}/appdata/
