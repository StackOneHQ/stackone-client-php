<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPosting
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
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * $locations
     *
     * @var ?array<JobPostingLocation> $locations
     */
    #[\JMS\Serializer\Annotation\SerializedName('locations')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobPostingLocation>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $locations = null;

    /**
     *
     * @var ?Internal $internal
     */
    #[\JMS\Serializer\Annotation\SerializedName('internal')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Internal|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Internal $internal = null;

    /**
     *
     * @var ?JobPostingStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingStatus|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingStatus $status = null;

    /**
     *
     * @var ?string $jobId
     */
    #[\JMS\Serializer\Annotation\SerializedName('job_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * Provider's unique identifier of the job posting
     *
     * @var ?string $remoteJobPostingId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_job_posting_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteJobPostingId = null;

    /**
     *
     * @var ?JobPostingContent $content
     */
    #[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingContent|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingContent $content = null;

    /**
     * $compensation
     *
     * @var ?array<JobPostingCompensation> $compensation
     */
    #[\JMS\Serializer\Annotation\SerializedName('compensation')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobPostingCompensation>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $compensation = null;

    /**
     *
     * @var ?JobPostingEmploymentType $employmentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingEmploymentType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingEmploymentType $employmentType = null;

    /**
     *
     * @var ?JobPostingEmploymentContractType $employmentContractType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_contract_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingEmploymentContractType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingEmploymentContractType $employmentContractType = null;

    /**
     *
     * @var ?string $externalUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalUrl = null;

    /**
     *
     * @var ?string $externalApplyUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_apply_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalApplyUrl = null;

    /**
     * $questionnaires
     *
     * @var ?array<JobPostingQuestionnaire> $questionnaires
     */
    #[\JMS\Serializer\Annotation\SerializedName('questionnaires')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobPostingQuestionnaire>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $questionnaires = null;

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
     * @param  ?string  $title
     * @param  ?array<JobPostingLocation>  $locations
     * @param  ?Internal  $internal
     * @param  ?JobPostingStatus  $status
     * @param  ?string  $jobId
     * @param  ?string  $remoteJobPostingId
     * @param  ?JobPostingContent  $content
     * @param  ?array<JobPostingCompensation>  $compensation
     * @param  ?JobPostingEmploymentType  $employmentType
     * @param  ?JobPostingEmploymentContractType  $employmentContractType
     * @param  ?string  $externalUrl
     * @param  ?string  $externalApplyUrl
     * @param  ?array<JobPostingQuestionnaire>  $questionnaires
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $title = null, ?array $locations = null, ?Internal $internal = null, ?JobPostingStatus $status = null, ?string $jobId = null, ?string $remoteJobPostingId = null, ?JobPostingContent $content = null, ?array $compensation = null, ?JobPostingEmploymentType $employmentType = null, ?JobPostingEmploymentContractType $employmentContractType = null, ?string $externalUrl = null, ?string $externalApplyUrl = null, ?array $questionnaires = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->title = $title;
        $this->locations = $locations;
        $this->internal = $internal;
        $this->status = $status;
        $this->jobId = $jobId;
        $this->remoteJobPostingId = $remoteJobPostingId;
        $this->content = $content;
        $this->compensation = $compensation;
        $this->employmentType = $employmentType;
        $this->employmentContractType = $employmentContractType;
        $this->externalUrl = $externalUrl;
        $this->externalApplyUrl = $externalApplyUrl;
        $this->questionnaires = $questionnaires;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}