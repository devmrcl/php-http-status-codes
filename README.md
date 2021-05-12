# HTTP Status Codes

PHP library containing all status codes and their corresponding messages listed in
the [IANA registry](https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml)
plus [418 I'm a teapot](https://en.wikipedia.org/wiki/Hyper_Text_Coffee_Pot_Control_Protocol).

## Installation

```
composer require mrcl/http-status-codes
```

## Usage

### HttpStatus

```php
use Mrcl\Utils\InternetStandards\HttpStatus;
```

The `HttpStatus` class implements all status codes as constants

```php
HttpStatus::OK        // 200
HttpStatus::NOT_FOUND // 404
```

Additionally, you can retrieve the corresponding status message

```php
HttpStatus::MESSAGES[200]                   // 'OK'
HttpStatus::MESSAGES[HttpStatus::NOT_FOUND] // 'Not Found'
```

### Interfaces

Every status category has its own interface containing the associated codes as constants

#### 1xx Informational

```php
use Mrcl\Utils\InternetStandards\HttpStatusCodes\Informational;

Informational::CONTINUE // 100
```

#### 2xx Success

```php
use Mrcl\Utils\InternetStandards\HttpStatusCodes\Success;

Success::ACCEPTED // 202
```

#### 3xx Redirection

```php
use Mrcl\Utils\InternetStandards\HttpStatusCodes\Redirection;

Redirection::MOVED_PERMANENTLY // 301
```

#### 4xx ClientError

```php
use Mrcl\Utils\InternetStandards\HttpStatusCodes\ClientError;

ClientError::BAD_REQUEST // 400
```

#### 5xx ServerError

```php
use Mrcl\Utils\InternetStandards\HttpStatusCodes\ServerError;

ServerError::NETWORK_AUTHENTICATION_REQUIRED // 511
```