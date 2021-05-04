<?php
/**
 * AuthorizationApi
 * PHP version 5
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Authorization
 *
 * The Selling Partner API for Authorization helps developers manage authorizations and check the specific permissions associated with a given authorization.
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
 * AuthorizationApi Class Doc Comment
 *
 * @category Class
 * @package  Popsicle\Amazon
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizationApi
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
     * Operation getAuthorizationCode
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Popsicle\Amazon\Model\GetAuthorizationCodeResponse
     */
    public function getAuthorizationCode($selling_partner_id, $developer_id, $mws_auth_token)
    {
        list($response) = $this->getAuthorizationCodeWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token);
        return $response;
    }

    /**
     * Operation getAuthorizationCodeWithHttpInfo
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \Popsicle\Amazon\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Popsicle\Amazon\Model\GetAuthorizationCodeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizationCodeWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
    {
        $returnType = '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse';
        $request = $this->getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token);

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
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuthorizationCodeAsync
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsync($selling_partner_id, $developer_id, $mws_auth_token)
    {
        return $this->getAuthorizationCodeAsyncWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuthorizationCodeAsyncWithHttpInfo
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsyncWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
    {
        $returnType = '\Popsicle\Amazon\Model\GetAuthorizationCodeResponse';
        $request = $this->getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token);

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
     * Create request for operation 'getAuthorizationCode'
     *
     * @param  string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token)
    {
        // verify the required parameter 'selling_partner_id' is set
        if ($selling_partner_id === null || (is_array($selling_partner_id) && count($selling_partner_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $selling_partner_id when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'developer_id' is set
        if ($developer_id === null || (is_array($developer_id) && count($developer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $developer_id when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'mws_auth_token' is set
        if ($mws_auth_token === null || (is_array($mws_auth_token) && count($mws_auth_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mws_auth_token when calling getAuthorizationCode'
            );
        }

        $resourcePath = '/authorization/v1/authorizationCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($selling_partner_id !== null) {
            $queryParams['sellingPartnerId'] = ObjectSerializer::toQueryValue($selling_partner_id, null);
        }
        // query params
        if ($developer_id !== null) {
            $queryParams['developerId'] = ObjectSerializer::toQueryValue($developer_id, null);
        }
        // query params
        if ($mws_auth_token !== null) {
            $queryParams['mwsAuthToken'] = ObjectSerializer::toQueryValue($mws_auth_token, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload', 'errors']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload', 'errors'],
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

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
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
