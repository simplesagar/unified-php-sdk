<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Document 
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
     * Create a document
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest $request
     * @param \Unified\Unified_to\Models\Operations\CreateAtsDocumentSecurity $security
     * @return \Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse
     */
	public function createAtsDocument(
        ?\Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest $request,
        \Unified\Unified_to\Models\Operations\CreateAtsDocumentSecurity $security,
    ): \Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document', \Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsDocument", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsDocument = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsDocument', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a document
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAtsDocumentRequest $request
     * @param \Unified\Unified_to\Models\Operations\GetAtsDocumentSecurity $security
     * @return \Unified\Unified_to\Models\Operations\GetAtsDocumentResponse
     */
	public function getAtsDocument(
        ?\Unified\Unified_to\Models\Operations\GetAtsDocumentRequest $request,
        \Unified\Unified_to\Models\Operations\GetAtsDocumentSecurity $security,
    ): \Unified\Unified_to\Models\Operations\GetAtsDocumentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document/{id}', \Unified\Unified_to\Models\Operations\GetAtsDocumentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsDocumentRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsDocumentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsDocument = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsDocument', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all documents
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest $request
     * @param \Unified\Unified_to\Models\Operations\ListAtsDocumentsSecurity $security
     * @return \Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse
     */
	public function listAtsDocuments(
        ?\Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest $request,
        \Unified\Unified_to\Models\Operations\ListAtsDocumentsSecurity $security,
    ): \Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document', \Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsDocuments = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsDocument>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a document
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest $request
     * @param \Unified\Unified_to\Models\Operations\PatchAtsDocumentSecurity $security
     * @return \Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse
     */
	public function patchAtsDocument(
        ?\Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest $request,
        \Unified\Unified_to\Models\Operations\PatchAtsDocumentSecurity $security,
    ): \Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document/{id}', \Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsDocument", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsDocument = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsDocument', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a document
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest $request
     * @param \Unified\Unified_to\Models\Operations\RemoveAtsDocumentSecurity $security
     * @return \Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse
     */
	public function removeAtsDocument(
        ?\Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest $request,
        \Unified\Unified_to\Models\Operations\RemoveAtsDocumentSecurity $security,
    ): \Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document/{id}', \Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse();
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
     * Update a document
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest $request
     * @param \Unified\Unified_to\Models\Operations\UpdateAtsDocumentSecurity $security
     * @return \Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse
     */
	public function updateAtsDocument(
        ?\Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest $request,
        \Unified\Unified_to\Models\Operations\UpdateAtsDocumentSecurity $security,
    ): \Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/document/{id}', \Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "atsDocument", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsDocument = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsDocument', 'json');
            }
        }

        return $response;
    }
}