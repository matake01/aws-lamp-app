<?php namespace Miskowskij\Src;
/**
 * Copyright 2016 Mathias Åkerberg
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 *
 * @author    Mathias Åkerberg <zegoffinator@gmail.com>
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 */

use Miskowskij\Src\App as App;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\App as Route;

require dirname(__FILE__) . '/../vendor/autoload.php';

$app = new App;
$route = new Route;

$route->get('/', function (Request $request, Response $response) use (&$app) {
    return $response->getBody()->write($app->index())
});

$route->get('/foo', function (Request $request, Response $response) use (&$app) {
    return $response->getBody()->write($app->foo());
});

$route->get('/bar', function (Request $request, Response $response) use (&$app) {
    return $response->getBody()->write($app->bar());
});

$route->run();
