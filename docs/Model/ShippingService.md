# ShippingService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_service_name** | **string** | A plain text representation of a carrier&#x27;s shipping service. For example, \&quot;UPS Ground\&quot; or \&quot;FedEx Standard Overnight\&quot;. | 
**carrier_name** | **string** | The name of the carrier. | 
**shipping_service_id** | [**\Popsicle\Amazon\Model\MerchantFulfillment\ShippingServiceIdentifier**](ShippingServiceIdentifier.md) |  | 
**shipping_service_offer_id** | **string** | An Amazon-defined shipping service offer identifier. | 
**ship_date** | [**\Popsicle\Amazon\Model\MerchantFulfillment\Timestamp**](Timestamp.md) |  | 
**earliest_estimated_delivery_date** | [**\Popsicle\Amazon\Model\MerchantFulfillment\Timestamp**](Timestamp.md) |  | [optional] 
**latest_estimated_delivery_date** | [**\Popsicle\Amazon\Model\MerchantFulfillment\Timestamp**](Timestamp.md) |  | [optional] 
**rate** | [**\Popsicle\Amazon\Model\MerchantFulfillment\CurrencyAmount**](CurrencyAmount.md) |  | 
**shipping_service_options** | [**\Popsicle\Amazon\Model\MerchantFulfillment\ShippingServiceOptions**](ShippingServiceOptions.md) |  | 
**available_shipping_service_options** | [**\Popsicle\Amazon\Model\MerchantFulfillment\AvailableShippingServiceOptions**](AvailableShippingServiceOptions.md) |  | [optional] 
**available_label_formats** | [**\Popsicle\Amazon\Model\MerchantFulfillment\LabelFormatList**](LabelFormatList.md) |  | [optional] 
**available_format_options_for_label** | [**\Popsicle\Amazon\Model\MerchantFulfillment\AvailableFormatOptionsForLabelList**](AvailableFormatOptionsForLabelList.md) |  | [optional] 
**requires_additional_seller_inputs** | **bool** | When true, additional seller inputs are required. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

