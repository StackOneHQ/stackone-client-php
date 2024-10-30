<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPostingEmploymentContractType
{
    /**
     * The employment contract type.
     *
     * @var ?JobPostingEmploymentContractTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingEmploymentContractTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingEmploymentContractTypeValue $value = null;

    /**
     * The source value of the employment contract type.
     *
     * @var string|float|bool|JobPostingSourceValueEmploymentContractType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\JobPostingSourceValueEmploymentContractType4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|JobPostingSourceValueEmploymentContractType4|array|null $sourceValue = null;

    /**
     * @param  ?JobPostingEmploymentContractTypeValue  $value
     * @param  string|float|bool|JobPostingSourceValueEmploymentContractType4|array<mixed>|null  $sourceValue
     */
    public function __construct(?JobPostingEmploymentContractTypeValue $value = null, string|float|bool|JobPostingSourceValueEmploymentContractType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}