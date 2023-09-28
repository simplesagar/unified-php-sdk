<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Webhook 
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
     * Remove webhook subscription
     * 
     * @param \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdResponse
     */
	public function deleteUnifiedWebhookId(
        ?\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->deleteUnifiedWebhookIdDefaultApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Returns all registered webhooks
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse
     */
	public function getUnifiedWebhook(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhooks = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\Webhook>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve webhook by its ID
     * 
     * @param \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdResponse
     */
	public function getUnifiedWebhookId(
        ?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{id}', \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Webhook', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create webhook subscription
     * 
     * To maintain compatibility with the webhooks specification and Zapier webhooks, only the hook_url field is required in the payload when creating a Webhook.  When updated/new objects are found, the array of objects will be POSTed to the hook_url with the paramater hookId=<hookId>.
     * 
     * @param \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest $request
     * @return \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse
     */
	public function postUnifiedWebhookConnectionIdObject(
        ?\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest $request,
    ): \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/webhook/{connection_id}/{object}', \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "webhook", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->webhook = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\Webhook', 'json');
            }
        }

        return $response;
    }
}