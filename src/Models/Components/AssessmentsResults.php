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
     * The id of the candidate assessment
     *
     * @var ?string $assessmentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('assessment_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $assessmentId = null;

    /**
     *
     * @var ?AssessmentsResultsCandidate $candidate
     */
    #[\JMS\Serializer\Annotation\SerializedName('candidate')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentsResultsCandidate|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentsResultsCandidate $candidate = null;

    /**
     *
     * @var ?Score $score
     */
    #[\JMS\Serializer\Annotation\SerializedName('score')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Score|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Score $score = null;

    /**
     * The start date of the candidate assessment
     *
     * @var ?\DateTime $assessmentDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('assessment_date')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $assessmentDate = null;

    /**
     * The submission date of the candidate assessment
     *
     * @var ?\DateTime $submissionDate
     */
    #[\JMS\Serializer\Annotation\SerializedName('submission_date')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $submissionDate = null;

    /**
     * The summary about the result of the assessments
     *
     * @var ?string $summary
     */
    #[\JMS\Serializer\Annotation\SerializedName('summary')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $summary = null;

    /**
     *
     * @var ?Result $result
     */
    #[\JMS\Serializer\Annotation\SerializedName('result')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Result|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Result $result = null;

    /**
     * The assessment`s result url
     *
     * @var ?string $resultUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('result_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $resultUrl = null;

    /**
     *
     * @var ?Attachments $attachments
     */
    #[\JMS\Serializer\Annotation\SerializedName('attachments')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Attachments|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
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