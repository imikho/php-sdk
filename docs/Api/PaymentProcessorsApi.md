# Swagger\Client\PaymentProcessorsApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentProcessorsGet**](PaymentProcessorsApi.md#paymentProcessorsGet) | **GET** /payment-processors | List of payment processors
[**paymentProcessorsIdGet**](PaymentProcessorsApi.md#paymentProcessorsIdGet) | **GET** /payment-processors/{id} | Payment processor by ID


# **paymentProcessorsGet**
> \Swagger\Client\Model\PaymentProcessorsResponse paymentProcessorsGet($page_number, $page_size, $filter_name)

List of payment processors

Returns all available payment processors.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentProcessorsApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.

try {
    $result = $api_instance->paymentProcessorsGet($page_number, $page_size, $filter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProcessorsApi->paymentProcessorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_name** | **string**| Filtering by name. | [optional]

### Return type

[**\Swagger\Client\Model\PaymentProcessorsResponse**](../Model/PaymentProcessorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentProcessorsIdGet**
> \Swagger\Client\Model\PaymentProcessorResponse paymentProcessorsIdGet($id)

Payment processor by ID

Returns payment processor with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentProcessorsApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->paymentProcessorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProcessorsApi->paymentProcessorsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\PaymentProcessorResponse**](../Model/PaymentProcessorResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

