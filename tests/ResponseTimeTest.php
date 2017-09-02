<?php

namespace Middlewares\Tests;

use PHPUnit\Framework\TestCase;
use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;

class ResponseTimeTest extends TestCase
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