<?php
require_once dirname(__DIR__) . "/vendor/autoload.php";

use Vendor\Framework\Http\Request;
$request = Request::createFromGlobals();
dd($request);