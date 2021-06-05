# Popsicle\Amazon\FbaOutboundApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFulfillmentOrder**](FbaOutboundApi.md#cancelfulfillmentorder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel | 
[**createFulfillmentOrder**](FbaOutboundApi.md#createfulfillmentorder) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders | 
[**createFulfillmentReturn**](FbaOutboundApi.md#createfulfillmentreturn) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return | 
[**getFeatureInventory**](FbaOutboundApi.md#getfeatureinventory) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName} | 
[**getFeatureSKU**](FbaOutboundApi.md#getfeaturesku) | **GET** /fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku} | 
[**getFeatures**](FbaOutboundApi.md#getfeatures) | **GET** /fba/outbound/2020-07-01/features | 
[**getFulfillmentOrder**](FbaOutboundApi.md#getfulfillmentorder) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} | 
[**getFulfillmentPreview**](FbaOutboundApi.md#getfulfillmentpreview) | **POST** /fba/outbound/2020-07-01/fulfillmentOrders/preview | 
[**getPackageTrackingDetails**](FbaOutboundApi.md#getpackagetrackingdetails) | **GET** /fba/outbound/2020-07-01/tracking | 
[**listAllFulfillmentOrders**](FbaOutboundApi.md#listallfulfillmentorders) | **GET** /fba/outbound/2020-07-01/fulfillmentOrders | 
[**listReturnReasonCodes**](FbaOutboundApi.md#listreturnreasoncodes) | **GET** /fba/outbound/2020-07-01/returnReasonCodes | 
[**updateFulfillmentOrder**](FbaOutboundApi.md#updatefulfillmentorder) | **PUT** /fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId} | 

# **cancelFulfillmentOrder**
> \Popsicle\Amazon\Model\FulfillmentInbound\CancelFulfillmentOrderResponse cancelFulfillmentOrder($seller_fulfillment_order_id)



Requests that Amazon stop attempting to fulfill the fulfillment order indicated by the specified order identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->cancelFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->cancelFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\CancelFulfillmentOrderResponse**](../Model/CancelFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFulfillmentOrder**
> \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentOrderResponse createFulfillmentOrder($body)



Requests that Amazon ship items from the seller's inventory in Amazon's fulfillment network to a destination address.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentOrderRequest(); // \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentOrderRequest | 

try {
    $result = $apiInstance->createFulfillmentOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentOrderRequest**](../Model/CreateFulfillmentOrderRequest.md)|  |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentOrderResponse**](../Model/CreateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFulfillmentReturn**
> \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentReturnResponse createFulfillmentReturn($body, $seller_fulfillment_order_id)



Creates a fulfillment return.   **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentReturnRequest(); // \Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentReturnRequest | 
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer's request to return items.

try {
    $result = $apiInstance->createFulfillmentReturn($body, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentReturnRequest**](../Model/CreateFulfillmentReturnRequest.md)|  |
 **seller_fulfillment_order_id** | **string**| An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\CreateFulfillmentReturnResponse**](../Model/CreateFulfillmentReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatureInventory**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetFeatureInventoryResponse getFeatureInventory($marketplace_id, $feature_name, $next_token)



Returns a list of inventory items that are eligible for the fulfillment feature you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The marketplace for which to return a list of the inventory that is eligible for the specified feature.
$feature_name = "feature_name_example"; // string | The name of the feature for which to return a list of eligible inventory.
$next_token = "next_token_example"; // string | A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page.

try {
    $result = $apiInstance->getFeatureInventory($marketplace_id, $feature_name, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatureInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The marketplace for which to return a list of the inventory that is eligible for the specified feature. |
 **feature_name** | **string**| The name of the feature for which to return a list of eligible inventory. |
 **next_token** | **string**| A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. | [optional]

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetFeatureInventoryResponse**](../Model/GetFeatureInventoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatureSKU**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetFeatureSkuResponse getFeatureSKU($marketplace_id, $feature_name, $seller_sku)



Returns the number of items with the sellerSKU you specify that can have orders fulfilled using the specified feature. Note that if the sellerSKU isn't eligible, the response will contain an empty skuInfo object.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The marketplace for which to return the count.
$feature_name = "feature_name_example"; // string | The name of the feature.
$seller_sku = "seller_sku_example"; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.

try {
    $result = $apiInstance->getFeatureSKU($marketplace_id, $feature_name, $seller_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatureSKU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The marketplace for which to return the count. |
 **feature_name** | **string**| The name of the feature. |
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetFeatureSkuResponse**](../Model/GetFeatureSkuResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatures**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetFeaturesResponse getFeatures($marketplace_id)



Returns a list of features available for Multi-Channel Fulfillment orders in the marketplace you specify, and whether the seller for which you made the call is enrolled for each feature.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The marketplace for which to return the list of features.

try {
    $result = $apiInstance->getFeatures($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The marketplace for which to return the list of features. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetFeaturesResponse**](../Model/GetFeaturesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentOrder**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentOrderResponse getFulfillmentOrder($seller_fulfillment_order_id)



Returns the fulfillment order indicated by the specified order identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->getFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentOrderResponse**](../Model/GetFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPreview**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewResponse getFulfillmentPreview($body)



Returns a list of fulfillment order previews based on shipping criteria that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewRequest(); // \Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewRequest | 

try {
    $result = $apiInstance->getFulfillmentPreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewRequest**](../Model/GetFulfillmentPreviewRequest.md)|  |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetFulfillmentPreviewResponse**](../Model/GetFulfillmentPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageTrackingDetails**
> \Popsicle\Amazon\Model\FulfillmentInbound\GetPackageTrackingDetailsResponse getPackageTrackingDetails($package_number)



Returns delivery tracking information for a package in an outbound shipment for a Multi-Channel Fulfillment order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$package_number = 56; // int | The unencrypted package identifier returned by the getFulfillmentOrder operation.

try {
    $result = $apiInstance->getPackageTrackingDetails($package_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getPackageTrackingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_number** | **int**| The unencrypted package identifier returned by the getFulfillmentOrder operation. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\GetPackageTrackingDetailsResponse**](../Model/GetPackageTrackingDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllFulfillmentOrders**
> \Popsicle\Amazon\Model\FulfillmentInbound\ListAllFulfillmentOrdersResponse listAllFulfillmentOrders($query_start_date, $next_token)



Returns a list of fulfillment orders fulfilled after (or at) a specified date-time, or indicated by the next token parameter.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
$next_token = "next_token_example"; // string | A string token returned in the response to your previous request.

try {
    $result = $apiInstance->listAllFulfillmentOrders($query_start_date, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listAllFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_start_date** | **\DateTime**| A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. | [optional]

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\ListAllFulfillmentOrdersResponse**](../Model/ListAllFulfillmentOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReturnReasonCodes**
> \Popsicle\Amazon\Model\FulfillmentInbound\ListReturnReasonCodesResponse listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id)



Returns a list of return reason codes for a seller SKU in a given marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = "seller_sku_example"; // string | The seller SKU for which return reason codes are required.
$language = "language_example"; // string | The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into.
$marketplace_id = "marketplace_id_example"; // string | The marketplace for which the seller wants return reason codes.
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes.

try {
    $result = $apiInstance->listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listReturnReasonCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU for which return reason codes are required. |
 **language** | **string**| The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. |
 **marketplace_id** | **string**| The marketplace for which the seller wants return reason codes. | [optional]
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. | [optional]

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\ListReturnReasonCodesResponse**](../Model/ListReturnReasonCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentOrder**
> \Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderResponse updateFulfillmentOrder($body, $seller_fulfillment_order_id)



Updates and/or requests shipment for a fulfillment order with an order hold on it.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderRequest(); // \Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderRequest | 
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->updateFulfillmentOrder($body, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->updateFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderRequest**](../Model/UpdateFulfillmentOrderRequest.md)|  |
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Popsicle\Amazon\Model\FulfillmentInbound\UpdateFulfillmentOrderResponse**](../Model/UpdateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

