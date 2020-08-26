# Obada\Client\DefaultApi

All URIs are relative to *https://dev.api.obada.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listBlockchain**](DefaultApi.md#listBlockchain) | **GET** /blockchain | 



## listBlockchain

> \Obada\Client\Model\InlineResponse200 listBlockchain($offset, $limit)



List blockchain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Obada\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | Number of records to skip for pagination.
$limit = 56; // int | Maximum number of records to return.

try {
    $result = $apiInstance->listBlockchain($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listBlockchain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Number of records to skip for pagination. | [optional]
 **limit** | **int**| Maximum number of records to return. | [optional]

### Return type

[**\Obada\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

