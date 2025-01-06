<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LmsUpsertCourseRequestDto
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
     * The external ID associated with this course
     *
     * @var ?string $externalReference
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('external_reference')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $externalReference = null;

    /**
     * The child IDs associated with this course
     *
     * @var ?array<string> $contentIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $contentIds = null;

    /**
     * The title of the course
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * The description of the course
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The languages associated with this course
     *
     * @var ?array<LanguageEnum> $languages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('languages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\LanguageEnum>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $languages = null;

    /**
     * The URL of the thumbnail image associated with the course.
     *
     * @var ?string $coverUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cover_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $coverUrl = null;

    /**
     * The redirect URL of the course.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * Whether the course is active and available for users.
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * The duration of the course following the ISO8601 standard. If duration_unit is applicable we will derive this from the smallest unit given in the duration string
     *
     * @var ?string $duration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $duration = null;

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
     * The skills associated with this content
     *
     * @var ?array<CreateSkillsApiModel> $skills
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('skills')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateSkillsApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $skills = null;

    /**
     * The content associated with this course
     *
     * @var ?array<CreateContentApiModel> $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateContentApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $content = null;

    /**
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $externalReference
     * @param  ?array<string>  $contentIds
     * @param  ?string  $title
     * @param  ?string  $description
     * @param  ?array<LanguageEnum>  $languages
     * @param  ?string  $coverUrl
     * @param  ?string  $url
     * @param  ?bool  $active
     * @param  ?string  $duration
     * @param  ?array<CreateCategoriesApiModel>  $categories
     * @param  ?array<CreateSkillsApiModel>  $skills
     * @param  ?array<CreateContentApiModel>  $content
     */
    public function __construct(?array $unifiedCustomFields = null, ?string $externalReference = null, ?array $contentIds = null, ?string $title = null, ?string $description = null, ?array $languages = null, ?string $coverUrl = null, ?string $url = null, ?bool $active = null, ?string $duration = null, ?array $categories = null, ?array $skills = null, ?array $content = null)
    {
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->externalReference = $externalReference;
        $this->contentIds = $contentIds;
        $this->title = $title;
        $this->description = $description;
        $this->languages = $languages;
        $this->coverUrl = $coverUrl;
        $this->url = $url;
        $this->active = $active;
        $this->duration = $duration;
        $this->categories = $categories;
        $this->skills = $skills;
        $this->content = $content;
    }
}