<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingInvoice
{
    /**
     *
     * @var ?float $balanceAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('balance_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $balanceAmount = null;

    /**
     *
     * @var ?\DateTime $cancelledAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('cancelled_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $cancelledAt = null;

    /**
     *
     * @var ?string $contactId
     */
    #[\JMS\Serializer\Annotation\SerializedName('contact_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?float $discountAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('discount_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $discountAmount = null;

    /**
     *
     * @var ?\DateTime $dueAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('due_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dueAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $invoiceNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('invoice_number')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceNumber = null;

    /**
     * $lineitems
     *
     * @var ?array<AccountingLineitem> $lineitems
     */
    #[\JMS\Serializer\Annotation\SerializedName('lineitems')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingLineitem>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $lineitems = null;

    /**
     *
     * @var ?string $notes
     */
    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?float $paidAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('paid_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $paidAmount = null;

    /**
     *
     * @var ?\DateTime $paidAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('paid_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $paidAt = null;

    /**
     *
     * @var ?PaymentCollectionMethod $paymentCollectionMethod
     */
    #[\JMS\Serializer\Annotation\SerializedName('payment_collection_method')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PaymentCollectionMethod|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PaymentCollectionMethod $paymentCollectionMethod = null;

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
     * @var ?float $refundAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('refund_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $refundAmount = null;

    /**
     *
     * @var ?string $refundReason
     */
    #[\JMS\Serializer\Annotation\SerializedName('refund_reason')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $refundReason = null;

    /**
     *
     * @var ?\DateTime $refundedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('refunded_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $refundedAt = null;

    /**
     *
     * @var ?AccountingInvoiceStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingInvoiceStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AccountingInvoiceStatus $status = null;

    /**
     *
     * @var ?float $taxAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

    /**
     *
     * @var ?float $totalAmount
     */
    #[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

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
     * @param  ?float  $balanceAmount
     * @param  ?\DateTime  $cancelledAt
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?float  $discountAmount
     * @param  ?\DateTime  $dueAt
     * @param  ?string  $id
     * @param  ?string  $invoiceNumber
     * @param  ?array<AccountingLineitem>  $lineitems
     * @param  ?string  $notes
     * @param  ?float  $paidAmount
     * @param  ?\DateTime  $paidAt
     * @param  ?PaymentCollectionMethod  $paymentCollectionMethod
     * @param  ?array<string, mixed>  $raw
     * @param  ?float  $refundAmount
     * @param  ?string  $refundReason
     * @param  ?\DateTime  $refundedAt
     * @param  ?AccountingInvoiceStatus  $status
     * @param  ?float  $taxAmount
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $url
     */
    public function __construct(?float $balanceAmount = null, ?\DateTime $cancelledAt = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $currency = null, ?float $discountAmount = null, ?\DateTime $dueAt = null, ?string $id = null, ?string $invoiceNumber = null, ?array $lineitems = null, ?string $notes = null, ?float $paidAmount = null, ?\DateTime $paidAt = null, ?PaymentCollectionMethod $paymentCollectionMethod = null, ?array $raw = null, ?float $refundAmount = null, ?string $refundReason = null, ?\DateTime $refundedAt = null, ?AccountingInvoiceStatus $status = null, ?float $taxAmount = null, ?float $totalAmount = null, ?\DateTime $updatedAt = null, ?string $url = null)
    {
        $this->balanceAmount = $balanceAmount;
        $this->cancelledAt = $cancelledAt;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->discountAmount = $discountAmount;
        $this->dueAt = $dueAt;
        $this->id = $id;
        $this->invoiceNumber = $invoiceNumber;
        $this->lineitems = $lineitems;
        $this->notes = $notes;
        $this->paidAmount = $paidAmount;
        $this->paidAt = $paidAt;
        $this->paymentCollectionMethod = $paymentCollectionMethod;
        $this->raw = $raw;
        $this->refundAmount = $refundAmount;
        $this->refundReason = $refundReason;
        $this->refundedAt = $refundedAt;
        $this->status = $status;
        $this->taxAmount = $taxAmount;
        $this->totalAmount = $totalAmount;
        $this->updatedAt = $updatedAt;
        $this->url = $url;
    }
}