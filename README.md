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




$apiInstance = new Obada\Api\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obitDid = did:obada:81413bc1ad2074a6ae35d1f65f64f1bca2e8a20959f37ef0349a729ddc567d9b; // string | Required.

try {
    $result = $apiInstance->fetchObitFromChain($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->fetchObitFromChain: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://dev.api.obada.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*HelperApi* | [**fetchObitFromChain**](docs/Api/HelperApi.md#fetchobitfromchain) | **GET** /api/server/obit/{obit_did} | Get Obit From Blockchain
*HelperApi* | [**generateObitDef**](docs/Api/HelperApi.md#generateobitdef) | **GET** /api/obit/definition | Generate Obit Definition
*HelperApi* | [**generateRootHash**](docs/Api/HelperApi.md#generateroothash) | **POST** /api/obit/hash | Generates The Root Hash using the data provided.
*HelperApi* | [**getClientObit**](docs/Api/HelperApi.md#getclientobit) | **GET** /api/client/obit/{obit_did} | Get Client Obit
*ObitApi* | [**createObit**](docs/Api/ObitApi.md#createobit) | **POST** /obits | 
*ObitApi* | [**removeObit**](docs/Api/ObitApi.md#removeobit) | **DELETE** /obits/{obit_did} | 
*ObitApi* | [**searchObits**](docs/Api/ObitApi.md#searchobits) | **GET** /obits | 
*ObitApi* | [**showObit**](docs/Api/ObitApi.md#showobit) | **GET** /obits/{obit_did} | 
*ObitApi* | [**showObitHistory**](docs/Api/ObitApi.md#showobithistory) | **GET** /obits/{obit_did}/history | 
*ObitApi* | [**updateObit**](docs/Api/ObitApi.md#updateobit) | **PUT** /obits/{obit_did} | 

## Models

- [BlockChainObit](docs/Model/BlockChainObit.md)
- [ClientObit](docs/Model/ClientObit.md)
- [DocumentLink](docs/Model/DocumentLink.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [LocalObit](docs/Model/LocalObit.md)
- [LocalObitDocuments](docs/Model/LocalObitDocuments.md)
- [LocalObitMetadata](docs/Model/LocalObitMetadata.md)
- [LocalObitStructuredData](docs/Model/LocalObitStructuredData.md)
- [MetaDataRecord](docs/Model/MetaDataRecord.md)
- [NotFound](docs/Model/NotFound.md)
- [Obit](docs/Model/Obit.md)
- [ObitDefinition](docs/Model/ObitDefinition.md)
- [ObitHistory](docs/Model/ObitHistory.md)
- [StructureDataRecord](docs/Model/StructureDataRecord.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)

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
