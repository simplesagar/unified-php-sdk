<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceInventory
{
    /**
     *
     * @var float $available
     */
    #[\JMS\Serializer\Annotation\SerializedName('available')]
    public float $available;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $itemId
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemId = null;

    /**
     *
     * @var ?string $itemOptionId
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_option_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemOptionId = null;

    /**
     *
     * @var ?string $itemVariantId
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_variant_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemVariantId = null;

    /**
     *
     * @var ?string $locationId
     */
    #[\JMS\Serializer\Annotation\SerializedName('location_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $locationId = null;

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
     * @param  float  $available
     * @param  ?string  $id
     * @param  ?string  $itemId
     * @param  ?string  $itemOptionId
     * @param  ?string  $itemVariantId
     * @param  ?string  $locationId
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(float $available, ?string $id = null, ?string $itemId = null, ?string $itemOptionId = null, ?string $itemVariantId = null, ?string $locationId = null, ?array $raw = null, ?\DateTime $updatedAt = null)
    {
        $this->available = $available;
        $this->id = $id;
        $this->itemId = $itemId;
        $this->itemOptionId = $itemOptionId;
        $this->itemVariantId = $itemVariantId;
        $this->locationId = $locationId;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
    }
}