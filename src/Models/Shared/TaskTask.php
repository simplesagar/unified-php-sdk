<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TaskTask
{
    /**
     * $assignedUserIds
     *
     * @var ?array<string> $assignedUserIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('assigned_user_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $assignedUserIds = null;

    /**
     *
     * @var ?\DateTime $completedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('completed_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $completedAt = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $creatorUserId
     */
    #[\JMS\Serializer\Annotation\SerializedName('creator_user_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $creatorUserId = null;

    /**
     *
     * @var ?\DateTime $dueAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('due_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dueAt = null;

    /**
     * $followerUserIds
     *
     * @var ?array<string> $followerUserIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('follower_user_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $followerUserIds = null;

    /**
     * $groupIds
     *
     * @var ?array<string> $groupIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('group_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $groupIds = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     *
     * @var ?string $priority
     */
    #[\JMS\Serializer\Annotation\SerializedName('priority')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $priority = null;

    /**
     *
     * @var ?string $projectId
     */
    #[\JMS\Serializer\Annotation\SerializedName('project_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $projectId = null;

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
     * @var ?TaskTaskStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\TaskTaskStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?TaskTaskStatus $status = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?array<string>  $assignedUserIds
     * @param  ?\DateTime  $completedAt
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $creatorUserId
     * @param  ?\DateTime  $dueAt
     * @param  ?array<string>  $followerUserIds
     * @param  ?array<string>  $groupIds
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $notes
     * @param  ?string  $parentId
     * @param  ?string  $priority
     * @param  ?string  $projectId
     * @param  ?array<string, mixed>  $raw
     * @param  ?TaskTaskStatus  $status
     * @param  ?array<string>  $tags
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $url
     */
    public function __construct(?array $assignedUserIds = null, ?\DateTime $completedAt = null, ?\DateTime $createdAt = null, ?string $creatorUserId = null, ?\DateTime $dueAt = null, ?array $followerUserIds = null, ?array $groupIds = null, ?string $id = null, ?string $name = null, ?string $notes = null, ?string $parentId = null, ?string $priority = null, ?string $projectId = null, ?array $raw = null, ?TaskTaskStatus $status = null, ?array $tags = null, ?\DateTime $updatedAt = null, ?string $url = null)
    {
        $this->assignedUserIds = $assignedUserIds;
        $this->completedAt = $completedAt;
        $this->createdAt = $createdAt;
        $this->creatorUserId = $creatorUserId;
        $this->dueAt = $dueAt;
        $this->followerUserIds = $followerUserIds;
        $this->groupIds = $groupIds;
        $this->id = $id;
        $this->name = $name;
        $this->notes = $notes;
        $this->parentId = $parentId;
        $this->priority = $priority;
        $this->projectId = $projectId;
        $this->raw = $raw;
        $this->status = $status;
        $this->tags = $tags;
        $this->updatedAt = $updatedAt;
        $this->url = $url;
    }
}