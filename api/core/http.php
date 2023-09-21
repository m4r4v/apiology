<?php
namespace Apiology\Api\Core;

class Http {

    public function httpResponse(int $_statusCode, string $_response, $_data = null):array {
        self::httpStatusCode($_statusCode);
        $response = array(
            'status' => $_statusCode,
            'response' => $_response,
            'data' => $_data == NULL || !$_data ? false : $_data 
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

}