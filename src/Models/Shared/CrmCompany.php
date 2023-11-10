<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * CrmCompany - A company represents an organization that optionally is associated with a deal and/or contacts
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class CrmCompany
{
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyCrmCompanyAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyCrmCompanyAddress $address = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * An array of deal IDs associated with this contact
     * 
     * @var ?array<string> $dealIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('deal_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $dealIds = null;
    
    /**
     * $emails
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\CrmEmail> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\CrmEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * The raw data returned by the integration for this company
     * 
     * @var ?\Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw $raw
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyCrmCompanyRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyCrmCompanyRaw $raw = null;
    
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
     * @var ?array<\Unified\Unified_to\Models\Shared\CrmTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\CrmTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
    /**
     * $websites
     * 
     * @var ?array<string> $websites
     */
	#[\JMS\Serializer\Annotation\SerializedName('websites')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $websites = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->createdAt = null;
		$this->dealIds = null;
		$this->emails = null;
		$this->id = null;
		$this->isActive = null;
		$this->name = null;
		$this->raw = null;
		$this->tags = null;
		$this->telephones = null;
		$this->updatedAt = null;
		$this->websites = null;
	}
}
