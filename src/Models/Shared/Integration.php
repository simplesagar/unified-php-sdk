<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** Integration - Informational object for supported integrations. */
class Integration
{
    #[\JMS\Serializer\Annotation\SerializedName('active_healthy_connections')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $activeHealthyConnections = null;

    /**
     * $api
     *
     * @var ?array<string, mixed> $api
     */
    #[\JMS\Serializer\Annotation\SerializedName('api')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $api = null;

    #[\JMS\Serializer\Annotation\SerializedName('api_docs_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $apiDocsUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('beta')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $beta = null;

    /**
     * The categories of support solutions that this integration has
     *
     * @var array<\Unified\Unified_to\Models\Shared\PropertyIntegrationCategories> $categories
     */
    #[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<enum<Unified\Unified_to\Models\Shared\PropertyIntegrationCategories>>')]
    public array $categories;

    #[\JMS\Serializer\Annotation\SerializedName('color')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $color = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    #[\JMS\Serializer\Annotation\SerializedName('fa_icon')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $faIcon = null;

    #[\JMS\Serializer\Annotation\SerializedName('featured')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $featured = null;

    #[\JMS\Serializer\Annotation\SerializedName('in_progress')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $inProgress;

    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;

    #[\JMS\Serializer\Annotation\SerializedName('logo_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $logoUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;

    #[\JMS\Serializer\Annotation\SerializedName('popularity')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $popularity = null;

    #[\JMS\Serializer\Annotation\SerializedName('rate_limit_description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $rateLimitDescription = null;

    /**
     * $support
     *
     * @var ?array<string, \Unified\Unified_to\Models\Shared\IntegrationSupport> $support
     */
    #[\JMS\Serializer\Annotation\SerializedName('support')]
    #[\JMS\Serializer\Annotation\Type('array<string, Unified\Unified_to\Models\Shared\IntegrationSupport>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $support = null;

    #[\JMS\Serializer\Annotation\SerializedName('tested_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $testedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('text_color')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $textColor = null;

    /**
     * instructions for the user on how to find the token/key
     *
     * @var ?array<string> $tokenInstructions
     */
    #[\JMS\Serializer\Annotation\SerializedName('token_instructions')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokenInstructions = null;

    /**
     * if auth_types = 'token'
     *
     * @var ?array<string> $tokenNames
     */
    #[\JMS\Serializer\Annotation\SerializedName('token_names')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokenNames = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('web_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $webUrl = null;

    public function __construct()
    {
        $this->activeHealthyConnections = null;
        $this->api = null;
        $this->apiDocsUrl = null;
        $this->beta = null;
        $this->categories = [];
        $this->color = null;
        $this->createdAt = null;
        $this->description = null;
        $this->faIcon = null;
        $this->featured = null;
        $this->inProgress = false;
        $this->isActive = null;
        $this->logoUrl = null;
        $this->name = '';
        $this->popularity = null;
        $this->rateLimitDescription = null;
        $this->support = null;
        $this->testedAt = null;
        $this->textColor = null;
        $this->tokenInstructions = null;
        $this->tokenNames = null;
        $this->type = '';
        $this->updatedAt = null;
        $this->webUrl = null;
    }
}