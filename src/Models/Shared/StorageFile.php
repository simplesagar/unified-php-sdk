<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class StorageFile
{
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    #[\JMS\Serializer\Annotation\SerializedName('download_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $downloadUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('hash')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $hash = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    #[\JMS\Serializer\Annotation\SerializedName('mime_type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $mimeType = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    #[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentId = null;

    /**
     * $permissions
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\StoragePermission> $permissions
     */
    #[\JMS\Serializer\Annotation\SerializedName('permissions')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\StoragePermission>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $permissions = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $size = null;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\StorageFileType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?StorageFileType $type = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;

    public function __construct()
    {
        $this->createdAt = null;
        $this->description = null;
        $this->downloadUrl = null;
        $this->hash = null;
        $this->id = null;
        $this->mimeType = null;
        $this->name = null;
        $this->parentId = null;
        $this->permissions = null;
        $this->raw = null;
        $this->size = null;
        $this->type = null;
        $this->updatedAt = null;
        $this->userId = null;
    }
}