# Obada\HelperApi

All URIs are relative to https://dev.api.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchObitFromChain()**](HelperApi.md#fetchObitFromChain) | **GET** /api/server/obit/{obit_did} | Get Obit From Blockchain
[**generateObitDef()**](HelperApi.md#generateObitDef) | **GET** /api/obit/definition | Generate Obit Definition
[**generateRootHash()**](HelperApi.md#generateRootHash) | **POST** /api/obit/hash | Generates The Root Hash using the data provided.
[**getClientObit()**](HelperApi.md#getClientObit) | **GET** /api/client/obit/{obit_did} | Get Client Obit
[**getClientObits()**](HelperApi.md#getClientObits) | **GET** /api/client/obits | Returns a list of client obits
[**saveClientObit()**](HelperApi.md#saveClientObit) | **POST** /api/client/obit | Save Client Obit


## `fetchObitFromChain()`

```php
fetchObitFromChain($obitDid): \Obada\Entities\InlineResponse2002
```

Get Obit From Blockchain

Retrieves Obit information from blockchain but does not download it.

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| Required. |

### Return type

[**\Obada\Entities\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateObitDef()`

```php
generateObitDef($manufacturer, $partNumber, $serialNumber): \Obada\Entities\InlineResponse2004
```

Generate Obit Definition

Returns the Obit Definition for a given device_id, part_number and serial_number input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manufacturer = Apple; // string | Device Id (Required)
$partNumber = 123456789; // string | Part Number (Required)
$serialNumber = 123456789; // string | Serial Number (Required)

try {
    $result = $apiInstance->generateObitDef($manufacturer, $partNumber, $serialNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->generateObitDef: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer** | **string**| Device Id (Required) |
 **partNumber** | **string**| Part Number (Required) |
 **serialNumber** | **string**| Serial Number (Required) |

### Return type

[**\Obada\Entities\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateRootHash()`

```php
generateRootHash($localObit): \Obada\Entities\InlineResponse2003
```

Generates The Root Hash using the data provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$localObit = new \Obada\Entities\LocalObit(); // \Obada\Entities\LocalObit

try {
    $result = $apiInstance->generateRootHash($localObit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->generateRootHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **localObit** | [**\Obada\Entities\LocalObit**](../Model/LocalObit.md)|  | [optional]

### Return type

[**\Obada\Entities\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientObit()`

```php
getClientObit($obitDid): \Obada\Entities\InlineResponse2001
```

Get Client Obit

### Example

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
    $result = $apiInstance->getClientObit($obitDid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->getClientObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obitDid** | **string**| Required. |

### Return type

[**\Obada\Entities\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientObits()`

```php
getClientObits(): \Obada\Entities\InlineResponse200
```

Returns a list of client obits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getClientObits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->getClientObits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Obada\Entities\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveClientObit()`

```php
saveClientObit($localObit): \Obada\Entities\InlineResponse2001
```

Save Client Obit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Obada\Api\HelperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$localObit = new \Obada\Entities\LocalObit(); // \Obada\Entities\LocalObit

try {
    $result = $apiInstance->saveClientObit($localObit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->saveClientObit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **localObit** | [**\Obada\Entities\LocalObit**](../Model/LocalObit.md)|  | [optional]

### Return type

[**\Obada\Entities\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
