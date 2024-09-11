<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingTelephone
{
    /**
     *
     * @var ?string $telephone
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephone')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $telephone = null;

    /**
     *
     * @var ?AccountingTelephoneType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingTelephoneType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AccountingTelephoneType $type = null;

    /**
     * @param  ?string  $telephone
     * @param  ?AccountingTelephoneType  $type
     */
    public function __construct(?string $telephone = null, ?AccountingTelephoneType $type = null)
    {
        $this->telephone = $telephone;
        $this->type = $type;
    }
}