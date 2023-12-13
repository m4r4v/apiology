<?php
namespace Apiology\Api;

use Apiology\Api\Core\Config;
use Apiology\Api\Core\Settings;
use Apiology\Api\Core\Http;
use Apiology\Api\Resources\Handler;

Class Bootstrap {

    private $config;
    private $http;
    
    private $resource;
    private $settings;
    
    public function __construct(){
        // Instantiate Config Object
        $this->config = new Config();
        // Instantiate Http Object
        $this->http = new Http();
        // Instantiate Settings Object
        $this->settings = new Settings();
        // Instantiate Resource Handler Object
        $this->resource = new Handler();
        $jsonOutput = array();

        /**
         * Default Rules:
         * Origin + Authentication + Method + Version + Resource
         */
        // Check Origin HTTP Header
        // if($this->http->httpHeaderOrigin($this->settings->allowedOriginDomains())){
            // Check API-KEY HTTP Header | Check for other authorizations available
            // if($this->http->httpHeaderApiKey()){
                // check if the http request method is GET, POST, PUT or DELETE
                // if($this->http->httpHeaderMethods($this->settings->httpAllowedMethods())){
                    // set array from uri resources
                    $resources = explode('/', filter_var(trim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
                    // call Object the serves as a Resource Handler
                    $this->resource->resourceHandler($resources);
                    
                // }
            // }
        // }
    }

}