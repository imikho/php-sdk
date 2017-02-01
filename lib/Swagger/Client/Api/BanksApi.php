<?php
/**
 * BanksApi
 * PHP version 5
 *
 * @category Class
 * @package  OFT
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenFinTech.io API
 *
 * # Introduction [OpenFinTech.io](https://openfintech.io) is an open database that comprises of standardized primary data for FinTech industry.<br> It contains such information as geolocation data (countries, cities, regions), organizations, currencies (national, digital, virtual, crypto), banks, digital exchangers, payment providers (PSP), payment methods, etc.<br> It is created for communication of cross-integrated micro-services on \"one language\". This is achieved through standardization of entity identifiers that are used to exchange information among different services.<br>  ### UML UML Domain Model diagram you can find [here](https://s3-eu-west-1.amazonaws.com/uploads-eu.hipchat.com/386820/4572695/rRdwJEYiMkoJrSR/Openfintech%20Design%20Model%20Public.png).<br>  ### Persistence Entities are updated not more than 1 time per day.<br>  ### Terms and Conditions This *OpenFinTech.io* is made available under the [Open Database License](http://opendatacommons.org/licenses/odbl/1.0/).<br> Any rights in individual contents of the database are licensed under the [Database Contents License](http://opendatacommons.org/licenses/dbcl/1.0/).<br>  ### Contacts For any questions, please email - info@openfintech.io     Powered by [Paymaxi](https://www.paymaxi.com)  # Get Started  If you use [POSTMAN](https://www.getpostman.com) or similar program which can operate with swagger`s files - just [download](https://docs.openfintech.io) our spec and [import it](https://www.getpostman.com/docs/importing_swagger). Also you can try live [API demo](https://api.openfintech.io).  ## Overview  The OpenFinTech API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API has predictable, resource-oriented URLs, and uses HTTP response codes to indicate API errors.<br> API is based on [JSON API](http://jsonapi.org) standard. JSON is returned by all API responses, including errors, although our API libraries convert responses to appropriate language-specific objects.<br> JSON API requires use of the JSON API media type (`application/vnd.api+json`) for exchanging data.<br> ### Additional Request Headers #### ACCEPT HEADER Your requests should always include the header: ```curl Accept: application/vnd.api+json ```  ## Authentication  To use OpenFinTech API no needed authorization.  ## Versioning  When we make changes to the API, we release new, dated versions. The current version is **2017-01-24**. Read our [API upgrades guide]() to see our API changelog and to learn more about backwards compatibility.  ## Pagination  OpenFinTech APIs to retrieve lists of banks, currencies and other resources - paginated to **100** items by default. The pagination information will be included in the list API response under the node name `meta` - contains information about listed objects [`total` - contains information about total count of listed objects, `pages` - count of pages], `links` - contain links to navigate between pages [`first` - link to first page, `prev` - link to previous page, `next` - link to next page, `last` - link to last page].<br> By default first page will be listed. For navigating through pages, use the page parameter (e.g. `page[number]`, `page[size]`).<br> The `page[size]` parameter can be used to set the number of records that you want to receive in the response.<br> The `page[number]` parameter can be used to set needed page number.<br> Exanple of response: ```json {   \"meta\": {     \"total\": 419,     \"pages\": 42   },   \"links\": {     \"first\": \"/v1/{path}?page[number]=1&page[size]=10\",     \"prev\": \"/v1/{path}?page[number]=39&page[size]=10\",     \"next\": \"/v1/{path}?page[number]=41&page[size]=10\",     \"last\": \"/v1/{path}?page[number]=42&page[size]=10\"   } ```  ### Sorting  OpenFinTech\\`s API supported query parameter to sort result collection [e.g. `?sort=alias`]. Information about available parameters may be found in the endpoint description. Positive parameter [e.g. `?sort=alias`] points to ascending sorting, negative  [e.g. `?sort=-alias`] - to descending sorting. Also, supported multiple sorting parameters [e.g. `?sort=alias, -name, id`, etc.] ```curl https://api.openfintech.io/v1/countries?sort=name,-area ```  ### Filtering  Filtering provided by unique query key `filter[*filtering_condition*]`. Information about available parameters may be found in the endpoint description. ```curl https://api.openfintech.io/v1/countries?filter[region]=europe ```  ## Errors  API uses conventional HTTP response codes to indicate the success or failure of an API request. In general, codes in the `2xx` range indicate success, codes in the `4xx` range indicate an error that failed given the information provided (e.g., a required parameter was omitted, etc.), and codes in the `5xx` range indicate an error with OpenFinTech's servers (these are rare).  | Code | Description | |------|-------------| | 200 - OK | Everything worked as expected. | | 400 - Bad Request | The request was unacceptable, often due to missing a required parameter. | | 401 - Unauthorized | No valid API key provided. | | 402 - Request Failed | The parameters were valid but the request failed. | | 404 - Not Found | The requested resource doesn't exist. | | 409 - Conflict | The request conflicts with another request (perhaps due to using the same idempotent key). | | 429 - Too Many Requests | Too many requests hit the API too quickly. We recommend an exponential backoff of your requests. | | 500, 502, 503, 504 - Server Errors | Something went wrong on OpenFinTech's end. (These are rare.) |
 *
 * OpenAPI spec version: 2017-01-24
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \OFT\ApiClient;
use \OFT\ApiException;
use \OFT\Configuration;
use \OFT\ObjectSerializer;

/**
 * BanksApi Class Doc Comment
 *
 * @category Class
 * @package  OFT
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BanksApi
{
    /**
     * API Client
     *
     * @var \OFT\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \OFT\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\OFT\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.openfintech.io/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \OFT\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \OFT\ApiClient $apiClient set the API client
     *
     * @return BanksApi
     */
    public function setApiClient(\OFT\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation banksGet
     *
     * List of banks
     *
     * @param int $page_number Current page number. (optional)
     * @param int $page_size Page size.&lt;br&gt;*Default value: 100* (optional)
     * @param string $filter_sort_code Filtering by banks code. (optional)
     * @param string $filter_alias Filtering by alias. (optional)
     * @param string[] $filter_status Filtration by status. (optional)
     * @param string[] $sort Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | sort_code | -sort_code | (optional)
     * @throws \OFT\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BanksResponse
     */
    public function banksGet($page_number = null, $page_size = null, $filter_sort_code = null, $filter_alias = null, $filter_status = null, $sort = null)
    {
        list($response) = $this->banksGetWithHttpInfo($page_number, $page_size, $filter_sort_code, $filter_alias, $filter_status, $sort);
        return $response;
    }

    /**
     * Operation banksGetWithHttpInfo
     *
     * List of banks
     *
     * @param int $page_number Current page number. (optional)
     * @param int $page_size Page size.&lt;br&gt;*Default value: 100* (optional)
     * @param string $filter_sort_code Filtering by banks code. (optional)
     * @param string $filter_alias Filtering by alias. (optional)
     * @param string[] $filter_status Filtration by status. (optional)
     * @param string[] $sort Sort params:&lt;br&gt;  | ASC | DESC | |-----|------| | name | -name | | alias | -alias | | status | -status | | sort_code | -sort_code | (optional)
     * @throws \OFT\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BanksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function banksGetWithHttpInfo($page_number = null, $page_size = null, $filter_sort_code = null, $filter_alias = null, $filter_status = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/banks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page_number !== null) {
            $queryParams['page[number]'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['page[size]'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // query params
        if ($filter_sort_code !== null) {
            $queryParams['filter[sort_code]'] = $this->apiClient->getSerializer()->toQueryValue($filter_sort_code);
        }
        // query params
        if ($filter_alias !== null) {
            $queryParams['filter[alias]'] = $this->apiClient->getSerializer()->toQueryValue($filter_alias);
        }
        // query params
        if (is_array($filter_status)) {
            $filter_status = $this->apiClient->getSerializer()->serializeCollection($filter_status, 'csv', true);
        }
        if ($filter_status !== null) {
            $queryParams['filter[status]'] = $this->apiClient->getSerializer()->toQueryValue($filter_status);
        }
        // query params
        if (is_array($sort)) {
            $sort = $this->apiClient->getSerializer()->serializeCollection($sort, 'csv', true);
        }
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\BanksResponse',
                '/banks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BanksResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BanksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation banksIdGet
     *
     * Bank by ID
     *
     * @param string $id Unique ID. (required)
     * @throws \OFT\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BankResponse
     */
    public function banksIdGet($id)
    {
        list($response) = $this->banksIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation banksIdGetWithHttpInfo
     *
     * Bank by ID
     *
     * @param string $id Unique ID. (required)
     * @throws \OFT\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BankResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function banksIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling banksIdGet');
        }
        // parse inputs
        $resourcePath = "/banks/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\BankResponse',
                '/banks/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BankResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BankResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
