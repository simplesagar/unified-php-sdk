<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsCandidate
{
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsCandidateAddress $address = null;

    #[\JMS\Serializer\Annotation\SerializedName('company_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyId = null;

    #[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('date_of_birth')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dateOfBirth = null;

    /**
     * $emails
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;

    #[\JMS\Serializer\Annotation\SerializedName('external_identifier')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $externalIdentifier = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    #[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;

    /**
     * URLs for web pages containing additional material about the candidate (LinkedIn, other social media, articles, etc.)
     *
     * @var ?array<string> $linkUrls
     */
    #[\JMS\Serializer\Annotation\SerializedName('link_urls')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $linkUrls = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    #[\JMS\Serializer\Annotation\SerializedName('origin')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\Origin>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Origin $origin = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     * $sources
     *
     * @var ?array<string> $sources
     */
    #[\JMS\Serializer\Annotation\SerializedName('sources')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $sources = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;

    /**
     * $telephones
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\AtsTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AtsTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;

    public function __construct()
    {
        $this->address = null;
        $this->companyId = null;
        $this->companyName = null;
        $this->createdAt = null;
        $this->dateOfBirth = null;
        $this->emails = null;
        $this->externalIdentifier = null;
        $this->id = null;
        $this->imageUrl = null;
        $this->linkUrls = null;
        $this->name = null;
        $this->origin = null;
        $this->raw = null;
        $this->sources = null;
        $this->tags = null;
        $this->telephones = null;
        $this->title = null;
        $this->updatedAt = null;
        $this->userId = null;
    }
}