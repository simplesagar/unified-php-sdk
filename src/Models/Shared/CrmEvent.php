<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** CrmEvent - An event represents an event, activity, or engagement and is always associated with a deal, contact, or company */
class CrmEvent
{
    /**
     * The call object, when type = call
     *
     * @var ?PropertyCrmEventCall $call
     */
    #[\JMS\Serializer\Annotation\SerializedName('call')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventCall|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventCall $call = null;

    /**
     * An array of company IDs associated with this event
     *
     * @var ?array<string> $companyIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $companyIds = null;

    /**
     * An array of contact IDs associated with this event
     *
     * @var ?array<string> $contactIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('contact_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $contactIds = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of deal IDs associated with this event
     *
     * @var ?array<string> $dealIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('deal_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     * The email object, when type = email
     *
     * @var ?PropertyCrmEventEmail $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventEmail|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventEmail $email = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $leadIds
     *
     * @var ?array<string> $leadIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('lead_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $leadIds = null;

    /**
     * The meeting object, when type = meeting
     *
     * @var ?PropertyCrmEventMeeting $meeting
     */
    #[\JMS\Serializer\Annotation\SerializedName('meeting')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventMeeting|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventMeeting $meeting = null;

    /**
     * The note object, when type = note
     *
     * @var ?PropertyCrmEventNote $note
     */
    #[\JMS\Serializer\Annotation\SerializedName('note')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventNote|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventNote $note = null;

    /**
     * The raw data returned by the integration for this event.
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * The task object, when type = task
     *
     * @var ?PropertyCrmEventTask $task
     */
    #[\JMS\Serializer\Annotation\SerializedName('task')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyCrmEventTask|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyCrmEventTask $task = null;

    /**
     *
     * @var ?CrmEventType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CrmEventType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CrmEventType $type = null;

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
     * @param  ?PropertyCrmEventCall  $call
     * @param  ?array<string>  $companyIds
     * @param  ?array<string>  $contactIds
     * @param  ?\DateTime  $createdAt
     * @param  ?array<string>  $dealIds
     * @param  ?PropertyCrmEventEmail  $email
     * @param  ?string  $id
     * @param  ?array<string>  $leadIds
     * @param  ?PropertyCrmEventMeeting  $meeting
     * @param  ?PropertyCrmEventNote  $note
     * @param  ?array<string, mixed>  $raw
     * @param  ?PropertyCrmEventTask  $task
     * @param  ?CrmEventType  $type
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(?PropertyCrmEventCall $call = null, ?array $companyIds = null, ?array $contactIds = null, ?\DateTime $createdAt = null, ?array $dealIds = null, ?PropertyCrmEventEmail $email = null, ?string $id = null, ?array $leadIds = null, ?PropertyCrmEventMeeting $meeting = null, ?PropertyCrmEventNote $note = null, ?array $raw = null, ?PropertyCrmEventTask $task = null, ?CrmEventType $type = null, ?\DateTime $updatedAt = null, ?string $userId = null)
    {
        $this->call = $call;
        $this->companyIds = $companyIds;
        $this->contactIds = $contactIds;
        $this->createdAt = $createdAt;
        $this->dealIds = $dealIds;
        $this->email = $email;
        $this->id = $id;
        $this->leadIds = $leadIds;
        $this->meeting = $meeting;
        $this->note = $note;
        $this->raw = $raw;
        $this->task = $task;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}