<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateEmploymentApiModelPayFrequency - The pay frequency */
class CreateEmploymentApiModelPayFrequency
{
    /**
     * The pay frequency of the job postings.
     *
     * @var ?CreateEmploymentApiModelPayFrequencyValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelPayFrequencyValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelPayFrequencyValue $value = null;

    /**
     * The source value of the pay frequency.
     *
     * @var string|float|bool|CreateEmploymentApiModelSourceValuePayFrequency4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateEmploymentApiModelSourceValuePayFrequency4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateEmploymentApiModelSourceValuePayFrequency4|array|null $sourceValue = null;

    /**
     * @param  ?CreateEmploymentApiModelPayFrequencyValue  $value
     * @param  string|float|bool|CreateEmploymentApiModelSourceValuePayFrequency4|array<mixed>|null  $sourceValue
     */
    public function __construct(?CreateEmploymentApiModelPayFrequencyValue $value = null, string|float|bool|CreateEmploymentApiModelSourceValuePayFrequency4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}