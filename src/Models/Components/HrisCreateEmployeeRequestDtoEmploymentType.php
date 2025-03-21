<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoEmploymentType - The employee employment type */
class HrisCreateEmployeeRequestDtoEmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?HrisCreateEmployeeRequestDtoEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoEmploymentTypeValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateEmployeeRequestDtoEmploymentTypeValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}