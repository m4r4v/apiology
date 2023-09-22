<?php
namespace Apiology\Api\Resources;

use Apiology\Api\Core\Config;
use Apiology\Api\Core\Http;
use Apiology\Api\Core\Settings;

class Handler {
    private $config;
    private $http;
    private $settings;


    public function resourceHandler(array $_resources){
        // Instantiate Config Object
        $this->config = new Config();
        // Instantiate Http Object
        $this->http = new Http();
        // Instantiate Settings Object
        $this->settings = new Settings();

        // check for the version
        $version = ucfirst(self::getVersion($_resources[0]));
        // check if version is true
        if($version){
            // handle the search for the resource
            self::getResource($version, $_resources);
        }
    }

    private function getVersion(string $_version){

        // check if the given param is empty
        if(empty($_version)){
            // prompt message
            echo $this->config->jsonEncodeFormat($this->http->httpResponse(200, "A rare gem indeed, if you're collecting metaphysical voids."));
            // return false
            return false;
        }

        // if not empty
        if(!empty($_version)){
            
            // import custom Versions from Settings
            $versions = $this->settings->apiVersions();
            // Set new array for versions found
            $versionsArray = array();
            // loop through versions and populate versionsArray()
            foreach ($versions as $key => $value) {
                /**
                 * Only add to array when:
                 * key of Settings array matches the first resource from URI (resource[0])
                 * and it's value is set to true
                 */
                if($key == $_version && $value){
                    // add to new array based on filter
                    array_push($versionsArray, $key);
                }
                
            }
        }

        // if versions was not found or it is set to false at Settings
        if(count($versionsArray) == 0){

            // set prompt response message
            echo $this->config->jsonEncodeFormat($this->http->httpResponse(404, "No Version Found or is deprecated"));
            // return false
            return false;
        }
        
        // pass only the first parameter from URI which contains the version found and enabled
        return trim($versionsArray[0]);
    }

    private function getResource(string $_version, array $_resources){

        // check if any resource is set
        if(count($_resources) < 2){

            // create log
            $this->config->createLog('NOTICE', 'No Resource Set. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $this->config->jsonEncodeFormat($this->http->httpResponse(400, "A moment of clarity amidst the haze: behold, the scenic route to absolutely nowhere."));
            // quit executing script
            exit(0);
            
        }

        // set resource var
        $resource = trim($_resources[1]);

        // set path to namespace
        $namespace = "Apiology\\Api\\Resources\\{$_version}\\Resources";
        // set object
        $object = new $namespace();

        // check if the resource exists
        if(!method_exists($object, $resource) && !is_callable([$object, $resource])){
            // create log
            $this->config->createLog('WARNING', 'No Resource Found: '.$resource.' - Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $this->config->jsonEncodeFormat($this->http->httpResponse(404, "In our extensive quest for resources, we've unearthed a veritable void a testament to our resourcefulness."));
            // quit executing script
            exit(0);
        }
        // remove version
        unset($_resources[0]);
        // remove resource
        unset($_resources[1]);

        // call the method and send the rest of resources left
        $object->$resource(array_values($_resources));
        
    }
}

