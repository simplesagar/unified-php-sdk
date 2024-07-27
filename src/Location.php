<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Location
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
     * Create a location
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse
     */
    public function createCommerceLocation(
        ?\Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location', \Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'commerceLocation', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceLocation = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceLocation', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a location
     *
     * @param  \Unified\Unified_to\Models\Operations\GetCommerceLocationRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetCommerceLocationResponse
     */
    public function getCommerceLocation(
        ?\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetCommerceLocationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location/{id}', \Unified\Unified_to\Models\Operations\GetCommerceLocationRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCommerceLocationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceLocation = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceLocation', 'json');
            }
        }

        return $response;
    }

    /**
     * List all locations
     *
     * @param  \Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse
     */
    public function listCommerceLocations(
        ?\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location', \Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceLocations = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CommerceLocation>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a location
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse
     */
    public function patchCommerceLocation(
        ?\Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location/{id}', \Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'commerceLocation', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceLocation = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceLocation', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a location
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse
     */
    public function removeCommerceLocation(
        ?\Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location/{id}', \Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string) $httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a location
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse
     */
    public function updateCommerceLocation(
        ?\Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/commerce/{connection_id}/location/{id}', \Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'commerceLocation', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->commerceLocation = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CommerceLocation', 'json');
            }
        }

        return $response;
    }
}