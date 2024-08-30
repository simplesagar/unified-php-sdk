<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TicketingNote
{
    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $customerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('customer_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerId = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

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
     *
     * @var ?string $ticketId
     */
    #[\JMS\Serializer\Annotation\SerializedName('ticket_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ticketId = null;

    /**
     *
     * @var ?string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;

    /**
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $customerId
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $ticketId
     * @param  ?string  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(?\DateTime $createdAt = null, ?string $customerId = null, ?string $description = null, ?string $id = null, ?array $raw = null, ?string $ticketId = null, ?string $updatedAt = null, ?string $userId = null)
    {
        $this->createdAt = $createdAt;
        $this->customerId = $customerId;
        $this->description = $description;
        $this->id = $id;
        $this->raw = $raw;
        $this->ticketId = $ticketId;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}