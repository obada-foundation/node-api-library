# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

For more information, please visit [https://www.obada.io](https://www.obada.io).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/obada-foundation/node-api-library.git"
    }
  ],
  "require": {
    "obada-foundation/node-api-library": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Obada\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obit = new \Obada\Entities\Obit(); // \Obada\Entities\Obit

try {
    $result = $apiInstance->checksum($obit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->checksum: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://dev.node.obada.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ObitApi* | [**checksum**](docs/Api/ObitApi.md#checksum) | **POST** /obit/checksum | Generates the obit checksum.
*ObitApi* | [**generateId**](docs/Api/ObitApi.md#generateid) | **POST** /obit/id | Generate Obit ID
*ObitApi* | [**get**](docs/Api/ObitApi.md#get) | **GET** /obits/{obit_did} | Get Obit by DID or USN
*ObitApi* | [**history**](docs/Api/ObitApi.md#history) | **GET** /obits/{obit_did}/history | Get Obit history
*ObitApi* | [**save**](docs/Api/ObitApi.md#save) | **POST** /obits | Save Obit
*ObitApi* | [**search**](docs/Api/ObitApi.md#search) | **GET** /obits | Search obits by query

## Models

- [Checksum](docs/Model/Checksum.md)
- [DocumentLink](docs/Model/DocumentLink.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [MetaDataRecord](docs/Model/MetaDataRecord.md)
- [NotFound](docs/Model/NotFound.md)
- [Obit](docs/Model/Obit.md)
- [ObitHistory](docs/Model/ObitHistory.md)
- [ObitId](docs/Model/ObitId.md)
- [Obits](docs/Model/Obits.md)
- [ObitsMeta](docs/Model/ObitsMeta.md)
- [RequestObitId](docs/Model/RequestObitId.md)
- [StructureDataRecord](docs/Model/StructureDataRecord.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityFields](docs/Model/UnprocessableEntityFields.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

techops@obada.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
