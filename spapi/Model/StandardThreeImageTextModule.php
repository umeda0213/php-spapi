<?php
/**
 * StandardThreeImageTextModule
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
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
 * StandardThreeImageTextModule Class Doc Comment
 *
 * @category Class
 * @description Three standard images with text, presented across a single row.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardThreeImageTextModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandardThreeImageTextModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'headline' => '\Popsicle\Amazon\Model\TextComponent',
'block1' => '\Popsicle\Amazon\Model\StandardImageTextBlock',
'block2' => '\Popsicle\Amazon\Model\StandardImageTextBlock',
'block3' => '\Popsicle\Amazon\Model\StandardImageTextBlock'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'headline' => null,
'block1' => null,
'block2' => null,
'block3' => null    ];

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
        'headline' => 'headline',
'block1' => 'block1',
'block2' => 'block2',
'block3' => 'block3'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
'block1' => 'setBlock1',
'block2' => 'setBlock2',
'block3' => 'setBlock3'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
'block1' => 'getBlock1',
'block2' => 'getBlock2',
'block3' => 'getBlock3'    ];

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
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['block1'] = isset($data['block1']) ? $data['block1'] : null;
        $this->container['block2'] = isset($data['block2']) ? $data['block2'] : null;
        $this->container['block3'] = isset($data['block3']) ? $data['block3'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets headline
     *
     * @return \Popsicle\Amazon\Model\TextComponent
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \Popsicle\Amazon\Model\TextComponent $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets block1
     *
     * @return \Popsicle\Amazon\Model\StandardImageTextBlock
     */
    public function getBlock1()
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1
     *
     * @param \Popsicle\Amazon\Model\StandardImageTextBlock $block1 block1
     *
     * @return $this
     */
    public function setBlock1($block1)
    {
        $this->container['block1'] = $block1;

        return $this;
    }

    /**
     * Gets block2
     *
     * @return \Popsicle\Amazon\Model\StandardImageTextBlock
     */
    public function getBlock2()
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2
     *
     * @param \Popsicle\Amazon\Model\StandardImageTextBlock $block2 block2
     *
     * @return $this
     */
    public function setBlock2($block2)
    {
        $this->container['block2'] = $block2;

        return $this;
    }

    /**
     * Gets block3
     *
     * @return \Popsicle\Amazon\Model\StandardImageTextBlock
     */
    public function getBlock3()
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3
     *
     * @param \Popsicle\Amazon\Model\StandardImageTextBlock $block3 block3
     *
     * @return $this
     */
    public function setBlock3($block3)
    {
        $this->container['block3'] = $block3;

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
