# OFT\CurrenciesApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currenciesGet**](CurrenciesApi.md#currenciesGet) | **GET** /currencies | List of currencies
[**currenciesIdGet**](CurrenciesApi.md#currenciesIdGet) | **GET** /currencies/{id} | Currency by ID


# **currenciesGet**
> \Swagger\Client\Model\CurrenciesResponse currenciesGet($page_number, $page_size, $filter_code_iso_alpha3, $filter_code_iso_numeric3, $filter_code_estandards_alpha, $filter_currency_type, $filter_category, $sort)

List of currencies

Returns all available currencies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\CurrenciesApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_code_iso_alpha3 = "filter_code_iso_alpha3_example"; // string | Filtering by ISO code.
$filter_code_iso_numeric3 = 56; // int | Filtering by ISO number.
$filter_code_estandards_alpha = "filter_code_estandards_alpha_example"; // string | Filtering by estandards code.
$filter_currency_type = array("filter_currency_type_example"); // string[] | Filtration by currency type.
$filter_category = array("filter_category_example"); // string[] | Filtration by category.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | type | -type | | category | -category | | code | -code | | code_iso_alpha3 | -code_iso_alpha3 | | code_iso_numeric3 | -code_iso_numeric3 | | code_estandards_alpha | -code_estandards_alpha |

try {
    $result = $api_instance->currenciesGet($page_number, $page_size, $filter_code_iso_alpha3, $filter_code_iso_numeric3, $filter_code_estandards_alpha, $filter_currency_type, $filter_category, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]
 **filter_code_iso_alpha3** | **string**| Filtering by ISO code. | [optional]
 **filter_code_iso_numeric3** | **int**| Filtering by ISO number. | [optional]
 **filter_code_estandards_alpha** | **string**| Filtering by estandards code. | [optional]
 **filter_currency_type** | [**string[]**](../Model/string.md)| Filtration by currency type. | [optional]
 **filter_category** | [**string[]**](../Model/string.md)| Filtration by category. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | type | -type | | category | -category | | code | -code | | code_iso_alpha3 | -code_iso_alpha3 | | code_iso_numeric3 | -code_iso_numeric3 | | code_estandards_alpha | -code_estandards_alpha | | [optional]

### Return type

[**\Swagger\Client\Model\CurrenciesResponse**](../Model/CurrenciesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currenciesIdGet**
> \Swagger\Client\Model\CurrencyResponse currenciesIdGet($id)

Currency by ID

Returns currency with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new OFT\Api\CurrenciesApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->currenciesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currenciesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\CurrencyResponse**](../Model/CurrencyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

