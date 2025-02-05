<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateBackgroundCheckOrderRequestDtoApplication
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
     * @var ?AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus $applicationStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus $applicationStatus = null;

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
     * @param  ?AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus  $applicationStatus
     * @param  ?array<string, mixed>  $passthrough
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus $applicationStatus = null, ?array $passthrough = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->applicationStatus = $applicationStatus;
        $this->passthrough = $passthrough;
    }
}