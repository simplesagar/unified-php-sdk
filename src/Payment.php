<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Payment 
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
     * Create a payment
     * 
     * @param \Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest $request
     * @return \Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse
     */
	public function createAccountingPayment(
        ?\Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment', \Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingPayment", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingPayment = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingPayment', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a payment
     * 
     * @param \Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse
     */
	public function getAccountingPayment(
        ?\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingPayment = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingPayment', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List all payments
     * 
     * @param \Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse
     */
	public function listAccountingPayments(
        ?\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment', \Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingPayments = $serializer->deserialize((string)$httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingPayment>', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update a payment
     * 
     * @param \Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest $request
     * @return \Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse
     */
	public function patchAccountingPayment(
        ?\Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingPayment", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingPayment = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingPayment', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Remove a payment
     * 
     * @param \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse
     */
	public function removeAccountingPayment(
        ?\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse();
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
     * Update a payment
     * 
     * @param \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse
     */
	public function updateAccountingPayment(
        ?\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/payment/{id}', \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "accountingPayment", "json");
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingPayment = $serializer->deserialize((string)$httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingPayment', 'json');
            }
        }

        return $response;
    }
}