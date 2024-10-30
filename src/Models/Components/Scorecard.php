<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Scorecard
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
     * The sections in the scorecard
     *
     * @var ?array<ScorecardSection> $sections
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sections')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ScorecardSection>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $sections = null;

    /**
     * The label of the scorecard
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * The candidate ID associated with the scorecard
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
     * The application ID associated with the scorecard
     *
     * @var ?string $applicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $applicationId = null;

    /**
     * Provider's unique identifier of the application
     *
     * @var ?string $remoteApplicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteApplicationId = null;

    /**
     * The interview ID associated with the scorecard
     *
     * @var ?string $interviewId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('interview_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $interviewId = null;

    /**
     * Provider's unique identifier of the interview
     *
     * @var ?string $remoteInterviewId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_interview_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteInterviewId = null;

    /**
     * The author ID of the scorecard
     *
     * @var ?string $authorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('author_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $authorId = null;

    /**
     * Provider's unique identifier of the author
     *
     * @var ?string $remoteAuthorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_author_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteAuthorId = null;

    /**
     * The overall recommendation
     *
     * @var ?OverallRecommendation $overallRecommendation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('overall_recommendation')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\OverallRecommendation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OverallRecommendation $overallRecommendation = null;

    /**
     * The creation date of the scorecard
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The update date of the scorecard
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<ScorecardSection>  $sections
     * @param  ?string  $label
     * @param  ?string  $candidateId
     * @param  ?string  $remoteCandidateId
     * @param  ?string  $applicationId
     * @param  ?string  $remoteApplicationId
     * @param  ?string  $interviewId
     * @param  ?string  $remoteInterviewId
     * @param  ?string  $authorId
     * @param  ?string  $remoteAuthorId
     * @param  ?OverallRecommendation  $overallRecommendation
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $sections = null, ?string $label = null, ?string $candidateId = null, ?string $remoteCandidateId = null, ?string $applicationId = null, ?string $remoteApplicationId = null, ?string $interviewId = null, ?string $remoteInterviewId = null, ?string $authorId = null, ?string $remoteAuthorId = null, ?OverallRecommendation $overallRecommendation = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->sections = $sections;
        $this->label = $label;
        $this->candidateId = $candidateId;
        $this->remoteCandidateId = $remoteCandidateId;
        $this->applicationId = $applicationId;
        $this->remoteApplicationId = $remoteApplicationId;
        $this->interviewId = $interviewId;
        $this->remoteInterviewId = $remoteInterviewId;
        $this->authorId = $authorId;
        $this->remoteAuthorId = $remoteAuthorId;
        $this->overallRecommendation = $overallRecommendation;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}