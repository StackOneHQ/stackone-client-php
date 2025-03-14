<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Employment
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
     * The employee ID associated with this employment
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * Provider's unique identifier of the employee associated with this employment
     *
     * @var ?string $remoteEmployeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteEmployeeId = null;

    /**
     * The job title of the employee
     *
     * @var ?string $jobTitle
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobTitle = null;

    /**
     * The pay rate for the employee
     *
     * @var ?string $payRate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_rate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $payRate = null;

    /**
     * The pay period
     *
     * @var ?PayPeriod $payPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_period')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\PayPeriod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PayPeriod $payPeriod = null;

    /**
     * The pay frequency
     *
     * @var ?PayFrequency $payFrequency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_frequency')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\PayFrequency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PayFrequency $payFrequency = null;

    /**
     * The currency used for pay
     *
     * @var ?string $payCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $payCurrency = null;

    /**
     * The effective date of the employment contract
     *
     * @var ?\DateTime $effectiveDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('effective_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $effectiveDate = null;

    /**
     * The type of employment (e.g., contractor, permanent)
     *
     * @var ?EmploymentEmploymentType $employmentType
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentEmploymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentEmploymentType $employmentType = null;

    /**
     * The employment work schedule type (e.g., full-time, part-time)
     *
     * @var ?EmploymentEmploymentContractType $employmentContractType
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_contract_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentEmploymentContractType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentEmploymentContractType $employmentContractType = null;

    /**
     * The time worked for the employee in ISO 8601 duration format
     *
     * @var ?string $timeWorked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('time_worked')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timeWorked = null;

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
     * The start_date of employment
     *
     * @var ?\DateTime $startDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startDate = null;

    /**
     * The end_date of employment
     *
     * @var ?\DateTime $endDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endDate = null;

    /**
     * The employment active status
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * The employee department
     *
     * @var ?EmploymentDepartment $department
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentDepartment|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentDepartment $department = null;

    /**
     * The employee cost_center
     *
     * @var ?CostCenter $costCenter
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cost_center')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CostCenter|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CostCenter $costCenter = null;

    /**
     * The employee cost_centers
     *
     * @var ?array<HRISCostCenter> $costCenters
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cost_centers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\HRISCostCenter>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $costCenters = null;

    /**
     * The employee division
     *
     * @var ?Division $division
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('division')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Division|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Division $division = null;

    /**
     * The job of employee
     *
     * @var ?EmploymentJob $job
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentJob|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentJob $job = null;

    /**
     * The type of employment
     *
     * @var ?EmploymentType1 $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentType1|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentType1 $type = null;

    /**
     * The employment work schedule type
     *
     * @var ?ContractType $contractType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contract_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ContractType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ContractType $contractType = null;

    /**
     * The employee manager
     *
     * @var ?array<EmploymentManagerApiModel> $manager
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manager')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\EmploymentManagerApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $manager = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $employeeId
     * @param  ?string  $remoteEmployeeId
     * @param  ?string  $jobTitle
     * @param  ?string  $payRate
     * @param  ?PayPeriod  $payPeriod
     * @param  ?PayFrequency  $payFrequency
     * @param  ?string  $payCurrency
     * @param  ?\DateTime  $effectiveDate
     * @param  ?EmploymentEmploymentType  $employmentType
     * @param  ?EmploymentEmploymentContractType  $employmentContractType
     * @param  ?string  $timeWorked
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $startDate
     * @param  ?\DateTime  $endDate
     * @param  ?bool  $active
     * @param  ?EmploymentDepartment  $department
     * @param  ?CostCenter  $costCenter
     * @param  ?array<HRISCostCenter>  $costCenters
     * @param  ?Division  $division
     * @param  ?EmploymentJob  $job
     * @param  ?EmploymentType1  $type
     * @param  ?ContractType  $contractType
     * @param  ?array<EmploymentManagerApiModel>  $manager
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $employeeId = null, ?string $remoteEmployeeId = null, ?string $jobTitle = null, ?string $payRate = null, ?PayPeriod $payPeriod = null, ?PayFrequency $payFrequency = null, ?string $payCurrency = null, ?\DateTime $effectiveDate = null, ?EmploymentEmploymentType $employmentType = null, ?EmploymentEmploymentContractType $employmentContractType = null, ?string $timeWorked = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?\DateTime $startDate = null, ?\DateTime $endDate = null, ?bool $active = null, ?EmploymentDepartment $department = null, ?CostCenter $costCenter = null, ?array $costCenters = null, ?Division $division = null, ?EmploymentJob $job = null, ?EmploymentType1 $type = null, ?ContractType $contractType = null, ?array $manager = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->employeeId = $employeeId;
        $this->remoteEmployeeId = $remoteEmployeeId;
        $this->jobTitle = $jobTitle;
        $this->payRate = $payRate;
        $this->payPeriod = $payPeriod;
        $this->payFrequency = $payFrequency;
        $this->payCurrency = $payCurrency;
        $this->effectiveDate = $effectiveDate;
        $this->employmentType = $employmentType;
        $this->employmentContractType = $employmentContractType;
        $this->timeWorked = $timeWorked;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->active = $active;
        $this->department = $department;
        $this->costCenter = $costCenter;
        $this->costCenters = $costCenters;
        $this->division = $division;
        $this->job = $job;
        $this->type = $type;
        $this->contractType = $contractType;
        $this->manager = $manager;
    }
}