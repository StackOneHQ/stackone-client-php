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
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * The employee ID associated with this employment
     *
     * @var ?string $employeeId
     */
    #[\JMS\Serializer\Annotation\SerializedName('employee_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * Provider's unique identifier of the employee associated with this employment
     *
     * @var ?string $remoteEmployeeId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_employee_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteEmployeeId = null;

    /**
     * The job title of the employee
     *
     * @var ?string $jobTitle
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $jobTitle = null;

    /**
     * The pay rate for the employee
     *
     * @var ?string $payRate
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_rate')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $payRate = null;

    /**
     * The pay period
     *
     * @var ?PayPeriod $payPeriod
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_period')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\PayPeriod|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PayPeriod $payPeriod = null;

    /**
     * The pay frequency
     *
     * @var ?PayFrequency $payFrequency
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_frequency')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\PayFrequency|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PayFrequency $payFrequency = null;

    /**
     * The currency used for pay
     *
     * @var ?string $payCurrency
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_currency')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $payCurrency = null;

    /**
     * The effective date of the employment contract
     *
     * @var ?\DateTime $effectiveDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('effective_date')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $effectiveDate = null;

    /**
     * The type of employment (e.g., contractor, permanent)
     *
     * @var ?EmploymentEmploymentType $employmentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentEmploymentType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentEmploymentType $employmentType = null;

    /**
     * The employment work schedule type (e.g., full-time, part-time)
     *
     * @var ?EmploymentEmploymentContractType $employmentContractType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_contract_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentEmploymentContractType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentEmploymentContractType $employmentContractType = null;

    /**
     * The created_at date
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The updated_at date
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

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
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $employeeId = null, ?string $remoteEmployeeId = null, ?string $jobTitle = null, ?string $payRate = null, ?PayPeriod $payPeriod = null, ?PayFrequency $payFrequency = null, ?string $payCurrency = null, ?\DateTime $effectiveDate = null, ?EmploymentEmploymentType $employmentType = null, ?EmploymentEmploymentContractType $employmentContractType = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
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
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}