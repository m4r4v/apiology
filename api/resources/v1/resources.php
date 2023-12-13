<?php
namespace Apiology\Api\Resources\V1;

use Apiology\Api\Core\Core;
use Apiology\Api\Resources\V1\Classes\Auth;
use Apiology\Api\Core\Email;

class Resources {

    private $login;

    public function app(array $_params){

        $core = new Core();
        // $core->config(); // call to Config
        // $core->http(); // call to Http
        // $core->settings(); // call to Settings
        $auth = new Auth();

        switch ($_params[0]) {
            case 'login':
                # login
                if($core->http()->httpHeaderMethods($core->settings()->httpAllowedMethods()) && $_SERVER['REQUEST_METHOD'] === 'POST'){

                    $data = file_get_contents('php://input');
                    $data = json_decode($data, true);

                    $auth->login($data);
                    
                } else {
                    echo $core->config()->jsonEncodeFormat($core->http()->httpResponse(400, "Bad Request"));
                }
                
                break;
            case 'recover':
                # recover 
                break;
            case 'asistencia':
                # asistencia 
                break;
            case 'pie':
                # pie 
                break;
            case 'notas':
                # notas
                break;
            case 'convivencia':
                # convivencia
                break;
            case 'admin':
                # convivencia
                break;
            
            default:
                # code...
                break;
        }
        
    }

    // Custom Method / Resource
    public function sample(array $_resources){

        $core = new Core();
        // $config = $core->config(); // call to Config
        // $http = $core->http(); // call to Http

        if(count($_resources) > 0 && $_resources[0] == "send"){
            self::send();
            exit(0);
        }

        // send prompt response message
        echo $core->config()->jsonEncodeFormat($core->http()->httpResponse(200, "Hello from resource sample"));

    }

    private function send(){

        $core = new Core();

        $email = new Email();
        $send = $email->sendEmail($core->settings()->smtpSettings());

        if($send){
            // send prompt response message
            echo $core->config()->jsonEncodeFormat($core->http()->httpResponse(202, "Your Message Was Sent"));
        }
    }

}