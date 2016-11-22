<?php

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\CallableMiddleware;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response;

class ResponseTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseTime()
    {
        $response = (new Dispatcher([
            new ResponseTime(),
            new CallableMiddleware(function () {
                return new Response();
            }),
        ]))->dispatch(new ServerRequest());

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
        $this->assertRegexp('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }
}
