# InboundShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | [optional] 
**seller_sku** | **string** | The seller SKU of the item. | 
**fulfillment_network_sku** | **string** | Amazon&#x27;s fulfillment network SKU of the item. | [optional] 
**quantity_shipped** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Quantity**](Quantity.md) |  | 
**quantity_received** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Quantity**](Quantity.md) |  | [optional] 
**quantity_in_case** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Quantity**](Quantity.md) |  | [optional] 
**release_date** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\DateStringType**](DateStringType.md) |  | [optional] 
**prep_details_list** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\PrepDetailsList**](PrepDetailsList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

