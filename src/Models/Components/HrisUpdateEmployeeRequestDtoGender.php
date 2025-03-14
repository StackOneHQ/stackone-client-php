<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisUpdateEmployeeRequestDtoGender - The employee gender */
class HrisUpdateEmployeeRequestDtoGender
{
    /**
     *
     * @var ?HrisUpdateEmployeeRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisUpdateEmployeeRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|HrisUpdateEmployeeRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisUpdateEmployeeRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HrisUpdateEmployeeRequestDtoValue  $value
     * @param  string|float|bool|HrisUpdateEmployeeRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisUpdateEmployeeRequestDtoValue $value = null, string|float|bool|HrisUpdateEmployeeRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}