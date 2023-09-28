<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Ticket 
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
     * Remove a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdResponse
     */
	public function deleteTicketingConnectionIdTicketId(
        ?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteTicketingConnectionIdTicketIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all tickets
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketResponse
     */
	public function getTicketingConnectionIdTicket(
        ?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket', \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingTickets = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TicketingTicket>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdResponse
     */
	public function getTicketingConnectionIdTicketId(
        ?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingTicket = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingTicket', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdResponse
     */
	public function patchTicketingConnectionIdTicketId(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingTicket = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingTicket', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketResponse
     */
	public function postTicketingConnectionIdTicket(
        ?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket', \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdTicketResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingTicket = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingTicket', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse
     */
	public function putTicketingConnectionIdTicketId(
        ?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingTicket = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingTicket', 'json');
            }
        }

        return $response;
    }
}