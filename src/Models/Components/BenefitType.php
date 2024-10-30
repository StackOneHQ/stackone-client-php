<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** BenefitType - The type of the benefit */
class BenefitType
{
    /**
     * The type of the benefit
     *
     * @var ?HRISBenefitValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HRISBenefitValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HRISBenefitValue $value = null;

    /**
     *
     * @var string|float|bool|HRISBenefitSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HRISBenefitSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HRISBenefitSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HRISBenefitValue  $value
     * @param  string|float|bool|HRISBenefitSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HRISBenefitValue $value = null, string|float|bool|HRISBenefitSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}