<?php

namespace Vendor\Framework\Http;

use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{

    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function(RouteCollector $collector) {
            $collector->get("/", function () {
                $content = "Some content";
                return new Response($content, 200, []);
            });

            $collector->get('/posts/{id:\d+}', function(array $vars){
                $content = "<h1>Post - {$vars['id']}</h1>";
                return new Response($content, 200, []);
            });
        });

        $routeInfo = $dispatcher->dispatch(
            $request->server['REQUEST_METHOD'],
            $request->server['REQUEST_URI']
        );

        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                return new Response("404 Not Found", 404, []);
            case Dispatcher::METHOD_NOT_ALLOWED:
                return new Response("405 Method Not Allowed", 405, []);
            case Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                return $handler($vars);
        }

        return new Response("500 Internal Server Error", 500, []);
    }
}