<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Application 
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
     * Create an application
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse
     */
	public function createAtsApplication(
        ?\Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application', \Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsApplication", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsApplication = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsApplication', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve an application
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAtsApplicationRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetAtsApplicationResponse
     */
	public function getAtsApplication(
        ?\Unified\Unified_to\Models\Operations\GetAtsApplicationRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAtsApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application/{id}', \Unified\Unified_to\Models\Operations\GetAtsApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsApplicationRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsApplicationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsApplication = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsApplication', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all applications
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse
     */
	public function listAtsApplications(
        ?\Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application', \Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsApplications = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsApplication>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update an application
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse
     */
	public function patchAtsApplication(
        ?\Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application/{id}', \Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsApplication", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsApplication = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsApplication', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove an application
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse
     */
	public function removeAtsApplication(
        ?\Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application/{id}', \Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->res = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Update an application
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse
     */
	public function updateAtsApplication(
        ?\Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/application/{id}', \Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsApplication", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsApplication = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsApplication', 'json');
            }
        }

        return $response;
    }
}