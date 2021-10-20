FROM php:8.0.11-fpm

LABEL df="df@dto.cc"

# 更改容器时区
ENV TZ=Asia/Shanghai

RUN sed -i s@/deb.debian.org/@/mirrors.aliyun.com/@g /etc/apt/sources.list \
    && apt-get clean \
    # 安装所需依赖
    && apt-get update && apt-get install -y \
    autoconf \
    libxml2-dev \
    libsqlite3-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libonig-dev \
    zlib1g-dev \
    libpng-dev \
    libjpeg-dev \
    libbz2-dev \
    libxml2-dev \
    libxslt1-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    m4 \
    gcc \
    make \
    git \
    # 配置 gd 库
    && docker-php-ext-configure gd \
    --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    # 安装并启用扩展
    && docker-php-ext-install bcmath dba filter opcache gd shmop zip pdo_mysql \
    && docker-php-ext-install exif pcntl bz2 intl gettext xsl pdo mysqli \
    && pecl install xdebug redis xlswriter \
    && docker-php-ext-enable xdebug redis xlswriter \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    # 更改php时区
    && printf '[PHP]\ndate.timezone = Asia/Shanghai\n' > /usr/local/etc/php/conf.d/tzone.ini \
    # 清理舞台
    && rm -rf /var/lib/apt/lists/*

EXPOSE 9000

CMD ["php-fpm"]

