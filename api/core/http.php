<?php
namespace Apiology\Api\Core;

use Apiology\Api\Core\Config;
class Http {

    private $headers;

    public function httpResponse(int $_statusCode, string $_response, $_data = null):array {
        self::httpStatusCode($_statusCode);
        $response = array(
            'status' => $_statusCode,
            'response' => $_response,
            'message' => is_null($_data) || !$_data ? "A round of applause for the data that decided to play hide and seek, leaving us in delightful suspense" : $_data 
        );

        return $response;
    }

    static private function httpStatusCode(int $_code)
	{

		switch ($_code) {
			case 200:
				header("HTTP/1.1 200 OK");
				break;
			case 201:
				header("HTTP/1.1 201 Created");
				break;
			case 202:
				header("HTTP/1.1 202 Accepted");
				break;
			case 400:
				header("HTTP/1.1 400 Bad Request");
				break;
			case 401:
				header("HTTP/1.1 401 Unauthorized");
				break;
			case 403:
				header("HTTP/1.1 403 Forbidden");
				break;
			case 404:
				header("HTTP/1.1 404 Not Found");
				break;
			case 406:
				header("HTTP/1.1 406 Not Acceptable");
				break;
			case 503:
				header("HTTP/1.1 503 Service Unavailable");
				break;

			default:
				header("HTTP/1.1 418 I'm a teapot");
				break;
		}
	}

    /**
     * Origin HTTP Header must be set
     * Origin needs to match allowedDomains from allowedOriginDomains()
     */
    public function httpHeaderOrigin(array $_allowedOriginDomains){
        $config = new Config();
        if (!isset($_SERVER['HTTP_ORIGIN']) || !in_array($_SERVER['HTTP_ORIGIN'], $_allowedOriginDomains)) {
            // create log
            $config->createLog('ERROR', 'Missing Origin Header. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $config->jsonEncodeFormat(self::httpResponse(406, $_SERVER['HTTP_ORIGIN']));
            // quit executing script
            exit(0);
        }
        // get all headers
        $this->headers = getallheaders();
        // Validate with allowedOriginDomains() against your data.
        return true;
    }

    /**
     * HTTP Authentication
     * Basic Authentication
     */
    public function httpHeaderBasicAuth(){
        $config = new Config();
        if(!isset($this->headers['Authorization'])){
            // create log
            $config->createLog('ERROR', 'Authorization is not set. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $config->jsonEncodeFormat(self::httpResponse(401, "I'm afraid I can't let you in. You're not on the list."));
            // quit executing script
            exit(0);
        }

        $auth = explode(' ', $this->headers['Authorization']);
        if($auth[0] !== 'Basic'){
            // create log
            $config->createLog('ERROR', 'Is not a Basic Authorization. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $config->jsonEncodeFormat(self::httpResponse(401, "You're lost. Go back where you came from."));
            // quit executing script
            exit(0);
        }

        $credentialsBase64 = base64_decode($auth[1]);
        $credentials = explode(':', $credentialsBase64);
        $username = $credentials[0];
        $password = $credentials[1];
        
        // Validate the username and password against your database or other authentication system.
        return true;
    }

    /**
     * HTTP Authentication
     * ApiKey Header [Key X-API-KEY => Value]
     */
    public function httpHeaderApiKey(){
        $config = new Config();
        if(!isset($this->headers['X-API-KEY']) || empty($this->headers['X-API-KEY'])){
            // create log
            $config->createLog('ERROR', 'Missing Api Key or is not set. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $config->jsonEncodeFormat(self::httpResponse(406, "You're not the droid I'm looking for."));
            // quit executing script
            exit(0);
        }

        // Validate the API key against your database or other authentication system.
        return true;
    }

    /**
     * HTTP Methods
     * Allow Only specific methods GET, PUT, POST and DELETE
     */
    public function httpHeaderMethods(array $_httpAllowedMethods){
        $config = new Config();
        if(!in_array($_SERVER['REQUEST_METHOD'], $_httpAllowedMethods)){
            // create log
            $config->createLog('ERROR', 'REQUEST_METHOD ' .$_SERVER['REQUEST_METHOD']. ' not allowed. Request IP: ' . $_SERVER['REMOTE_ADDR'] );
            // send http response in json format
            echo $config->jsonEncodeFormat(self::httpResponse(400, "I'm afraid I can't help you. Your request is too complicated for my feeble mind."));
            // quit executing script
            exit(0);
        }

        // Validate with httpAllowedMethods() against your data.
        return true;
    }

}