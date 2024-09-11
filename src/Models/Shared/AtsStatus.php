<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsStatus
{
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
     * @var ?string $originalStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('original_status')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $originalStatus = null;

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
     * @var ?AtsStatusStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AtsStatusStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AtsStatusStatus $status = null;

    /**
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?string  $originalStatus
     * @param  ?array<string, mixed>  $raw
     * @param  ?AtsStatusStatus  $status
     */
    public function __construct(?string $description = null, ?string $id = null, ?string $originalStatus = null, ?array $raw = null, ?AtsStatusStatus $status = null)
    {
        $this->description = $description;
        $this->id = $id;
        $this->originalStatus = $originalStatus;
        $this->raw = $raw;
        $this->status = $status;
    }
}