<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmTelephone
{
    #[\JMS\Serializer\Annotation\SerializedName('telephone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $telephone;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\CrmTelephoneType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CrmTelephoneType $type = null;

    public function __construct()
    {
        $this->telephone = '';
        $this->type = null;
    }
}