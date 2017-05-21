<?php namespace Miskowskij\Src;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require dirname(__FILE__) . '/../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("welcome to root");
    return $response;
});

$app->get('/foo', function (Request $request, Response $response) {
    $response->getBody()->write("welcome to foo");
    return $response;
});

$app->get('/bar', function (Request $request, Response $response) {
    $response->getBody()->write("welcome to bar");
    return $response;
});

$app->run();
