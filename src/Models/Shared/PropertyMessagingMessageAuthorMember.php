<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class PropertyMessagingMessageAuthorMember
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
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * @param  ?string  $email
     * @param  ?string  $name
     * @param  ?string  $userId
     */
    public function __construct(?string $email = null, ?string $name = null, ?string $userId = null)
    {
        $this->email = $email;
        $this->name = $name;
        $this->userId = $userId;
    }
}