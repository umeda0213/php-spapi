<?php
/**
 * CustomerInvoicesApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Popsicle\Amazon\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Popsicle\Amazon\ApiException;
use Popsicle\Amazon\Configuration;
use Popsicle\Amazon\HeaderSelector;
use Popsicle\Amazon\ObjectSerializer;

/**
 * CustomerInvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoicesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCustomerInvoice
     *
     * @param  string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse
     */
    public function getCustomerInvoice($purchase_order_number)
    {
        list($response) = $this->getCustomerInvoiceWithHttpInfo($purchase_order_number);
        return $response;
    }

    /**
     * Operation getCustomerInvoiceWithHttpInfo
     *
     * @param  string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerInvoiceWithHttpInfo($purchase_order_number)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse';
        $request = $this->getCustomerInvoiceRequest($purchase_order_number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerInvoiceAsync
     *
     * 
     *
     * @param  string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerInvoiceAsync($purchase_order_number)
    {
        return $this->getCustomerInvoiceAsyncWithHttpInfo($purchase_order_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerInvoiceAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerInvoiceAsyncWithHttpInfo($purchase_order_number)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse';
        $request = $this->getCustomerInvoiceRequest($purchase_order_number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerInvoice'
     *
     * @param  string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomerInvoiceRequest($purchase_order_number)
    {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (is_array($purchase_order_number) && count($purchase_order_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling getCustomerInvoice'
            );
        }

        $resourcePath = '/vendor/directFulfillment/shipping/v1/customerInvoices/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $method = 'GET';
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $amazonHeader = \Popsicle\Amazon\Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody,
        );
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
            $amazonHeader
        );
        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            isset($body) ? $body : ''
        );
    }

    /**
     * Operation getCustomerInvoices
     *
     * @param  \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int $limit The limit to the number of records returned (optional)
     * @param  string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param  string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoicesResponse
     */
    public function getCustomerInvoices($created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        list($response) = $this->getCustomerInvoicesWithHttpInfo($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);
        return $response;
    }

    /**
     * Operation getCustomerInvoicesWithHttpInfo
     *
     * @param  \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int $limit The limit to the number of records returned (optional)
     * @param  string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param  string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoicesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerInvoicesWithHttpInfo($created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoicesResponse';
        $request = $this->getCustomerInvoicesRequest($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoicesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerInvoicesAsync
     *
     * 
     *
     * @param  \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int $limit The limit to the number of records returned (optional)
     * @param  string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param  string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerInvoicesAsync($created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        return $this->getCustomerInvoicesAsyncWithHttpInfo($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerInvoicesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int $limit The limit to the number of records returned (optional)
     * @param  string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param  string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerInvoicesAsyncWithHttpInfo($created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        $returnType = '\Popsicle\Amazon\Model\VendorDirectFulfillmentShippingV1\GetCustomerInvoicesResponse';
        $request = $this->getCustomerInvoicesRequest($created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerInvoices'
     *
     * @param  \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param  string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param  int $limit The limit to the number of records returned (optional)
     * @param  string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param  string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomerInvoicesRequest($created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        // verify the required parameter 'created_after' is set
        if ($created_after === null || (is_array($created_after) && count($created_after) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_after when calling getCustomerInvoices'
            );
        }
        // verify the required parameter 'created_before' is set
        if ($created_before === null || (is_array($created_before) && count($created_before) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $created_before when calling getCustomerInvoices'
            );
        }

        $resourcePath = '/vendor/directFulfillment/shipping/v1/customerInvoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($ship_from_party_id !== null) {
            $queryParams['shipFromPartyId'] = ObjectSerializer::toQueryValue($ship_from_party_id, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($created_after !== null) {
            $queryParams['createdAfter'] = ObjectSerializer::toQueryValue($created_after, 'date-time');
        }
        // query params
        if ($created_before !== null) {
            $queryParams['createdBefore'] = ObjectSerializer::toQueryValue($created_before, 'date-time');
        }
        // query params
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order, null);
        }
        // query params
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $method = 'GET';
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $amazonHeader = \Popsicle\Amazon\Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string) $httpBody,
        );
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers,
            $amazonHeader
        );
        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            isset($body) ? $body : ''
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
