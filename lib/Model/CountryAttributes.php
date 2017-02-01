<?php
/**
 * CountryAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CountryAttributes Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CountryAttributes implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CountryAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'code_alpha3' => 'string',
        'capital' => 'string',
        'native_name' => 'string',
        'region' => 'string',
        'sub_region' => 'string',
        'area' => 'string',
        'population' => 'string',
        'top_level_domains' => 'string[]',
        'timezones' => 'string[]',
        'calling_codes' => 'int[]',
        'languages' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'code_alpha3' => 'code_alpha3',
        'capital' => 'capital',
        'native_name' => 'native_name',
        'region' => 'region',
        'sub_region' => 'sub_region',
        'area' => 'area',
        'population' => 'population',
        'top_level_domains' => 'top_level_domains',
        'timezones' => 'timezones',
        'calling_codes' => 'calling_codes',
        'languages' => 'languages'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'code_alpha3' => 'setCodeAlpha3',
        'capital' => 'setCapital',
        'native_name' => 'setNativeName',
        'region' => 'setRegion',
        'sub_region' => 'setSubRegion',
        'area' => 'setArea',
        'population' => 'setPopulation',
        'top_level_domains' => 'setTopLevelDomains',
        'timezones' => 'setTimezones',
        'calling_codes' => 'setCallingCodes',
        'languages' => 'setLanguages'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'code_alpha3' => 'getCodeAlpha3',
        'capital' => 'getCapital',
        'native_name' => 'getNativeName',
        'region' => 'getRegion',
        'sub_region' => 'getSubRegion',
        'area' => 'getArea',
        'population' => 'getPopulation',
        'top_level_domains' => 'getTopLevelDomains',
        'timezones' => 'getTimezones',
        'calling_codes' => 'getCallingCodes',
        'languages' => 'getLanguages'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code_alpha3'] = isset($data['code_alpha3']) ? $data['code_alpha3'] : null;
        $this->container['capital'] = isset($data['capital']) ? $data['capital'] : null;
        $this->container['native_name'] = isset($data['native_name']) ? $data['native_name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sub_region'] = isset($data['sub_region']) ? $data['sub_region'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['population'] = isset($data['population']) ? $data['population'] : null;
        $this->container['top_level_domains'] = isset($data['top_level_domains']) ? $data['top_level_domains'] : null;
        $this->container['timezones'] = isset($data['timezones']) ? $data['timezones'] : null;
        $this->container['calling_codes'] = isset($data['calling_codes']) ? $data['calling_codes'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Country`s name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code_alpha3
     * @return string
     */
    public function getCodeAlpha3()
    {
        return $this->container['code_alpha3'];
    }

    /**
     * Sets code_alpha3
     * @param string $code_alpha3 Country`s ISO alpha3 code
     * @return $this
     */
    public function setCodeAlpha3($code_alpha3)
    {
        $this->container['code_alpha3'] = $code_alpha3;

        return $this;
    }

    /**
     * Gets capital
     * @return string
     */
    public function getCapital()
    {
        return $this->container['capital'];
    }

    /**
     * Sets capital
     * @param string $capital Country’s capital
     * @return $this
     */
    public function setCapital($capital)
    {
        $this->container['capital'] = $capital;

        return $this;
    }

    /**
     * Gets native_name
     * @return string
     */
    public function getNativeName()
    {
        return $this->container['native_name'];
    }

    /**
     * Sets native_name
     * @param string $native_name Country`s nativ name
     * @return $this
     */
    public function setNativeName($native_name)
    {
        $this->container['native_name'] = $native_name;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Country’s region:<br>      * Africa   * Americas   * Asia   * Europe   * Oceania   * Polar
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets sub_region
     * @return string
     */
    public function getSubRegion()
    {
        return $this->container['sub_region'];
    }

    /**
     * Sets sub_region
     * @param string $sub_region Country’s sub region:<br>    * Northern Africa   * Southern Africa   * Western Africa   * Eastern Africa   * Middle Africa   * Northern America   * South America   * Central America   * Caribbean   * Southern Asia   * Western Asia   * Eastern Asia   * South-Eastern Asia   * Central Asia   * Northern Europe   * Southern Europe   * Western Europe   * Eastern Europe   * Polynesia   * Australia and New Zealand   * Micronesia   * Melanesia
     * @return $this
     */
    public function setSubRegion($sub_region)
    {
        $this->container['sub_region'] = $sub_region;

        return $this;
    }

    /**
     * Gets area
     * @return string
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     * @param string $area Country’s area (sq km)
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets population
     * @return string
     */
    public function getPopulation()
    {
        return $this->container['population'];
    }

    /**
     * Sets population
     * @param string $population Country’s population
     * @return $this
     */
    public function setPopulation($population)
    {
        $this->container['population'] = $population;

        return $this;
    }

    /**
     * Gets top_level_domains
     * @return string[]
     */
    public function getTopLevelDomains()
    {
        return $this->container['top_level_domains'];
    }

    /**
     * Sets top_level_domains
     * @param string[] $top_level_domains Array of country`s domains
     * @return $this
     */
    public function setTopLevelDomains($top_level_domains)
    {
        $this->container['top_level_domains'] = $top_level_domains;

        return $this;
    }

    /**
     * Gets timezones
     * @return string[]
     */
    public function getTimezones()
    {
        return $this->container['timezones'];
    }

    /**
     * Sets timezones
     * @param string[] $timezones Array of country`s timezones (UTC)
     * @return $this
     */
    public function setTimezones($timezones)
    {
        $this->container['timezones'] = $timezones;

        return $this;
    }

    /**
     * Gets calling_codes
     * @return int[]
     */
    public function getCallingCodes()
    {
        return $this->container['calling_codes'];
    }

    /**
     * Sets calling_codes
     * @param int[] $calling_codes Array of country`s phone codes
     * @return $this
     */
    public function setCallingCodes($calling_codes)
    {
        $this->container['calling_codes'] = $calling_codes;

        return $this;
    }

    /**
     * Gets languages
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     * @param string[] $languages Array of country`s languages
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


