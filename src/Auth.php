<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

use Unified\Unified_to\Models\Operations;

class Auth
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
     * Create connection indirectly
     *
     * Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.
     *
     * @param  Operations\GetUnifiedIntegrationAuthRequest  $request
     * @return Operations\GetUnifiedIntegrationAuthResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getUnifiedIntegrationAuth(
        ?Operations\GetUnifiedIntegrationAuthRequest $request,
    ): Operations\GetUnifiedIntegrationAuthResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/auth/{workspace_id}/{integration_type}', Operations\GetUnifiedIntegrationAuthRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\GetUnifiedIntegrationAuthRequest::class, $request));
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GetUnifiedIntegrationAuthResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    res: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Sign in a user
     *
     * Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and email are returned inside a jwt parameter, which is a JSON web token that is base-64 encoded.
     *
     * @param  Operations\GetUnifiedIntegrationLoginRequest  $request
     * @return Operations\GetUnifiedIntegrationLoginResponse
     * @throws \Unified\Unified_to\Models\Errors\SDKException
     */
    public function getUnifiedIntegrationLogin(
        ?Operations\GetUnifiedIntegrationLoginRequest $request,
    ): Operations\GetUnifiedIntegrationLoginResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/integration/login/{workspace_id}/{integration_type}', Operations\GetUnifiedIntegrationLoginRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\GetUnifiedIntegrationLoginRequest::class, $request));
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $obj = $httpResponse->getBody()->getContents();

                return new Operations\GetUnifiedIntegrationLoginResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    res: $obj);
            } else {
                throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode >= 400 && $statusCode < 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Unified\Unified_to\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Unified\Unified_to\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}