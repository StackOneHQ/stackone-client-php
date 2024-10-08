<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class HrisDocumentApiModel
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
     * The category of the the document
     *
     * @var ?HrisDocumentApiModelCategory $category
     */
    #[\JMS\Serializer\Annotation\SerializedName('category')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisDocumentApiModelCategory|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisDocumentApiModelCategory $category = null;

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
     * @var ?HrisDocumentApiModelFileFormat $fileFormat
     */
    #[\JMS\Serializer\Annotation\SerializedName('file_format')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisDocumentApiModelFileFormat|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisDocumentApiModelFileFormat $fileFormat = null;

    /**
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * The content type of the document
     *
     * @var ?HrisDocumentApiModelType $type
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisDocumentApiModelType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisDocumentApiModelType $type = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?string  $path
     * @param  ?HrisDocumentApiModelCategory  $category
     * @param  ?array<Content>  $contents
     * @param  ?string  $categoryId
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $remoteUrl
     * @param  ?HrisDocumentApiModelFileFormat  $fileFormat
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?HrisDocumentApiModelType  $type
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?string $path = null, ?HrisDocumentApiModelCategory $category = null, ?array $contents = null, ?string $categoryId = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?string $remoteUrl = null, ?HrisDocumentApiModelFileFormat $fileFormat = null, ?array $unifiedCustomFields = null, ?HrisDocumentApiModelType $type = null)
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
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->type = $type;
    }
}