<?php
/**
 * CreditNoteDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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

namespace Popsicle\Amazon\Model\VendorInvoices;

use \ArrayAccess;
use \Popsicle\Amazon\ObjectSerializer;

/**
 * CreditNoteDetails Class Doc Comment
 *
 * @category Class
 * @description References required in order to process a credit note. This information is required only if InvoiceType is CreditNote.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditNoteDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditNoteDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference_invoice_number' => 'string',
'debit_note_number' => 'string',
'returns_reference_number' => 'string',
'goods_return_date' => '\DateTime',
'rma_id' => 'string',
'coop_reference_number' => 'string',
'consignors_reference_number' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference_invoice_number' => null,
'debit_note_number' => null,
'returns_reference_number' => null,
'goods_return_date' => null,
'rma_id' => null,
'coop_reference_number' => null,
'consignors_reference_number' => null    ];

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
        'reference_invoice_number' => 'referenceInvoiceNumber',
'debit_note_number' => 'debitNoteNumber',
'returns_reference_number' => 'returnsReferenceNumber',
'goods_return_date' => 'goodsReturnDate',
'rma_id' => 'rmaId',
'coop_reference_number' => 'coopReferenceNumber',
'consignors_reference_number' => 'consignorsReferenceNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_invoice_number' => 'setReferenceInvoiceNumber',
'debit_note_number' => 'setDebitNoteNumber',
'returns_reference_number' => 'setReturnsReferenceNumber',
'goods_return_date' => 'setGoodsReturnDate',
'rma_id' => 'setRmaId',
'coop_reference_number' => 'setCoopReferenceNumber',
'consignors_reference_number' => 'setConsignorsReferenceNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_invoice_number' => 'getReferenceInvoiceNumber',
'debit_note_number' => 'getDebitNoteNumber',
'returns_reference_number' => 'getReturnsReferenceNumber',
'goods_return_date' => 'getGoodsReturnDate',
'rma_id' => 'getRmaId',
'coop_reference_number' => 'getCoopReferenceNumber',
'consignors_reference_number' => 'getConsignorsReferenceNumber'    ];

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
        $this->container['reference_invoice_number'] = isset($data['reference_invoice_number']) ? $data['reference_invoice_number'] : null;
        $this->container['debit_note_number'] = isset($data['debit_note_number']) ? $data['debit_note_number'] : null;
        $this->container['returns_reference_number'] = isset($data['returns_reference_number']) ? $data['returns_reference_number'] : null;
        $this->container['goods_return_date'] = isset($data['goods_return_date']) ? $data['goods_return_date'] : null;
        $this->container['rma_id'] = isset($data['rma_id']) ? $data['rma_id'] : null;
        $this->container['coop_reference_number'] = isset($data['coop_reference_number']) ? $data['coop_reference_number'] : null;
        $this->container['consignors_reference_number'] = isset($data['consignors_reference_number']) ? $data['consignors_reference_number'] : null;
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
     * Gets reference_invoice_number
     *
     * @return string
     */
    public function getReferenceInvoiceNumber()
    {
        return $this->container['reference_invoice_number'];
    }

    /**
     * Sets reference_invoice_number
     *
     * @param string $reference_invoice_number Original Invoice Number when sending a credit note relating to an existing invoice. One Invoice only to be processed per Credit Note. This is mandatory for AP Credit Notes.
     *
     * @return $this
     */
    public function setReferenceInvoiceNumber($reference_invoice_number)
    {
        $this->container['reference_invoice_number'] = $reference_invoice_number;

        return $this;
    }

    /**
     * Gets debit_note_number
     *
     * @return string
     */
    public function getDebitNoteNumber()
    {
        return $this->container['debit_note_number'];
    }

    /**
     * Sets debit_note_number
     *
     * @param string $debit_note_number Debit Note Number as generated by Amazon. Recommended for Returns and COOP Credit Notes.
     *
     * @return $this
     */
    public function setDebitNoteNumber($debit_note_number)
    {
        $this->container['debit_note_number'] = $debit_note_number;

        return $this;
    }

    /**
     * Gets returns_reference_number
     *
     * @return string
     */
    public function getReturnsReferenceNumber()
    {
        return $this->container['returns_reference_number'];
    }

    /**
     * Sets returns_reference_number
     *
     * @param string $returns_reference_number Identifies the Returns Notice Number. Mandatory for all Returns Credit Notes.
     *
     * @return $this
     */
    public function setReturnsReferenceNumber($returns_reference_number)
    {
        $this->container['returns_reference_number'] = $returns_reference_number;

        return $this;
    }

    /**
     * Gets goods_return_date
     *
     * @return \DateTime
     */
    public function getGoodsReturnDate()
    {
        return $this->container['goods_return_date'];
    }

    /**
     * Sets goods_return_date
     *
     * @param \DateTime $goods_return_date goods_return_date
     *
     * @return $this
     */
    public function setGoodsReturnDate($goods_return_date)
    {
        $this->container['goods_return_date'] = $goods_return_date;

        return $this;
    }

    /**
     * Gets rma_id
     *
     * @return string
     */
    public function getRmaId()
    {
        return $this->container['rma_id'];
    }

    /**
     * Sets rma_id
     *
     * @param string $rma_id Identifies the Returned Merchandise Authorization ID, if generated.
     *
     * @return $this
     */
    public function setRmaId($rma_id)
    {
        $this->container['rma_id'] = $rma_id;

        return $this;
    }

    /**
     * Gets coop_reference_number
     *
     * @return string
     */
    public function getCoopReferenceNumber()
    {
        return $this->container['coop_reference_number'];
    }

    /**
     * Sets coop_reference_number
     *
     * @param string $coop_reference_number Identifies the COOP reference used for COOP agreement. Failure to provide the COOP reference number or the Debit Note number may lead to a rejection of the Credit Note.
     *
     * @return $this
     */
    public function setCoopReferenceNumber($coop_reference_number)
    {
        $this->container['coop_reference_number'] = $coop_reference_number;

        return $this;
    }

    /**
     * Gets consignors_reference_number
     *
     * @return string
     */
    public function getConsignorsReferenceNumber()
    {
        return $this->container['consignors_reference_number'];
    }

    /**
     * Sets consignors_reference_number
     *
     * @param string $consignors_reference_number Identifies the consignor reference number (VRET number), if generated by Amazon.
     *
     * @return $this
     */
    public function setConsignorsReferenceNumber($consignors_reference_number)
    {
        $this->container['consignors_reference_number'] = $consignors_reference_number;

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
