<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TicketingEmail
{
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\TicketingEmailType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TicketingEmailType $type = null;

    public function __construct()
    {
        $this->email = '';
        $this->type = null;
    }
}