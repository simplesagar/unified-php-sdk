<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingJournalLineitem
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
     * @var ?string $contactId
     */
    #[\JMS\Serializer\Annotation\SerializedName('contact_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

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
     * @var ?string $invoiceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('invoice_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $invoiceId = null;

    /**
     *
     * @var ?string $paymentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('payment_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $paymentId = null;

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
     * @param  ?string  $accountId
     * @param  ?string  $contactId
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?string  $invoiceId
     * @param  ?string  $paymentId
     * @param  ?float  $taxAmount
     * @param  ?float  $totalAmount
     */
    public function __construct(?string $accountId = null, ?string $contactId = null, ?string $description = null, ?string $id = null, ?string $invoiceId = null, ?string $paymentId = null, ?float $taxAmount = null, ?float $totalAmount = null)
    {
        $this->accountId = $accountId;
        $this->contactId = $contactId;
        $this->description = $description;
        $this->id = $id;
        $this->invoiceId = $invoiceId;
        $this->paymentId = $paymentId;
        $this->taxAmount = $taxAmount;
        $this->totalAmount = $totalAmount;
    }
}