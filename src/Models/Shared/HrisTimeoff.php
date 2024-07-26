<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisTimeoff
{
    #[\JMS\Serializer\Annotation\SerializedName('approved_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $approvedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('approver_user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $approverUserId = null;

    #[\JMS\Serializer\Annotation\SerializedName('comments')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $comments = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('end_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $endAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('start_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $startAt;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\HrisTimeoffStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisTimeoffStatus $status = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\HrisTimeoffType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisTimeoffType $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $userId;

    public function __construct()
    {
        $this->approvedAt = null;
        $this->approverUserId = null;
        $this->comments = null;
        $this->createdAt = null;
        $this->endAt = null;
        $this->id = null;
        $this->raw = null;
        $this->startAt = new \DateTime();
        $this->status = null;
        $this->type = null;
        $this->updatedAt = null;
        $this->userId = '';
    }
}