<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class KmsSpace
{
    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isActive = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $parentSpaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_space_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $parentSpaceId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

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
     * @param  string  $name
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?string  $parentSpaceId
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(string $name, ?\DateTime $createdAt = null, ?string $description = null, ?string $id = null, ?bool $isActive = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?string $userId = null, ?string $parentSpaceId = 'sp')
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->parentSpaceId = $parentSpaceId;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}