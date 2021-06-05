# ShipmentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**seller_order_id** | **string** | A seller-defined identifier for an order. | [optional] 
**marketplace_name** | **string** | The name of the marketplace where the event occurred. | [optional] 
**order_charge_list** | [**\Popsicle\Amazon\Model\Finances\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**order_charge_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\ChargeComponentList**](ChargeComponentList.md) |  | [optional] 
**shipment_fee_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**shipment_fee_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**order_fee_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**order_fee_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\FeeComponentList**](FeeComponentList.md) |  | [optional] 
**direct_payment_list** | [**\Popsicle\Amazon\Model\Finances\DirectPaymentList**](DirectPaymentList.md) |  | [optional] 
**posted_date** | [**\Popsicle\Amazon\Model\Finances\\DateTime**](\DateTime.md) |  | [optional] 
**shipment_item_list** | [**\Popsicle\Amazon\Model\Finances\ShipmentItemList**](ShipmentItemList.md) |  | [optional] 
**shipment_item_adjustment_list** | [**\Popsicle\Amazon\Model\Finances\ShipmentItemList**](ShipmentItemList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

