<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Apicall
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Retrieve specific API Call by its ID
     *
     * @param  \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse
     */
    public function getUnifiedApicall(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiCall = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\ApiCall', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns API Calls
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse
     */
    public function listUnifiedApicalls(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/apicall');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiCalls = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\ApiCall>', 'json');
            }
        }

        return $response;
    }
}