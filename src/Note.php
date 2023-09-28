<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Note 
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
     * Remove a note
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdResponse
     */
	public function deleteTicketingConnectionIdNoteTicketIdId(
        ?\Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}/{id}', \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdNoteTicketIdIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteTicketingConnectionIdNoteTicketIdIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all notes
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdResponse
     */
	public function getTicketingConnectionIdNoteTicketId(
        ?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}', \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Retrieve a note
     * 
     * @param \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdResponse
     */
	public function getTicketingConnectionIdNoteTicketIdId(
        ?\Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}/{id}', \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetTicketingConnectionIdNoteTicketIdIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Update a note
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdResponse
     */
	public function patchTicketingConnectionIdNoteTicketIdId(
        ?\Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}/{id}', \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchTicketingConnectionIdNoteTicketIdIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Create a note
     * 
     * @param \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdResponse
     */
	public function postTicketingConnectionIdNoteTicketId(
        ?\Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}', \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostTicketingConnectionIdNoteTicketIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
     * Update a note
     * 
     * @param \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdResponse
     */
	public function putTicketingConnectionIdNoteTicketIdId(
        ?\Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ticketing/{connection_id}/note/{ticket_id}/{id}', \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "ticketingNote", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutTicketingConnectionIdNoteTicketIdIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
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
}