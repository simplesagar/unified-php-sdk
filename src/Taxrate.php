<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Taxrate
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
     * Create a taxrate
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse
     */
    public function createAccountingTaxrate(
        ?\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate', \Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingTaxrate', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingTaxrate = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingTaxrate', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a taxrate
     *
     * @param  \Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse
     */
    public function getAccountingTaxrate(
        ?\Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate/{id}', \Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingTaxrate = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingTaxrate', 'json');
            }
        }

        return $response;
    }

    /**
     * List all taxrates
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse
     */
    public function listAccountingTaxrates(
        ?\Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate', \Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingTaxrates = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingTaxrate>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a taxrate
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse
     */
    public function patchAccountingTaxrate(
        ?\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate/{id}', \Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingTaxrate', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingTaxrate = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingTaxrate', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a taxrate
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse
     */
    public function removeAccountingTaxrate(
        ?\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate/{id}', \Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse();
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
     * Update a taxrate
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse
     */
    public function updateAccountingTaxrate(
        ?\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/taxrate/{id}', \Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingTaxrate', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingTaxrate = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingTaxrate', 'json');
            }
        }

        return $response;
    }
}