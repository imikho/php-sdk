# OFT\PaymentMethodsApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentMethodsGet**](PaymentMethodsApi.md#paymentMethodsGet) | **GET** /payment-methods | List of payment methods
[**paymentMethodsIdGet**](PaymentMethodsApi.md#paymentMethodsIdGet) | **GET** /payment-methods/{id} | Payment method by ID


# **paymentMethodsGet**
> \Swagger\Client\Model\PaymentMethodsResponse paymentMethodsGet($page_number, $page_size, $filter_name, $filter_alias, $filter_processor_name, $filter_category, $sort)

List of payment methods

Returns all available payment methods.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\PaymentMethodsApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.
$filter_alias = "filter_alias_example"; // string | Filtering by alias.
$filter_processor_name = "filter_processor_name_example"; // string | Filtering by processor_name.
$filter_category = array("filter_category_example"); // string[] | Filtering by category.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | processor_name | -processor_name | | category | -category |

try {
    $result = $api_instance->paymentMethodsGet($page_number, $page_size, $filter_name, $filter_alias, $filter_processor_name, $filter_category, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->paymentMethodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_name** | **string**| Filtering by name. | [optional]
 **filter_alias** | **string**| Filtering by alias. | [optional]
 **filter_processor_name** | **string**| Filtering by processor_name. | [optional]
 **filter_category** | [**string[]**](../Model/string.md)| Filtering by category. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | processor_name | -processor_name | | category | -category | | [optional]

### Return type

[**\Swagger\Client\Model\PaymentMethodsResponse**](../Model/PaymentMethodsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentMethodsIdGet**
> \Swagger\Client\Model\PaymentMethodResponse paymentMethodsIdGet($id)

Payment method by ID

Returns payment method with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\PaymentMethodsApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->paymentMethodsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->paymentMethodsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\PaymentMethodResponse**](../Model/PaymentMethodResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

