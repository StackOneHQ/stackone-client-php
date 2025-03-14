<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoPayFrequency - The pay frequency */
class HrisCreateEmployeeRequestDtoPayFrequency
{
    /**
     * The pay frequency of the job postings.
     *
     * @var ?HrisCreateEmployeeRequestDtoEmploymentPayFrequencyValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoEmploymentPayFrequencyValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoEmploymentPayFrequencyValue $value = null;

    /**
     * The source value of the pay frequency.
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentPayFrequency4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueEmploymentPayFrequency4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentPayFrequency4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoEmploymentPayFrequencyValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentPayFrequency4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateEmployeeRequestDtoEmploymentPayFrequencyValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentPayFrequency4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}