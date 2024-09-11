<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** CrmContact - A contact represents a person that optionally is associated with a deal and/or a company */
class CrmContact
{
    /**
     *
     * @var ?PropertyCrmContactAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmContactAddress|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmContactAddress $address = null;

    /**
     *
     * @var ?string $company
     */
    #[\JMS\Serializer\Annotation\SerializedName('company')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $company = null;

    /**
     * An array of company IDs associated with this contact
     *
     * @var ?array<string> $companyIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $companyIds = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of deal IDs associated with this contact
     *
     * @var ?array<string> $dealIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('deal_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     * An array of email addresses for this contact
     *
     * @var ?array<CrmEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CrmEmail>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The raw data returned by the integration for this contact
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * An array of telephones for this contact
     *
     * @var ?array<CrmTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CrmTelephone>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * @param  ?PropertyCrmContactAddress  $address
     * @param  ?string  $company
     * @param  ?array<string>  $companyIds
     * @param  ?\DateTime  $createdAt
     * @param  ?array<string>  $dealIds
     * @param  ?array<CrmEmail>  $emails
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<CrmTelephone>  $telephones
     * @param  ?string  $title
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(?PropertyCrmContactAddress $address = null, ?string $company = null, ?array $companyIds = null, ?\DateTime $createdAt = null, ?array $dealIds = null, ?array $emails = null, ?string $id = null, ?string $name = null, ?array $raw = null, ?array $telephones = null, ?string $title = null, ?\DateTime $updatedAt = null, ?string $userId = null)
    {
        $this->address = $address;
        $this->company = $company;
        $this->companyIds = $companyIds;
        $this->createdAt = $createdAt;
        $this->dealIds = $dealIds;
        $this->emails = $emails;
        $this->id = $id;
        $this->name = $name;
        $this->raw = $raw;
        $this->telephones = $telephones;
        $this->title = $title;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}