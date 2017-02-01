# OFT\BanksApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**banksGet**](BanksApi.md#banksGet) | **GET** /banks | List of banks
[**banksIdGet**](BanksApi.md#banksIdGet) | **GET** /banks/{id} | Bank by ID


# **banksGet**
> \Swagger\Client\Model\BanksResponse banksGet($page_number, $page_size, $filter_sort_code, $filter_alias, $filter_status, $sort)

List of banks

Returns all available banks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\BanksApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_sort_code = "filter_sort_code_example"; // string | Filtering by banks code.
$filter_alias = "filter_alias_example"; // string | Filtering by alias.
$filter_status = array("filter_status_example"); // string[] | Filtration by status.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | sort_code | -sort_code |

try {
    $result = $api_instance->banksGet($page_number, $page_size, $filter_sort_code, $filter_alias, $filter_status, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_sort_code** | **string**| Filtering by banks code. | [optional]
 **filter_alias** | **string**| Filtering by alias. | [optional]
 **filter_status** | [**string[]**](../Model/string.md)| Filtration by status. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | sort_code | -sort_code | | [optional]

### Return type

[**\Swagger\Client\Model\BanksResponse**](../Model/BanksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **banksIdGet**
> \Swagger\Client\Model\BankResponse banksIdGet($id)

Bank by ID

Returns bank with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\BanksApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->banksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->banksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\BankResponse**](../Model/BankResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

