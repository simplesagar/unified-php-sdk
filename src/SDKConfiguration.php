<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Shared\Security $security = null;
    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '1.0';

    public string $sdkVersion = '0.15.41';

    public string $genVersion = '2.382.2';

    public string $userAgent = 'speakeasy-sdk/php 0.15.41 2.382.2 1.0 unified/unified-to';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        return UnifiedTo::SERVERS[$this->serverIndex];
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Shared\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Shared\Security();
            $security->jwt = $this->securitySource->call($this);

            return $security;
        } else {
            return $this->security;
        }
    }
}