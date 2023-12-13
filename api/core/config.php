<?php
namespace Apiology\Api\Core;

use DateTime;
use DateTimeInterface;
use Apiology\Api\Core\Core;
use PDO;
use PDOException;

class Config {

    private $logFile = "api/logs/logs.log";

    public function jsonEncodeFormat(array $_input):string{
        $output = json_encode($_input, JSON_PRETTY_PRINT);
        return $output;
    }

    public function jsonDecodeFormat(string $_input):array{
        $output = json_decode($_input, true);
        return $output;
    }

    public function createLog(string $_type, string $_message){
        // log format => id, type, message and date-time
        $log = '[' . hash('crc32', date('U')) . '][' . strtoupper($_type) . '] Message: ' . $_message . ' >>> ' . date('Y-m-d H:i:s');
        // create if it does not exist or open log file with write append mode
        $file = fopen($this->logFile, 'a+');
        // cannot open file
        if(!$file){
            // kill script
            die("Cannot open log file");
        }
        // write to log file at the end of the file
        fwrite($file, $log . PHP_EOL);
        // close file
        fclose($file);
    }

    public function getDateTime(string $_format){
        // $date = new 
    }

    public function dbConnect(){
        $core = new Core();

        $credentials = $core->settings()->databaseConnect();
    
        try {
            $dbh = new PDO('mysql:host='.$credentials['host'].';dbname='.$credentials['database'].'', $credentials['user'], $credentials['pass']);

            $return = $dbh;

        } catch (PDOException $e) {
            // attempt to retry piology\Api\Core\PDOException'the connection after some timeout for example
            
            $core->config()->createLog('ERROR', 'IP from: ' . $_SERVER['REMOTE_ADDR'] . ', PDOException: ' . $e->getMessage() );
            $return = false;
        }

        return $return;
    }

}