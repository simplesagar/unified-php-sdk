<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Login 
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
     * Sign in a user
     * 
     * Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and emails are returned.
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginResponse
     */
	public function getUnifiedIntegrationLogin(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/login/{workspace_id}/{integration_type}', \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
}