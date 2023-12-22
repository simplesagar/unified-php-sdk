<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class IntegrationSupport
{
	#[\JMS\Serializer\Annotation\SerializedName('inbound_fields')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyIntegrationSupportInboundFields')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyIntegrationSupportInboundFields $inboundFields = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_agent_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listAgentId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_application_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listApplicationId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_candidate_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCandidateId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_company_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCompanyId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_contact_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listContactId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_customer_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listCustomerId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_deal_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listDealId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_invoice_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listInvoiceId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_job_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listJobId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_limit')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listLimit = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_offset')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listOffset = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_order')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listOrder = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_parent_id')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listParentId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_query')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listQuery = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_sort_by_created_at')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByCreatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_sort_by_name')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_sort_by_updated_at')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listSortByUpdatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('list_updated_gte')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $listUpdatedGte = null;
    
    /**
     * $methods
     * 
     * @var ?array<string, bool> $methods
     */
	#[\JMS\Serializer\Annotation\SerializedName('methods')]
    #[\JMS\Serializer\Annotation\Type('array<string, bool>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $methods = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('outbound_fields')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyIntegrationSupportOutboundFields')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyIntegrationSupportOutboundFields $outboundFields = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('search_domain')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchDomain = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('search_email')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchEmail = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('search_linkedin_url')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchLinkedinUrl = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('search_name')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('search_twitter')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $searchTwitter = null;
    
    /**
     * $webhookEvents
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\PropertyIntegrationSupportWebhookEvents> $webhookEvents
     */
	#[\JMS\Serializer\Annotation\SerializedName('webhook_events')]
    #[\JMS\Serializer\Annotation\Type('array<enum<Unified\Unified_to\Models\Shared\PropertyIntegrationSupportWebhookEvents>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $webhookEvents = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('webhook_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\WebhookType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WebhookType $webhookType = null;
    
	public function __construct()
	{
		$this->inboundFields = null;
		$this->listAgentId = null;
		$this->listApplicationId = null;
		$this->listCandidateId = null;
		$this->listCompanyId = null;
		$this->listContactId = null;
		$this->listCustomerId = null;
		$this->listDealId = null;
		$this->listInvoiceId = null;
		$this->listJobId = null;
		$this->listLimit = null;
		$this->listOffset = null;
		$this->listOrder = null;
		$this->listParentId = null;
		$this->listQuery = null;
		$this->listSortByCreatedAt = null;
		$this->listSortByName = null;
		$this->listSortByUpdatedAt = null;
		$this->listUpdatedGte = null;
		$this->methods = null;
		$this->outboundFields = null;
		$this->searchDomain = null;
		$this->searchEmail = null;
		$this->searchLinkedinUrl = null;
		$this->searchName = null;
		$this->searchTwitter = null;
		$this->webhookEvents = null;
		$this->webhookType = null;
	}
}
