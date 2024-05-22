<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Integration
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
     * Create connection indirectly
     *
     * Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.
     *
     * @param  \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse
     */
    public function getUnifiedIntegrationAuth(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/auth/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest::class, $request, null));
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }

    /**
     * Returns all activated integrations in a workspace
     *
     * No authentication required as this is to be used by front-end interface
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse
     */
    public function listUnifiedIntegrationWorkspaces(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/workspace/{workspace_id}', \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }

    /**
     * Returns all integrations
     *
     * @param  \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse
     */
    public function listUnifiedIntegrations(
        ?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }
}