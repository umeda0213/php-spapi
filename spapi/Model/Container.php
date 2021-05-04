<?php
/**
 * Container
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace Popsicle\Amazon\Model;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * Container Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Container implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Container';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_type' => 'string',
'container_identifier' => 'string',
'tracking_number' => 'string',
'manifest_id' => 'string',
'manifest_date' => 'string',
'ship_method' => 'string',
'scac_code' => 'string',
'carrier' => 'string',
'container_sequence_number' => 'int',
'dimensions' => '\Popsicle\Amazon\Model\Dimensions',
'weight' => '\Popsicle\Amazon\Model\Weight',
'packed_items' => '\Popsicle\Amazon\Model\PackedItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'container_type' => null,
'container_identifier' => null,
'tracking_number' => null,
'manifest_id' => null,
'manifest_date' => null,
'ship_method' => null,
'scac_code' => null,
'carrier' => null,
'container_sequence_number' => null,
'dimensions' => null,
'weight' => null,
'packed_items' => null    ];

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
        'container_type' => 'containerType',
'container_identifier' => 'containerIdentifier',
'tracking_number' => 'trackingNumber',
'manifest_id' => 'manifestId',
'manifest_date' => 'manifestDate',
'ship_method' => 'shipMethod',
'scac_code' => 'scacCode',
'carrier' => 'carrier',
'container_sequence_number' => 'containerSequenceNumber',
'dimensions' => 'dimensions',
'weight' => 'weight',
'packed_items' => 'packedItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_type' => 'setContainerType',
'container_identifier' => 'setContainerIdentifier',
'tracking_number' => 'setTrackingNumber',
'manifest_id' => 'setManifestId',
'manifest_date' => 'setManifestDate',
'ship_method' => 'setShipMethod',
'scac_code' => 'setScacCode',
'carrier' => 'setCarrier',
'container_sequence_number' => 'setContainerSequenceNumber',
'dimensions' => 'setDimensions',
'weight' => 'setWeight',
'packed_items' => 'setPackedItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
'container_identifier' => 'getContainerIdentifier',
'tracking_number' => 'getTrackingNumber',
'manifest_id' => 'getManifestId',
'manifest_date' => 'getManifestDate',
'ship_method' => 'getShipMethod',
'scac_code' => 'getScacCode',
'carrier' => 'getCarrier',
'container_sequence_number' => 'getContainerSequenceNumber',
'dimensions' => 'getDimensions',
'weight' => 'getWeight',
'packed_items' => 'getPackedItems'    ];

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

    const CONTAINER_TYPE_CARTON = 'carton';
const CONTAINER_TYPE_PALLET = 'pallet';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        return [
            self::CONTAINER_TYPE_CARTON,
self::CONTAINER_TYPE_PALLET,        ];
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
        $this->container['container_type'] = isset($data['container_type']) ? $data['container_type'] : null;
        $this->container['container_identifier'] = isset($data['container_identifier']) ? $data['container_identifier'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['manifest_id'] = isset($data['manifest_id']) ? $data['manifest_id'] : null;
        $this->container['manifest_date'] = isset($data['manifest_date']) ? $data['manifest_date'] : null;
        $this->container['ship_method'] = isset($data['ship_method']) ? $data['ship_method'] : null;
        $this->container['scac_code'] = isset($data['scac_code']) ? $data['scac_code'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['container_sequence_number'] = isset($data['container_sequence_number']) ? $data['container_sequence_number'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['packed_items'] = isset($data['packed_items']) ? $data['packed_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['container_type'] === null) {
            $invalidProperties[] = "'container_type' can't be null";
        }
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['container_type']) && !in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'container_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['container_identifier'] === null) {
            $invalidProperties[] = "'container_identifier' can't be null";
        }
        if ($this->container['packed_items'] === null) {
            $invalidProperties[] = "'packed_items' can't be null";
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
     * Gets container_type
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string $container_type The type of container.
     *
     * @return $this
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'container_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_identifier
     *
     * @return string
     */
    public function getContainerIdentifier()
    {
        return $this->container['container_identifier'];
    }

    /**
     * Sets container_identifier
     *
     * @param string $container_identifier The container identifier.
     *
     * @return $this
     */
    public function setContainerIdentifier($container_identifier)
    {
        $this->container['container_identifier'] = $container_identifier;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number The tracking number.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets manifest_id
     *
     * @return string
     */
    public function getManifestId()
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id
     *
     * @param string $manifest_id The manifest identifier.
     *
     * @return $this
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }

    /**
     * Gets manifest_date
     *
     * @return string
     */
    public function getManifestDate()
    {
        return $this->container['manifest_date'];
    }

    /**
     * Sets manifest_date
     *
     * @param string $manifest_date The date of the manifest.
     *
     * @return $this
     */
    public function setManifestDate($manifest_date)
    {
        $this->container['manifest_date'] = $manifest_date;

        return $this;
    }

    /**
     * Gets ship_method
     *
     * @return string
     */
    public function getShipMethod()
    {
        return $this->container['ship_method'];
    }

    /**
     * Sets ship_method
     *
     * @param string $ship_method The shipment method.
     *
     * @return $this
     */
    public function setShipMethod($ship_method)
    {
        $this->container['ship_method'] = $ship_method;

        return $this;
    }

    /**
     * Gets scac_code
     *
     * @return string
     */
    public function getScacCode()
    {
        return $this->container['scac_code'];
    }

    /**
     * Sets scac_code
     *
     * @param string $scac_code SCAC code required for NA VOC vendors only.
     *
     * @return $this
     */
    public function setScacCode($scac_code)
    {
        $this->container['scac_code'] = $scac_code;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier Carrier required for EU VOC vendors only.
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets container_sequence_number
     *
     * @return int
     */
    public function getContainerSequenceNumber()
    {
        return $this->container['container_sequence_number'];
    }

    /**
     * Sets container_sequence_number
     *
     * @param int $container_sequence_number An integer that must be submitted for multi-box shipments only, where one item may come in separate packages.
     *
     * @return $this
     */
    public function setContainerSequenceNumber($container_sequence_number)
    {
        $this->container['container_sequence_number'] = $container_sequence_number;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \Popsicle\Amazon\Model\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \Popsicle\Amazon\Model\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Popsicle\Amazon\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Popsicle\Amazon\Model\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets packed_items
     *
     * @return \Popsicle\Amazon\Model\PackedItem[]
     */
    public function getPackedItems()
    {
        return $this->container['packed_items'];
    }

    /**
     * Sets packed_items
     *
     * @param \Popsicle\Amazon\Model\PackedItem[] $packed_items A list of packed items.
     *
     * @return $this
     */
    public function setPackedItems($packed_items)
    {
        $this->container['packed_items'] = $packed_items;

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
