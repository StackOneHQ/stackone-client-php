<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CategoryLanguage - The language associated with this category */
class CategoryLanguage
{
    /**
     * The Locale Code of the language
     *
     * @var ?CategoryLanguageValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CategoryLanguageValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CategoryLanguageValue $value = null;

    /**
     *
     * @var string|float|bool|CategorySourceValueLanguage4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CategorySourceValueLanguage4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CategorySourceValueLanguage4|array|null $sourceValue = null;

    /**
     * @param  ?CategoryLanguageValue  $value
     * @param  string|float|bool|CategorySourceValueLanguage4|array<mixed>|null  $sourceValue
     */
    public function __construct(?CategoryLanguageValue $value = null, string|float|bool|CategorySourceValueLanguage4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}