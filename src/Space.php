<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Space
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
     * Create a space
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateKmsSpaceRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateKmsSpaceResponse
     */
    public function createKmsSpace(
        ?\Unified\Unified_to\Models\Operations\CreateKmsSpaceRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateKmsSpaceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space', \Unified\Unified_to\Models\Operations\CreateKmsSpaceRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsSpace', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateKmsSpaceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsSpace = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsSpace', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a space
     *
     * @param  \Unified\Unified_to\Models\Operations\GetKmsSpaceRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetKmsSpaceResponse
     */
    public function getKmsSpace(
        ?\Unified\Unified_to\Models\Operations\GetKmsSpaceRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetKmsSpaceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space/{id}', \Unified\Unified_to\Models\Operations\GetKmsSpaceRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetKmsSpaceRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetKmsSpaceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsSpace = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsSpace', 'json');
            }
        }

        return $response;
    }

    /**
     * List all spaces
     *
     * @param  \Unified\Unified_to\Models\Operations\ListKmsSpacesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListKmsSpacesResponse
     */
    public function listKmsSpaces(
        ?\Unified\Unified_to\Models\Operations\ListKmsSpacesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListKmsSpacesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space', \Unified\Unified_to\Models\Operations\ListKmsSpacesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListKmsSpacesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListKmsSpacesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsSpaces = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\KmsSpace>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a space
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchKmsSpaceRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchKmsSpaceResponse
     */
    public function patchKmsSpace(
        ?\Unified\Unified_to\Models\Operations\PatchKmsSpaceRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchKmsSpaceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space/{id}', \Unified\Unified_to\Models\Operations\PatchKmsSpaceRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsSpace', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchKmsSpaceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsSpace = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsSpace', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a space
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveKmsSpaceRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveKmsSpaceResponse
     */
    public function removeKmsSpace(
        ?\Unified\Unified_to\Models\Operations\RemoveKmsSpaceRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveKmsSpaceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space/{id}', \Unified\Unified_to\Models\Operations\RemoveKmsSpaceRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveKmsSpaceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string) $httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a space
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateKmsSpaceRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateKmsSpaceResponse
     */
    public function updateKmsSpace(
        ?\Unified\Unified_to\Models\Operations\UpdateKmsSpaceRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateKmsSpaceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/space/{id}', \Unified\Unified_to\Models\Operations\UpdateKmsSpaceRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsSpace', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateKmsSpaceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsSpace = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsSpace', 'json');
            }
        }

        return $response;
    }
}