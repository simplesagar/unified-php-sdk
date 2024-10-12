<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class User
{
    /**
     *
     * @var ?bool $active
     */
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * $addresses
     *
     * @var ?array<Undefined> $addresses
     */
    #[\JMS\Serializer\Annotation\SerializedName('addresses')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $addresses = null;

    /**
     *
     * @var ?string $displayName
     */
    #[\JMS\Serializer\Annotation\SerializedName('displayName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * $emails
     *
     * @var ?array<Undefined> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * $entitlements
     *
     * @var ?array<Undefined> $entitlements
     */
    #[\JMS\Serializer\Annotation\SerializedName('entitlements')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $entitlements = null;

    /**
     *
     * @var ?string $externalId
     */
    #[\JMS\Serializer\Annotation\SerializedName('externalId')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     * $groups
     *
     * @var ?array<Undefined> $groups
     */
    #[\JMS\Serializer\Annotation\SerializedName('groups')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $groups = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $ims
     *
     * @var ?array<Undefined> $ims
     */
    #[\JMS\Serializer\Annotation\SerializedName('ims')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $ims = null;

    /**
     *
     * @var ?string $locale
     */
    #[\JMS\Serializer\Annotation\SerializedName('locale')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $locale = null;

    /**
     *
     * @var ?PropertyUserMeta $meta
     */
    #[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyUserMeta|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyUserMeta $meta = null;

    /**
     *
     * @var ?PropertyUserName $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyUserName|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyUserName $name = null;

    /**
     *
     * @var ?string $nickName
     */
    #[\JMS\Serializer\Annotation\SerializedName('nickName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $nickName = null;

    /**
     *
     * @var ?string $password
     */
    #[\JMS\Serializer\Annotation\SerializedName('password')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $password = null;

    /**
     * $phoneNumbers
     *
     * @var ?array<Undefined> $phoneNumbers
     */
    #[\JMS\Serializer\Annotation\SerializedName('phoneNumbers')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * $photos
     *
     * @var ?array<Undefined> $photos
     */
    #[\JMS\Serializer\Annotation\SerializedName('photos')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $photos = null;

    /**
     *
     * @var ?string $preferredLanguage
     */
    #[\JMS\Serializer\Annotation\SerializedName('preferredLanguage')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $preferredLanguage = null;

    /**
     *
     * @var ?string $profileUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('profileUrl')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $profileUrl = null;

    /**
     * $roles
     *
     * @var ?array<Undefined> $roles
     */
    #[\JMS\Serializer\Annotation\SerializedName('roles')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $roles = null;

    /**
     * $schemas
     *
     * @var ?array<PropertyUserSchemas> $schemas
     */
    #[\JMS\Serializer\Annotation\SerializedName('schemas')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\PropertyUserSchemas>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $schemas = null;

    /**
     *
     * @var ?string $timezone
     */
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $timezone = null;

    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?PropertyUserUrnIetfParamsScimSchemasExtensionEnterprise20User $urnIetfParamsScimSchemasExtensionEnterprise20User
     */
    #[\JMS\Serializer\Annotation\SerializedName('urn:ietf:params:scim:schemas:extension:enterprise:2.0:User')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyUserUrnIetfParamsScimSchemasExtensionEnterprise20User|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyUserUrnIetfParamsScimSchemasExtensionEnterprise20User $urnIetfParamsScimSchemasExtensionEnterprise20User = null;

    /**
     *
     * @var ?PropertyUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User $urnIetfParamsScimSchemasExtensionLatticeAttributes10User
     */
    #[\JMS\Serializer\Annotation\SerializedName('urn:ietf:params:scim:schemas:extension:lattice:attributes:1.0:User')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User $urnIetfParamsScimSchemasExtensionLatticeAttributes10User = null;

    /**
     *
     * @var ?PropertyUserUrnIetfParamsScimSchemasExtensionPeakon20User $urnIetfParamsScimSchemasExtensionPeakon20User
     */
    #[\JMS\Serializer\Annotation\SerializedName('urn:ietf:params:scim:schemas:extension:peakon:2.0:User')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyUserUrnIetfParamsScimSchemasExtensionPeakon20User|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyUserUrnIetfParamsScimSchemasExtensionPeakon20User $urnIetfParamsScimSchemasExtensionPeakon20User = null;

    /**
     *
     * @var ?string $userName
     */
    #[\JMS\Serializer\Annotation\SerializedName('userName')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $userName = null;

    /**
     *
     * @var ?string $userType
     */
    #[\JMS\Serializer\Annotation\SerializedName('userType')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $userType = null;

    /**
     * $x509Certificates
     *
     * @var ?array<Undefined> $x509Certificates
     */
    #[\JMS\Serializer\Annotation\SerializedName('x509Certificates')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\Undefined>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $x509Certificates = null;

    /**
     * @param  ?bool  $active
     * @param  ?array<Undefined>  $addresses
     * @param  ?string  $displayName
     * @param  ?array<Undefined>  $emails
     * @param  ?array<Undefined>  $entitlements
     * @param  ?string  $externalId
     * @param  ?array<Undefined>  $groups
     * @param  ?string  $id
     * @param  ?array<Undefined>  $ims
     * @param  ?string  $locale
     * @param  ?PropertyUserMeta  $meta
     * @param  ?PropertyUserName  $name
     * @param  ?string  $nickName
     * @param  ?string  $password
     * @param  ?array<Undefined>  $phoneNumbers
     * @param  ?array<Undefined>  $photos
     * @param  ?string  $preferredLanguage
     * @param  ?string  $profileUrl
     * @param  ?array<Undefined>  $roles
     * @param  ?array<PropertyUserSchemas>  $schemas
     * @param  ?string  $timezone
     * @param  ?string  $title
     * @param  ?PropertyUserUrnIetfParamsScimSchemasExtensionEnterprise20User  $urnIetfParamsScimSchemasExtensionEnterprise20User
     * @param  ?PropertyUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User  $urnIetfParamsScimSchemasExtensionLatticeAttributes10User
     * @param  ?PropertyUserUrnIetfParamsScimSchemasExtensionPeakon20User  $urnIetfParamsScimSchemasExtensionPeakon20User
     * @param  ?string  $userName
     * @param  ?string  $userType
     * @param  ?array<Undefined>  $x509Certificates
     */
    public function __construct(?bool $active = null, ?array $addresses = null, ?string $displayName = null, ?array $emails = null, ?array $entitlements = null, ?string $externalId = null, ?array $groups = null, ?string $id = null, ?array $ims = null, ?string $locale = null, ?PropertyUserMeta $meta = null, ?PropertyUserName $name = null, ?string $nickName = null, ?string $password = null, ?array $phoneNumbers = null, ?array $photos = null, ?string $preferredLanguage = null, ?string $profileUrl = null, ?array $roles = null, ?array $schemas = null, ?string $timezone = null, ?string $title = null, ?PropertyUserUrnIetfParamsScimSchemasExtensionEnterprise20User $urnIetfParamsScimSchemasExtensionEnterprise20User = null, ?PropertyUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User $urnIetfParamsScimSchemasExtensionLatticeAttributes10User = null, ?PropertyUserUrnIetfParamsScimSchemasExtensionPeakon20User $urnIetfParamsScimSchemasExtensionPeakon20User = null, ?string $userName = null, ?string $userType = null, ?array $x509Certificates = null)
    {
        $this->active = $active;
        $this->addresses = $addresses;
        $this->displayName = $displayName;
        $this->emails = $emails;
        $this->entitlements = $entitlements;
        $this->externalId = $externalId;
        $this->groups = $groups;
        $this->id = $id;
        $this->ims = $ims;
        $this->locale = $locale;
        $this->meta = $meta;
        $this->name = $name;
        $this->nickName = $nickName;
        $this->password = $password;
        $this->phoneNumbers = $phoneNumbers;
        $this->photos = $photos;
        $this->preferredLanguage = $preferredLanguage;
        $this->profileUrl = $profileUrl;
        $this->roles = $roles;
        $this->schemas = $schemas;
        $this->timezone = $timezone;
        $this->title = $title;
        $this->urnIetfParamsScimSchemasExtensionEnterprise20User = $urnIetfParamsScimSchemasExtensionEnterprise20User;
        $this->urnIetfParamsScimSchemasExtensionLatticeAttributes10User = $urnIetfParamsScimSchemasExtensionLatticeAttributes10User;
        $this->urnIetfParamsScimSchemasExtensionPeakon20User = $urnIetfParamsScimSchemasExtensionPeakon20User;
        $this->userName = $userName;
        $this->userType = $userType;
        $this->x509Certificates = $x509Certificates;
    }
}