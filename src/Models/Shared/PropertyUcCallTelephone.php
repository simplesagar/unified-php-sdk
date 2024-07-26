<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** PropertyUcCallTelephone - The telephone number called */
class PropertyUcCallTelephone
{
    #[\JMS\Serializer\Annotation\SerializedName('telephone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $telephone;

    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\PropertyUcCallTelephoneType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyUcCallTelephoneType $type = null;

    public function __construct()
    {
        $this->telephone = '';
        $this->type = null;
    }
}