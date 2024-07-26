<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Uc
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
     * Create a contact
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateUcContactRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateUcContactResponse
     */
    public function createUcContact(
        ?\Unified\Unified_to\Models\Operations\CreateUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateUcContactResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\CreateUcContactRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ucContact', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateUcContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a contact
     *
     * @param  \Unified\Unified_to\Models\Operations\GetUcContactRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetUcContactResponse
     */
    public function getUcContact(
        ?\Unified\Unified_to\Models\Operations\GetUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcContactResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetUcContactRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUcContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }

    /**
     * List all calls
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUcCallsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUcCallsResponse
     */
    public function listUcCalls(
        ?\Unified\Unified_to\Models\Operations\ListUcCallsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUcCallsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/call', \Unified\Unified_to\Models\Operations\ListUcCallsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUcCallsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUcCallsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucCalls = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcCall>', 'json');
            }
        }

        return $response;
    }

    /**
     * List all contacts
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUcContactsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUcContactsResponse
     */
    public function listUcContacts(
        ?\Unified\Unified_to\Models\Operations\ListUcContactsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUcContactsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\ListUcContactsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUcContactsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUcContactsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContacts = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcContact>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a contact
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchUcContactRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchUcContactResponse
     */
    public function patchUcContact(
        ?\Unified\Unified_to\Models\Operations\PatchUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUcContactResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchUcContactRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ucContact', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchUcContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a contact
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveUcContactRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveUcContactResponse
     */
    public function removeUcContact(
        ?\Unified\Unified_to\Models\Operations\RemoveUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveUcContactResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\RemoveUcContactRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveUcContactResponse();
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
     * Update a contact
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateUcContactRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateUcContactResponse
     */
    public function updateUcContact(
        ?\Unified\Unified_to\Models\Operations\UpdateUcContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateUcContactResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\UpdateUcContactRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'ucContact', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateUcContactResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
}