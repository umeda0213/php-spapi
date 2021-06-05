# Popsicle\Amazon\MessagingApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmCustomizationDetails**](MessagingApi.md#confirmcustomizationdetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmCustomizationDetails | 
[**createAmazonMotors**](MessagingApi.md#createamazonmotors) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/amazonMotors | 
[**createConfirmDeliveryDetails**](MessagingApi.md#createconfirmdeliverydetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmDeliveryDetails | 
[**createConfirmOrderDetails**](MessagingApi.md#createconfirmorderdetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmOrderDetails | 
[**createConfirmServiceDetails**](MessagingApi.md#createconfirmservicedetails) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/confirmServiceDetails | 
[**createDigitalAccessKey**](MessagingApi.md#createdigitalaccesskey) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/digitalAccessKey | 
[**createLegalDisclosure**](MessagingApi.md#createlegaldisclosure) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure | 
[**createNegativeFeedbackRemoval**](MessagingApi.md#createnegativefeedbackremoval) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/negativeFeedbackRemoval | 
[**createUnexpectedProblem**](MessagingApi.md#createunexpectedproblem) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/unexpectedProblem | 
[**createWarranty**](MessagingApi.md#createwarranty) | **POST** /messaging/v1/orders/{amazonOrderId}/messages/warranty | 
[**getAttributes**](MessagingApi.md#getattributes) | **GET** /messaging/v1/orders/{amazonOrderId}/attributes | 
[**getMessagingActionsForOrder**](MessagingApi.md#getmessagingactionsfororder) | **GET** /messaging/v1/orders/{amazonOrderId} | 

# **confirmCustomizationDetails**
> \Popsicle\Amazon\Model\Messaging\CreateConfirmCustomizationDetailsResponse confirmCustomizationDetails($body, $marketplace_ids, $amazon_order_id)



Sends a message asking a buyer to provide or verify customization details such as name spelling, images, initials, etc.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateConfirmCustomizationDetailsRequest(); // \Popsicle\Amazon\Model\Messaging\CreateConfirmCustomizationDetailsRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->confirmCustomizationDetails($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->confirmCustomizationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateConfirmCustomizationDetailsRequest**](../Model/CreateConfirmCustomizationDetailsRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateConfirmCustomizationDetailsResponse**](../Model/CreateConfirmCustomizationDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAmazonMotors**
> \Popsicle\Amazon\Model\Messaging\CreateAmazonMotorsResponse createAmazonMotors($body, $marketplace_ids, $amazon_order_id)



Sends a message to a buyer to provide details about an Amazon Motors order. This message can only be sent by Amazon Motors sellers.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateAmazonMotorsRequest(); // \Popsicle\Amazon\Model\Messaging\CreateAmazonMotorsRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createAmazonMotors($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createAmazonMotors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateAmazonMotorsRequest**](../Model/CreateAmazonMotorsRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateAmazonMotorsResponse**](../Model/CreateAmazonMotorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConfirmDeliveryDetails**
> \Popsicle\Amazon\Model\Messaging\CreateConfirmDeliveryDetailsResponse createConfirmDeliveryDetails($body, $marketplace_ids, $amazon_order_id)



Sends a message to a buyer to arrange a delivery or to confirm contact information for making a delivery.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateConfirmDeliveryDetailsRequest(); // \Popsicle\Amazon\Model\Messaging\CreateConfirmDeliveryDetailsRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createConfirmDeliveryDetails($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmDeliveryDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateConfirmDeliveryDetailsRequest**](../Model/CreateConfirmDeliveryDetailsRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateConfirmDeliveryDetailsResponse**](../Model/CreateConfirmDeliveryDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConfirmOrderDetails**
> \Popsicle\Amazon\Model\Messaging\CreateConfirmOrderDetailsResponse createConfirmOrderDetails($body, $marketplace_ids, $amazon_order_id)



Sends a message to ask a buyer an order-related question prior to shipping their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateConfirmOrderDetailsRequest(); // \Popsicle\Amazon\Model\Messaging\CreateConfirmOrderDetailsRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createConfirmOrderDetails($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmOrderDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateConfirmOrderDetailsRequest**](../Model/CreateConfirmOrderDetailsRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateConfirmOrderDetailsResponse**](../Model/CreateConfirmOrderDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createConfirmServiceDetails**
> \Popsicle\Amazon\Model\Messaging\CreateConfirmServiceDetailsResponse createConfirmServiceDetails($body, $marketplace_ids, $amazon_order_id)



Sends a message to contact a Home Service customer to arrange a service call or to gather information prior to a service call.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateConfirmServiceDetailsRequest(); // \Popsicle\Amazon\Model\Messaging\CreateConfirmServiceDetailsRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createConfirmServiceDetails($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createConfirmServiceDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateConfirmServiceDetailsRequest**](../Model/CreateConfirmServiceDetailsRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateConfirmServiceDetailsResponse**](../Model/CreateConfirmServiceDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDigitalAccessKey**
> \Popsicle\Amazon\Model\Messaging\CreateDigitalAccessKeyResponse createDigitalAccessKey($body, $marketplace_ids, $amazon_order_id)



Sends a message to a buyer to share a digital access key needed to utilize digital content in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateDigitalAccessKeyRequest(); // \Popsicle\Amazon\Model\Messaging\CreateDigitalAccessKeyRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createDigitalAccessKey($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createDigitalAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateDigitalAccessKeyRequest**](../Model/CreateDigitalAccessKeyRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateDigitalAccessKeyResponse**](../Model/CreateDigitalAccessKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLegalDisclosure**
> \Popsicle\Amazon\Model\Messaging\CreateLegalDisclosureResponse createLegalDisclosure($body, $marketplace_ids, $amazon_order_id)



Sends a critical message that contains documents that a seller is legally obligated to provide to the buyer. This message should only be used to deliver documents that are required by law.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateLegalDisclosureRequest(); // \Popsicle\Amazon\Model\Messaging\CreateLegalDisclosureRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createLegalDisclosure($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createLegalDisclosure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateLegalDisclosureRequest**](../Model/CreateLegalDisclosureRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateLegalDisclosureResponse**](../Model/CreateLegalDisclosureResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNegativeFeedbackRemoval**
> \Popsicle\Amazon\Model\Messaging\CreateNegativeFeedbackRemovalResponse createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids)



Sends a non-critical message that asks a buyer to remove their negative feedback. This message should only be sent after the seller has resolved the buyer's problem.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createNegativeFeedbackRemoval($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createNegativeFeedbackRemoval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateNegativeFeedbackRemovalResponse**](../Model/CreateNegativeFeedbackRemovalResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUnexpectedProblem**
> \Popsicle\Amazon\Model\Messaging\CreateUnexpectedProblemResponse createUnexpectedProblem($body, $marketplace_ids, $amazon_order_id)



Sends a critical message to a buyer that an unexpected problem was encountered affecting the completion of the order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateUnexpectedProblemRequest(); // \Popsicle\Amazon\Model\Messaging\CreateUnexpectedProblemRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createUnexpectedProblem($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createUnexpectedProblem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateUnexpectedProblemRequest**](../Model/CreateUnexpectedProblemRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateUnexpectedProblemResponse**](../Model/CreateUnexpectedProblemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWarranty**
> \Popsicle\Amazon\Model\Messaging\CreateWarrantyResponse createWarranty($body, $marketplace_ids, $amazon_order_id)



Sends a message to a buyer to provide details about warranty information on a purchase in their order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Popsicle\Amazon\Model\Messaging\CreateWarrantyRequest(); // \Popsicle\Amazon\Model\Messaging\CreateWarrantyRequest | 
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.

try {
    $result = $apiInstance->createWarranty($body, $marketplace_ids, $amazon_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->createWarranty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Popsicle\Amazon\Model\Messaging\CreateWarrantyRequest**](../Model/CreateWarrantyRequest.md)|  |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\CreateWarrantyResponse**](../Model/CreateWarrantyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttributes**
> \Popsicle\Amazon\Model\Messaging\GetAttributesResponse getAttributes($amazon_order_id, $marketplace_ids)



Returns a response containing attributes related to an order. This includes buyer preferences.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a message is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getAttributes($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which a message is sent. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\GetAttributesResponse**](../Model/GetAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingActionsForOrder**
> \Popsicle\Amazon\Model\Messaging\GetMessagingActionsForOrderResponse getMessagingActionsForOrder($amazon_order_id, $marketplace_ids)



Returns a list of message types that are available for an order that you specify. A message type is represented by an actions object, which contains a path and query parameter(s). You can use the path and parameter(s) to call an operation that sends a message.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Popsicle\Amazon\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which you want a list of available message types.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->getMessagingActionsForOrder($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingActionsForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon order identifier. This specifies the order for which you want a list of available message types. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. |

### Return type

[**\Popsicle\Amazon\Model\Messaging\GetMessagingActionsForOrderResponse**](../Model/GetMessagingActionsForOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

