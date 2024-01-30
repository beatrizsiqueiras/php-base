<?php

function routes()
{
    return require("routes.php");
}

function exactMatchUriInArrayRoutes($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        return $uri;
    }
    return [];
}

function router()
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes();

    // $matchedUri = exactMatchUriInArrayRoutes($uri, $routes);

    array_filter(
        $routes,
        function ($value) {
            $regex = str_replace('/', '\/', ltrim($value, '/'));
            var_dump($regex);
        },
        ARRAY_FILTER_USE_KEY
    );
}
