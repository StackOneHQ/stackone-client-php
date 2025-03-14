<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Application
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
     * Unique identifier of the candidate
     *
     * @var ?string $candidateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $candidateId = null;

    /**
     * Provider's unique identifier of the candidate
     *
     * @var ?string $remoteCandidateId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_candidate_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteCandidateId = null;

    /**
     * Unique identifier of the job
     *
     * @var ?string $jobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $jobId = null;

    /**
     * Provider's unique identifier of the job
     *
     * @var ?string $remoteJobId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_job_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteJobId = null;

    /**
     *
     * @var ?ApplicationInterviewStage $interviewStage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interview_stage')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ApplicationInterviewStage|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplicationInterviewStage $interviewStage = null;

    /**
     * Unique identifier of the interview stage
     *
     * @var ?string $interviewStageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interview_stage_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $interviewStageId = null;

    /**
     * Provider's unique identifier of the interview stage
     *
     * @var ?string $remoteInterviewStageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_interview_stage_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteInterviewStageId = null;

    /**
     * $rejectedReasons
     *
     * @var ?array<RejectedReason> $rejectedReasons
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rejected_reasons')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\RejectedReason>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $rejectedReasons = null;

    /**
     * Unique identifiers of the rejection reasons
     *
     * @var ?array<string> $rejectedReasonIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rejected_reason_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $rejectedReasonIds = null;

    /**
     * Provider's unique identifiers of the rejection reasons
     *
     * @var ?array<string> $remoteRejectedReasonIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_rejected_reason_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteRejectedReasonIds = null;

    /**
     * Date of rejection
     *
     * @var ?\DateTime $rejectedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('rejected_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $rejectedAt = null;

    /**
     * Unique identifier of the location
     *
     * @var ?string $locationId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $locationId = null;

    /**
     * Provider's unique identifier of the location
     *
     * @var ?string $remoteLocationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_location_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteLocationId = null;

    /**
     * Unique identifiers of the locations
     *
     * @var ?array<string> $locationIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $locationIds = null;

    /**
     * Remote's unique identifiers of the locations
     *
     * @var ?array<string> $remoteLocationIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_location_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteLocationIds = null;

    /**
     *
     * @var ?ApplicationStatus $applicationStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ApplicationStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplicationStatus $applicationStatus = null;

    /**
     * Questionnaires associated with the application
     *
     * @var ?array<Questionnaire> $questionnaires
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('questionnaires')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Questionnaire>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $questionnaires = null;

    /**
     *
     * @var ?ApplicationCandidate $candidate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ApplicationCandidate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplicationCandidate $candidate = null;

    /**
     * Use `documents` expand instead
     *
     * @var ?array<ApplicationAttachment> $attachments
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ApplicationAttachment>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attachments = null;

    /**
     * The documents attached to this application (eg. resume, cover letter etc.)
     *
     * @var ?array<AtsDocumentApiModel> $documents
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('documents')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\AtsDocumentApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $documents = null;

    /**
     * $resultLinks
     *
     * @var ?array<ResultLink> $resultLinks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result_links')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ResultLink>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $resultLinks = null;

    /**
     *
     * @var ?Source $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Source|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Source $source = null;

    /**
     * Date of creation
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Date of last update
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The application custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $candidateId
     * @param  ?string  $remoteCandidateId
     * @param  ?string  $jobId
     * @param  ?string  $remoteJobId
     * @param  ?ApplicationInterviewStage  $interviewStage
     * @param  ?string  $interviewStageId
     * @param  ?string  $remoteInterviewStageId
     * @param  ?array<RejectedReason>  $rejectedReasons
     * @param  ?array<string>  $rejectedReasonIds
     * @param  ?array<string>  $remoteRejectedReasonIds
     * @param  ?\DateTime  $rejectedAt
     * @param  ?string  $locationId
     * @param  ?string  $remoteLocationId
     * @param  ?array<string>  $locationIds
     * @param  ?array<string>  $remoteLocationIds
     * @param  ?ApplicationStatus  $applicationStatus
     * @param  ?array<Questionnaire>  $questionnaires
     * @param  ?ApplicationCandidate  $candidate
     * @param  ?array<ApplicationAttachment>  $attachments
     * @param  ?array<AtsDocumentApiModel>  $documents
     * @param  ?array<ResultLink>  $resultLinks
     * @param  ?Source  $source
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<CustomFields>  $customFields
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $candidateId = null, ?string $remoteCandidateId = null, ?string $jobId = null, ?string $remoteJobId = null, ?ApplicationInterviewStage $interviewStage = null, ?string $interviewStageId = null, ?string $remoteInterviewStageId = null, ?array $rejectedReasons = null, ?array $rejectedReasonIds = null, ?array $remoteRejectedReasonIds = null, ?\DateTime $rejectedAt = null, ?string $locationId = null, ?string $remoteLocationId = null, ?array $locationIds = null, ?array $remoteLocationIds = null, ?ApplicationStatus $applicationStatus = null, ?array $questionnaires = null, ?ApplicationCandidate $candidate = null, ?array $attachments = null, ?array $documents = null, ?array $resultLinks = null, ?Source $source = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?array $customFields = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->candidateId = $candidateId;
        $this->remoteCandidateId = $remoteCandidateId;
        $this->jobId = $jobId;
        $this->remoteJobId = $remoteJobId;
        $this->interviewStage = $interviewStage;
        $this->interviewStageId = $interviewStageId;
        $this->remoteInterviewStageId = $remoteInterviewStageId;
        $this->rejectedReasons = $rejectedReasons;
        $this->rejectedReasonIds = $rejectedReasonIds;
        $this->remoteRejectedReasonIds = $remoteRejectedReasonIds;
        $this->rejectedAt = $rejectedAt;
        $this->locationId = $locationId;
        $this->remoteLocationId = $remoteLocationId;
        $this->locationIds = $locationIds;
        $this->remoteLocationIds = $remoteLocationIds;
        $this->applicationStatus = $applicationStatus;
        $this->questionnaires = $questionnaires;
        $this->candidate = $candidate;
        $this->attachments = $attachments;
        $this->documents = $documents;
        $this->resultLinks = $resultLinks;
        $this->source = $source;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->customFields = $customFields;
    }
}