<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class Person
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
     * Retrieve enrichment information for a person
     *
     * @param  \Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest  $request
     * @return \Unified\Unified_to\Models\Operations\ListEnrichPeopleResponse
     */
    public function listEnrichPeople(
        ?\Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest $request,
    ): \Unified\Unified_to\Models\Operations\ListEnrichPeopleResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/enrich/{connection_id}/person', \Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Unified\Unified_to\Models\Operations\ListEnrichPeopleResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->enrichPerson = $serializer->deserialize((string) $httpResponse->getBody(), 'Unified\Unified_to\Models\Shared\EnrichPerson', 'json');
            }
        }

        return $response;
    }
}