# Obada\HelperApi

All URIs are relative to https://dev.api.obada.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateObitDef()**](HelperApi.md#generateObitDef) | **GET** /api/obit/definition | Generate Obit Definition


## `generateObitDef()`

```php
generateObitDef($manufacturer, $partNumber, $serialNumber): \Obada\Entities\ObitDefinitionResponse
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

[**\Obada\Entities\ObitDefinitionResponse**](../Model/ObitDefinitionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
