<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoGender - The employee gender */
class HrisCreateEmployeeRequestDtoGender
{
    /**
     *
     * @var ?HrisCreateEmployeeRequestDtoValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisCreateEmployeeRequestDtoValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}