<?php

namespace Vendor\Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function(RouteCollector $collector) {
            $collector->addRoute("GET", "/", function () {
                $content = "Hello World!";
                return new Response($content, 200, []);
            });
        });
        dd($dispatcher);
    }
}