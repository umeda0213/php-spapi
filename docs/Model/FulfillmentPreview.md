# FulfillmentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\Popsicle\Amazon\Model\FulfillmentInbound\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**scheduled_delivery_info** | [**\Popsicle\Amazon\Model\FulfillmentInbound\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional] 
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. | 
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). | 
**estimated_shipping_weight** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Weight**](Weight.md) |  | [optional] 
**estimated_fees** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FeeList**](FeeList.md) |  | [optional] 
**fulfillment_preview_shipments** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentPreviewShipmentList**](FulfillmentPreviewShipmentList.md) |  | [optional] 
**unfulfillable_preview_items** | [**\Popsicle\Amazon\Model\FulfillmentInbound\UnfulfillablePreviewItemList**](UnfulfillablePreviewItemList.md) |  | [optional] 
**order_unfulfillable_reasons** | [**\Popsicle\Amazon\Model\FulfillmentInbound\StringList**](StringList.md) |  | [optional] 
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | 
**feature_constraints** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

