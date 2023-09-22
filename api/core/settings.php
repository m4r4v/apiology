<?php
namespace Apiology\Api\Core;

class Settings {

    /**
     * SMTP Settings
     */
    public function smtpSettings():array{

        // smtp array
        $smtp = array(
            'host'          => 'tiendadelcafe.cl',
            'username'      => 'testing.api@tiendadelcafe.cl',
            'password'      => 'KQyc52eV9Goj2',
            'from-email'    => 'testing.api@tiendadelcafe.cl',
            'from-name'     => 'Testing API',
            'to-email'      => 'jmarquezrave@gmail.com',
            'to-name'       => 'Jorge Marquez',
            'cc-email'      => '',
            'cc-name'       => '',
            'replyto-email' => '',
            'replyto-name'  => '',
            'subject'       => '',
            'body'          => 'default'
        );

        return $smtp;
    }

    /**
     * HTTP Origin Header
     * default = localhost
     */
    public function allowedOriginDomains():array{
        $allowedDomains = array(
            'localhost'
        );

        return $allowedDomains;
    }
    /**
     * API Versions
     * key = string version
     * value = bool
     *      false = doesn't exist or is deprecrated
     *      true = enabled
     */
    public function apiVersions(){
        $versions = array(
            'v1' => true,
            'v2' => false
        );

        return $versions;
    }
    /**
     * Allowed HTTP Methods
     * default: GET, POST, PUT, DELETE
     */
    public function httpAllowedMethods():array{
        $allowedMethods = array(
            'GET',
            'POST',
            'PUT',
            'DELETE'
        );

        return $allowedMethods;
    }
}