# RetrochargeEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrocharge_event_type** | **string** | The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal | [optional] 
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**posted_date** | [**\Popsicle\Amazon\Model\Finances\\DateTime**](\DateTime.md) |  | [optional] 
**base_tax** | [**\Popsicle\Amazon\Model\Finances\Currency**](Currency.md) |  | [optional] 
**shipping_tax** | [**\Popsicle\Amazon\Model\Finances\Currency**](Currency.md) |  | [optional] 
**marketplace_name** | **string** | The name of the marketplace where the retrocharge event occurred. | [optional] 
**retrocharge_tax_withheld_list** | [**\Popsicle\Amazon\Model\Finances\TaxWithheldComponentList**](TaxWithheldComponentList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

