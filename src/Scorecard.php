<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Scorecard
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
     * Create a scorecard
     *
     * @param  \Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest  $request
     * @return \Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse
     */
    public function createAtsScorecard(
        ?\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest $request,
    ): \Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard', \Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsScorecard', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsScorecard = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsScorecard', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve a scorecard
     *
     * @param  \Unified\Unified_to\Models\Operations\GetAtsScorecardRequest  $request
     * @return \Unified\Unified_to\Models\Operations\GetAtsScorecardResponse
     */
    public function getAtsScorecard(
        ?\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest $request,
    ): \Unified\Unified_to\Models\Operations\GetAtsScorecardResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard/{id}', \Unified\Unified_to\Models\Operations\GetAtsScorecardRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\GetAtsScorecardResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsScorecard = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsScorecard', 'json');
            }
        }

        return $response;
    }

    /**
     * List all scorecards
     *
     * @param  \Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse
     */
    public function listAtsScorecards(
        ?\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard', \Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsScorecards = $serializer->deserialize((string) $httpResponse->getBody(), 'array<Unified\Unified_to\Models\Shared\AtsScorecard>', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a scorecard
     *
     * @param  \Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest  $request
     * @return \Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse
     */
    public function patchAtsScorecard(
        ?\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest $request,
    ): \Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard/{id}', \Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsScorecard', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsScorecard = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsScorecard', 'json');
            }
        }

        return $response;
    }

    /**
     * Remove a scorecard
     *
     * @param  \Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest  $request
     * @return \Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse
     */
    public function removeAtsScorecard(
        ?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest $request,
    ): \Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard/{id}', \Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse();
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
     * Update a scorecard
     *
     * @param  \Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest  $request
     * @return \Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse
     */
    public function updateAtsScorecard(
        ?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest $request,
    ): \Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ats/{connection_id}/scorecard/{id}', \Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'atsScorecard', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->atsScorecard = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\AtsScorecard', 'json');
            }
        }

        return $response;
    }
}