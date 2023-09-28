<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Hris 
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
     * Remove a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse
     */
	public function deleteHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteHrisConnectionIdEmployeeIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Remove a Group
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdResponse
     */
	public function deleteHrisConnectionIdGroupId(
        ?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteHrisConnectionIdGroupIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List all Employees
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse
     */
	public function getHrisConnectionIdEmployee(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployees = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\HrisEmployee>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse
     */
	public function getHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all Groups
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupResponse
     */
	public function getHrisConnectionIdGroup(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroups = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\HrisGroup>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a Group
     * 
     * @param \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdResponse
     */
	public function getHrisConnectionIdGroupId(
        ?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse
     */
	public function patchHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Group
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdResponse
     */
	public function patchHrisConnectionIdGroupId(
        ?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse
     */
	public function postHrisConnectionIdEmployee(
        ?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee', \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a Group
     * 
     * @param \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupResponse
     */
	public function postHrisConnectionIdGroup(
        ?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group', \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Employee
     * 
     * @param \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse
     */
	public function putHrisConnectionIdEmployeeId(
        ?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/employee/{id}', \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisEmployee", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisEmployee = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisEmployee', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a Group
     * 
     * @param \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdResponse
     */
	public function putHrisConnectionIdGroupId(
        ?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/hris/{connection_id}/group/{id}', \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "hrisGroup", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->hrisGroup = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\HrisGroup', 'json');
            }
        }

        return $response;
    }
}