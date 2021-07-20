<?php
/**
 * HelperApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OBADA API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: techops@obada.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Obada\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Obada\ApiException;
use Obada\Configuration;
use Obada\HeaderSelector;
use Obada\ObjectSerializer;

/**
 * HelperApi Class Doc Comment
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HelperApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation generateObitDef
     *
     * Generate Obit Definition
     *
     * @param  string $manufacturer Device Id (Required) (required)
     * @param  string $partNumber Part Number (Required) (required)
     * @param  string $serialNumber Serial Number (Required) (required)
     *
     * @throws \Obada\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Obada\Entities\InlineResponse2001
     */
    public function generateObitDef($manufacturer, $partNumber, $serialNumber)
    {
        list($response) = $this->generateObitDefWithHttpInfo($manufacturer, $partNumber, $serialNumber);
        return $response;
    }

    /**
     * Operation generateObitDefWithHttpInfo
     *
     * Generate Obit Definition
     *
     * @param  string $manufacturer Device Id (Required) (required)
     * @param  string $partNumber Part Number (Required) (required)
     * @param  string $serialNumber Serial Number (Required) (required)
     *
     * @throws \Obada\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Obada\Entities\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateObitDefWithHttpInfo($manufacturer, $partNumber, $serialNumber)
    {
        $request = $this->generateObitDefRequest($manufacturer, $partNumber, $serialNumber);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Obada\Entities\InlineResponse2001' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Obada\Entities\InlineResponse2001', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Obada\Entities\InlineResponse2001';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Obada\Entities\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateObitDefAsync
     *
     * Generate Obit Definition
     *
     * @param  string $manufacturer Device Id (Required) (required)
     * @param  string $partNumber Part Number (Required) (required)
     * @param  string $serialNumber Serial Number (Required) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateObitDefAsync($manufacturer, $partNumber, $serialNumber)
    {
        return $this->generateObitDefAsyncWithHttpInfo($manufacturer, $partNumber, $serialNumber)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateObitDefAsyncWithHttpInfo
     *
     * Generate Obit Definition
     *
     * @param  string $manufacturer Device Id (Required) (required)
     * @param  string $partNumber Part Number (Required) (required)
     * @param  string $serialNumber Serial Number (Required) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateObitDefAsyncWithHttpInfo($manufacturer, $partNumber, $serialNumber)
    {
        $returnType = '\Obada\Entities\InlineResponse2001';
        $request = $this->generateObitDefRequest($manufacturer, $partNumber, $serialNumber);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateObitDef'
     *
     * @param  string $manufacturer Device Id (Required) (required)
     * @param  string $partNumber Part Number (Required) (required)
     * @param  string $serialNumber Serial Number (Required) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateObitDefRequest($manufacturer, $partNumber, $serialNumber)
    {
        // verify the required parameter 'manufacturer' is set
        if ($manufacturer === null || (is_array($manufacturer) && count($manufacturer) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $manufacturer when calling generateObitDef'
            );
        }
        // verify the required parameter 'partNumber' is set
        if ($partNumber === null || (is_array($partNumber) && count($partNumber) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $partNumber when calling generateObitDef'
            );
        }
        // verify the required parameter 'serialNumber' is set
        if ($serialNumber === null || (is_array($serialNumber) && count($serialNumber) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $serialNumber when calling generateObitDef'
            );
        }

        $resourcePath = '/api/obit/definition';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($manufacturer !== null) {
            if('form' === 'form' && is_array($manufacturer)) {
                foreach($manufacturer as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['manufacturer'] = $manufacturer;
            }
        }
        // query params
        if ($partNumber !== null) {
            if('form' === 'form' && is_array($partNumber)) {
                foreach($partNumber as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['part_number'] = $partNumber;
            }
        }
        // query params
        if ($serialNumber !== null) {
            if('form' === 'form' && is_array($serialNumber)) {
                foreach($serialNumber as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['serial_number'] = $serialNumber;
            }
        }




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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
     * Operation generateRootHash
     *
     * Generates The Root Hash using the data provided.
     *
     * @param  \Obada\Entities\LocalObit $localObit localObit (optional)
     *
     * @throws \Obada\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Obada\Entities\InlineResponse200
     */
    public function generateRootHash($localObit = null)
    {
        list($response) = $this->generateRootHashWithHttpInfo($localObit);
        return $response;
    }

    /**
     * Operation generateRootHashWithHttpInfo
     *
     * Generates The Root Hash using the data provided.
     *
     * @param  \Obada\Entities\LocalObit $localObit (optional)
     *
     * @throws \Obada\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Obada\Entities\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateRootHashWithHttpInfo($localObit = null)
    {
        $request = $this->generateRootHashRequest($localObit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Obada\Entities\InlineResponse200' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Obada\Entities\InlineResponse200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Obada\Entities\InlineResponse200';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Obada\Entities\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateRootHashAsync
     *
     * Generates The Root Hash using the data provided.
     *
     * @param  \Obada\Entities\LocalObit $localObit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateRootHashAsync($localObit = null)
    {
        return $this->generateRootHashAsyncWithHttpInfo($localObit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateRootHashAsyncWithHttpInfo
     *
     * Generates The Root Hash using the data provided.
     *
     * @param  \Obada\Entities\LocalObit $localObit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateRootHashAsyncWithHttpInfo($localObit = null)
    {
        $returnType = '\Obada\Entities\InlineResponse200';
        $request = $this->generateRootHashRequest($localObit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateRootHash'
     *
     * @param  \Obada\Entities\LocalObit $localObit (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function generateRootHashRequest($localObit = null)
    {

        $resourcePath = '/api/obit/hash';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($localObit)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($localObit));
            } else {
                $httpBody = $localObit;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
            'POST',
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