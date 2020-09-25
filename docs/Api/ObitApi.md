# OpenAPI\Client\ObitApi

All URIs are relative to *https://dev.api.obada.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createObit**](ObitApi.md#createObit) | **POST** /obits | 
[**removeObit**](ObitApi.md#removeObit) | **DELETE** /obits/{obit_did} | 
[**searchObits**](ObitApi.md#searchObits) | **GET** /obits | 
[**showObit**](ObitApi.md#showObit) | **GET** /obits/{obit_did} | 
[**showObitHistory**](ObitApi.md#showObitHistory) | **GET** /obits/{obit_did}/history | 
[**updateObit**](ObitApi.md#updateObit) | **PUT** /obits/{obit_did} | 



## createObit

> createObit($new_obit)



Creates a new obit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$new_obit = new \OpenAPI\Client\Model\NewObit(); // \OpenAPI\Client\Model\NewObit | 

try {
    $apiInstance->createObit($new_obit);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->createObit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_obit** | [**\OpenAPI\Client\Model\NewObit**](../Model/NewObit.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeObit

> removeObit($obit_did)



Changes Obit status to DISABLED_BY_OWNER

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obit_did = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID argument

try {
    $apiInstance->removeObit($obit_did);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->removeObit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obit_did** | **string**| The given ObitDID argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchObits

> \OpenAPI\Client\Model\InlineResponse200 searchObits($serial_number_hash, $obit_status, $manufacturer, $part_number, $usn, $owner_did, $offset, $limit)



Search obits by given filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serial_number_hash = fe403a1afe16203f4b8bb3a0e72d3e17567897bc15293e4a87b663e441030aea; // string | Query argument that filters by serial number hash
$obit_status = 'obit_status_example'; // string | Query argument that filters by obit status
$manufacturer = Sony; // string | Query argument that filters by manufacturer
$part_number = MWCN2LL/A; // string | Query argument that filters by part number
$usn = 2zEz-xLJR; // string | Universal serial number
$owner_did = did:obada:owner:123456; // string | OBADA owner DID
$offset = 0; // int | Number of records to skip for pagination.
$limit = 0; // int | Maximum number of records to return.

try {
    $result = $apiInstance->searchObits($serial_number_hash, $obit_status, $manufacturer, $part_number, $usn, $owner_did, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->searchObits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serial_number_hash** | **string**| Query argument that filters by serial number hash | [optional]
 **obit_status** | **string**| Query argument that filters by obit status | [optional]
 **manufacturer** | **string**| Query argument that filters by manufacturer | [optional]
 **part_number** | **string**| Query argument that filters by part number | [optional]
 **usn** | **string**| Universal serial number | [optional]
 **owner_did** | **string**| OBADA owner DID | [optional]
 **offset** | **int**| Number of records to skip for pagination. | [optional] [default to 0]
 **limit** | **int**| Maximum number of records to return. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showObit

> showObit($obit_did)



Shows the information about single Obit by given ObitDID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obit_did = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID argument

try {
    $apiInstance->showObit($obit_did);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->showObit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obit_did** | **string**| The given ObitDID argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showObitHistory

> \OpenAPI\Client\Model\InlineResponse2001 showObitHistory($obit_did)



Shows the history of changes by given Obit with ObitDID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obit_did = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID argument

try {
    $result = $apiInstance->showObitHistory($obit_did);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->showObitHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obit_did** | **string**| The given ObitDID argument |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateObit

> updateObit($obit_did)



Updates Obit by given ObitDID with payload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ObitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$obit_did = did:obada:fe096095-e0f0-4918-9607-6567bd5756b5; // string | The given ObitDID argument

try {
    $apiInstance->updateObit($obit_did);
} catch (Exception $e) {
    echo 'Exception when calling ObitApi->updateObit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **obit_did** | **string**| The given ObitDID argument |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

