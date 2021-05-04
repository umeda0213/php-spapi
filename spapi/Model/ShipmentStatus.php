<?php
/**
 * ShipmentStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
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
use \Popsicle\Amazon\ObjectSerializer;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment status.
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const PURCHASED = 'Purchased';
const REFUND_PENDING = 'RefundPending';
const REFUND_REJECTED = 'RefundRejected';
const REFUND_APPLIED = 'RefundApplied';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURCHASED,
self::REFUND_PENDING,
self::REFUND_REJECTED,
self::REFUND_APPLIED,        ];
    }
}
