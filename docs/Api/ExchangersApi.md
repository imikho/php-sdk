# Swagger\Client\ExchangersApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exchangersGet**](ExchangersApi.md#exchangersGet) | **GET** /exchangers | List of exchangers
[**exchangersIdGet**](ExchangersApi.md#exchangersIdGet) | **GET** /exchangers/{id} | Exchanger by ID


# **exchangersGet**
> \Swagger\Client\Model\ExchangersResponse exchangersGet($page_number, $page_size, $filter_name, $filter_status, $sort)

List of exchangers

Returns all available exchangers.<br> Rates export standards is represented by:  * [estandards](http://estandards.info) * [jsons](http://jsons.info) * ratex - our internal standard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ExchangersApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.
$filter_status = array("filter_status_example"); // string[] | Filtration by status.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | status | -status | | wmid | -wmid | | rate_type | -rate_type | | rates_export_standard | <nobr>-rates_export_standard</nobr> |

try {
    $result = $api_instance->exchangersGet($page_number, $page_size, $filter_name, $filter_status, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangersApi->exchangersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_name** | **string**| Filtering by name. | [optional]
 **filter_status** | [**string[]**](../Model/string.md)| Filtration by status. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | status | -status | | wmid | -wmid | | rate_type | -rate_type | | rates_export_standard | &lt;nobr&gt;-rates_export_standard&lt;/nobr&gt; | | [optional]

### Return type

[**\Swagger\Client\Model\ExchangersResponse**](../Model/ExchangersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exchangersIdGet**
> \Swagger\Client\Model\ExchangerResponse exchangersIdGet($id)

Exchanger by ID

Returns exchanger with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ExchangersApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->exchangersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangersApi->exchangersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\ExchangerResponse**](../Model/ExchangerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

