<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Organization 
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
     * Retrieve an organization
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingOrganizationResponse
     */
	public function getAccountingOrganization(
        ?\Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingOrganizationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/organization/{id}', \Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingOrganizationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingOrganization = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingOrganization', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all organizations
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingOrganizationsResponse
     */
	public function listAccountingOrganizations(
        ?\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingOrganizationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/organization', \Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingOrganizationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingOrganizations = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingOrganization>', 'json');
            }
        }

        return $response;
    }
}