# Swagger\Client\PaymentProvidersApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentProvidersGet**](PaymentProvidersApi.md#paymentProvidersGet) | **GET** /payment-providers | List of payment providers
[**paymentProvidersIdGet**](PaymentProvidersApi.md#paymentProvidersIdGet) | **GET** /payment-providers/{id} | Payment provider by ID


# **paymentProvidersGet**
> \Swagger\Client\Model\PaymentProvidersResponse paymentProvidersGet($page_number, $page_size, $filter_name, $filter_alias, $filter_types, $filter_sales_channels, $filter_features, $sort)

List of payment providers

Returns all available payment providers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentProvidersApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.
$filter_alias = "filter_alias_example"; // string | Filtering by alias.
$filter_types = array("filter_types_example"); // string[] | Filtering by types.
$filter_sales_channels = array("filter_sales_channels_example"); // string[] | Filtering by sales channels.
$filter_features = array("filter_features_example"); // string[] | Filtering by features.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | alias | -alias |

try {
    $result = $api_instance->paymentProvidersGet($page_number, $page_size, $filter_name, $filter_alias, $filter_types, $filter_sales_channels, $filter_features, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProvidersApi->paymentProvidersGet: ', $e->getMessage(), PHP_EOL;
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
 **filter_types** | [**string[]**](../Model/string.md)| Filtering by types. | [optional]
 **filter_sales_channels** | [**string[]**](../Model/string.md)| Filtering by sales channels. | [optional]
 **filter_features** | [**string[]**](../Model/string.md)| Filtering by features. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | [optional]

### Return type

[**\Swagger\Client\Model\PaymentProvidersResponse**](../Model/PaymentProvidersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentProvidersIdGet**
> \Swagger\Client\Model\PaymentProviderResponse paymentProvidersIdGet($id)

Payment provider by ID

Returns payment provider with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PaymentProvidersApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->paymentProvidersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentProvidersApi->paymentProvidersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\PaymentProviderResponse**](../Model/PaymentProviderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

