# PartneredLtlDataOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Contact**](Contact.md) |  | 
**box_count** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\UnsignedIntType**](UnsignedIntType.md) |  | 
**seller_freight_class** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\SellerFreightClass**](SellerFreightClass.md) |  | [optional] 
**freight_ready_date** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\DateStringType**](DateStringType.md) |  | 
**pallet_list** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\PalletList**](PalletList.md) |  | 
**total_weight** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Weight**](Weight.md) |  | 
**seller_declared_value** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Amount**](Amount.md) |  | [optional] 
**amazon_calculated_value** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Amount**](Amount.md) |  | [optional] 
**preview_pickup_date** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\DateStringType**](DateStringType.md) |  | 
**preview_delivery_date** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\DateStringType**](DateStringType.md) |  | 
**preview_freight_class** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\SellerFreightClass**](SellerFreightClass.md) |  | 
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. | 
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. | 
**partnered_estimate** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\PartneredEstimate**](PartneredEstimate.md) |  | [optional] 
**carrier_name** | **string** | The carrier for the inbound shipment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

