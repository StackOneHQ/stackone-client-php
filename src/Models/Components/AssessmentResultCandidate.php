<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentResultCandidate
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
     * @param  ?string  $profileUrl
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $profileUrl = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->profileUrl = $profileUrl;
    }
}