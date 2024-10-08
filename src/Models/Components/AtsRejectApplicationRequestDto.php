<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsRejectApplicationRequestDto
{
    /**
     * Value to pass through to the provider
     *
     * @var ?array<string, mixed> $passthrough
     */
    #[\JMS\Serializer\Annotation\SerializedName('passthrough')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * Unique identifier of the rejection reason
     *
     * @var ?string $rejectedReasonId
     */
    #[\JMS\Serializer\Annotation\SerializedName('rejected_reason_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $rejectedReasonId = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?string  $rejectedReasonId
     */
    public function __construct(?array $passthrough = null, ?string $rejectedReasonId = null)
    {
        $this->passthrough = $passthrough;
        $this->rejectedReasonId = $rejectedReasonId;
    }
}