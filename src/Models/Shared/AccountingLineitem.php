<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingLineitem
{
    /**
     *
     * @var ?string $accountId
     */
    #[\JMS\Serializer\Annotation\SerializedName('account_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?float $discountAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('discount_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $discountAmount = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $itemDescription
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemDescription = null;

    /**
     *
     * @var ?string $itemId
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemId = null;

    /**
     *
     * @var ?string $itemName
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemName = null;

    /**
     *
     * @var ?string $itemSku
     */
    #[\JMS\Serializer\Annotation\SerializedName('item_sku')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $itemSku = null;

    /**
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?float $refundAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('refund_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $refundAmount = null;

    /**
     *
     * @var ?\DateTime $refundedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('refunded_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $refundedAt = null;

    /**
     *
     * @var ?float $taxAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

    /**
     *
     * @var ?string $taxrateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('taxrate_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $taxrateId = null;

    /**
     *
     * @var ?float $totalAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?float $unitAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('unit_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $unitAmount = null;

    /**
     *
     * @var ?float $unitQuantity
     */
    #[\JMS\Serializer\Annotation\SerializedName('unit_quantity')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $unitQuantity = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $accountId
     * @param  ?\DateTime  $createdAt
     * @param  ?float  $discountAmount
     * @param  ?string  $id
     * @param  ?string  $itemDescription
     * @param  ?string  $itemId
     * @param  ?string  $itemName
     * @param  ?string  $itemSku
     * @param  ?string  $notes
     * @param  ?float  $refundAmount
     * @param  ?\DateTime  $refundedAt
     * @param  ?float  $taxAmount
     * @param  ?string  $taxrateId
     * @param  ?float  $totalAmount
     * @param  ?float  $unitAmount
     * @param  ?float  $unitQuantity
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $accountId = null, ?\DateTime $createdAt = null, ?float $discountAmount = null, ?string $id = null, ?string $itemDescription = null, ?string $itemId = null, ?string $itemName = null, ?string $itemSku = null, ?string $notes = null, ?float $refundAmount = null, ?\DateTime $refundedAt = null, ?float $taxAmount = null, ?string $taxrateId = null, ?float $totalAmount = null, ?float $unitAmount = null, ?float $unitQuantity = null, ?\DateTime $updatedAt = null)
    {
        $this->accountId = $accountId;
        $this->createdAt = $createdAt;
        $this->discountAmount = $discountAmount;
        $this->id = $id;
        $this->itemDescription = $itemDescription;
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemSku = $itemSku;
        $this->notes = $notes;
        $this->refundAmount = $refundAmount;
        $this->refundedAt = $refundedAt;
        $this->taxAmount = $taxAmount;
        $this->taxrateId = $taxrateId;
        $this->totalAmount = $totalAmount;
        $this->unitAmount = $unitAmount;
        $this->unitQuantity = $unitQuantity;
        $this->updatedAt = $updatedAt;
    }
}