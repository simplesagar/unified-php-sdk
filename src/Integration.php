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
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Returns all integrations
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse
     */
	public function getUnifiedIntegration(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create connection indirectly
     * 
     * Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse
     */
	public function getUnifiedIntegrationAuthWorkspaceIdIntegrationType(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/auth/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->getUnifiedIntegrationAuthWorkspaceIdIntegrationType200ApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Retrieve an integration
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeResponse
     */
	public function getUnifiedIntegrationIntegrationType(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integration = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Integration', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Returns all activated integrations in a workspace
     * 
     * No authentication required as this is to be used by front-end interface
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdResponse
     */
	public function getUnifiedIntegrationWorkspaceWorkspaceId(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/workspace/{workspace_id}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->integrations = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Integration>', 'json');
            }
        }

        return $response;
    }
}