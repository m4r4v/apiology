<?php
// Namespace
namespace Apiology\Api;
// Set TimeZone
date_default_timezone_set('America/Santiago');
// Require autload from composer
require 'vendor/autoload.php';
// use bootstrap
use Apiology\Api\Bootstrap;
// instantiate the Bootstrap Object
new Bootstrap();

?>