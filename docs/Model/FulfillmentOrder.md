# FulfillmentOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. | 
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. | 
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. | 
**displayable_order_date** | [**\Popsicle\Amazon\Model\Timestamp**](Timestamp.md) |  | 
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. | 
**shipping_speed_category** | [**\Popsicle\Amazon\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**delivery_window** | [**\Popsicle\Amazon\Model\DeliveryWindow**](DeliveryWindow.md) |  | [optional] 
**destination_address** | [**\Popsicle\Amazon\Model\Address**](Address.md) |  | 
**fulfillment_action** | [**\Popsicle\Amazon\Model\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\Popsicle\Amazon\Model\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**cod_settings** | [**\Popsicle\Amazon\Model\CODSettings**](CODSettings.md) |  | [optional] 
**received_date** | [**\Popsicle\Amazon\Model\Timestamp**](Timestamp.md) |  | 
**fulfillment_order_status** | [**\Popsicle\Amazon\Model\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  | 
**status_updated_date** | [**\Popsicle\Amazon\Model\Timestamp**](Timestamp.md) |  | 
**notification_emails** | [**\Popsicle\Amazon\Model\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 
**feature_constraints** | [**\Popsicle\Amazon\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

