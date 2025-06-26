<?php
namespace App\Controllers;

use Vendor\Framework\Http\Response;

class HomeController
{
    public function index(array $params): Response
    {
        return new Response("Добро пожаловать!", 200);
    }
}
