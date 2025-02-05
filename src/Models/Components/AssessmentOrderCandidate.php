<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentOrderCandidate
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
     * Candidate first name
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Candidate last name
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * List of candidate emails
     *
     * @var ?array<CandidateEmail> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CandidateEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

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
     * Candidate profile url
     *
     * @var ?string $profileUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('profile_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $profileUrl = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?array<CandidateEmail>  $emails
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?string  $profileUrl
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $firstName = null, ?string $lastName = null, ?array $emails = null, ?array $passthrough = null, ?string $profileUrl = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emails = $emails;
        $this->passthrough = $passthrough;
        $this->profileUrl = $profileUrl;
    }
}