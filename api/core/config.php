<?php
namespace Apiology\Api\Core;

class Config {

    public function jsonEncodeFormat(array $_input){
        $output = json_encode($_input, JSON_PRETTY_PRINT);
        return $output;
    }

    public function jsonDecodeFormat(string $_input){
        $output = json_decode($_input, true);
        return $output;
    }

}