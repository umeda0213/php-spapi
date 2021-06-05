# InboundShipmentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The shipment identifier submitted in the request. | [optional] 
**shipment_name** | **string** | The name for the inbound shipment. | [optional] 
**ship_from_address** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\Address**](Address.md) |  | 
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | [optional] 
**shipment_status** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\ShipmentStatus**](ShipmentStatus.md) |  | [optional] 
**label_prep_type** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\LabelPrepType**](LabelPrepType.md) |  | [optional] 
**are_cases_required** | **bool** | Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired &#x3D; true for an inbound shipment, all items in the inbound shipment must be case packed. | 
**confirmed_need_by_date** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\DateStringType**](DateStringType.md) |  | [optional] 
**box_contents_source** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\BoxContentsSource**](BoxContentsSource.md) |  | [optional] 
**estimated_box_contents_fee** | [**\Popsicle\Amazon\Model\FulfillmentInboundV0\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

