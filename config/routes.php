<?php

declare(strict_types=1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;


Router::get('/favicon.ico', function () {
    return '';
});

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'Application\Controller\IndexController@index');
Router::addRoute(['GET'], '/hello-world', 'Application\Controller\HelloWorldController@index');

