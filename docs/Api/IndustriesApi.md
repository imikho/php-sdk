# OFT\IndustriesApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationIndustriesGet**](IndustriesApi.md#organizationIndustriesGet) | **GET** /organization-industries | List of organization industries
[**organizationIndustriesIdGet**](IndustriesApi.md#organizationIndustriesIdGet) | **GET** /organization-industries/{id} | Industry by ID


# **organizationIndustriesGet**
> \Swagger\Client\Model\IndustriesResponse organizationIndustriesGet($page_number, $page_size)

List of organization industries

Returns all available organization industries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\IndustriesApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*

try {
    $result = $api_instance->organizationIndustriesGet($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->organizationIndustriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]

### Return type

[**\Swagger\Client\Model\IndustriesResponse**](../Model/IndustriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationIndustriesIdGet**
> \Swagger\Client\Model\IndustryResponse organizationIndustriesIdGet($id)

Industry by ID

Returns industry with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\IndustriesApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->organizationIndustriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustriesApi->organizationIndustriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\IndustryResponse**](../Model/IndustryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

