# ObadaClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [Obada Generator](https://openapi-generator.tech) project:

- API version: 0.0.1
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.obada.io](https://www.obada.io)

## Requirements

PHP 7.2 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ObadaClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $apiInstance->createObit($body);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->createObit: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://dev.api.obada.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ObitApi* | [**createObit**](docs/Api/ObitApi.md#createobit) | **POST** /obits | 
*ObitApi* | [**removeObit**](docs/Api/ObitApi.md#removeobit) | **DELETE** /obits/{obit_did} | 
*ObitApi* | [**searchObits**](docs/Api/ObitApi.md#searchobits) | **GET** /obits | 
*ObitApi* | [**showObit**](docs/Api/ObitApi.md#showobit) | **GET** /obits/{obit_did} | 
*ObitApi* | [**showObitHistory**](docs/Api/ObitApi.md#showobithistory) | **GET** /obits/{obit_did}/history | 
*ObitApi* | [**updateObit**](docs/Api/ObitApi.md#updateobit) | **PUT** /obits/{obit_did} | 


## Documentation For Models

 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [NotFound](docs/Model/NotFound.md)
 - [UnprocessableEntity](docs/Model/UnprocessableEntity.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

techops@obada.io

