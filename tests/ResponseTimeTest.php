<?php

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\Factory;

class ResponseTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseTime()
    {
        $request = Factory::createServerRequest();

        $response = (new Dispatcher([
            new ResponseTime(),
        ]))->dispatch($request);

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
        $this->assertRegexp('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }
}
