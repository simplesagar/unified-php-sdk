<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Genai
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
     * Create a prompt
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateGenaiPromptRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateGenaiPromptResponse
     */
    public function createGenaiPrompt(
        ?\Unified\Unified_to\Models\Operations\CreateGenaiPromptRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateGenaiPromptResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/genai/{connection_id}/prompt', \Unified\Unified_to\Models\Operations\CreateGenaiPromptRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'genaiPrompt', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateGenaiPromptResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->genaiPrompt = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\GenaiPrompt', 'json');
            }
        }

        return $response;
    }

    /**
     * List all models
     *
     * @param  \Unified\Unified_to\Models\Operations\ListGenaiModelsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListGenaiModelsResponse
     */
    public function listGenaiModels(
        ?\Unified\Unified_to\Models\Operations\ListGenaiModelsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListGenaiModelsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/genai/{connection_id}/model', \Unified\Unified_to\Models\Operations\ListGenaiModelsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListGenaiModelsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListGenaiModelsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->genaiModels = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\GenaiModel>', 'json');
            }
        }

        return $response;
    }
}