<?php
require_once dirname(__DIR__) . "/vendor/autoload.php";

use Vendor\Framework\Http\Kernel;
use Vendor\Framework\Http\Request;
$request = Request::createFromGlobals();


$content = '<h1>Hello, World!</h1>';
$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();