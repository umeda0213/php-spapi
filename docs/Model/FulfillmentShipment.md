# FulfillmentShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_shipment_id** | **string** | A shipment identifier assigned by Amazon. | 
**fulfillment_center_id** | **string** | An identifier for the fulfillment center that the shipment will be sent from. | 
**fulfillment_shipment_status** | **string** | The current status of the shipment. | 
**shipping_date** | [**\Popsicle\Amazon\Model\Timestamp**](Timestamp.md) |  | [optional] 
**estimated_arrival_date** | [**\Popsicle\Amazon\Model\Timestamp**](Timestamp.md) |  | [optional] 
**shipping_notes** | **string[]** | Provides additional insight into shipment timeline. Primairly used to communicate that actual delivery dates aren&#x27;t available. | [optional] 
**fulfillment_shipment_item** | [**\Popsicle\Amazon\Model\FulfillmentShipmentItemList**](FulfillmentShipmentItemList.md) |  | 
**fulfillment_shipment_package** | [**\Popsicle\Amazon\Model\FulfillmentShipmentPackageList**](FulfillmentShipmentPackageList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

