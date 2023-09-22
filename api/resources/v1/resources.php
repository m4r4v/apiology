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

    private function send(){

        self::config(); // call to Config
        self::http(); // call to Http
        self::settings(); // call to Settings

        $email = new Email();
        $send = $email->sendEmail($this->settings->smtpSettings());

        if($send){
            // send prompt response message
            echo $this->config->jsonEncodeFormat($this->http->httpResponse(202, "Your Message Was Sent"));
        }
    }

}