<?php
namespace Apiology\Api\Resources\V1\Classes;

use Apiology\Api\Core\Core;
use PDO;
use PDOException;

class Auth {

    private function authentication(array $_data){

        $core = new Core();
        
        try {
            
            $pdo = $core->config()->dbConnect();
            $stmt = $pdo->query("SELECT user_id, rol_id, nombre, correo_institucional FROM Usuarios WHERE correo_institucional='" . $_data['email'] . "' AND contrasena='" . $_data['pass'] . "'");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $return = $stmt->fetch();

        } catch (PDOException $e) {
            //throw $th;
            $core->config()->createLog('ERROR', 'IP from: ' . $_SERVER['REMOTE_ADDR'] . ', PDOException: ' . $e->getMessage() );
            $return = false;
        }

        return $return;
    }

    public function login(array $_data){

        $core = new Core();
        $authenticated = self::authentication($_data);

        if($authenticated){
            $_SESSION['user'] = array();
            $_SESSION['user']['role'] = $authenticated['rol_id'];
            $_SESSION['user']['nombre'] = $authenticated['nombre'];
            $_SESSION['user']['token'] = hash('SHA256', date('YmdH') . $authenticated['user_id'] . $authenticated['correo_institucional']);
            echo $core->config()->jsonEncodeFormat($core->http()->httpResponse(200, "OK", array($_SESSION)));
        } else {
            session_unset();
            echo $core->config()->jsonEncodeFormat($core->http()->httpResponse(401, "Unauthorized", "You don't have permission"));
        }
        
        

        

    }

    public function main(){

        $core = new Core();

        $pdo = $core->config()->dbConnect();

        $stmt = $pdo->query('SELECT nombre FROM Usuarios');
        while ($row = $stmt->fetch())
        {
            echo $row['nombre'] . "\n";
        }
    }

}