# Swagger\Client\CountriesApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countriesGet**](CountriesApi.md#countriesGet) | **GET** /countries | List of countries
[**countriesIdGet**](CountriesApi.md#countriesIdGet) | **GET** /countries/{id} | Country by ID


# **countriesGet**
> \Swagger\Client\Model\CountriesResponse countriesGet($page_number, $page_size, $filter_region, $filter_sub_region, $sort)

List of countries

Returns all available countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CountriesApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_region = array("filter_region_example"); // string[] | Filtration by region.
$filter_sub_region = array("filter_sub_region_example"); // string[] | Filtration by sub region.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | area | -area | | population | -population | | region | -region | | sub_region | -sub_region |

try {
    $result = $api_instance->countriesGet($page_number, $page_size, $filter_region, $filter_sub_region, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_region** | [**string[]**](../Model/string.md)| Filtration by region. | [optional]
 **filter_sub_region** | [**string[]**](../Model/string.md)| Filtration by sub region. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | area | -area | | population | -population | | region | -region | | sub_region | -sub_region | | [optional]

### Return type

[**\Swagger\Client\Model\CountriesResponse**](../Model/CountriesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countriesIdGet**
> \Swagger\Client\Model\CountryResponse countriesIdGet($id)

Country by ID

Returns country with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CountriesApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->countriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->countriesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\CountryResponse**](../Model/CountryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

