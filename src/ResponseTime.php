<?php

namespace Middlewares;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Interop\Http\ServerMiddleware\DelegateInterface;

class ResponseTime implements MiddlewareInterface
{
    const HEADER = 'X-Response-Time';

    /**
     * Process a server request and return a response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface      $delegate
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $server = $request->getServerParams();
        $startTime = isset($server['REQUEST_TIME_FLOAT']) ? $server['REQUEST_TIME_FLOAT'] : microtime(true);
        $response = $delegate->process($request);

        return $response->withHeader(self::HEADER, sprintf('%2.3fms', (microtime(true) - $startTime) * 1000));
    }
}
