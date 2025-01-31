<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateBackgroundCheckOrderRequestDto
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
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoApplication $application
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoApplication|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoApplication $application = null;

    /**
     *
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoJob $job
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('job')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoJob|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoJob $job = null;

    /**
     *
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoCandidate $candidate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('candidate')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoCandidate|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoCandidate $candidate = null;

    /**
     *
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoRequester $requester
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('requester')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoRequester|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoRequester $requester = null;

    /**
     * Results update url
     *
     * @var ?string $resultsUpdateUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('results_update_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $resultsUpdateUrl = null;

    /**
     *
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoPackage $package
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('package')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoPackage|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoPackage $package = null;

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
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoApplication  $application
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoJob  $job
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoCandidate  $candidate
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoRequester  $requester
     * @param  ?string  $resultsUpdateUrl
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoPackage  $package
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?AtsCreateBackgroundCheckOrderRequestDtoApplication $application = null, ?AtsCreateBackgroundCheckOrderRequestDtoJob $job = null, ?AtsCreateBackgroundCheckOrderRequestDtoCandidate $candidate = null, ?AtsCreateBackgroundCheckOrderRequestDtoRequester $requester = null, ?string $resultsUpdateUrl = null, ?AtsCreateBackgroundCheckOrderRequestDtoPackage $package = null, ?array $passthrough = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->application = $application;
        $this->job = $job;
        $this->candidate = $candidate;
        $this->requester = $requester;
        $this->resultsUpdateUrl = $resultsUpdateUrl;
        $this->package = $package;
        $this->passthrough = $passthrough;
    }
}