<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Event 
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
     * Create a event
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateCrmEventRequest $request
     * @param \Unified\Unified_to\Models\Operations\CreateCrmEventSecurity $security
     * @return \Unified\Unified_to\Models\Operations\CreateCrmEventResponse
     */
	public function createCrmEvent(
        ?\Unified\Unified_to\Models\Operations\CreateCrmEventRequest $request,
        \Unified\Unified_to\Models\Operations\CreateCrmEventSecurity $security,
    ): \Unified\Unified_to\Models\Operations\CreateCrmEventResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event', \Unified\Unified_to\Models\Operations\CreateCrmEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmEvent", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateCrmEventResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmEvent = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmEvent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a event
     * 
     * @param \Unified\Unified_to\Models\Operations\GetCrmEventRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetCrmEventSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetCrmEventResponse
     */
	public function getCrmEvent(
        ?\Unified\Unified_to\Models\Operations\GetCrmEventRequest $request,
        \Unified\Unified_to\Models\Operations\GetCrmEventSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetCrmEventResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event/{id}', \Unified\Unified_to\Models\Operations\GetCrmEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetCrmEventRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetCrmEventResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmEvent = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmEvent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all events
     * 
     * @param \Unified\Unified_to\Models\Operations\ListCrmEventsRequest $request
     * @param \Unified\Unified_to\Models\Operations\ListCrmEventsSecurity $security
     * @return \Unified\Unified_to\Models\Operations\ListCrmEventsResponse
     */
	public function listCrmEvents(
        ?\Unified\Unified_to\Models\Operations\ListCrmEventsRequest $request,
        \Unified\Unified_to\Models\Operations\ListCrmEventsSecurity $security,
    ): \Unified\Unified_to\Models\Operations\ListCrmEventsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event', \Unified\Unified_to\Models\Operations\ListCrmEventsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListCrmEventsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListCrmEventsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmEvents = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\CrmEvent>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a event
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchCrmEventRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchCrmEventSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchCrmEventResponse
     */
	public function patchCrmEvent(
        ?\Unified\Unified_to\Models\Operations\PatchCrmEventRequest $request,
        \Unified\Unified_to\Models\Operations\PatchCrmEventSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchCrmEventResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event/{id}', \Unified\Unified_to\Models\Operations\PatchCrmEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmEvent", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchCrmEventResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmEvent = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmEvent', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a event
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveCrmEventRequest $request
     * @param \Unified\Unified_to\Models\Operations\RemoveCrmEventSecurity $security
     * @return \Unified\Unified_to\Models\Operations\RemoveCrmEventResponse
     */
	public function removeCrmEvent(
        ?\Unified\Unified_to\Models\Operations\RemoveCrmEventRequest $request,
        \Unified\Unified_to\Models\Operations\RemoveCrmEventSecurity $security,
    ): \Unified\Unified_to\Models\Operations\RemoveCrmEventResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event/{id}', \Unified\Unified_to\Models\Operations\RemoveCrmEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveCrmEventResponse();
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
     * Update a event
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateCrmEventRequest $request
     * @param \Unified\Unified_to\Models\Operations\UpdateCrmEventSecurity $security
     * @return \Unified\Unified_to\Models\Operations\UpdateCrmEventResponse
     */
	public function updateCrmEvent(
        ?\Unified\Unified_to\Models\Operations\UpdateCrmEventRequest $request,
        \Unified\Unified_to\Models\Operations\UpdateCrmEventSecurity $security,
    ): \Unified\Unified_to\Models\Operations\UpdateCrmEventResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/crm/{connection_id}/event/{id}', \Unified\Unified_to\Models\Operations\UpdateCrmEventRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "crmEvent", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateCrmEventResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->crmEvent = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\CrmEvent', 'json');
            }
        }

        return $response;
    }
}