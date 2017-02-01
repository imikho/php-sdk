<?php
/**
 * CurrencyAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  OFT
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
 * CurrencyAttributes Class Doc Comment
 *
 * @category    Class */
 // @description Array of currencies attributes
/**
 * @package     OFT
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CurrencyAttributes implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CurrencyAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'currency_type' => 'string',
        'code_iso_alpha3' => 'string',
        'code_iso_numeric3' => 'int',
        'name' => 'string',
        'symbol' => 'string',
        'native_symbol' => 'string',
        'decimal_e' => 'string',
        'code_estandarts_alpha' => 'string',
        'code_json_alpha' => 'string',
        'category' => 'string',
        'created' => 'string',
        'icon' => 'string',
        'issuer' => 'string'
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
        'code' => 'code',
        'currency_type' => 'currency_type',
        'code_iso_alpha3' => 'code_iso_alpha3',
        'code_iso_numeric3' => 'code_iso_numeric3',
        'name' => 'name',
        'symbol' => 'symbol',
        'native_symbol' => 'native_symbol',
        'decimal_e' => 'decimal_e',
        'code_estandarts_alpha' => 'code_estandarts_alpha',
        'code_json_alpha' => 'code_json_alpha',
        'category' => 'category',
        'created' => 'created',
        'icon' => 'icon',
        'issuer' => 'issuer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'currency_type' => 'setCurrencyType',
        'code_iso_alpha3' => 'setCodeIsoAlpha3',
        'code_iso_numeric3' => 'setCodeIsoNumeric3',
        'name' => 'setName',
        'symbol' => 'setSymbol',
        'native_symbol' => 'setNativeSymbol',
        'decimal_e' => 'setDecimalE',
        'code_estandarts_alpha' => 'setCodeEstandartsAlpha',
        'code_json_alpha' => 'setCodeJsonAlpha',
        'category' => 'setCategory',
        'created' => 'setCreated',
        'icon' => 'setIcon',
        'issuer' => 'setIssuer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'currency_type' => 'getCurrencyType',
        'code_iso_alpha3' => 'getCodeIsoAlpha3',
        'code_iso_numeric3' => 'getCodeIsoNumeric3',
        'name' => 'getName',
        'symbol' => 'getSymbol',
        'native_symbol' => 'getNativeSymbol',
        'decimal_e' => 'getDecimalE',
        'code_estandarts_alpha' => 'getCodeEstandartsAlpha',
        'code_json_alpha' => 'getCodeJsonAlpha',
        'category' => 'getCategory',
        'created' => 'getCreated',
        'icon' => 'getIcon',
        'issuer' => 'getIssuer'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['currency_type'] = isset($data['currency_type']) ? $data['currency_type'] : null;
        $this->container['code_iso_alpha3'] = isset($data['code_iso_alpha3']) ? $data['code_iso_alpha3'] : null;
        $this->container['code_iso_numeric3'] = isset($data['code_iso_numeric3']) ? $data['code_iso_numeric3'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['native_symbol'] = isset($data['native_symbol']) ? $data['native_symbol'] : null;
        $this->container['decimal_e'] = isset($data['decimal_e']) ? $data['decimal_e'] : null;
        $this->container['code_estandarts_alpha'] = isset($data['code_estandarts_alpha']) ? $data['code_estandarts_alpha'] : null;
        $this->container['code_json_alpha'] = isset($data['code_json_alpha']) ? $data['code_json_alpha'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
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
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Currency system code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets currency_type
     * @return string
     */
    public function getCurrencyType()
    {
        return $this->container['currency_type'];
    }

    /**
     * Sets currency_type
     * @param string $currency_type Type of currencies [national, digital, virtual, metal, energy]
     * @return $this
     */
    public function setCurrencyType($currency_type)
    {
        $this->container['currency_type'] = $currency_type;

        return $this;
    }

    /**
     * Gets code_iso_alpha3
     * @return string
     */
    public function getCodeIsoAlpha3()
    {
        return $this->container['code_iso_alpha3'];
    }

    /**
     * Sets code_iso_alpha3
     * @param string $code_iso_alpha3 Currency ISO code
     * @return $this
     */
    public function setCodeIsoAlpha3($code_iso_alpha3)
    {
        $this->container['code_iso_alpha3'] = $code_iso_alpha3;

        return $this;
    }

    /**
     * Gets code_iso_numeric3
     * @return int
     */
    public function getCodeIsoNumeric3()
    {
        return $this->container['code_iso_numeric3'];
    }

    /**
     * Sets code_iso_numeric3
     * @param int $code_iso_numeric3 Currency ISO numeric code
     * @return $this
     */
    public function setCodeIsoNumeric3($code_iso_numeric3)
    {
        $this->container['code_iso_numeric3'] = $code_iso_numeric3;

        return $this;
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
     * @param string $name Currency description
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets symbol
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     * @param string $symbol Currency’s symbol. In general, only for nationals currencies
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets native_symbol
     * @return string
     */
    public function getNativeSymbol()
    {
        return $this->container['native_symbol'];
    }

    /**
     * Sets native_symbol
     * @param string $native_symbol Currency’s symbol. In general, only for nationals currencies
     * @return $this
     */
    public function setNativeSymbol($native_symbol)
    {
        $this->container['native_symbol'] = $native_symbol;

        return $this;
    }

    /**
     * Gets decimal_e
     * @return string
     */
    public function getDecimalE()
    {
        return $this->container['decimal_e'];
    }

    /**
     * Sets decimal_e
     * @param string $decimal_e Number of digits after the decimal separator
     * @return $this
     */
    public function setDecimalE($decimal_e)
    {
        $this->container['decimal_e'] = $decimal_e;

        return $this;
    }

    /**
     * Gets code_estandarts_alpha
     * @return string
     */
    public function getCodeEstandartsAlpha()
    {
        return $this->container['code_estandarts_alpha'];
    }

    /**
     * Sets code_estandarts_alpha
     * @param string $code_estandarts_alpha
     * @return $this
     */
    public function setCodeEstandartsAlpha($code_estandarts_alpha)
    {
        $this->container['code_estandarts_alpha'] = $code_estandarts_alpha;

        return $this;
    }

    /**
     * Gets code_json_alpha
     * @return string
     */
    public function getCodeJsonAlpha()
    {
        return $this->container['code_json_alpha'];
    }

    /**
     * Sets code_json_alpha
     * @param string $code_json_alpha
     * @return $this
     */
    public function setCodeJsonAlpha($code_json_alpha)
    {
        $this->container['code_json_alpha'] = $code_json_alpha;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category Currency category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created Created in system
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon Link to currency`s icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer Currency`s issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

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
            return json_encode(\OFT\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\OFT\ObjectSerializer::sanitizeForSerialization($this));
    }
}


