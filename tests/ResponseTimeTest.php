<?php

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;
use PHPUnit\Framework\TestCase;

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
