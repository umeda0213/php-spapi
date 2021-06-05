# FulfillmentOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | 
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier submitted with a call to the createFulfillmentOrder operation. | 
**quantity** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Quantity**](Quantity.md) |  | 
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional] 
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**fulfillment_network_sku** | **string** | Amazon&#x27;s fulfillment network SKU of the item. | [optional] 
**order_item_disposition** | **string** | Indicates whether the item is sellable or unsellable. | [optional] 
**cancelled_quantity** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Quantity**](Quantity.md) |  | 
**unfulfillable_quantity** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Quantity**](Quantity.md) |  | 
**estimated_ship_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | [optional] 
**estimated_arrival_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | [optional] 
**per_unit_price** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Money**](Money.md) |  | [optional] 
**per_unit_tax** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Money**](Money.md) |  | [optional] 
**per_unit_declared_value** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Money**](Money.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

