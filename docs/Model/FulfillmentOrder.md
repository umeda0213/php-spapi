# FulfillmentOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. | 
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. | 
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. | 
**displayable_order_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | 
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. | 
**shipping_speed_category** | [**\Popsicle\Amazon\Model\FulfillmentInbound\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**delivery_window** | [**\Popsicle\Amazon\Model\FulfillmentInbound\DeliveryWindow**](DeliveryWindow.md) |  | [optional] 
**destination_address** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Address**](Address.md) |  | 
**fulfillment_action** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**cod_settings** | [**\Popsicle\Amazon\Model\FulfillmentInbound\CODSettings**](CODSettings.md) |  | [optional] 
**received_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | 
**fulfillment_order_status** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  | 
**status_updated_date** | [**\Popsicle\Amazon\Model\FulfillmentInbound\Timestamp**](Timestamp.md) |  | 
**notification_emails** | [**\Popsicle\Amazon\Model\FulfillmentInbound\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 
**feature_constraints** | [**\Popsicle\Amazon\Model\FulfillmentInbound\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

