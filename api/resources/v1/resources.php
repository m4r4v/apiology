<?php
namespace Apiology\Api\Resources\V1;

use Apiology\Api\Core\Core;
use Apiology\Api\Resources\V1\Classes\Auth;
use Apiology\Api\Core\Email;

class Resources {


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