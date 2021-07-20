# Obada\HelperApi

All URIs are relative to https://dev.api.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateObitDef()**](HelperApi.md#generateObitDef) | **GET** /api/obit/definition | Generate Obit Definition
[**generateRootHash()**](HelperApi.md#generateRootHash) | **POST** /api/obit/hash | Generates The Root Hash using the data provided.


## `generateObitDef()`

```php
generateObitDef($manufacturer, $partNumber, $serialNumber): \Obada\Entities\InlineResponse2002
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

[**\Obada\Entities\InlineResponse2002**](../Model/InlineResponse2002.md)

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
generateRootHash($localObit): \Obada\Entities\InlineResponse2001
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

[**\Obada\Entities\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
