<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Note
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
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * $content
     *
     * @var ?array<NoteContentApiModel> $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\NoteContentApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $content = null;

    /**
     * Unique identifier of the author
     *
     * @var ?string $authorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('author_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $authorId = null;

    /**
     * Provider's unique identifier of the author
     *
     * @var ?string $remoteAuthorId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_author_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteAuthorId = null;

    /**
     * Visibility of the note
     *
     * @var ?Visibility $visibility
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('visibility')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Visibility|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Visibility $visibility = null;

    /**
     * Date of creation
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Date of last update
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * Date of Deletion
     *
     * @var ?\DateTime $deletedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deleted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $deletedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?array<NoteContentApiModel>  $content
     * @param  ?string  $authorId
     * @param  ?string  $remoteAuthorId
     * @param  ?Visibility  $visibility
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?\DateTime  $deletedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?array $content = null, ?string $authorId = null, ?string $remoteAuthorId = null, ?Visibility $visibility = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?\DateTime $deletedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->content = $content;
        $this->authorId = $authorId;
        $this->remoteAuthorId = $remoteAuthorId;
        $this->visibility = $visibility;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->deletedAt = $deletedAt;
    }
}