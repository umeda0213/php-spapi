# ItemSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_results** | **int** | The estimated total number of products matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).  Note: The maximum number of items (ASINs) that can be returned and paged through is 1000. | 
**pagination** | [**\Popsicle\Amazon\Model\Catalog\Pagination**](Pagination.md) |  | 
**refinements** | [**\Popsicle\Amazon\Model\Catalog\Refinements**](Refinements.md) |  | 
**items** | [**\Popsicle\Amazon\Model\Catalog\Item[]**](Item.md) | A list of items from the Amazon catalog. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

