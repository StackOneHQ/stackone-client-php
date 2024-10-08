<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Document
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * The name of the file
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The path where the file is stored
     *
     * @var ?string $path
     */
    #[\JMS\Serializer\Annotation\SerializedName('path')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $path = null;

    /**
     * The category of the file
     *
     * @var ?WorkEligibilityCategory $category
     */
    #[\JMS\Serializer\Annotation\SerializedName('category')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\WorkEligibilityCategory|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?WorkEligibilityCategory $category = null;

    /**
     * The content of the file. Deprecated, use `url` and `file_format` one level up instead
     *
     * @var ?array<Content> $contents
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('contents')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Content>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $contents = null;

    /**
     * The categoryId of the documents
     *
     * @var ?string $categoryId
     */
    #[\JMS\Serializer\Annotation\SerializedName('category_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $categoryId = null;

    /**
     * The creation date of the file
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The update date of the file
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * URL where the file content is located
     *
     * @var ?string $remoteUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteUrl = null;

    /**
     * The file format of the file
     *
     * @var ?WorkEligibilityFileFormat $fileFormat
     */
    #[\JMS\Serializer\Annotation\SerializedName('file_format')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\WorkEligibilityFileFormat|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?WorkEligibilityFileFormat $fileFormat = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?string  $path
     * @param  ?WorkEligibilityCategory  $category
     * @param  ?array<Content>  $contents
     * @param  ?string  $categoryId
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $remoteUrl
     * @param  ?WorkEligibilityFileFormat  $fileFormat
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?string $path = null, ?WorkEligibilityCategory $category = null, ?array $contents = null, ?string $categoryId = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?string $remoteUrl = null, ?WorkEligibilityFileFormat $fileFormat = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->path = $path;
        $this->category = $category;
        $this->contents = $contents;
        $this->categoryId = $categoryId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->remoteUrl = $remoteUrl;
        $this->fileFormat = $fileFormat;
    }
}