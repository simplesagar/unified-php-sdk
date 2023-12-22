<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class StoragePermission
{
	#[\JMS\Serializer\Annotation\SerializedName('group_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $groupId = null;
    
    /**
     * $roles
     * 
     * @var array<\Unified\Unified_to\Models\Shared\PropertyStoragePermissionRoles> $roles
     */
	#[\JMS\Serializer\Annotation\SerializedName('roles')]
    #[\JMS\Serializer\Annotation\Type('array<enum<Unified\Unified_to\Models\Shared\PropertyStoragePermissionRoles>>')]
    public array $roles;
    
	#[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;
    
	public function __construct()
	{
		$this->groupId = null;
		$this->roles = [];
		$this->userId = null;
	}
}
