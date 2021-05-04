# OrderDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_date** | [**\DateTime**](\DateTime.md) | The date the purchase order was placed. Must be in ISO-8601 date/time format. | 
**purchase_order_changed_date** | [**\DateTime**](\DateTime.md) | The date when purchase order was last changed by Amazon after the order was placed. This date will be greater than &#x27;purchaseOrderDate&#x27;. This means the PO data was changed on that date and vendors are required to fulfill the  updated PO. The PO changes can be related to Item Quantity, Ship to Location, Ship Window etc. This field will not be present in orders that have not changed after creation. Must be in ISO-8601 date/time format. | [optional] 
**purchase_order_state_changed_date** | [**\DateTime**](\DateTime.md) | The date when current purchase order state was changed. Current purchase order state is available in the field &#x27;purchaseOrderState&#x27;. Must be in ISO-8601 date/time format. | 
**purchase_order_type** | **string** | Type of purchase order. | [optional] 
**import_details** | [**\Popsicle\Amazon\Model\ImportDetails**](ImportDetails.md) |  | [optional] 
**deal_code** | **string** | If requested by the recipient, this field will contain a promotional/deal number. The discount code line is optional. It is used to obtain a price discount on items on the order. | [optional] 
**payment_method** | **string** | Payment method used. | [optional] 
**buying_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | [optional] 
**selling_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | [optional] 
**ship_to_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | [optional] 
**bill_to_party** | [**\Popsicle\Amazon\Model\PartyIdentification**](PartyIdentification.md) |  | [optional] 
**ship_window** | [**\Popsicle\Amazon\Model\DateTimeInterval**](DateTimeInterval.md) |  | [optional] 
**delivery_window** | [**\Popsicle\Amazon\Model\DateTimeInterval**](DateTimeInterval.md) |  | [optional] 
**items** | [**\Popsicle\Amazon\Model\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

