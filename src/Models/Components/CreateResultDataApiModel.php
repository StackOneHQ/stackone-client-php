<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateResultDataApiModel
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
     * The external identifier
     *
     * @var ?string $externalReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalReference = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $externalReference
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $externalReference = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->externalReference = $externalReference;
    }
}