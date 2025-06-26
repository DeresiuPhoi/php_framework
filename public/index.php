<?php
#вывод ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
require_once BASE_PATH . "/vendor/autoload.php";

use Vendor\Framework\Http\Kernel;
use Vendor\Framework\Http\Request;
$request = Request::createFromGlobals();


$kernel = new Kernel();
$response = $kernel->handle($request);

$response->send();