<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoEmploymentContractType - The employment work schedule type (e.g., full-time, part-time) */
class HrisCreateEmployeeRequestDtoEmploymentContractType
{
    /**
     *
     * @var ?HrisCreateEmployeeRequestDtoEmploymentContractTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoEmploymentContractTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoEmploymentContractTypeValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentContractType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueEmploymentContractType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentContractType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoEmploymentContractTypeValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentContractType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateEmployeeRequestDtoEmploymentContractTypeValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentContractType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}