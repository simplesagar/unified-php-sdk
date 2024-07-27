<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** EnrichPerson - A person object from an enrichment integration */
class EnrichPerson
{
    /**
     * The address of the person
     *
     * @var ?\Unified\Unified_to\Models\Shared\PropertyEnrichPersonAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyEnrichPersonAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyEnrichPersonAddress $address = null;

    #[\JMS\Serializer\Annotation\SerializedName('bio')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bio = null;

    #[\JMS\Serializer\Annotation\SerializedName('birthdate')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $birthdate = null;

    #[\JMS\Serializer\Annotation\SerializedName('company')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $company = null;

    #[\JMS\Serializer\Annotation\SerializedName('company_domain')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyDomain = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     * An array of email addresses for this person
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\EnrichEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\EnrichEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;

    #[\JMS\Serializer\Annotation\SerializedName('facebook_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $facebookUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('gender')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\Gender>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Gender $gender = null;

    #[\JMS\Serializer\Annotation\SerializedName('github_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $githubUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('github_username')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $githubUsername = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    #[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('linkedin_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $linkedinUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * The raw data returned by the integration for this person
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     * An array of telephones for this person
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\EnrichTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\EnrichTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('twitter_handle')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $twitterHandle = null;

    #[\JMS\Serializer\Annotation\SerializedName('twitter_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $twitterUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('utc_offset')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $utcOffset = null;

    /**
     * $workHistories
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\EnrichPersonWorkHistory> $workHistories
     */
    #[\JMS\Serializer\Annotation\SerializedName('work_histories')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\EnrichPersonWorkHistory>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $workHistories = null;

    public function __construct()
    {
        $this->address = null;
        $this->bio = null;
        $this->birthdate = null;
        $this->company = null;
        $this->companyDomain = null;
        $this->createdAt = null;
        $this->emails = null;
        $this->facebookUrl = null;
        $this->gender = null;
        $this->githubUrl = null;
        $this->githubUsername = null;
        $this->id = null;
        $this->imageUrl = null;
        $this->linkedinUrl = null;
        $this->name = null;
        $this->raw = null;
        $this->telephones = null;
        $this->timezone = null;
        $this->title = null;
        $this->twitterHandle = null;
        $this->twitterUrl = null;
        $this->updatedAt = null;
        $this->utcOffset = null;
        $this->workHistories = null;
    }
}