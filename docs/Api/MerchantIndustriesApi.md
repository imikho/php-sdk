# OFT\MerchantIndustriesApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merchantIndustriesGet**](MerchantIndustriesApi.md#merchantIndustriesGet) | **GET** /merchant-industries | List of merchant industries
[**merchantIndustriesIdGet**](MerchantIndustriesApi.md#merchantIndustriesIdGet) | **GET** /merchant-industries/{id} | Merchant industry by ID


# **merchantIndustriesGet**
> \Swagger\Client\Model\MerchantIndustriesResponse merchantIndustriesGet($page_number, $page_size, $filter_name)

List of merchant industries

Returns all available merchant industries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\MerchantIndustriesApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.

try {
    $result = $api_instance->merchantIndustriesGet($page_number, $page_size, $filter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantIndustriesApi->merchantIndustriesGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\MerchantIndustriesResponse**](../Model/MerchantIndustriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantIndustriesIdGet**
> \Swagger\Client\Model\MerchantIndustryResponse merchantIndustriesIdGet($id)

Merchant industry by ID

Returns merchant industry with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\MerchantIndustriesApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->merchantIndustriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantIndustriesApi->merchantIndustriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\MerchantIndustryResponse**](../Model/MerchantIndustryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

