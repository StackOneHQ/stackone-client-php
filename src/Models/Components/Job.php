<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Job
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
     * Code of the job
     *
     * @var ?string $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $code = null;

    /**
     * Title of the job
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * Status of the job
     *
     * @var ?string $status
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $status = null;

    /**
     * Status of the job
     *
     * @var ?JobStatus $jobStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_status')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobStatus $jobStatus = null;

    /**
     * Department ids of the job
     *
     * @var ?array<string> $departmentIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('department_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $departmentIds = null;

    /**
     * Provider's department ids of the job
     *
     * @var ?array<string> $remoteDepartmentIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_department_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteDepartmentIds = null;

    /**
     * Location ids of the job
     *
     * @var ?array<string> $locationIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('location_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $locationIds = null;

    /**
     * Provider's location ids of the job
     *
     * @var ?array<string> $remoteLocationIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_location_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteLocationIds = null;

    /**
     * Hiring team for the job.
     *
     * @var ?array<JobHiringTeam> $hiringTeam
     */
    #[\JMS\Serializer\Annotation\SerializedName('hiring_team')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobHiringTeam>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $hiringTeam = null;

    /**
     * Interview stages for the job.
     *
     * @var ?array<InterviewStage> $interviewStages
     */
    #[\JMS\Serializer\Annotation\SerializedName('interview_stages')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\InterviewStage>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $interviewStages = null;

    /**
     * Confidential status of the job
     *
     * @var ?JobConfidential $confidential
     */
    #[\JMS\Serializer\Annotation\SerializedName('confidential')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobConfidential|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobConfidential $confidential = null;

    /**
     * The job custom fields
     *
     * @var ?array<JobCustomFields> $customFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobCustomFields>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * Date of creation
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Date of last update
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
     * @param  ?string  $code
     * @param  ?string  $title
     * @param  ?string  $status
     * @param  ?JobStatus  $jobStatus
     * @param  ?array<string>  $departmentIds
     * @param  ?array<string>  $remoteDepartmentIds
     * @param  ?array<string>  $locationIds
     * @param  ?array<string>  $remoteLocationIds
     * @param  ?array<JobHiringTeam>  $hiringTeam
     * @param  ?array<InterviewStage>  $interviewStages
     * @param  ?JobConfidential  $confidential
     * @param  ?array<JobCustomFields>  $customFields
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $code = null, ?string $title = null, ?string $status = null, ?JobStatus $jobStatus = null, ?array $departmentIds = null, ?array $remoteDepartmentIds = null, ?array $locationIds = null, ?array $remoteLocationIds = null, ?array $hiringTeam = null, ?array $interviewStages = null, ?JobConfidential $confidential = null, ?array $customFields = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->code = $code;
        $this->title = $title;
        $this->status = $status;
        $this->jobStatus = $jobStatus;
        $this->departmentIds = $departmentIds;
        $this->remoteDepartmentIds = $remoteDepartmentIds;
        $this->locationIds = $locationIds;
        $this->remoteLocationIds = $remoteLocationIds;
        $this->hiringTeam = $hiringTeam;
        $this->interviewStages = $interviewStages;
        $this->confidential = $confidential;
        $this->customFields = $customFields;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}