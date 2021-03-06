<?php
/**
 * ContainerItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\VendorShipments;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * ContainerItem Class Doc Comment
 *
 * @category Class
 * @description Carton/Pallet level details for the item.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContainerItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContainerItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_reference' => 'string',
'shipped_quantity' => '\Popsicle\Amazon\Model\VendorShipments\ItemQuantity',
'item_details' => '\Popsicle\Amazon\Model\VendorShipments\ItemDetails'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_reference' => null,
'shipped_quantity' => null,
'item_details' => null    ];

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
        'item_reference' => 'itemReference',
'shipped_quantity' => 'shippedQuantity',
'item_details' => 'itemDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_reference' => 'setItemReference',
'shipped_quantity' => 'setShippedQuantity',
'item_details' => 'setItemDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_reference' => 'getItemReference',
'shipped_quantity' => 'getShippedQuantity',
'item_details' => 'getItemDetails'    ];

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
        $this->container['item_reference'] = isset($data['item_reference']) ? $data['item_reference'] : null;
        $this->container['shipped_quantity'] = isset($data['shipped_quantity']) ? $data['shipped_quantity'] : null;
        $this->container['item_details'] = isset($data['item_details']) ? $data['item_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_reference'] === null) {
            $invalidProperties[] = "'item_reference' can't be null";
        }
        if ($this->container['shipped_quantity'] === null) {
            $invalidProperties[] = "'shipped_quantity' can't be null";
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
     * Gets item_reference
     *
     * @return string
     */
    public function getItemReference()
    {
        return $this->container['item_reference'];
    }

    /**
     * Sets item_reference
     *
     * @param string $item_reference The reference number for the item. Please provide the itemSequenceNumber from the 'items' segment to refer to that item's details here.
     *
     * @return $this
     */
    public function setItemReference($item_reference)
    {
        $this->container['item_reference'] = $item_reference;

        return $this;
    }

    /**
     * Gets shipped_quantity
     *
     * @return \Popsicle\Amazon\Model\VendorShipments\ItemQuantity
     */
    public function getShippedQuantity()
    {
        return $this->container['shipped_quantity'];
    }

    /**
     * Sets shipped_quantity
     *
     * @param \Popsicle\Amazon\Model\VendorShipments\ItemQuantity $shipped_quantity shipped_quantity
     *
     * @return $this
     */
    public function setShippedQuantity($shipped_quantity)
    {
        $this->container['shipped_quantity'] = $shipped_quantity;

        return $this;
    }

    /**
     * Gets item_details
     *
     * @return \Popsicle\Amazon\Model\VendorShipments\ItemDetails
     */
    public function getItemDetails()
    {
        return $this->container['item_details'];
    }

    /**
     * Sets item_details
     *
     * @param \Popsicle\Amazon\Model\VendorShipments\ItemDetails $item_details item_details
     *
     * @return $this
     */
    public function setItemDetails($item_details)
    {
        $this->container['item_details'] = $item_details;

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
