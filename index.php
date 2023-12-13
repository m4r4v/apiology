<?php
// Namespace
namespace Apiology\Api;
// Set TimeZone
date_default_timezone_set('America/Santiago');
// Require autload from composer
require 'vendor/autoload.php';

session_start();
header('Access-Control-Allow-Origin: *'); // Replace with your Quasar app's origin
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-API-KEY');

header('Access-Control-Allow-Credentials: true');

// Check for preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}
// use bootstrap
use Apiology\Api\Bootstrap;
// instantiate the Bootstrap Object
new Bootstrap();

?>