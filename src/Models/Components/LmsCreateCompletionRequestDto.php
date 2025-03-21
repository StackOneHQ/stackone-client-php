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
    #[\Speakeasy\Serializer\Annotation\SerializedName('passthrough')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * The result of the completion
     *
     * @var ?LmsCreateCompletionRequestDtoResult $result
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('result')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsCreateCompletionRequestDtoResult|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LmsCreateCompletionRequestDtoResult $result = null;

    /**
     * The date the content was completed
     *
     * @var ?string $completedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('completed_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $completedAt = null;

    /**
     * The id of the learning object associated with this completion. This is not required unless specified in an integration.
     *
     * @var ?string $learningObjectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('learning_object_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $learningObjectId = null;

    /**
     * The external reference of the learning object associated with this completion, this is the main identifier for creating completions.
     *
     * @var ?string $learningObjectExternalReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('learning_object_external_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $learningObjectExternalReference = null;

    /**
     * The external reference associated with this content
     *
     * @var ?string $contentExternalReference
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_external_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contentExternalReference = null;

    /**
     * The content ID associated with this completion
     *
     * @var ?string $contentId
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contentId = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?LmsCreateCompletionRequestDtoResult  $result
     * @param  ?string  $completedAt
     * @param  ?string  $learningObjectId
     * @param  ?string  $learningObjectExternalReference
     * @param  ?string  $contentExternalReference
     * @param  ?string  $contentId
     * @phpstan-pure
     */
    public function __construct(?array $passthrough = null, ?LmsCreateCompletionRequestDtoResult $result = null, ?string $completedAt = null, ?string $learningObjectId = null, ?string $learningObjectExternalReference = null, ?string $contentExternalReference = null, ?string $contentId = null)
    {
        $this->passthrough = $passthrough;
        $this->result = $result;
        $this->completedAt = $completedAt;
        $this->learningObjectId = $learningObjectId;
        $this->learningObjectExternalReference = $learningObjectExternalReference;
        $this->contentExternalReference = $contentExternalReference;
        $this->contentId = $contentId;
    }
}