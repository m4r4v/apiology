# APIOLOGY - PHP API FRAMEWORK

A simple PHP API Framework for everyone to use.

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

The way to use the api just resides in a couple of files:

1. settings.php
1. custom classes

### Settings

Settings **Class** is inside the **Core** namespace (*Apiology\Api\Core*). by default it has some functions:

#### smtpSettings()

This function sets all data to send an email using **phpmailer** package and custom **SMTP**

```php
    public function smtpSettings():array{

        // smtp array
        $smtp = array(
            'host'          => '',
            'username'      => '',
            'password'      => '',
            'from-email'    => '',
            'from-name'     => '',
            'to-email'      => '',
            'to-name'       => '',
            'cc-email'      => '',
            'cc-name'       => '',
            'replyto-email' => '',
            'replyto-name'  => '',
            'subject'       => '',
            'body'          => 'default'
        );

        return $smtp;
    }
```

It returns and **array**

#### allowedOriginDomains()

This function sets the allowed domains from Origin request

```php
public function allowedOriginDomains():array{
        $allowedDomains = array(
            'localhost'
        );

        return $allowedDomains;
    }
```

Can add as many domains as needed, useful to know who can have access and it increases security

#### apiVersions()

This function is useful to make the framework scalable. Add a version of the api and keep code separated between versions.

Once added a new version, it can be set to true or false, meaning

**true** => available

**false** => not available (useful when you want to keep the code but also deprecate a specific version)

```php
    public function apiVersions(){
        $versions = array(
            'v1' => true,
            'v2' => false
        );

        return $versions;
    }
```

When creating a new version, it's a must to create a folder with the version number i.e.: v1 and inside of it recreate the **resources.php** `api/resources/v1/resources.php`

```php
<?php
namespace Apiology\Api\Resources\V1;

use Apiology\Api\Core\Config;
use Apiology\Api\Core\Http;
use Apiology\Api\Core\Email;
use Apiology\Api\Core\Settings;

class Resources {
    private $config;
    private $http;
    private $settings;

    // Instantiate config object
    private function config(){
        $this->config = new Config();
    }

    // Instantiate http object
    private function http(){
        $this->http = new Http();
    }

    // Instantiate settings object
    private function settings(){
        $this->settings = new Settings();
    }

    // Custom Method / Resource
    public function sample(array $_resources){

        self::config(); // call to Config
        self::http(); // call to Http

        if(count($_resources) > 0 && $_resources[0] == "send"){
            self::send();
            exit(0);
        }

        // send prompt response message
        echo $this->config->jsonEncodeFormat($this->http->httpResponse(200, "Hello from resource sample"));

    }

}
```

Every main resource `http://domain.com/v1/[MAINRESOURCE]/[SUBRESOURCES]/[ANOTHERSUBRESOURCE]` will be a method inside this class

#### httpAllowedMethods()

This function handles an array with the HTTP Methods allowed to call any resource inside the API

```php
    public function httpAllowedMethods():array{
        $allowedMethods = array(
            'GET',
            'POST',
            'PUT',
            'DELETE'
        );

        return $allowedMethods;
    }
```