<?php

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;

class ResponseTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testResponseTime()
    {
        $response = Dispatcher::run([
            new ResponseTime(),
        ]);

        $this->assertInstanceOf('Psr\\Http\\Message\\ResponseInterface', $response);
        $this->assertRegexp('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }
}
