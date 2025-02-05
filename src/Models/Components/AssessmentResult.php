<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentResult
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
     *
     * @var ?AssessmentResultCandidate $candidate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentResultCandidate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentResultCandidate $candidate = null;

    /**
     *
     * @var ?AssessmentResultScore $score
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('score')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentResultScore|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentResultScore $score = null;

    /**
     * The start date of the candidate test
     *
     * @var ?\DateTime $startDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startDate = null;

    /**
     * The submission date of the candidate test
     *
     * @var ?\DateTime $submissionDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('submission_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $submissionDate = null;

    /**
     * The summary about the result of the test
     *
     * @var ?string $summary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('summary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $summary = null;

    /**
     *
     * @var ?AssessmentResultResult $result
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentResultResult|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentResultResult $result = null;

    /**
     * The test`s result url
     *
     * @var ?string $resultUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $resultUrl = null;

    /**
     * $attachments
     *
     * @var ?array<Attachment> $attachments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Attachment>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attachments = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?AssessmentResultCandidate  $candidate
     * @param  ?AssessmentResultScore  $score
     * @param  ?\DateTime  $startDate
     * @param  ?\DateTime  $submissionDate
     * @param  ?string  $summary
     * @param  ?AssessmentResultResult  $result
     * @param  ?string  $resultUrl
     * @param  ?array<Attachment>  $attachments
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?AssessmentResultCandidate $candidate = null, ?AssessmentResultScore $score = null, ?\DateTime $startDate = null, ?\DateTime $submissionDate = null, ?string $summary = null, ?AssessmentResultResult $result = null, ?string $resultUrl = null, ?array $attachments = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->candidate = $candidate;
        $this->score = $score;
        $this->startDate = $startDate;
        $this->submissionDate = $submissionDate;
        $this->summary = $summary;
        $this->result = $result;
        $this->resultUrl = $resultUrl;
        $this->attachments = $attachments;
    }
}