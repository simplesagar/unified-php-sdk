<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MarketingEmail
{
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $email;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\MarketingEmailType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MarketingEmailType $type = null;

    public function __construct()
    {
        $this->email = '';
        $this->type = null;
    }
}