# GetFulfillmentPreviewRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional] 
**address** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Address**](Address.md) |  | 
**items** | [**\Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewItemList**](GetFulfillmentPreviewItemList.md) |  | 
**shipping_speed_categories** | [**\Popsicle\Amazon\Model\FulfillmentInbound\ShippingSpeedCategoryList**](ShippingSpeedCategoryList.md) |  | [optional] 
**include_cod_fulfillment_preview** | **bool** | Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).  Possible values:  * true - Returns all fulfillment order previews (both for COD and not for COD). * false - Returns only fulfillment order previews that are not for COD. | [optional] 
**include_delivery_windows** | **bool** | Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories &#x3D; ScheduledDelivery. | [optional] 
**feature_constraints** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

