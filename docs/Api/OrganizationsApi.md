# Swagger\Client\OrganizationsApi

All URIs are relative to *https://api.openfintech.io/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationsGet**](OrganizationsApi.md#organizationsGet) | **GET** /organizations | List of organizations
[**organizationsIdGet**](OrganizationsApi.md#organizationsIdGet) | **GET** /organizations/{id} | Organization by ID


# **organizationsGet**
> \Swagger\Client\Model\OrganizationsResponse organizationsGet($page_number, $page_size, $filter_name, $filter_alias, $filter_status, $filter_industries, $sort)

List of organizations

Returns all available organizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$page_number = 56; // int | Current page number.
$page_size = 56; // int | Page size.<br>*Default value: 100*
$filter_name = "filter_name_example"; // string | Filtering by name.
$filter_alias = "filter_alias_example"; // string | Filtering by alias.
$filter_status = array("filter_status_example"); // string[] | Filtration by status.
$filter_industries = "filter_industries_example"; // string | Filtering by industries.
$sort = array("sort_example"); // string[] | Sort params:<br>  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | description | -description |

try {
    $result = $api_instance->organizationsGet($page_number, $page_size, $filter_name, $filter_alias, $filter_status, $filter_industries, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsGet: ', $e->getMessage(), PHP_EOL;
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
 **filter_status** | [**string[]**](../Model/string.md)| Filtration by status. | [optional]
 **filter_industries** | **string**| Filtering by industries. | [optional]
 **sort** | [**string[]**](../Model/string.md)| Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | description | -description | | [optional]

### Return type

[**\Swagger\Client\Model\OrganizationsResponse**](../Model/OrganizationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsIdGet**
> \Swagger\Client\Model\OrganizationResponse organizationsIdGet($id)

Organization by ID

Returns organization with specific ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$id = "id_example"; // string | Unique ID.

try {
    $result = $api_instance->organizationsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID. |

### Return type

[**\Swagger\Client\Model\OrganizationResponse**](../Model/OrganizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

