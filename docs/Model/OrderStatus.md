# OrderStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The buyer&#x27;s purchase order number for this order. Formatting Notes: 8-character alpha-numeric code. | 
**purchase_order_status** | **string** | The status of the buyer&#x27;s purchase order for this order. | 
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. | 
**last_updated_date** | [**\DateTime**](\DateTime.md) | The date when the purchase order was last updated. Must be in ISO-8601 date/time format. | [optional] 
**selling_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | 
**ship_to_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | 
**item_status** | [**\Popsicle\Amazon\Model\ItemStatus**](ItemStatus.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

