<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisUpdateEmployeeRequestDtoEmploymentType - The employee employment type */
class HrisUpdateEmployeeRequestDtoEmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?HrisUpdateEmployeeRequestDtoEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisUpdateEmployeeRequestDtoEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisUpdateEmployeeRequestDtoEmploymentTypeValue  $value
     * @param  string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisUpdateEmployeeRequestDtoEmploymentTypeValue $value = null, string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}