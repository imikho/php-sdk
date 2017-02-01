# SwaggerClient-php
# Introduction [OpenFinTech.io](https://openfintech.io) is an open database that comprises of standardized primary data for FinTech industry.<br> It contains such information as geolocation data (countries, cities, regions), organizations, currencies (national, digital, virtual, crypto), banks, digital exchangers, payment providers (PSP), payment methods, etc.<br> It is created for communication of cross-integrated micro-services on \"one language\". This is achieved through standardization of entity identifiers that are used to exchange information among different services.<br>  ### UML UML Domain Model diagram you can find [here](https://s3-eu-west-1.amazonaws.com/uploads-eu.hipchat.com/386820/4572695/rRdwJEYiMkoJrSR/Openfintech%20Design%20Model%20Public.png).<br>  ### Persistence Entities are updated not more than 1 time per day.<br>  ### Terms and Conditions This *OpenFinTech.io* is made available under the [Open Database License](http://opendatacommons.org/licenses/odbl/1.0/).<br> Any rights in individual contents of the database are licensed under the [Database Contents License](http://opendatacommons.org/licenses/dbcl/1.0/).<br>  ### Contacts For any questions, please email - info@openfintech.io     Powered by [Paymaxi](https://www.paymaxi.com)  # Get Started  If you use [POSTMAN](https://www.getpostman.com) or similar program which can operate with swagger`s files - just [download](https://docs.openfintech.io) our spec and [import it](https://www.getpostman.com/docs/importing_swagger). Also you can try live [API demo](https://api.openfintech.io).  ## Overview  The OpenFinTech API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API has predictable, resource-oriented URLs, and uses HTTP response codes to indicate API errors.<br> API is based on [JSON API](http://jsonapi.org) standard. JSON is returned by all API responses, including errors, although our API libraries convert responses to appropriate language-specific objects.<br> JSON API requires use of the JSON API media type (`application/vnd.api+json`) for exchanging data.<br> ### Additional Request Headers #### ACCEPT HEADER Your requests should always include the header: ```curl Accept: application/vnd.api+json ```  ## Authentication  To use OpenFinTech API no needed authorization.  ## Versioning  When we make changes to the API, we release new, dated versions. The current version is **2017-01-24**. Read our [API upgrades guide]() to see our API changelog and to learn more about backwards compatibility.  ## Pagination  OpenFinTech APIs to retrieve lists of banks, currencies and other resources - paginated to **100** items by default. The pagination information will be included in the list API response under the node name `meta` - contains information about listed objects [`total` - contains information about total count of listed objects, `pages` - count of pages], `links` - contain links to navigate between pages [`first` - link to first page, `prev` - link to previous page, `next` - link to next page, `last` - link to last page].<br> By default first page will be listed. For navigating through pages, use the page parameter (e.g. `page[number]`, `page[size]`).<br> The `page[size]` parameter can be used to set the number of records that you want to receive in the response.<br> The `page[number]` parameter can be used to set needed page number.<br> Exanple of response: ```json {   \"meta\": {     \"total\": 419,     \"pages\": 42   },   \"links\": {     \"first\": \"/v1/{path}?page[number]=1&page[size]=10\",     \"prev\": \"/v1/{path}?page[number]=39&page[size]=10\",     \"next\": \"/v1/{path}?page[number]=41&page[size]=10\",     \"last\": \"/v1/{path}?page[number]=42&page[size]=10\"   } ```  ### Sorting  OpenFinTech\\`s API supported query parameter to sort result collection [e.g. `?sort=alias`]. Information about available parameters may be found in the endpoint description. Positive parameter [e.g. `?sort=alias`] points to ascending sorting, negative  [e.g. `?sort=-alias`] - to descending sorting. Also, supported multiple sorting parameters [e.g. `?sort=alias, -name, id`, etc.] ```curl https://api.openfintech.io/v1/countries?sort=name,-area ```  ### Filtering  Filtering provided by unique query key `filter[*filtering_condition*]`. Information about available parameters may be found in the endpoint description. ```curl https://api.openfintech.io/v1/countries?filter[region]=europe ```  ## Errors  API uses conventional HTTP response codes to indicate the success or failure of an API request. In general, codes in the `2xx` range indicate success, codes in the `4xx` range indicate an error that failed given the information provided (e.g., a required parameter was omitted, etc.), and codes in the `5xx` range indicate an error with OpenFinTech's servers (these are rare).  | Code | Description | |------|-------------| | 200 - OK | Everything worked as expected. | | 400 - Bad Request | The request was unacceptable, often due to missing a required parameter. | | 401 - Unauthorized | No valid API key provided. | | 402 - Request Failed | The parameters were valid but the request failed. | | 404 - Not Found | The requested resource doesn't exist. | | 409 - Conflict | The request conflicts with another request (perhaps due to using the same idempotent key). | | 429 - Too Many Requests | Too many requests hit the API too quickly. We recommend an exponential backoff of your requests. | | 500, 502, 503, 504 - Server Errors | Something went wrong on OpenFinTech's end. (These are rare.) |

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2017-01-24
- Package version: 0.0.5
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/openfintechio/php-sdk.git"
    }
  ],
  "require": {
    "openfintechio/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.openfintech.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BanksApi* | [**banksGet**](docs/Api/BanksApi.md#banksget) | **GET** /banks | List of banks
*BanksApi* | [**banksIdGet**](docs/Api/BanksApi.md#banksidget) | **GET** /banks/{id} | Bank by ID
*CountriesApi* | [**countriesGet**](docs/Api/CountriesApi.md#countriesget) | **GET** /countries | List of countries
*CountriesApi* | [**countriesIdGet**](docs/Api/CountriesApi.md#countriesidget) | **GET** /countries/{id} | Country by ID
*CurrenciesApi* | [**currenciesGet**](docs/Api/CurrenciesApi.md#currenciesget) | **GET** /currencies | List of currencies
*CurrenciesApi* | [**currenciesIdGet**](docs/Api/CurrenciesApi.md#currenciesidget) | **GET** /currencies/{id} | Currency by ID
*ExchangersApi* | [**exchangersGet**](docs/Api/ExchangersApi.md#exchangersget) | **GET** /exchangers | List of exchangers
*ExchangersApi* | [**exchangersIdGet**](docs/Api/ExchangersApi.md#exchangersidget) | **GET** /exchangers/{id} | Exchanger by ID
*IndustriesApi* | [**organizationIndustriesGet**](docs/Api/IndustriesApi.md#organizationindustriesget) | **GET** /organization-industries | List of organization industries
*IndustriesApi* | [**organizationIndustriesIdGet**](docs/Api/IndustriesApi.md#organizationindustriesidget) | **GET** /organization-industries/{id} | Industry by ID
*IssuersApi* | [**currencyIssuersGet**](docs/Api/IssuersApi.md#currencyissuersget) | **GET** /currency-issuers | List of currency issuers
*IssuersApi* | [**currencyIssuersIdGet**](docs/Api/IssuersApi.md#currencyissuersidget) | **GET** /currency-issuers/{id} | Issuer by ID
*MerchantIndustriesApi* | [**merchantIndustriesGet**](docs/Api/MerchantIndustriesApi.md#merchantindustriesget) | **GET** /merchant-industries | List of merchant industries
*MerchantIndustriesApi* | [**merchantIndustriesIdGet**](docs/Api/MerchantIndustriesApi.md#merchantindustriesidget) | **GET** /merchant-industries/{id} | Merchant industry by ID
*OrganizationsApi* | [**organizationsGet**](docs/Api/OrganizationsApi.md#organizationsget) | **GET** /organizations | List of organizations
*OrganizationsApi* | [**organizationsIdGet**](docs/Api/OrganizationsApi.md#organizationsidget) | **GET** /organizations/{id} | Organization by ID
*PaymentMethodsApi* | [**paymentMethodsGet**](docs/Api/PaymentMethodsApi.md#paymentmethodsget) | **GET** /payment-methods | List of payment methods
*PaymentMethodsApi* | [**paymentMethodsIdGet**](docs/Api/PaymentMethodsApi.md#paymentmethodsidget) | **GET** /payment-methods/{id} | Payment method by ID
*PaymentProcessorsApi* | [**paymentProcessorsGet**](docs/Api/PaymentProcessorsApi.md#paymentprocessorsget) | **GET** /payment-processors | List of payment processors
*PaymentProcessorsApi* | [**paymentProcessorsIdGet**](docs/Api/PaymentProcessorsApi.md#paymentprocessorsidget) | **GET** /payment-processors/{id} | Payment processor by ID
*PaymentProvidersApi* | [**paymentProvidersGet**](docs/Api/PaymentProvidersApi.md#paymentprovidersget) | **GET** /payment-providers | List of payment providers
*PaymentProvidersApi* | [**paymentProvidersIdGet**](docs/Api/PaymentProvidersApi.md#paymentprovidersidget) | **GET** /payment-providers/{id} | Payment provider by ID


## Documentation For Models

 - [Bank](docs/Model/Bank.md)
 - [BankAttributes](docs/Model/BankAttributes.md)
 - [BankOrganization](docs/Model/BankOrganization.md)
 - [BankOrganizationData](docs/Model/BankOrganizationData.md)
 - [BankOrganizationLinks](docs/Model/BankOrganizationLinks.md)
 - [BankRelationships](docs/Model/BankRelationships.md)
 - [BankResponse](docs/Model/BankResponse.md)
 - [BanksResponse](docs/Model/BanksResponse.md)
 - [CountriesResponse](docs/Model/CountriesResponse.md)
 - [Country](docs/Model/Country.md)
 - [CountryAttributes](docs/Model/CountryAttributes.md)
 - [CountryRelationships](docs/Model/CountryRelationships.md)
 - [CountryResponse](docs/Model/CountryResponse.md)
 - [CountryTranslations](docs/Model/CountryTranslations.md)
 - [CountryTranslationsLinks](docs/Model/CountryTranslationsLinks.md)
 - [CurrenciesResponse](docs/Model/CurrenciesResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [CurrencyAttributes](docs/Model/CurrencyAttributes.md)
 - [CurrencyCountries](docs/Model/CurrencyCountries.md)
 - [CurrencyCountryLinks](docs/Model/CurrencyCountryLinks.md)
 - [CurrencyIssuerOrganization](docs/Model/CurrencyIssuerOrganization.md)
 - [CurrencyIssuerOrganizationData](docs/Model/CurrencyIssuerOrganizationData.md)
 - [CurrencyIssuerOrganizationLinks](docs/Model/CurrencyIssuerOrganizationLinks.md)
 - [CurrencyParent](docs/Model/CurrencyParent.md)
 - [CurrencyParentData](docs/Model/CurrencyParentData.md)
 - [CurrencyParentLinks](docs/Model/CurrencyParentLinks.md)
 - [CurrencyRelationships](docs/Model/CurrencyRelationships.md)
 - [CurrencyResponse](docs/Model/CurrencyResponse.md)
 - [Exchanger](docs/Model/Exchanger.md)
 - [ExchangerAttributes](docs/Model/ExchangerAttributes.md)
 - [ExchangerAttributesOrganization](docs/Model/ExchangerAttributesOrganization.md)
 - [ExchangerOrganization](docs/Model/ExchangerOrganization.md)
 - [ExchangerOrganizationData](docs/Model/ExchangerOrganizationData.md)
 - [ExchangerOrganizationLinks](docs/Model/ExchangerOrganizationLinks.md)
 - [ExchangerRelationships](docs/Model/ExchangerRelationships.md)
 - [ExchangerResponse](docs/Model/ExchangerResponse.md)
 - [ExchangersResponse](docs/Model/ExchangersResponse.md)
 - [IndustriesResponse](docs/Model/IndustriesResponse.md)
 - [Industry](docs/Model/Industry.md)
 - [IndustryAttributes](docs/Model/IndustryAttributes.md)
 - [IndustryResponse](docs/Model/IndustryResponse.md)
 - [Issuer](docs/Model/Issuer.md)
 - [IssuerAttribute](docs/Model/IssuerAttribute.md)
 - [IssuerOrganization](docs/Model/IssuerOrganization.md)
 - [IssuerOrganizationData](docs/Model/IssuerOrganizationData.md)
 - [IssuerOrganizationLinks](docs/Model/IssuerOrganizationLinks.md)
 - [IssuerRelationships](docs/Model/IssuerRelationships.md)
 - [IssuerResponse](docs/Model/IssuerResponse.md)
 - [IssuersResponse](docs/Model/IssuersResponse.md)
 - [MerchantIndustriesResponse](docs/Model/MerchantIndustriesResponse.md)
 - [MerchantIndustry](docs/Model/MerchantIndustry.md)
 - [MerchantIndustryAttributes](docs/Model/MerchantIndustryAttributes.md)
 - [MerchantIndustryResponse](docs/Model/MerchantIndustryResponse.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationActive](docs/Model/OrganizationActive.md)
 - [OrganizationActiveLinks](docs/Model/OrganizationActiveLinks.md)
 - [OrganizationAddress](docs/Model/OrganizationAddress.md)
 - [OrganizationAttributes](docs/Model/OrganizationAttributes.md)
 - [OrganizationContacts](docs/Model/OrganizationContacts.md)
 - [OrganizationHq](docs/Model/OrganizationHq.md)
 - [OrganizationHqLinks](docs/Model/OrganizationHqLinks.md)
 - [OrganizationRelationships](docs/Model/OrganizationRelationships.md)
 - [OrganizationResponse](docs/Model/OrganizationResponse.md)
 - [OrganizationSocial](docs/Model/OrganizationSocial.md)
 - [OrganizationSource](docs/Model/OrganizationSource.md)
 - [OrganizationSourceLinks](docs/Model/OrganizationSourceLinks.md)
 - [OrganizationsResponse](docs/Model/OrganizationsResponse.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodAttributes](docs/Model/PaymentMethodAttributes.md)
 - [PaymentMethodProcessor](docs/Model/PaymentMethodProcessor.md)
 - [PaymentMethodProcessorData](docs/Model/PaymentMethodProcessorData.md)
 - [PaymentMethodProcessorLinks](docs/Model/PaymentMethodProcessorLinks.md)
 - [PaymentMethodRelationships](docs/Model/PaymentMethodRelationships.md)
 - [PaymentMethodResponse](docs/Model/PaymentMethodResponse.md)
 - [PaymentMethodsResponse](docs/Model/PaymentMethodsResponse.md)
 - [PaymentProcessor](docs/Model/PaymentProcessor.md)
 - [PaymentProcessorAttributes](docs/Model/PaymentProcessorAttributes.md)
 - [PaymentProcessorOrganization](docs/Model/PaymentProcessorOrganization.md)
 - [PaymentProcessorOrganizationData](docs/Model/PaymentProcessorOrganizationData.md)
 - [PaymentProcessorOrganizationLinks](docs/Model/PaymentProcessorOrganizationLinks.md)
 - [PaymentProcessorRelationships](docs/Model/PaymentProcessorRelationships.md)
 - [PaymentProcessorResponse](docs/Model/PaymentProcessorResponse.md)
 - [PaymentProcessorsResponse](docs/Model/PaymentProcessorsResponse.md)
 - [PaymentProvider](docs/Model/PaymentProvider.md)
 - [PaymentProviderAttributes](docs/Model/PaymentProviderAttributes.md)
 - [PaymentProviderOrganization](docs/Model/PaymentProviderOrganization.md)
 - [PaymentProviderOrganizationData](docs/Model/PaymentProviderOrganizationData.md)
 - [PaymentProviderOrganizationLinks](docs/Model/PaymentProviderOrganizationLinks.md)
 - [PaymentProviderRelationships](docs/Model/PaymentProviderRelationships.md)
 - [PaymentProviderResponse](docs/Model/PaymentProviderResponse.md)
 - [PaymentProvidersResponse](docs/Model/PaymentProvidersResponse.md)
 - [ResponseLinks](docs/Model/ResponseLinks.md)
 - [ResponseMeta](docs/Model/ResponseMeta.md)
 - [SelfLinks](docs/Model/SelfLinks.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




