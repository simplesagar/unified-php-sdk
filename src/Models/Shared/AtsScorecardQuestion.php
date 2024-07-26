<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsScorecardQuestion
{
    #[\JMS\Serializer\Annotation\SerializedName('answer')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $answer = null;

    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;

    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;

    public function __construct()
    {
        $this->answer = null;
        $this->description = null;
        $this->text = '';
    }
}