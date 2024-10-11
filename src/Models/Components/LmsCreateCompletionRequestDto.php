<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LmsCreateCompletionRequestDto
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
     * The external ID associated with this completion
     *
     * @var ?string $externalId
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalId = null;

    /**
     * The external reference associated with this content
     *
     * @var ?string $contentExternalReference
     */
    #[\JMS\Serializer\Annotation\SerializedName('content_external_reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $contentExternalReference = null;

    /**
     * The content ID associated with this completion
     *
     * @var ?string $contentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('content_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $contentId = null;

    /**
     * The result of the completion
     *
     * @var ?LmsCreateCompletionRequestDtoResult $result
     */
    #[\JMS\Serializer\Annotation\SerializedName('result')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsCreateCompletionRequestDtoResult|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?LmsCreateCompletionRequestDtoResult $result = null;

    /**
     * The date the content was completed
     *
     * @var ?string $completedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('completed_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $completedAt = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?string  $externalId
     * @param  ?string  $contentExternalReference
     * @param  ?string  $contentId
     * @param  ?LmsCreateCompletionRequestDtoResult  $result
     * @param  ?string  $completedAt
     */
    public function __construct(?array $passthrough = null, ?string $externalId = null, ?string $contentExternalReference = null, ?string $contentId = null, ?LmsCreateCompletionRequestDtoResult $result = null, ?string $completedAt = null)
    {
        $this->passthrough = $passthrough;
        $this->externalId = $externalId;
        $this->contentExternalReference = $contentExternalReference;
        $this->contentId = $contentId;
        $this->result = $result;
        $this->completedAt = $completedAt;
    }
}