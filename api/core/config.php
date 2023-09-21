<?php
namespace Apiology\Api\Core;

use DateTime;
use DateTimeInterface;

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

}