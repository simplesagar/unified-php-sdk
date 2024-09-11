<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingEmail
{
    /**
     *
     * @var ?string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     *
     * @var ?AccountingEmailType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingEmailType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AccountingEmailType $type = null;

    /**
     * @param  ?string  $email
     * @param  ?AccountingEmailType  $type
     */
    public function __construct(?string $email = null, ?AccountingEmailType $type = null)
    {
        $this->email = $email;
        $this->type = $type;
    }
}