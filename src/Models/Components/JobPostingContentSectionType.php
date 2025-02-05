<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPostingContentSectionType
{
    /**
     * The type of the description.
     *
     * @var ?JobPostingContentSectionValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingContentSectionValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingContentSectionValue $value = null;

    /**
     * The source value of the description type.
     *
     * @var string|float|bool|JobPostingContentSectionSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\JobPostingContentSectionSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|JobPostingContentSectionSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?JobPostingContentSectionValue  $value
     * @param  string|float|bool|JobPostingContentSectionSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?JobPostingContentSectionValue $value = null, string|float|bool|JobPostingContentSectionSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}