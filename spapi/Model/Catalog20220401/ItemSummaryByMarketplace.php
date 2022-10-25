<?php
/**
 * ItemSummaryByMarketplace
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
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * OpenAPI spec version: 2022-04-01
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Model\Catalog20220401;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * ItemSummaryByMarketplace Class Doc Comment
 *
 * @category Class
 * @description Summary details of an Amazon catalog item for the indicated Amazon marketplace.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemSummaryByMarketplace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemSummaryByMarketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'brand' => 'string',
'browse_classification' => '\Popsicle\Amazon\Model\Catalog20220401\ItemBrowseClassification',
'color' => 'string',
'item_classification' => 'string',
'item_name' => 'string',
'manufacturer' => 'string',
'model_number' => 'string',
'package_quantity' => 'int',
'part_number' => 'string',
'size' => 'string',
'style' => 'string',
'website_display_group' => 'string',
'website_display_group_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'brand' => null,
'browse_classification' => null,
'color' => null,
'item_classification' => null,
'item_name' => null,
'manufacturer' => null,
'model_number' => null,
'package_quantity' => null,
'part_number' => null,
'size' => null,
'style' => null,
'website_display_group' => null,
'website_display_group_name' => null    ];

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
'brand' => 'brand',
'browse_classification' => 'browseClassification',
'color' => 'color',
'item_classification' => 'itemClassification',
'item_name' => 'itemName',
'manufacturer' => 'manufacturer',
'model_number' => 'modelNumber',
'package_quantity' => 'packageQuantity',
'part_number' => 'partNumber',
'size' => 'size',
'style' => 'style',
'website_display_group' => 'websiteDisplayGroup',
'website_display_group_name' => 'websiteDisplayGroupName'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'brand' => 'setBrand',
'browse_classification' => 'setBrowseClassification',
'color' => 'setColor',
'item_classification' => 'setItemClassification',
'item_name' => 'setItemName',
'manufacturer' => 'setManufacturer',
'model_number' => 'setModelNumber',
'package_quantity' => 'setPackageQuantity',
'part_number' => 'setPartNumber',
'size' => 'setSize',
'style' => 'setStyle',
'website_display_group' => 'setWebsiteDisplayGroup',
'website_display_group_name' => 'setWebsiteDisplayGroupName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'brand' => 'getBrand',
'browse_classification' => 'getBrowseClassification',
'color' => 'getColor',
'item_classification' => 'getItemClassification',
'item_name' => 'getItemName',
'manufacturer' => 'getManufacturer',
'model_number' => 'getModelNumber',
'package_quantity' => 'getPackageQuantity',
'part_number' => 'getPartNumber',
'size' => 'getSize',
'style' => 'getStyle',
'website_display_group' => 'getWebsiteDisplayGroup',
'website_display_group_name' => 'getWebsiteDisplayGroupName'    ];

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

    const ITEM_CLASSIFICATION_BASE_PRODUCT = 'BASE_PRODUCT';
const ITEM_CLASSIFICATION_OTHER = 'OTHER';
const ITEM_CLASSIFICATION_PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
const ITEM_CLASSIFICATION_VARIATION_PARENT = 'VARIATION_PARENT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemClassificationAllowableValues()
    {
        return [
            self::ITEM_CLASSIFICATION_BASE_PRODUCT,
self::ITEM_CLASSIFICATION_OTHER,
self::ITEM_CLASSIFICATION_PRODUCT_BUNDLE,
self::ITEM_CLASSIFICATION_VARIATION_PARENT,        ];
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
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['browse_classification'] = isset($data['browse_classification']) ? $data['browse_classification'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['item_classification'] = isset($data['item_classification']) ? $data['item_classification'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['model_number'] = isset($data['model_number']) ? $data['model_number'] : null;
        $this->container['package_quantity'] = isset($data['package_quantity']) ? $data['package_quantity'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['website_display_group'] = isset($data['website_display_group']) ? $data['website_display_group'] : null;
        $this->container['website_display_group_name'] = isset($data['website_display_group_name']) ? $data['website_display_group_name'] : null;
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
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($this->container['item_classification']) && !in_array($this->container['item_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'item_classification', must be one of '%s'",
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
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Name of the brand associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets browse_classification
     *
     * @return \Popsicle\Amazon\Model\Catalog20220401\ItemBrowseClassification
     */
    public function getBrowseClassification()
    {
        return $this->container['browse_classification'];
    }

    /**
     * Sets browse_classification
     *
     * @param \Popsicle\Amazon\Model\Catalog20220401\ItemBrowseClassification $browse_classification browse_classification
     *
     * @return $this
     */
    public function setBrowseClassification($browse_classification)
    {
        $this->container['browse_classification'] = $browse_classification;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color Name of the color associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets item_classification
     *
     * @return string
     */
    public function getItemClassification()
    {
        return $this->container['item_classification'];
    }

    /**
     * Sets item_classification
     *
     * @param string $item_classification Classification type associated with the Amazon catalog item.
     *
     * @return $this
     */
    public function setItemClassification($item_classification)
    {
        $allowedValues = $this->getItemClassificationAllowableValues();
        if (!is_null($item_classification) && !in_array($item_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'item_classification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['item_classification'] = $item_classification;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string $item_name Name, or title, associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer Name of the manufacturer associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string $model_number Model number associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setModelNumber($model_number)
    {
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets package_quantity
     *
     * @return int
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param int $package_quantity Quantity of an Amazon catalog item in one package.
     *
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string $part_number Part number associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size Name of the size associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style Name of the style associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets website_display_group
     *
     * @return string
     */
    public function getWebsiteDisplayGroup()
    {
        return $this->container['website_display_group'];
    }

    /**
     * Sets website_display_group
     *
     * @param string $website_display_group Identifier of the website display group associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setWebsiteDisplayGroup($website_display_group)
    {
        $this->container['website_display_group'] = $website_display_group;

        return $this;
    }

    /**
     * Gets website_display_group_name
     *
     * @return string
     */
    public function getWebsiteDisplayGroupName()
    {
        return $this->container['website_display_group_name'];
    }

    /**
     * Sets website_display_group_name
     *
     * @param string $website_display_group_name Display name of the website display group associated with an Amazon catalog item.
     *
     * @return $this
     */
    public function setWebsiteDisplayGroupName($website_display_group_name)
    {
        $this->container['website_display_group_name'] = $website_display_group_name;

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