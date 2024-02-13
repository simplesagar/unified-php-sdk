<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * Webhook - A webhook is used to POST new/updated information to your server.
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class Webhook
{
	#[\JMS\Serializer\Annotation\SerializedName('checked_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $checkedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('connection_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $connectionId;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('environment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $environment = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('event')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\Event>')]
    public Event $event;
    
	#[\JMS\Serializer\Annotation\SerializedName('fields')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $fields = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('hook_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $hookUrl;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('integration_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $integrationType = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('interval')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $interval = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_healthy')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isHealthy = null;
    
    /**
     * $meta
     * 
     * @var ?array<string, mixed> $meta
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $meta = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('object_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\ObjectType>')]
    public ObjectType $objectType;
    
	#[\JMS\Serializer\Annotation\SerializedName('page_max_limit')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $pageMaxLimit = null;
    
    /**
     * An array of the most revent virtual webhook runs
     * 
     * @var ?array<string> $runs
     */
	#[\JMS\Serializer\Annotation\SerializedName('runs')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $runs = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('webhook_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\WebhookWebhookType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?WebhookWebhookType $webhookType = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('workspace_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $workspaceId = null;
    
	public function __construct()
	{
		$this->checkedAt = null;
		$this->connectionId = "";
		$this->createdAt = null;
		$this->environment = null;
		$this->event = \Unified\Unified_to\Models\Shared\Event::Updated;
		$this->fields = null;
		$this->hookUrl = "";
		$this->id = null;
		$this->integrationType = null;
		$this->interval = null;
		$this->isHealthy = null;
		$this->meta = null;
		$this->objectType = \Unified\Unified_to\Models\Shared\ObjectType::AccountingAccount;
		$this->pageMaxLimit = null;
		$this->runs = null;
		$this->updatedAt = null;
		$this->webhookType = null;
		$this->workspaceId = null;
	}
}
