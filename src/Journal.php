<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Journal
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
     * Create a journal
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateAccountingJournalRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateAccountingJournalResponse
     */
    public function createAccountingJournal(
        ?\Unified\Unified_to\Models\Operations\CreateAccountingJournalRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAccountingJournalResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal', \Unified\Unified_to\Models\Operations\CreateAccountingJournalRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingJournal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAccountingJournalResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingJournal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingJournal', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a journal
     *
     * @param  \Unified\Unified_to\Models\Operations\GetAccountingJournalRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetAccountingJournalResponse
     */
    public function getAccountingJournal(
        ?\Unified\Unified_to\Models\Operations\GetAccountingJournalRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAccountingJournalResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal/{id}', \Unified\Unified_to\Models\Operations\GetAccountingJournalRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAccountingJournalRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAccountingJournalResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingJournal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingJournal', 'json');
            }
        }

        return $response;
    }

    /**
     * List all journals
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAccountingJournalsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAccountingJournalsResponse
     */
    public function listAccountingJournals(
        ?\Unified\Unified_to\Models\Operations\ListAccountingJournalsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAccountingJournalsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal', \Unified\Unified_to\Models\Operations\ListAccountingJournalsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAccountingJournalsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAccountingJournalsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingJournals = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AccountingJournal>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a journal
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchAccountingJournalRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchAccountingJournalResponse
     */
    public function patchAccountingJournal(
        ?\Unified\Unified_to\Models\Operations\PatchAccountingJournalRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAccountingJournalResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal/{id}', \Unified\Unified_to\Models\Operations\PatchAccountingJournalRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingJournal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAccountingJournalResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingJournal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingJournal', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a journal
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveAccountingJournalRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAccountingJournalResponse
     */
    public function removeAccountingJournal(
        ?\Unified\Unified_to\Models\Operations\RemoveAccountingJournalRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAccountingJournalResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal/{id}', \Unified\Unified_to\Models\Operations\RemoveAccountingJournalRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAccountingJournalResponse();
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
     * Update a journal
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateAccountingJournalRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAccountingJournalResponse
     */
    public function updateAccountingJournal(
        ?\Unified\Unified_to\Models\Operations\UpdateAccountingJournalRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAccountingJournalResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounting/{connection_id}/journal/{id}', \Unified\Unified_to\Models\Operations\UpdateAccountingJournalRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'accountingJournal', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAccountingJournalResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->accountingJournal = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AccountingJournal', 'json');
            }
        }

        return $response;
    }
}