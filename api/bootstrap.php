<?php
namespace Apiology\Api;

use Apiology\Api\Core\Config;
use Apiology\Api\Core\Http;

Class Bootstrap {
    
    
    public function __construct(){
        $config = new Config();
        $http = new Http();



        if (!isset($_SERVER['HTTP_ORIGIN']) || !in_array($_SERVER['HTTP_ORIGIN'], self::allowedOriginDomains())) {
            $config->createLog('ERROR', 'Missing Origin Header. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            echo $config->jsonEncodeFormat($http->httpResponse(401, "But this incident is illustrative of a larger cultural turn against the unauthorized use of creative work in training models. —Kate Knibbs, WIRED, 14 Aug. 2023"));
            exit(0);
        }

        echo $config->jsonEncodeFormat($http->httpResponse(200, "The Origin is: " . $_SERVER['HTTP_ORIGIN']));

    }

    private function allowedOriginDomains():array{
        $allowedDomains = array(
            'localhost'
        );

        return $allowedDomains;
    }
}