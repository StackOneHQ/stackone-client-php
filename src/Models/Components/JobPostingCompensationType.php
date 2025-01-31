<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPostingCompensationType
{
    /**
     * The type of the compensation.
     *
     * @var ?JobPostingCompensationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingCompensationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingCompensationValue $value = null;

    /**
     * The source value of the compensation type.
     *
     * @var string|float|bool|JobPostingCompensationSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\JobPostingCompensationSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|JobPostingCompensationSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?JobPostingCompensationValue  $value
     * @param  string|float|bool|JobPostingCompensationSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?JobPostingCompensationValue $value = null, string|float|bool|JobPostingCompensationSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}