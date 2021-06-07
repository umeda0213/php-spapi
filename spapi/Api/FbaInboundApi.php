<?php
/**
 * FbaInboundApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for FBA Inbound Eligibilty
 *
 * With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
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
 * FbaInboundApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FbaInboundApi
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
     * Operation getItemEligibilityPreview
     *
     * @param  string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program The program that you want to check eligibility against. (required)
     * @param  string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview($asin, $program, $marketplace_ids = null)
    {
        list($response) = $this->getItemEligibilityPreviewWithHttpInfo($asin, $program, $marketplace_ids);
        return $response;
    }

    /**
     * Operation getItemEligibilityPreviewWithHttpInfo
     *
     * @param  string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program The program that you want to check eligibility against. (required)
     * @param  string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemEligibilityPreviewWithHttpInfo($asin, $program, $marketplace_ids = null)
    {
        $returnType = '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse';
        $request = $this->getItemEligibilityPreviewRequest($asin, $program, $marketplace_ids);

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
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getItemEligibilityPreviewAsync
     *
     * 
     *
     * @param  string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program The program that you want to check eligibility against. (required)
     * @param  string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemEligibilityPreviewAsync($asin, $program, $marketplace_ids = null)
    {
        return $this->getItemEligibilityPreviewAsyncWithHttpInfo($asin, $program, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemEligibilityPreviewAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program The program that you want to check eligibility against. (required)
     * @param  string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemEligibilityPreviewAsyncWithHttpInfo($asin, $program, $marketplace_ids = null)
    {
        $returnType = '\Popsicle\Amazon\Model\FbaInbound\GetItemEligibilityPreviewResponse';
        $request = $this->getItemEligibilityPreviewRequest($asin, $program, $marketplace_ids);

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
     * Create request for operation 'getItemEligibilityPreview'
     *
     * @param  string $asin The ASIN of the item for which you want an eligibility preview. (required)
     * @param  string $program The program that you want to check eligibility against. (required)
     * @param  string[] $marketplace_ids The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemEligibilityPreviewRequest($asin, $program, $marketplace_ids = null)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getItemEligibilityPreview'
            );
        }
        // verify the required parameter 'program' is set
        if ($program === null || (is_array($program) && count($program) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $program when calling getItemEligibilityPreview'
            );
        }

        $resourcePath = '/fba/inbound/v1/eligibility/itemPreview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids, null);
        }
        // query params
        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toQueryValue($asin, null);
        }
        // query params
        if ($program !== null) {
            $queryParams['program'] = ObjectSerializer::toQueryValue($program, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'ItemEligibilityPreview']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'ItemEligibilityPreview'],
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
            $defaultHeaders['user-agent'] = $this->config->getUserAgent();
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
