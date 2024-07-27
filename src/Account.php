<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Account
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
     * Create an account
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateAccountingAccountRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateAccountingAccountResponse
     */
    public function createAccountingAccount(
        ?\Unified\Unified_to\Models\Operations\CreateAccountingAccountRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAccountingAccountResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account', \Unified\Unified_to\Models\Operations\CreateAccountingAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingAccount', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAccountingAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingAccount', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve an account
     *
     * @param  \Unified\Unified_to\Models\Operations\GetAccountingAccountRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingAccountResponse
     */
    public function getAccountingAccount(
        ?\Unified\Unified_to\Models\Operations\GetAccountingAccountRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingAccountResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account/{id}', \Unified\Unified_to\Models\Operations\GetAccountingAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingAccountRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingAccount', 'json');
            }
        }

        return $response;
    }

    /**
     * List all accounts
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingAccountsResponse
     */
    public function listAccountingAccounts(
        ?\Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingAccountsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account', \Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingAccountsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingAccounts = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingAccount>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update an account
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchAccountingAccountRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchAccountingAccountResponse
     */
    public function patchAccountingAccount(
        ?\Unified\Unified_to\Models\Operations\PatchAccountingAccountRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAccountingAccountResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account/{id}', \Unified\Unified_to\Models\Operations\PatchAccountingAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingAccount', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAccountingAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingAccount', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove an account
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveAccountingAccountRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAccountingAccountResponse
     */
    public function removeAccountingAccount(
        ?\Unified\Unified_to\Models\Operations\RemoveAccountingAccountRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAccountingAccountResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account/{id}', \Unified\Unified_to\Models\Operations\RemoveAccountingAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAccountingAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if (true) { /** @phpstan-ignore-line */
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->string = $serializer->deserialize((string) $httpResponse->getBody(), 'string', 'json');
            }
        }

        return $response;
    }

    /**
     * Update an account
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateAccountingAccountRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAccountingAccountResponse
     */
    public function updateAccountingAccount(
        ?\Unified\Unified_to\Models\Operations\UpdateAccountingAccountRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAccountingAccountResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/account/{id}', \Unified\Unified_to\Models\Operations\UpdateAccountingAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingAccount', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAccountingAccountResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingAccount = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingAccount', 'json');
            }
        }

        return $response;
    }
}