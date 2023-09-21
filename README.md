# APIOLOGY - PHP API FRAMEWORK

author: m4r4v

## Setup Environment

PHP Version: 8.2.10

OS: GNU/Linux Debian Bullseye

Docker Image [php:8.2.10-apache-bullseye](https://hub.docker.com/layers/library/php/8.2.10-apache-bullseye/images/sha256-448a0b53c4820fb3add0466ee7bbbc6c05f9e20861c47e8bb1da553a258a0351?context=explore)

### 1. Docker Setup

Set path for development and port

```bash
docker run -p 8080:80 -d -v home/user/simple-php-api-framework:/var/www/html/ --name api php:8.2.10-apache-bullseye
```

### 2. Update and Upgrade OS

```bash
apt update -y && apt upgrade -y
```

### 3. Setup Apache

Enable Rewrite and Headers Modules

```bash
a2enmod rewrite && a2enmod headers

```

Restart Apache

```bash
service apache2 restart
```

### 4. Install Linux dependencies

```bash
apt install wget curl unzip git libfreetype6-dev libjpeg62-turbo-dev libpng-dev -y
```

### 5. Install and Set Up Composer

instruction from: [getcomposer.org](https://getcomposer.org/doc/00-intro.md)

#### [Download Composer](https://getcomposer.org/download/)

1. Download installer: `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
1. Checksum: `php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
    - Important: check for hash in [Download Composer Page](https://getcomposer.org/download/)
1. Execute installer and Run composer by installing it to a specific folder `php composer-setup.php --install-dir=/usr/local/bin --filename=composer`
1. Remove installer: `php -r "unlink('composer-setup.php');"`

check composer version
```bash
composer --version
Composer version 2.6.X YYYY-MM-DD HH:MM:SS
```

### 5. Update packages using Composer

The following command will install all packages mentioned in the **composer.lock** if exists, if not, then it will pull information from **composer.json** for packages to be installed


```bash
composer install
```

Note: can also be done by using `composer update`

&nbsp;
---
&nbsp;

## API
