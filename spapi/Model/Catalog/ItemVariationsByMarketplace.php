<?php
/**
 * ItemVariationsByMarketplace
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.
 *
 * OpenAPI spec version: 2020-12-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\Catalog;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * ItemVariationsByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Variation details for the Amazon catalog item for the indicated Amazon marketplace.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemVariationsByMarketplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemVariationsByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'asins' => 'string[]',
'variation_type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'asins' => null,
'variation_type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
'asins' => 'asins',
'variation_type' => 'variationType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'asins' => 'setAsins',
'variation_type' => 'setVariationType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'asins' => 'getAsins',
'variation_type' => 'getVariationType'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const VARIATION_TYPE_PARENT = 'PARENT';
const VARIATION_TYPE_CHILD = 'CHILD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVariationTypeAllowableValues()
    {
        return [
            self::VARIATION_TYPE_PARENT,
self::VARIATION_TYPE_CHILD,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['asins'] = isset($data['asins']) ? $data['asins'] : null;
        $this->container['variation_type'] = isset($data['variation_type']) ? $data['variation_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['asins'] === null) {
            $invalidProperties[] = "'asins' can't be null";
        }
        if ($this->container['variation_type'] === null) {
            $invalidProperties[] = "'variation_type' can't be null";
        }
        $allowedValues = $this->getVariationTypeAllowableValues();
        if (!is_null($this->container['variation_type']) && !in_array($this->container['variation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'variation_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id Amazon marketplace identifier.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets asins
     *
     * @return string[]
     */
    public function getAsins()
    {
        return $this->container['asins'];
    }

    /**
     * Sets asins
     *
     * @param string[] $asins Identifiers (ASINs) of the related items.
     *
     * @return $this
     */
    public function setAsins($asins)
    {
        $this->container['asins'] = $asins;

        return $this;
    }

    /**
     * Gets variation_type
     *
     * @return string
     */
    public function getVariationType()
    {
        return $this->container['variation_type'];
    }

    /**
     * Sets variation_type
     *
     * @param string $variation_type Type of variation relationship of the Amazon catalog item in the request to the related item(s): \"PARENT\" or \"CHILD\".
     *
     * @return $this
     */
    public function setVariationType($variation_type)
    {
        $allowedValues = $this->getVariationTypeAllowableValues();
        if (!in_array($variation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'variation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['variation_type'] = $variation_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
