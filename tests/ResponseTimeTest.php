<?php
declare(strict_types = 1);

namespace Middlewares\Tests;

use Middlewares\ResponseTime;
use Middlewares\Utils\Dispatcher;
use Middlewares\Utils\Factory;
use PHPUnit\Framework\TestCase;

class ResponseTimeTest extends TestCase
{
    public function testResponseTime(): void
    {
        $response = Dispatcher::run([
            new ResponseTime(),
        ]);

        self::assertMatchesRegularExpression('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }

    public function testRequestTimeFloat(): void
    {
        $response = Dispatcher::run(
            [
                new ResponseTime(),
            ],
            Factory::createServerRequest('GET', '/', ['REQUEST_TIME_FLOAT' => microtime(true)])
        );

        self::assertMatchesRegularExpression('/^\d{1,4}\.\d{3}ms$/', $response->getHeaderLine('X-Response-Time'));
    }
}
