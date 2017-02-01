# Swagger\Client\IssuersApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyIssuersGet**](IssuersApi.md#currencyIssuersGet) | **GET** /currency-issuers | List of currency issuers
[**currencyIssuersIdGet**](IssuersApi.md#currencyIssuersIdGet) | **GET** /currency-issuers/{id} | Issuer by ID


# **currencyIssuersGet**
> \Swagger\Client\Model\IssuersResponse currencyIssuersGet($page_number, $page_size)

List of currency issuers

Returns all available currency issuers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IssuersApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*

try {
    $result = $api_instance->currencyIssuersGet($page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuersApi->currencyIssuersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| Current page number. | [optional]
 **page_size** | **int**| Page size.&lt;br&gt;*Default value: 100* | [optional]

### Return type

[**\Swagger\Client\Model\IssuersResponse**](../Model/IssuersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyIssuersIdGet**
> \Swagger\Client\Model\IssuerResponse currencyIssuersIdGet($id)

Issuer by ID

Returns issuer with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IssuersApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->currencyIssuersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuersApi->currencyIssuersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\IssuerResponse**](../Model/IssuerResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

