<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class TimeEntries
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
     * The employee ID associated with this time entry
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * Provider's unique identifier of the employee associated with this time entry
     *
     * @var ?string $remoteEmployeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteEmployeeId = null;

    /**
     * The start time of the time entry
     *
     * @var ?\DateTime $startTime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_time')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startTime = null;

    /**
     * The end time of the time entry
     *
     * @var ?\DateTime $endTime
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_time')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endTime = null;

    /**
     * The hours worked in the time entry
     *
     * @var ?float $hoursWorked
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hours_worked')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $hoursWorked = null;

    /**
     * The duration of the break taken during time entry in hours
     *
     * @var ?float $breakDuration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('break_duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $breakDuration = null;

    /**
     * The status of the time entry
     *
     * @var ?TimeEntriesStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeEntriesStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeEntriesStatus $status = null;

    /**
     * The labor type associated with this time entry
     *
     * @var ?LaborType $laborType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('labor_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\LaborType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LaborType $laborType = null;

    /**
     * The location of the time entry
     *
     * @var ?Location $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Location|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Location $location = null;

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
     * @param  ?string  $employeeId
     * @param  ?string  $remoteEmployeeId
     * @param  ?\DateTime  $startTime
     * @param  ?\DateTime  $endTime
     * @param  ?float  $hoursWorked
     * @param  ?float  $breakDuration
     * @param  ?TimeEntriesStatus  $status
     * @param  ?LaborType  $laborType
     * @param  ?Location  $location
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $employeeId = null, ?string $remoteEmployeeId = null, ?\DateTime $startTime = null, ?\DateTime $endTime = null, ?float $hoursWorked = null, ?float $breakDuration = null, ?TimeEntriesStatus $status = null, ?LaborType $laborType = null, ?Location $location = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->employeeId = $employeeId;
        $this->remoteEmployeeId = $remoteEmployeeId;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->hoursWorked = $hoursWorked;
        $this->breakDuration = $breakDuration;
        $this->status = $status;
        $this->laborType = $laborType;
        $this->location = $location;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}