<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisUpdateEmployeeRequestDtoEmploymentEmploymentType - The type of employment (e.g., contractor, permanent) */
class HrisUpdateEmployeeRequestDtoEmploymentEmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?HrisUpdateEmployeeRequestDtoEmploymentEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoEmploymentEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisUpdateEmployeeRequestDtoEmploymentEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoSourceValueEmploymentEmploymentType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisUpdateEmployeeRequestDtoEmploymentEmploymentTypeValue  $value
     * @param  string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentEmploymentType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisUpdateEmployeeRequestDtoEmploymentEmploymentTypeValue $value = null, string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueEmploymentEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}