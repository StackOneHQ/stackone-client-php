<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class HrisCreateEmployeeRequestDtoType
{
    /**
     * The type of the national identity number
     *
     * @var ?HrisCreateEmployeeRequestDtoNationalIdentityNumberValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoNationalIdentityNumberValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoNationalIdentityNumberValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueNationalIdentityNumber4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueNationalIdentityNumber4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueNationalIdentityNumber4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoNationalIdentityNumberValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueNationalIdentityNumber4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateEmployeeRequestDtoNationalIdentityNumberValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueNationalIdentityNumber4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}