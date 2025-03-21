<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class TimeOff
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
     * The employee ID
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * Provider's unique identifier of the employee
     *
     * @var ?string $remoteEmployeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteEmployeeId = null;

    /**
     * The approver ID
     *
     * @var ?string $approverId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('approver_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $approverId = null;

    /**
     * Provider's unique identifier of the approver
     *
     * @var ?string $remoteApproverId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_approver_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteApproverId = null;

    /**
     * The status of the time off request
     *
     * @var ?TimeOffStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffStatus $status = null;

    /**
     * The type of the time off request
     *
     * @var ?TimeOffType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffType $type = null;

    /**
     * The start date of the time off request
     *
     * @var ?\DateTime $startDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startDate = null;

    /**
     * The end date of the time off request
     *
     * @var ?\DateTime $endDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endDate = null;

    /**
     * True if the start of the time off request begins half way through the day
     *
     * @var bool|Two|null $startHalfDay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_half_day')]
    #[\Speakeasy\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\Two|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public bool|Two|null $startHalfDay = null;

    /**
     * True if the end of the time off request ends half way through the day
     *
     * @var bool|EndHalfDay2|null $endHalfDay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_half_day')]
    #[\Speakeasy\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\EndHalfDay2|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public bool|EndHalfDay2|null $endHalfDay = null;

    /**
     * The duration of the time off request
     *
     * @var ?string $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $duration = null;

    /**
     * The time off policy id associated with this time off request
     *
     * @var ?string $timeOffPolicyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('time_off_policy_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timeOffPolicyId = null;

    /**
     * Provider's unique identifier of the time off policy id associated with this time off request
     *
     * @var ?string $remoteTimeOffPolicyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_time_off_policy_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteTimeOffPolicyId = null;

    /**
     *
     * @var ?TimeOffReason $reason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reason')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffReason|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffReason $reason = null;

    /**
     * The created date of the time off request
     *
     * @var ?\DateTime $createdDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdDate = null;

    /**
     * The updated date of the time off request
     *
     * @var ?\DateTime $updatedDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedDate = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $employeeId
     * @param  ?string  $remoteEmployeeId
     * @param  ?string  $approverId
     * @param  ?string  $remoteApproverId
     * @param  ?TimeOffStatus  $status
     * @param  ?TimeOffType  $type
     * @param  ?\DateTime  $startDate
     * @param  ?\DateTime  $endDate
     * @param  bool|Two|null  $startHalfDay
     * @param  bool|EndHalfDay2|null  $endHalfDay
     * @param  ?string  $duration
     * @param  ?string  $timeOffPolicyId
     * @param  ?string  $remoteTimeOffPolicyId
     * @param  ?TimeOffReason  $reason
     * @param  ?\DateTime  $createdDate
     * @param  ?\DateTime  $updatedDate
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $employeeId = null, ?string $remoteEmployeeId = null, ?string $approverId = null, ?string $remoteApproverId = null, ?TimeOffStatus $status = null, ?TimeOffType $type = null, ?\DateTime $startDate = null, ?\DateTime $endDate = null, bool|Two|null $startHalfDay = null, bool|EndHalfDay2|null $endHalfDay = null, ?string $duration = null, ?string $timeOffPolicyId = null, ?string $remoteTimeOffPolicyId = null, ?TimeOffReason $reason = null, ?\DateTime $createdDate = null, ?\DateTime $updatedDate = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->employeeId = $employeeId;
        $this->remoteEmployeeId = $remoteEmployeeId;
        $this->approverId = $approverId;
        $this->remoteApproverId = $remoteApproverId;
        $this->status = $status;
        $this->type = $type;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->startHalfDay = $startHalfDay;
        $this->endHalfDay = $endHalfDay;
        $this->duration = $duration;
        $this->timeOffPolicyId = $timeOffPolicyId;
        $this->remoteTimeOffPolicyId = $remoteTimeOffPolicyId;
        $this->reason = $reason;
        $this->createdDate = $createdDate;
        $this->updatedDate = $updatedDate;
    }
}