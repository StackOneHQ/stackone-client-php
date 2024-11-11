<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsUpdateJobRequestDto
{
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
     * Code of the job
     *
     * @var ?string $code
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Title of the job
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * Status of the job
     *
     * @var ?string $status
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     * Status of the job
     *
     * @var ?AtsUpdateJobRequestDtoJobStatus $jobStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsUpdateJobRequestDtoJobStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsUpdateJobRequestDtoJobStatus $jobStatus = null;

    /**
     * Department ids of the job
     *
     * @var ?array<string> $departmentIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $departmentIds = null;

    /**
     * Location ids of the job
     *
     * @var ?array<string> $locationIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $locationIds = null;

    /**
     * Hiring team for the job.
     *
     * @var ?array<JobHiringTeam> $hiringTeam
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hiring_team')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobHiringTeam>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $hiringTeam = null;

    /**
     * Interview stages for the job.
     *
     * @var ?array<InterviewStage> $interviewStages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interview_stages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\InterviewStage>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $interviewStages = null;

    /**
     * Confidential status of the job
     *
     * @var ?AtsUpdateJobRequestDtoConfidential $confidential
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('confidential')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsUpdateJobRequestDtoConfidential|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsUpdateJobRequestDtoConfidential $confidential = null;

    /**
     * The job custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

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
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $code
     * @param  ?string  $title
     * @param  ?string  $status
     * @param  ?AtsUpdateJobRequestDtoJobStatus  $jobStatus
     * @param  ?array<string>  $departmentIds
     * @param  ?array<string>  $locationIds
     * @param  ?array<JobHiringTeam>  $hiringTeam
     * @param  ?array<InterviewStage>  $interviewStages
     * @param  ?AtsUpdateJobRequestDtoConfidential  $confidential
     * @param  ?array<CustomFields>  $customFields
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?array $unifiedCustomFields = null, ?string $code = null, ?string $title = null, ?string $status = null, ?AtsUpdateJobRequestDtoJobStatus $jobStatus = null, ?array $departmentIds = null, ?array $locationIds = null, ?array $hiringTeam = null, ?array $interviewStages = null, ?AtsUpdateJobRequestDtoConfidential $confidential = null, ?array $customFields = null, ?array $passthrough = null)
    {
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->code = $code;
        $this->title = $title;
        $this->status = $status;
        $this->jobStatus = $jobStatus;
        $this->departmentIds = $departmentIds;
        $this->locationIds = $locationIds;
        $this->hiringTeam = $hiringTeam;
        $this->interviewStages = $interviewStages;
        $this->confidential = $confidential;
        $this->customFields = $customFields;
        $this->passthrough = $passthrough;
    }
}