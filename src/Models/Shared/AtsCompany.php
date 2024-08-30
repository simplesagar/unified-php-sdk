<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsCompany
{
    /**
     *
     * @var ?PropertyAtsCompanyAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAtsCompanyAddress|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsCompanyAddress $address = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $parentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentId = null;

    /**
     *
     * @var ?string $phone
     */
    #[\JMS\Serializer\Annotation\SerializedName('phone')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phone = null;

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
     * $recruiterIds
     *
     * @var ?array<string> $recruiterIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('recruiter_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $recruiterIds = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $websiteUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('website_url')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $websiteUrl = null;

    /**
     * @param  ?string  $name
     * @param  ?PropertyAtsCompanyAddress  $address
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?string  $parentId
     * @param  ?string  $phone
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<string>  $recruiterIds
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $websiteUrl
     */
    public function __construct(?string $name = null, ?PropertyAtsCompanyAddress $address = null, ?\DateTime $createdAt = null, ?string $id = null, ?string $parentId = null, ?string $phone = null, ?array $raw = null, ?array $recruiterIds = null, ?\DateTime $updatedAt = null, ?string $websiteUrl = null)
    {
        $this->name = $name;
        $this->address = $address;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->parentId = $parentId;
        $this->phone = $phone;
        $this->raw = $raw;
        $this->recruiterIds = $recruiterIds;
        $this->updatedAt = $updatedAt;
        $this->websiteUrl = $websiteUrl;
    }
}