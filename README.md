# middlewares/response-time

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
[![SensioLabs Insight][ico-sensiolabs]][link-sensiolabs]

Middleware to calculate the response time (in miliseconds) and save it into the X-Response-Time header.

## Requirements

* PHP >= 7.0
* A [PSR-7](https://packagist.org/providers/psr/http-message-implementation) http mesage implementation ([Diactoros](https://github.com/zendframework/zend-diactoros), [Guzzle](https://github.com/guzzle/psr7), [Slim](https://github.com/slimphp/Slim), etc...)
* A [PSR-15](https://github.com/http-interop/http-middleware) middleware dispatcher ([Middleman](https://github.com/mindplay-dk/middleman), etc...)

## Installation

This package is installable and autoloadable via Composer as [middlewares/response-time](https://packagist.org/packages/middlewares/response-time).

```sh
composer require middlewares/response-time
```

## Example

```php
$dispatcher = new Dispatcher([
	new Middlewares\ResponseTime()
]);

$response = $dispatcher->dispatch(new ServerRequest());
```

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/response-time.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/middlewares/response-time/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/middlewares/response-time.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/response-time.svg?style=flat-square
[ico-sensiolabs]: https://img.shields.io/sensiolabs/i/27809921-08fc-47ef-8bef-db3782c3637e.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/response-time
[link-travis]: https://travis-ci.org/middlewares/response-time
[link-scrutinizer]: https://scrutinizer-ci.com/g/middlewares/response-time
[link-downloads]: https://packagist.org/packages/middlewares/response-time
[link-sensiolabs]: https://insight.sensiolabs.com/projects/27809921-08fc-47ef-8bef-db3782c3637e
