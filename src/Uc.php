<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Uc 
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
     * Remove a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse
     */
	public function deleteUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteUcConnectionIdContactIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all agents
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentResponse
     */
	public function getUcConnectionIdAgent(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/agent', \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdAgentResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucAgents = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcAgent>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all calls
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse
     */
	public function getUcConnectionIdCall(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/call', \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucCalls = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcCall>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all contacts
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse
     */
	public function getUcConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContacts = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\UcContact>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse
     */
	public function getUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse
     */
	public function patchUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse
     */
	public function postUcConnectionIdContact(
        ?\Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact', \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostUcConnectionIdContactResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a contact
     * 
     * @param \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse
     */
	public function putUcConnectionIdContactId(
        ?\Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/uc/{connection_id}/contact/{id}', \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ucContact", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutUcConnectionIdContactIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ucContact = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\UcContact', 'json');
            }
        }

        return $response;
    }
}