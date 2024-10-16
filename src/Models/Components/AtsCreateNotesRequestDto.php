<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateNotesRequestDto
{
    /**
     * $content
     *
     * @var ?array<NoteContentApiModel> $content
     */
    #[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\NoteContentApiModel>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $content = null;

    /**
     * Unique identifier of the author
     *
     * @var ?string $authorId
     */
    #[\JMS\Serializer\Annotation\SerializedName('author_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $authorId = null;

    /**
     * Visibility of the note
     *
     * @var ?AtsCreateNotesRequestDtoVisibility $visibility
     */
    #[\JMS\Serializer\Annotation\SerializedName('visibility')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateNotesRequestDtoVisibility|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateNotesRequestDtoVisibility $visibility = null;

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
     * @param  ?array<NoteContentApiModel>  $content
     * @param  ?string  $authorId
     * @param  ?AtsCreateNotesRequestDtoVisibility  $visibility
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?array $content = null, ?string $authorId = null, ?AtsCreateNotesRequestDtoVisibility $visibility = null, ?array $passthrough = null)
    {
        $this->content = $content;
        $this->authorId = $authorId;
        $this->visibility = $visibility;
        $this->passthrough = $passthrough;
    }
}