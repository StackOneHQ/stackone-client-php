<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateEmploymentApiModel
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
     * @var ?CreateEmploymentApiModelPayPeriod $payPeriod
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_period')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelPayPeriod|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelPayPeriod $payPeriod = null;

    /**
     * The pay frequency
     *
     * @var ?CreateEmploymentApiModelPayFrequency $payFrequency
     */
    #[\JMS\Serializer\Annotation\SerializedName('pay_frequency')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelPayFrequency|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelPayFrequency $payFrequency = null;

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
     * @var ?CreateEmploymentApiModelEmploymentType $employmentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelEmploymentType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelEmploymentType $employmentType = null;

    /**
     * The employment work schedule type (e.g., full-time, part-time)
     *
     * @var ?CreateEmploymentApiModelEmploymentContractType $employmentContractType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_contract_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelEmploymentContractType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelEmploymentContractType $employmentContractType = null;

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
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $employeeId
     * @param  ?string  $jobTitle
     * @param  ?string  $payRate
     * @param  ?CreateEmploymentApiModelPayPeriod  $payPeriod
     * @param  ?CreateEmploymentApiModelPayFrequency  $payFrequency
     * @param  ?string  $payCurrency
     * @param  ?\DateTime  $effectiveDate
     * @param  ?CreateEmploymentApiModelEmploymentType  $employmentType
     * @param  ?CreateEmploymentApiModelEmploymentContractType  $employmentContractType
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?array $unifiedCustomFields = null, ?string $employeeId = null, ?string $jobTitle = null, ?string $payRate = null, ?CreateEmploymentApiModelPayPeriod $payPeriod = null, ?CreateEmploymentApiModelPayFrequency $payFrequency = null, ?string $payCurrency = null, ?\DateTime $effectiveDate = null, ?CreateEmploymentApiModelEmploymentType $employmentType = null, ?CreateEmploymentApiModelEmploymentContractType $employmentContractType = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->employeeId = $employeeId;
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