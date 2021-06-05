# Carton

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carton_identifiers** | [**\Popsicle\Amazon\Model\VendorShipments\ContainerIdentification[]**](ContainerIdentification.md) | A list of carton identifiers. | [optional] 
**carton_sequence_number** | **string** | Carton sequence number for the carton. The first carton will be 001, the second 002, and so on. This number is used as a reference to refer to this carton from the pallet level. | 
**dimensions** | [**\Popsicle\Amazon\Model\VendorShipments\Dimensions**](Dimensions.md) |  | [optional] 
**weight** | [**\Popsicle\Amazon\Model\VendorShipments\Weight**](Weight.md) |  | [optional] 
**tracking_number** | **string** | This is required to be provided for every carton in the small parcel shipments. | [optional] 
**items** | [**\Popsicle\Amazon\Model\VendorShipments\ContainerItem[]**](ContainerItem.md) | A list of container item details. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

