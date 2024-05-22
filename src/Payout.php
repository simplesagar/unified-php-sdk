<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Payout
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
     * Retrieve a payout
     *
     * @param  \Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse
     */
    public function getPaymentPayout(
        ?\Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payout/{id}', \Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayout = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\PaymentPayout', 'json');
            }
        }

        return $response;
    }

    /**
     * List all payouts
     *
     * @param  \Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse
     */
    public function listPaymentPayouts(
        ?\Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment/{connection_id}/payout', \Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->paymentPayouts = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\PaymentPayout>', 'json');
            }
        }

        return $response;
    }
}