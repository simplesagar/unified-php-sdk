<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Page
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
     * Create a page
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateKmsPageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateKmsPageResponse
     */
    public function createKmsPage(
        ?\Unified\Unified_to\Models\Operations\CreateKmsPageRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateKmsPageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page', \Unified\Unified_to\Models\Operations\CreateKmsPageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsPage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateKmsPageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsPage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsPage', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a page
     *
     * @param  \Unified\Unified_to\Models\Operations\GetKmsPageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetKmsPageResponse
     */
    public function getKmsPage(
        ?\Unified\Unified_to\Models\Operations\GetKmsPageRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetKmsPageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page/{id}', \Unified\Unified_to\Models\Operations\GetKmsPageRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetKmsPageRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetKmsPageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsPage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsPage', 'json');
            }
        }

        return $response;
    }

    /**
     * List all pages
     *
     * @param  \Unified\Unified_to\Models\Operations\ListKmsPagesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListKmsPagesResponse
     */
    public function listKmsPages(
        ?\Unified\Unified_to\Models\Operations\ListKmsPagesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListKmsPagesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page', \Unified\Unified_to\Models\Operations\ListKmsPagesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListKmsPagesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListKmsPagesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsPages = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\KmsPage>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a page
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchKmsPageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchKmsPageResponse
     */
    public function patchKmsPage(
        ?\Unified\Unified_to\Models\Operations\PatchKmsPageRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchKmsPageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page/{id}', \Unified\Unified_to\Models\Operations\PatchKmsPageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsPage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchKmsPageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsPage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsPage', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a page
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveKmsPageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveKmsPageResponse
     */
    public function removeKmsPage(
        ?\Unified\Unified_to\Models\Operations\RemoveKmsPageRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveKmsPageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page/{id}', \Unified\Unified_to\Models\Operations\RemoveKmsPageRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveKmsPageResponse();
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
     * Update a page
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateKmsPageRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateKmsPageResponse
     */
    public function updateKmsPage(
        ?\Unified\Unified_to\Models\Operations\UpdateKmsPageRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateKmsPageResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/kms/{connection_id}/page/{id}', \Unified\Unified_to\Models\Operations\UpdateKmsPageRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'kmsPage', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateKmsPageResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->kmsPage = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\KmsPage', 'json');
            }
        }

        return $response;
    }
}