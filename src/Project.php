<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Project
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Create a project
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateTaskProjectRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateTaskProjectResponse
     */
    public function createTaskProject(
        ?\Unified\Unified_to\Models\Operations\CreateTaskProjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateTaskProjectResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project', \Unified\Unified_to\Models\Operations\CreateTaskProjectRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'taskProject', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateTaskProjectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->taskProject = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TaskProject', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a project
     *
     * @param  \Unified\Unified_to\Models\Operations\GetTaskProjectRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetTaskProjectResponse
     */
    public function getTaskProject(
        ?\Unified\Unified_to\Models\Operations\GetTaskProjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetTaskProjectResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project/{id}', \Unified\Unified_to\Models\Operations\GetTaskProjectRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetTaskProjectRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetTaskProjectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->taskProject = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TaskProject', 'json');
            }
        }

        return $response;
    }

    /**
     * List all projects
     *
     * @param  \Unified\Unified_to\Models\Operations\ListTaskProjectsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListTaskProjectsResponse
     */
    public function listTaskProjects(
        ?\Unified\Unified_to\Models\Operations\ListTaskProjectsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListTaskProjectsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project', \Unified\Unified_to\Models\Operations\ListTaskProjectsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListTaskProjectsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListTaskProjectsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->taskProjects = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\TaskProject>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a project
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchTaskProjectRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchTaskProjectResponse
     */
    public function patchTaskProject(
        ?\Unified\Unified_to\Models\Operations\PatchTaskProjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchTaskProjectResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project/{id}', \Unified\Unified_to\Models\Operations\PatchTaskProjectRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'taskProject', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchTaskProjectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->taskProject = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TaskProject', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a project
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveTaskProjectRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveTaskProjectResponse
     */
    public function removeTaskProject(
        ?\Unified\Unified_to\Models\Operations\RemoveTaskProjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveTaskProjectResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project/{id}', \Unified\Unified_to\Models\Operations\RemoveTaskProjectRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveTaskProjectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (($httpResponse->getStatusCode() >= 200 && $httpResponse->getStatusCode() < 300)) {
        } else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string) $httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a project
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateTaskProjectRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateTaskProjectResponse
     */
    public function updateTaskProject(
        ?\Unified\Unified_to\Models\Operations\UpdateTaskProjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateTaskProjectResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/task/{connection_id}/project/{id}', \Unified\Unified_to\Models\Operations\UpdateTaskProjectRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'taskProject', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateTaskProjectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->taskProject = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\TaskProject', 'json');
            }
        }

        return $response;
    }
}