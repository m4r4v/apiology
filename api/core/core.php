<?php
namespace Apiology\Api\Core;

use DateTime;
use DateTimeInterface;
use Apiology\Api\Core\Config;
use Apiology\Api\Core\Http;
use Apiology\Api\Core\Email;
use Apiology\Api\Core\Settings;

class Core {
    private $config;
    private $http;
    private $settings;

    // Instantiate config object
    public function config(){
        $this->config = new Config();
        return $this->config;
    }

    // Instantiate http object
    public function http(){
        $this->http = new Http();
        return $this->http;
    }

    // Instantiate settings object
    public function settings(){
        $this->settings = new Settings();
        return $this->settings;
    }
}