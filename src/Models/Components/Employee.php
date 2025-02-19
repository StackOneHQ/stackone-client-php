<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Employee
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * The employee first name
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The employee last name
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The employee name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The employee display name
     *
     * @var ?string $displayName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $displayName = null;

    /**
     * The employee avatar Url
     *
     * @var ?string $avatarUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $avatarUrl = null;

    /**
     * The employee personal email
     *
     * @var ?string $personalEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('personal_email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $personalEmail = null;

    /**
     * The employee personal phone number
     *
     * @var ?string $personalPhoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('personal_phone_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $personalPhoneNumber = null;

    /**
     * The employee work email
     *
     * @var ?string $workEmail
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('work_email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workEmail = null;

    /**
     * The employee work phone number
     *
     * @var ?string $workPhoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('work_phone_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $workPhoneNumber = null;

    /**
     * The employee job id
     *
     * @var ?string $jobId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * The employee job title
     *
     * @var ?string $jobTitle
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobTitle = null;

    /**
     * The employee job description
     *
     * @var ?JobDescription $jobDescription
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_description')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobDescription|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobDescription $jobDescription = null;

    /**
     * The employee department id
     *
     * @var ?string $departmentId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $departmentId = null;

    /**
     * The employee department
     *
     * @var ?string $department
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $department = null;

    /**
     * The employee groups
     *
     * @var ?array<HRISGroup> $groups
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('groups')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\HRISGroup>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $groups = null;

    /**
     * The employee cost centers
     *
     * @var ?array<CostCenters> $costCenters
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cost_centers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CostCenters>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $costCenters = null;

    /**
     * The employee manager ID
     *
     * @var ?string $managerId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manager_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $managerId = null;

    /**
     * Provider's unique identifier of the manager
     *
     * @var ?string $remoteManagerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_manager_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteManagerId = null;

    /**
     * The employee gender
     *
     * @var ?Gender $gender
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gender')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Gender|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Gender $gender = null;

    /**
     * The employee preferred language
     *
     * @var ?PreferredLanguage $preferredLanguage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('preferred_language')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\PreferredLanguage|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PreferredLanguage $preferredLanguage = null;

    /**
     * The employee ethnicity
     *
     * @var ?Ethnicity $ethnicity
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ethnicity')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Ethnicity|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Ethnicity $ethnicity = null;

    /**
     * The employee date_of_birth
     *
     * @var ?\DateTime $dateOfBirth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_of_birth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateOfBirth = null;

    /**
     * The employee birthday
     *
     * @var ?\DateTime $birthday
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthday')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $birthday = null;

    /**
     * The employee marital status
     *
     * @var ?MaritalStatus $maritalStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('marital_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MaritalStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MaritalStatus $maritalStatus = null;

    /**
     * The employee avatar
     *
     * @var ?Avatar $avatar
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('avatar')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Avatar|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Avatar $avatar = null;

    /**
     * The employee hire date
     *
     * @var ?\DateTime $hireDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hire_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $hireDate = null;

    /**
     * The employee start date
     *
     * @var ?\DateTime $startDate
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startDate = null;

    /**
     * The employee tenure
     *
     * @var ?float $tenure
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tenure')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $tenure = null;

    /**
     * The employee work anniversary
     *
     * @var ?\DateTime $workAnniversary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('work_anniversary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $workAnniversary = null;

    /**
     * The employee employment type
     *
     * @var ?EmploymentType $employmentType
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentType $employmentType = null;

    /**
     * The employment work schedule type (e.g., full-time, part-time)
     *
     * @var ?EmploymentContractType $employmentContractType
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_contract_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentContractType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentContractType $employmentContractType = null;

    /**
     * The employee employment status
     *
     * @var ?EmploymentStatus $employmentStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentStatus $employmentStatus = null;

    /**
     * The employee termination date
     *
     * @var ?\DateTime $terminationDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('termination_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $terminationDate = null;

    /**
     * The employee company name
     *
     * @var ?string $companyName
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * The employee company id
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * The citizenships of the Employee
     *
     * @var ?array<CountryCodeEnum> $citizenships
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('citizenships')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CountryCodeEnum>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $citizenships = null;

    /**
     * The employee home location
     *
     * @var ?HomeLocation $homeLocation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('home_location')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HomeLocation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HomeLocation $homeLocation = null;

    /**
     * The employee work location
     *
     * @var ?WorkLocation $workLocation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('work_location')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\WorkLocation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?WorkLocation $workLocation = null;

    /**
     * The employee company
     *
     * @var ?EmployeeCompany $company
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeCompany|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeCompany $company = null;

    /**
     * The employee employments
     *
     * @var ?array<Employment> $employments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Employment>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $employments = null;

    /**
     * The employee custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * Current benefits of the employee
     *
     * @var ?array<HRISBenefit> $benefits
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefits')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\HRISBenefit>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $benefits = null;

    /**
     * The assigned employee number
     *
     * @var ?string $employeeNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeNumber = null;

    /**
     * The national identity number
     *
     * @var ?NationalIdentityNumber $nationalIdentityNumber
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('national_identity_number')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\NationalIdentityNumber|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?NationalIdentityNumber $nationalIdentityNumber = null;

    /**
     * The national identity numbers
     *
     * @var ?array<NationalIdentityNumberApiModel> $nationalIdentityNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('national_identity_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\NationalIdentityNumberApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $nationalIdentityNumbers = null;

    /**
     * The created_at date
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The updated_at date
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $name
     * @param  ?string  $displayName
     * @param  ?string  $avatarUrl
     * @param  ?string  $personalEmail
     * @param  ?string  $personalPhoneNumber
     * @param  ?string  $workEmail
     * @param  ?string  $workPhoneNumber
     * @param  ?string  $jobId
     * @param  ?string  $jobTitle
     * @param  ?JobDescription  $jobDescription
     * @param  ?string  $departmentId
     * @param  ?string  $department
     * @param  ?array<HRISGroup>  $groups
     * @param  ?array<CostCenters>  $costCenters
     * @param  ?string  $managerId
     * @param  ?string  $remoteManagerId
     * @param  ?Gender  $gender
     * @param  ?PreferredLanguage  $preferredLanguage
     * @param  ?Ethnicity  $ethnicity
     * @param  ?\DateTime  $dateOfBirth
     * @param  ?\DateTime  $birthday
     * @param  ?MaritalStatus  $maritalStatus
     * @param  ?Avatar  $avatar
     * @param  ?\DateTime  $hireDate
     * @param  ?\DateTime  $startDate
     * @param  ?float  $tenure
     * @param  ?\DateTime  $workAnniversary
     * @param  ?EmploymentType  $employmentType
     * @param  ?EmploymentContractType  $employmentContractType
     * @param  ?EmploymentStatus  $employmentStatus
     * @param  ?\DateTime  $terminationDate
     * @param  ?string  $companyName
     * @param  ?string  $companyId
     * @param  ?array<CountryCodeEnum>  $citizenships
     * @param  ?HomeLocation  $homeLocation
     * @param  ?WorkLocation  $workLocation
     * @param  ?EmployeeCompany  $company
     * @param  ?array<Employment>  $employments
     * @param  ?array<CustomFields>  $customFields
     * @param  ?array<HRISBenefit>  $benefits
     * @param  ?string  $employeeNumber
     * @param  ?NationalIdentityNumber  $nationalIdentityNumber
     * @param  ?array<NationalIdentityNumberApiModel>  $nationalIdentityNumbers
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $firstName = null, ?string $lastName = null, ?string $name = null, ?string $displayName = null, ?string $avatarUrl = null, ?string $personalEmail = null, ?string $personalPhoneNumber = null, ?string $workEmail = null, ?string $workPhoneNumber = null, ?string $jobId = null, ?string $jobTitle = null, ?JobDescription $jobDescription = null, ?string $departmentId = null, ?string $department = null, ?array $groups = null, ?array $costCenters = null, ?string $managerId = null, ?string $remoteManagerId = null, ?Gender $gender = null, ?PreferredLanguage $preferredLanguage = null, ?Ethnicity $ethnicity = null, ?\DateTime $dateOfBirth = null, ?\DateTime $birthday = null, ?MaritalStatus $maritalStatus = null, ?Avatar $avatar = null, ?\DateTime $hireDate = null, ?\DateTime $startDate = null, ?float $tenure = null, ?\DateTime $workAnniversary = null, ?EmploymentType $employmentType = null, ?EmploymentContractType $employmentContractType = null, ?EmploymentStatus $employmentStatus = null, ?\DateTime $terminationDate = null, ?string $companyName = null, ?string $companyId = null, ?array $citizenships = null, ?HomeLocation $homeLocation = null, ?WorkLocation $workLocation = null, ?EmployeeCompany $company = null, ?array $employments = null, ?array $customFields = null, ?array $benefits = null, ?string $employeeNumber = null, ?NationalIdentityNumber $nationalIdentityNumber = null, ?array $nationalIdentityNumbers = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->name = $name;
        $this->displayName = $displayName;
        $this->avatarUrl = $avatarUrl;
        $this->personalEmail = $personalEmail;
        $this->personalPhoneNumber = $personalPhoneNumber;
        $this->workEmail = $workEmail;
        $this->workPhoneNumber = $workPhoneNumber;
        $this->jobId = $jobId;
        $this->jobTitle = $jobTitle;
        $this->jobDescription = $jobDescription;
        $this->departmentId = $departmentId;
        $this->department = $department;
        $this->groups = $groups;
        $this->costCenters = $costCenters;
        $this->managerId = $managerId;
        $this->remoteManagerId = $remoteManagerId;
        $this->gender = $gender;
        $this->preferredLanguage = $preferredLanguage;
        $this->ethnicity = $ethnicity;
        $this->dateOfBirth = $dateOfBirth;
        $this->birthday = $birthday;
        $this->maritalStatus = $maritalStatus;
        $this->avatar = $avatar;
        $this->hireDate = $hireDate;
        $this->startDate = $startDate;
        $this->tenure = $tenure;
        $this->workAnniversary = $workAnniversary;
        $this->employmentType = $employmentType;
        $this->employmentContractType = $employmentContractType;
        $this->employmentStatus = $employmentStatus;
        $this->terminationDate = $terminationDate;
        $this->companyName = $companyName;
        $this->companyId = $companyId;
        $this->citizenships = $citizenships;
        $this->homeLocation = $homeLocation;
        $this->workLocation = $workLocation;
        $this->company = $company;
        $this->employments = $employments;
        $this->customFields = $customFields;
        $this->benefits = $benefits;
        $this->employeeNumber = $employeeNumber;
        $this->nationalIdentityNumber = $nationalIdentityNumber;
        $this->nationalIdentityNumbers = $nationalIdentityNumbers;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}