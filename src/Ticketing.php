<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Ticketing 
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
     * Create a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse
     */
	public function createTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', \Unified\Unified_to\Models\Operations\CreateTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a note
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse
     */
	public function createTicketingNote(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note', \Unified\Unified_to\Models\Operations\CreateTicketingNoteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateTicketingTicketResponse
     */
	public function createTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\CreateTicketingTicketRequest $request,
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
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
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
     * Retrieve a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse
     */
	public function getTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingCustomerRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a note
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingNoteRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse
     */
	public function getTicketingNote(
        ?\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\GetTicketingNoteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingNoteRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingTicketResponse
     */
	public function getTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\GetTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingTicketRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
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
     * List all customers
     * 
     * @param \Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse
     */
	public function listTicketingCustomers(
        ?\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer', \Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingCustomersRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTicketingCustomersResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomers = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TicketingCustomer>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all notes
     * 
     * @param \Unified\Unified_to\Models\Operations\ListTicketingNotesRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse
     */
	public function listTicketingNotes(
        ?\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note', \Unified\Unified_to\Models\Operations\ListTicketingNotesRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingNotesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTicketingNotesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNotes = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TicketingNote>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all tickets
     * 
     * @param \Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse
     */
	public function listTicketingTickets(
        ?\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTicketingTicketsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket', \Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTicketingTicketsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
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
     * Update a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse
     */
	public function patchTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a note
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse
     */
	public function patchTicketingNote(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingNoteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingTicketResponse
     */
	public function patchTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingTicketRequest $request,
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
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
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
     * Remove a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse
     */
	public function removeTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTicketingCustomerResponse();
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
     * Remove a note
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse
     */
	public function removeTicketingNote(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingNoteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTicketingNoteResponse();
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
     * Remove a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse
     */
	public function removeTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTicketingTicketResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/ticket/{id}', \Unified\Unified_to\Models\Operations\RemoveTicketingTicketRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
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
     * Update a customer
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse
     */
	public function updateTicketingCustomer(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/customer/{id}', \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingCustomer", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTicketingCustomerResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingCustomer = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingCustomer', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a note
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse
     */
	public function updateTicketingNote(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{id}', \Unified\Unified_to\Models\Operations\UpdateTicketingNoteRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTicketingNoteResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->ticketingNote = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TicketingNote', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a ticket
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTicketingTicketResponse
     */
	public function updateTicketingTicket(
        ?\Unified\Unified_to\Models\Operations\UpdateTicketingTicketRequest $request,
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
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
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