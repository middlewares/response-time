# middlewares/response-time

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
![Testing][ico-ga]
[![Total Downloads][ico-downloads]][link-downloads]

Middleware to calculate the response time (in miliseconds) and save it into the X-Response-Time header.

## Requirements

* PHP >= 7.2
* A [PSR-7 http library](https://github.com/middlewares/awesome-psr15-middlewares#psr-7-implementations)
* A [PSR-15 middleware dispatcher](https://github.com/middlewares/awesome-psr15-middlewares#dispatcher)

## Installation

This package is installable and autoloadable via Composer as [middlewares/response-time](https://packagist.org/packages/middlewares/response-time).

```sh
composer require middlewares/response-time
```

## Usage

```php
Dispatcher::run([
	new Middlewares\ResponseTime()
]);
```

---

Please see [CHANGELOG](CHANGELOG.md) for more information about recent changes and [CONTRIBUTING](CONTRIBUTING.md) for contributing details.

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/middlewares/response-time.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-ga]: https://github.com/middlewares/response-time/workflows/testing/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/middlewares/response-time.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/middlewares/response-time
[link-downloads]: https://packagist.org/packages/middlewares/response-time
