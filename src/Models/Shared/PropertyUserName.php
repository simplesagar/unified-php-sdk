<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyUserName
{
    /**
     *
     * @var ?string $familyName
     */
    #[\JMS\Serializer\Annotation\SerializedName('familyName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $familyName = null;

    /**
     *
     * @var ?string $formatted
     */
    #[\JMS\Serializer\Annotation\SerializedName('formatted')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $formatted = null;

    /**
     *
     * @var ?string $givenName
     */
    #[\JMS\Serializer\Annotation\SerializedName('givenName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $givenName = null;

    /**
     *
     * @var ?string $honorificPrefix
     */
    #[\JMS\Serializer\Annotation\SerializedName('honorificPrefix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $honorificPrefix = null;

    /**
     *
     * @var ?string $honorificSuffix
     */
    #[\JMS\Serializer\Annotation\SerializedName('honorificSuffix')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $honorificSuffix = null;

    /**
     *
     * @var ?string $middleName
     */
    #[\JMS\Serializer\Annotation\SerializedName('middleName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $middleName = null;

    /**
     * @param  ?string  $familyName
     * @param  ?string  $formatted
     * @param  ?string  $givenName
     * @param  ?string  $honorificPrefix
     * @param  ?string  $honorificSuffix
     * @param  ?string  $middleName
     */
    public function __construct(?string $familyName = null, ?string $formatted = null, ?string $givenName = null, ?string $honorificPrefix = null, ?string $honorificSuffix = null, ?string $middleName = null)
    {
        $this->familyName = $familyName;
        $this->formatted = $formatted;
        $this->givenName = $givenName;
        $this->honorificPrefix = $honorificPrefix;
        $this->honorificSuffix = $honorificSuffix;
        $this->middleName = $middleName;
    }
}