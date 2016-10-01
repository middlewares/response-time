<?php

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\Response;
use mindplay\middleman\Dispatcher;

class ResponseTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseTime()
    {
        $response = (new Dispatcher([
            new ResponseTime(),
            function () {
                return new Response();
            },
        ]))->dispatch(new ServerRequest());

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
        $this->assertRegexp('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }
}
