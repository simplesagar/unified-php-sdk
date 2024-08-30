<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisLocation
{
    /**
     *
     * @var ?PropertyHrisLocationAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyHrisLocationAddress|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyHrisLocationAddress $address = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    /**
     *
     * @var ?string $externalIdentifier
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_identifier')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalIdentifier = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;

    /**
     *
     * @var ?bool $isHq
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_hq')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isHq = null;

    /**
     *
     * @var ?string $languageLocale
     */
    #[\JMS\Serializer\Annotation\SerializedName('language_locale')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $languageLocale = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     * $telephones
     *
     * @var ?array<HrisTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisTelephone>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    /**
     *
     * @var ?string $timezone
     */
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?PropertyHrisLocationAddress  $address
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $description
     * @param  ?string  $externalIdentifier
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?bool  $isHq
     * @param  ?string  $languageLocale
     * @param  ?string  $name
     * @param  ?string  $parentId
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<HrisTelephone>  $telephones
     * @param  ?string  $timezone
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?PropertyHrisLocationAddress $address = null, ?\DateTime $createdAt = null, ?string $currency = null, ?string $description = null, ?string $externalIdentifier = null, ?string $id = null, ?bool $isActive = null, ?bool $isHq = null, ?string $languageLocale = null, ?string $name = null, ?string $parentId = null, ?array $raw = null, ?array $telephones = null, ?string $timezone = null, ?\DateTime $updatedAt = null)
    {
        $this->address = $address;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->description = $description;
        $this->externalIdentifier = $externalIdentifier;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->isHq = $isHq;
        $this->languageLocale = $languageLocale;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->raw = $raw;
        $this->telephones = $telephones;
        $this->timezone = $timezone;
        $this->updatedAt = $updatedAt;
    }
}