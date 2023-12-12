<?php
namespace Apiology\Api\Core;

class Settings {

    /**
     * SMTP Settings
     */
    public function smtpSettings():array{

        // smtp array
        $smtp = array(
            'host'          => '',
            'username'      => '',
            'password'      => '',
            'from-email'    => '',
            'from-name'     => '',
            'to-email'      => '',
            'to-name'       => '',
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
    /**
     * database Connection
     */
    public function databaseConnect():array{
        $credentials = array(
            'host' => 'bytelab.cl',
            'database' => 'ochobits_colegio',
            'user' => 'ochobits_colegio',
            'pass' => 'PNmw85uPP06Bo'
        );

        return $credentials;
    }
}