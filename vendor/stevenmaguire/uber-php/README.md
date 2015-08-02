# Uber PHP Client

[![Latest Version](https://img.shields.io/github/release/stevenmaguire/uber-php.svg?style=flat-square)](https://github.com/stevenmaguire/uber-php/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/stevenmaguire/uber-php/master.svg?style=flat-square&1)](https://travis-ci.org/stevenmaguire/uber-php)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/stevenmaguire/uber-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/stevenmaguire/uber-php/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/stevenmaguire/uber-php.svg?style=flat-square)](https://scrutinizer-ci.com/g/stevenmaguire/uber-php)
[![Total Downloads](https://img.shields.io/packagist/dt/stevenmaguire/uber-php.svg?style=flat-square)](https://packagist.org/packages/stevenmaguire/uber-php)

A PHP client for authenticating with Uber using OAuth 2.0 and consuming the API.

*This package is intended to be used for communicating with the Uber API after you've secured an access token from your users. To authenticate users and retrieve access tokens, use [stevenmaguire/oauth2-uber](https://github.com/stevenmaguire/oauth2-uber).*

## Install

Via Composer

``` bash
$ composer require stevenmaguire/uber-php
```
or update your `composer.json` file to include:

```json
  "require": {
    "stevenmaguire/uber-php": "~1.0"
  }
```
Run `composer update`

## Usage

### Create client

```php
$client = new Stevenmaguire\Uber\Client(array(
    'access_token' => 'YOUR ACCESS TOKEN',
    'server_token' => 'YOUR SERVER TOKEN',
    'use_sandbox'  => true, // optional, default false
    'version'      => 'v1', // optional, default 'v1'
    'locale'       => 'en_US', // optional, default 'en_US'
));
```
*Please review the [Sandbox](https://developer.uber.com/v1/sandbox/) documentation on how to develop and test against these endpoints without making real-world Requests and being charged.*

### Get Products

By location:

```php
$products = $client->getProducts(array(
    'latitude' => '41.85582993',
    'longitude' => '-87.62730337'
));
```

By Id:
```php
$product = $client->getProduct($product_id);
```

[https://developer.uber.com/v1/endpoints/#product-types](https://developer.uber.com/v1/endpoints/#product-types)

### Get Price Estimates

```php
$estimates = $client->getPriceEstimates(array(
    'start_latitude' => '41.85582993',
    'start_longitude' => '-87.62730337',
    'end_latitude' => '41.87499492',
    'end_longitude' => '-87.67126465'
));
```

[https://developer.uber.com/v1/endpoints/#price-estimates](https://developer.uber.com/v1/endpoints/#price-estimates)

### Get Time Estimates

```php
$estimates = $client->getTimeEstimates(array(
    'start_latitude' => '41.85582993',
    'start_longitude' => '-87.62730337'
));
```

[https://developer.uber.com/v1/endpoints/#time-estimates](https://developer.uber.com/v1/endpoints/#time-estimates)

### Get Promotions

```php
$promotions = $client->getPromotions(array(
    'start_latitude' => '41.85582993',
    'start_longitude' => '-87.62730337',
    'end_latitude' => '41.87499492',
    'end_longitude' => '-87.67126465'
));
```

[https://developer.uber.com/v1/endpoints/#promotions](https://developer.uber.com/v1/endpoints/#promotions)

### Get User Activity

This feature is only available in version `1.1`.

```php
$client->setVersion('v1.1');
$history = $client->getHistory(array(
    'limit' => 50, // optional
    'offset' => 0 // optional
));
```

[https://developer.uber.com/v1/endpoints/#user-activity-v1-1](https://developer.uber.com/v1/endpoints/#user-activity-v1-1)

### Get User Profile

```php
$profile = $client->getProfile();
```

[https://developer.uber.com/v1/endpoints/#user-profile](https://developer.uber.com/v1/endpoints/#user-profile)

### Request A Ride

```php
$request = $client->requestRide(array(
    'product_id' => '4bfc6c57-98c0-424f-a72e-c1e2a1d49939',
    'start_latitude' => '41.85582993',
    'start_longitude' => '-87.62730337',
    'end_latitude' => '41.87499492',
    'end_longitude' => '-87.67126465'
));
```

[https://developer.uber.com/v1/endpoints/#request](https://developer.uber.com/v1/endpoints/#request)

### Get Ride Details

```php
$request = $client->getRequest($request_id);
```

[https://developer.uber.com/v1/endpoints/#request-details](https://developer.uber.com/v1/endpoints/#request-details)

### Get Ride Map

```php
$map = $client->getRequestMap($request_id);
```

[https://developer.uber.com/v1/endpoints/#request-map](https://developer.uber.com/v1/endpoints/#request-map)

### Cancel Ride

```php
$request = $client->cancelRequest($request_id);
```

[https://developer.uber.com/v1/endpoints/#request-cancel](https://developer.uber.com/v1/endpoints/#request-cancel)

### Rate Limiting

Rate limiting is implemented on the basis of a specific client's secret token. By default, 1,000 requests per hour can be made per secret token.

When consuming the service with this package, your rate limit status will be made available within the client.

```php
$product = $client->getProduct($product_id);

$rate_limit = $client->getRateLimit();

$rate_limit->getLimit();        // Rate limit capacity per period
$rate_limit->getRemaining();    // Requests remaining in current period
$rate_limit->getReset();        // Timestamp in UTC time when the next period will begin
```
These values will update after each request. `getRateLimit` will return null after the client is created and before the first successful request.

[https://developer.uber.com/v1/api-reference/#rate-limiting](https://developer.uber.com/v1/api-reference/#rate-limiting)

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Steven Maguire](https://github.com/stevenmaguire)
- [All Contributors](https://github.com/stevenmaguire/uber-php/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
