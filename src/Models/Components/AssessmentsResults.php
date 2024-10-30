<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentsResults
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
     * The id of the candidate assessment
     *
     * @var ?string $assessmentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('assessment_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $assessmentId = null;

    /**
     *
     * @var ?AssessmentsResultsCandidate $candidate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentsResultsCandidate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentsResultsCandidate $candidate = null;

    /**
     *
     * @var ?Score $score
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('score')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Score|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Score $score = null;

    /**
     * The start date of the candidate assessment
     *
     * @var ?\DateTime $assessmentDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('assessment_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $assessmentDate = null;

    /**
     * The submission date of the candidate assessment
     *
     * @var ?\DateTime $submissionDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('submission_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $submissionDate = null;

    /**
     * The summary about the result of the assessments
     *
     * @var ?string $summary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('summary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $summary = null;

    /**
     *
     * @var ?Result $result
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Result|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Result $result = null;

    /**
     * The assessment`s result url
     *
     * @var ?string $resultUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $resultUrl = null;

    /**
     *
     * @var ?Attachments $attachments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachments')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Attachments|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Attachments $attachments = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $assessmentId
     * @param  ?AssessmentsResultsCandidate  $candidate
     * @param  ?Score  $score
     * @param  ?\DateTime  $assessmentDate
     * @param  ?\DateTime  $submissionDate
     * @param  ?string  $summary
     * @param  ?Result  $result
     * @param  ?string  $resultUrl
     * @param  ?Attachments  $attachments
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $assessmentId = null, ?AssessmentsResultsCandidate $candidate = null, ?Score $score = null, ?\DateTime $assessmentDate = null, ?\DateTime $submissionDate = null, ?string $summary = null, ?Result $result = null, ?string $resultUrl = null, ?Attachments $attachments = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->assessmentId = $assessmentId;
        $this->candidate = $candidate;
        $this->score = $score;
        $this->assessmentDate = $assessmentDate;
        $this->submissionDate = $submissionDate;
        $this->summary = $summary;
        $this->result = $result;
        $this->resultUrl = $resultUrl;
        $this->attachments = $attachments;
    }
}