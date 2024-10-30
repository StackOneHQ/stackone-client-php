<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** EmployeeHomeLocationCountry - The country code */
class EmployeeHomeLocationCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?EmployeeHomeLocationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeHomeLocationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeHomeLocationValue $value = null;

    /**
     *
     * @var string|float|bool|EmployeeSourceValueHomeLocation4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmployeeSourceValueHomeLocation4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmployeeSourceValueHomeLocation4|array|null $sourceValue = null;

    /**
     * @param  ?EmployeeHomeLocationValue  $value
     * @param  string|float|bool|EmployeeSourceValueHomeLocation4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmployeeHomeLocationValue $value = null, string|float|bool|EmployeeSourceValueHomeLocation4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}