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
     * Create a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest $request
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingTicketSecurity $security
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse
     */
	public function createTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest $request,
        \Unified\Unified_to\Models\Operations\CreateTicketingTicketSecurity $security,
    ): \Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket', \Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse();
        $response->statusCode = $statusCode;
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
     * Retrieve a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingTicketRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetTicketingTicketSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetTicketingTicketResponse
     */
	public function getTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest $request,
        \Unified\Unified_to\Models\Operations\GetTicketingTicketSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\GetTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingTicketResponse();
        $response->statusCode = $statusCode;
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
     * List all tickets
     * 
     * @param \Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest $request
     * @param \Unified\Unified_to\Models\Operations\ListTicketingTicketsSecurity $security
     * @return \Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse
     */
	public function listTicketingTickets(
        ?\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest $request,
        \Unified\Unified_to\Models\Operations\ListTicketingTicketsSecurity $security,
    ): \Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket', \Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse();
        $response->statusCode = $statusCode;
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
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingTicketSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse
     */
	public function patchTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest $request,
        \Unified\Unified_to\Models\Operations\PatchTicketingTicketSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse();
        $response->statusCode = $statusCode;
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
     * Remove a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest $request
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingTicketSecurity $security
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse
     */
	public function removeTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest $request,
        \Unified\Unified_to\Models\Operations\RemoveTicketingTicketSecurity $security,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse();
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
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest $request
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingTicketSecurity $security
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse
     */
	public function updateTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest $request,
        \Unified\Unified_to\Models\Operations\UpdateTicketingTicketSecurity $security,
    ): \Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingTicket", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse();
        $response->statusCode = $statusCode;
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