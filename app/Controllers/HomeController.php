<?php
namespace App\Controllers;

use Vendor\Framework\Http\Response;

class HomeController
{
    public function index(): Response
    {
        return new Response("Добро пожаловать!", 200);
    }
}
