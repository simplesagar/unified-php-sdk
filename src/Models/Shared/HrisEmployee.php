<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisEmployee
{
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyHrisEmployeeAddress $address = null;

    #[\JMS\Serializer\Annotation\SerializedName('bio')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bio = null;

    #[\JMS\Serializer\Annotation\SerializedName('company_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyId = null;

    /**
     * $compensation
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisCompensation> $compensation
     */
    #[\JMS\Serializer\Annotation\SerializedName('compensation')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\HrisCompensation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $compensation = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    #[\JMS\Serializer\Annotation\SerializedName('date_of_birth')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dateOfBirth = null;

    #[\JMS\Serializer\Annotation\SerializedName('department')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $department = null;

    #[\JMS\Serializer\Annotation\SerializedName('division')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $division = null;

    /**
     * $emails
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\HrisEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;

    #[\JMS\Serializer\Annotation\SerializedName('employee_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $employeeNumber = null;

    /**
     * $employeeRoles
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\PropertyHrisEmployeeEmployeeRoles> $employeeRoles
     */
    #[\JMS\Serializer\Annotation\SerializedName('employee_roles')]
    #[\JMS\Serializer\Annotation\Type('array<enum<Unified\Unified_to\Models\Shared\PropertyHrisEmployeeEmployeeRoles>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $employeeRoles = null;

    #[\JMS\Serializer\Annotation\SerializedName('employment_status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\EmploymentStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?EmploymentStatus $employmentStatus = null;

    #[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisEmployeeEmploymentType $employmentType = null;

    #[\JMS\Serializer\Annotation\SerializedName('gender')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\HrisEmployeeGender>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisEmployeeGender $gender = null;

    /**
     * Which groups/teams/units that this employee/user belongs to.  May not have all of the Group fields present, but should have id, name, or email.
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisGroup> $groups
     */
    #[\JMS\Serializer\Annotation\SerializedName('groups')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\HrisGroup>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $groups = null;

    #[\JMS\Serializer\Annotation\SerializedName('hired_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $hiredAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    #[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;

    #[\JMS\Serializer\Annotation\SerializedName('language_locale')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $languageLocale = null;

    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $location = null;

    /**
     * $locations
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisLocation> $locations
     */
    #[\JMS\Serializer\Annotation\SerializedName('locations')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\HrisLocation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $locations = null;

    #[\JMS\Serializer\Annotation\SerializedName('manager_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $managerId = null;

    #[\JMS\Serializer\Annotation\SerializedName('marital_status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\MaritalStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MaritalStatus $maritalStatus = null;

    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    #[\JMS\Serializer\Annotation\SerializedName('pronouns')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $pronouns = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('salutation')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $salutation = null;

    #[\JMS\Serializer\Annotation\SerializedName('ssn_sin')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ssnSin = null;

    /**
     * $telephones
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\HrisTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    #[\JMS\Serializer\Annotation\SerializedName('terminated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $terminatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;

    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    public function __construct()
    {
        $this->address = null;
        $this->bio = null;
        $this->companyId = null;
        $this->compensation = null;
        $this->createdAt = null;
        $this->currency = null;
        $this->dateOfBirth = null;
        $this->department = null;
        $this->division = null;
        $this->emails = null;
        $this->employeeNumber = null;
        $this->employeeRoles = null;
        $this->employmentStatus = null;
        $this->employmentType = null;
        $this->gender = null;
        $this->groups = null;
        $this->hiredAt = null;
        $this->id = null;
        $this->imageUrl = null;
        $this->languageLocale = null;
        $this->location = null;
        $this->locations = null;
        $this->managerId = null;
        $this->maritalStatus = null;
        $this->name = null;
        $this->pronouns = null;
        $this->raw = null;
        $this->salutation = null;
        $this->ssnSin = null;
        $this->telephones = null;
        $this->terminatedAt = null;
        $this->timezone = null;
        $this->title = null;
        $this->updatedAt = null;
    }
}