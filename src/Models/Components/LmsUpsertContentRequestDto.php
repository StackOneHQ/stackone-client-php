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
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * The external ID associated with this content
     *
     * @var ?string $externalReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalReference = null;

    /**
     * The parent IDs associated with this content
     *
     * @var ?array<string> $courseIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('course_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $courseIds = null;

    /**
     * The title of the content
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The description of the content
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The additional_data associated with this content
     *
     * @var ?array<AdditionalData> $additionalData
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('additional_data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\AdditionalData>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $additionalData = null;

    /**
     * The languages associated with this content
     *
     * @var ?array<LanguageEnum> $languages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('languages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\LanguageEnum>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $languages = null;

    /**
     * The external URL of the content
     *
     * @var ?string $contentUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contentUrl = null;

    /**
     * The type of content
     *
     * @var ?LmsUpsertContentRequestDtoContentType $contentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsUpsertContentRequestDtoContentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LmsUpsertContentRequestDtoContentType $contentType = null;

    /**
     * The URL of the thumbnail image associated with the content.
     *
     * @var ?string $coverUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cover_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $coverUrl = null;

    /**
     * Whether the content is active and available for users.
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * The duration of the content following the ISO8601 standard. If duration_unit is applicable we will derive this from the smallest unit given in the duration string or the minimum unit accepted by the provider.
     *
     * @var ?string $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $duration = null;

    /**
     * The skills associated with this content
     *
     * @var ?array<CreateSkillsApiModel> $skills
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('skills')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateSkillsApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $skills = null;

    /**
     * The order of the individual content within a content grouping. This is not applicable for pushing individual content.
     *
     * @var ?float $order
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('order')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $order = null;

    /**
     * The name of the content provider
     *
     * @var ?string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     * A short description or summary for the content
     *
     * @var ?string $shortDescription
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('short_description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $shortDescription = null;

    /**
     * The categories associated with this content
     *
     * @var ?array<CreateCategoriesApiModel> $categories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('categories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateCategoriesApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $categories = null;

    /**
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $externalReference
     * @param  ?array<string>  $courseIds
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?array<AdditionalData>  $additionalData
     * @param  ?array<LanguageEnum>  $languages
     * @param  ?string  $contentUrl
     * @param  ?LmsUpsertContentRequestDtoContentType  $contentType
     * @param  ?string  $coverUrl
     * @param  ?bool  $active
     * @param  ?string  $duration
     * @param  ?array<CreateSkillsApiModel>  $skills
     * @param  ?float  $order
     * @param  ?string  $provider
     * @param  ?string  $shortDescription
     * @param  ?array<CreateCategoriesApiModel>  $categories
     */
    public function __construct(?array $unifiedCustomFields = null, ?string $externalReference = null, ?array $courseIds = null, ?string $title = null, ?string $description = null, ?array $additionalData = null, ?array $languages = null, ?string $contentUrl = null, ?LmsUpsertContentRequestDtoContentType $contentType = null, ?string $coverUrl = null, ?bool $active = null, ?string $duration = null, ?array $skills = null, ?float $order = null, ?string $provider = null, ?string $shortDescription = null, ?array $categories = null)
    {
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->externalReference = $externalReference;
        $this->courseIds = $courseIds;
        $this->title = $title;
        $this->description = $description;
        $this->additionalData = $additionalData;
        $this->languages = $languages;
        $this->contentUrl = $contentUrl;
        $this->contentType = $contentType;
        $this->coverUrl = $coverUrl;
        $this->active = $active;
        $this->duration = $duration;
        $this->skills = $skills;
        $this->order = $order;
        $this->provider = $provider;
        $this->shortDescription = $shortDescription;
        $this->categories = $categories;
    }
}