<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingCustomer
{
	#[\JMS\Serializer\Annotation\SerializedName('billing_address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAccountingCustomerBillingAddress $billingAddress = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;
    
    /**
     * $emails
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AccountingEmail> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AccountingEmail>')]
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
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAccountingCustomerRaw $raw = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('shipping_address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAccountingCustomerShippingAddress $shippingAddress = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('tax_exemption')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountingCustomerTaxExemption $taxExemption = null;
    
    /**
     * $telephones
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\AccountingTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AccountingTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->billingAddress = null;
		$this->createdAt = null;
		$this->currency = null;
		$this->emails = null;
		$this->id = null;
		$this->isActive = null;
		$this->name = null;
		$this->raw = null;
		$this->shippingAddress = null;
		$this->taxExemption = null;
		$this->telephones = null;
		$this->updatedAt = null;
	}
}
