<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsMoveApplicationRequestDto
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
     * Unique identifier of the application stage.
     *
     * @var ?string $interviewStageId
     */
    #[\JMS\Serializer\Annotation\SerializedName('interview_stage_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $interviewStageId = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?string  $interviewStageId
     */
    public function __construct(?array $passthrough = null, ?string $interviewStageId = null)
    {
        $this->passthrough = $passthrough;
        $this->interviewStageId = $interviewStageId;
    }
}