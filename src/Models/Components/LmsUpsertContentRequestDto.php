<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LmsUpsertContentRequestDto
{
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
     * The external ID associated with this content
     *
     * @var ?string $externalReference
     */
    #[\JMS\Serializer\Annotation\SerializedName('external_reference')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $externalReference = null;

    /**
     * The parent IDs associated with this content
     *
     * @var ?array<string> $courseIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('course_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $courseIds = null;

    /**
     * The title of the content
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The description of the content
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The languages associated with this content
     *
     * @var ?array<ContentLanguageEnum> $languages
     */
    #[\JMS\Serializer\Annotation\SerializedName('languages')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ContentLanguageEnum>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $languages = null;

    /**
     * The external URL of the content
     *
     * @var ?string $contentUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('content_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $contentUrl = null;

    /**
     * The type of content
     *
     * @var ?LmsUpsertContentRequestDtoContentType $contentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('content_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsUpsertContentRequestDtoContentType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?LmsUpsertContentRequestDtoContentType $contentType = null;

    /**
     * The URL of the thumbnail image associated with the content.
     *
     * @var ?string $coverUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('cover_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $coverUrl = null;

    /**
     * Whether the content is active and available for users.
     *
     * @var bool|LmsUpsertContentRequestDtoActive2|null $active
     */
    #[\JMS\Serializer\Annotation\SerializedName('active')]
    #[\JMS\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\LmsUpsertContentRequestDtoActive2')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public bool|LmsUpsertContentRequestDtoActive2|null $active = null;

    /**
     * The duration of the content following the ISO8601 standard. If duration_unit is applicable we will derive this from the smallest unit given in the duration string
     *
     * @var ?string $duration
     */
    #[\JMS\Serializer\Annotation\SerializedName('duration')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $duration = null;

    /**
     * The order of the individual content within a content grouping. This is not applicable for pushing individual content.
     *
     * @var ?float $order
     */
    #[\JMS\Serializer\Annotation\SerializedName('order')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $order = null;

    /**
     * The categories associated with this content
     *
     * @var ?array<CreateCategoriesApiModel> $categories
     */
    #[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateCategoriesApiModel>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $categories = null;

    /**
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $externalReference
     * @param  ?array<string>  $courseIds
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?array<ContentLanguageEnum>  $languages
     * @param  ?string  $contentUrl
     * @param  ?LmsUpsertContentRequestDtoContentType  $contentType
     * @param  ?string  $coverUrl
     * @param  bool|LmsUpsertContentRequestDtoActive2|null  $active
     * @param  ?string  $duration
     * @param  ?float  $order
     * @param  ?array<CreateCategoriesApiModel>  $categories
     */
    public function __construct(?array $unifiedCustomFields = null, ?string $externalReference = null, ?array $courseIds = null, ?string $title = null, ?string $description = null, ?array $languages = null, ?string $contentUrl = null, ?LmsUpsertContentRequestDtoContentType $contentType = null, ?string $coverUrl = null, bool|LmsUpsertContentRequestDtoActive2|null $active = null, ?string $duration = null, ?float $order = null, ?array $categories = null)
    {
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->externalReference = $externalReference;
        $this->courseIds = $courseIds;
        $this->title = $title;
        $this->description = $description;
        $this->languages = $languages;
        $this->contentUrl = $contentUrl;
        $this->contentType = $contentType;
        $this->coverUrl = $coverUrl;
        $this->active = $active;
        $this->duration = $duration;
        $this->order = $order;
        $this->categories = $categories;
    }
}