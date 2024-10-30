<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class HrisCreateTimeOffRequestDto
{
    /**
     * The employee ID
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * The approver ID
     *
     * @var ?string $approverId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('approver_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $approverId = null;

    /**
     * The status of the time off request
     *
     * @var ?HrisCreateTimeOffRequestDtoStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateTimeOffRequestDtoStatus $status = null;

    /**
     * The type of the time off request
     *
     * @var ?HrisCreateTimeOffRequestDtoType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateTimeOffRequestDtoType $type = null;

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
     * @var bool|StartHalfDay2|null $startHalfDay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_half_day')]
    #[\Speakeasy\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\StartHalfDay2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public bool|StartHalfDay2|null $startHalfDay = null;

    /**
     * True if the end of the time off request ends half way through the day
     *
     * @var bool|HrisCreateTimeOffRequestDtoEndHalfDay2|null $endHalfDay
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_half_day')]
    #[\Speakeasy\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoEndHalfDay2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public bool|HrisCreateTimeOffRequestDtoEndHalfDay2|null $endHalfDay = null;

    /**
     * Value to pass through to the provider
     *
     * @var ?array<string, mixed> $passthrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('passthrough')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * @param  ?string  $employeeId
     * @param  ?string  $approverId
     * @param  ?HrisCreateTimeOffRequestDtoStatus  $status
     * @param  ?HrisCreateTimeOffRequestDtoType  $type
     * @param  ?\DateTime  $startDate
     * @param  ?\DateTime  $endDate
     * @param  bool|StartHalfDay2|null  $startHalfDay
     * @param  bool|HrisCreateTimeOffRequestDtoEndHalfDay2|null  $endHalfDay
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?string $employeeId = null, ?string $approverId = null, ?HrisCreateTimeOffRequestDtoStatus $status = null, ?HrisCreateTimeOffRequestDtoType $type = null, ?\DateTime $startDate = null, ?\DateTime $endDate = null, bool|StartHalfDay2|null $startHalfDay = null, bool|HrisCreateTimeOffRequestDtoEndHalfDay2|null $endHalfDay = null, ?array $passthrough = null)
    {
        $this->employeeId = $employeeId;
        $this->approverId = $approverId;
        $this->status = $status;
        $this->type = $type;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->startHalfDay = $startHalfDay;
        $this->endHalfDay = $endHalfDay;
        $this->passthrough = $passthrough;
    }
}