<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateCategoriesApiModel
{
    /**
     * The ID associated with this category
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * The name associated with this category
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The hierarchal level of the category
     *
     * @var ?Level $level
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('level')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Level|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Level $level = null;

    /**
     * The language associated with this category
     *
     * @var ?Language $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Language|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Language $language = null;

    /**
     * @param  ?string  $id
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $name
     * @param  ?Level  $level
     * @param  ?Language  $language
     */
    public function __construct(?string $id = null, ?array $unifiedCustomFields = null, ?string $name = null, ?Level $level = null, ?Language $language = null)
    {
        $this->id = $id;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->name = $name;
        $this->level = $level;
        $this->language = $language;
    }
}