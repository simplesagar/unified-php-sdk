<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PaymentPayout
{
    /**
     *
     * @var ?string $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

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
     * @var ?PaymentPayoutStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PaymentPayoutStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PaymentPayoutStatus $status = null;

    /**
     *
     * @var float $totalAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    public float $totalAmount;

    /**
     *
     * @var ?string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     * @param  float  $totalAmount
     * @param  ?string  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $id
     * @param  ?string  $notes
     * @param  ?array<string, mixed>  $raw
     * @param  ?PaymentPayoutStatus  $status
     * @param  ?string  $updatedAt
     */
    public function __construct(float $totalAmount, ?string $createdAt = null, ?string $currency = null, ?string $id = null, ?string $notes = null, ?array $raw = null, ?PaymentPayoutStatus $status = null, ?string $updatedAt = null)
    {
        $this->totalAmount = $totalAmount;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->id = $id;
        $this->notes = $notes;
        $this->raw = $raw;
        $this->status = $status;
        $this->updatedAt = $updatedAt;
    }
}