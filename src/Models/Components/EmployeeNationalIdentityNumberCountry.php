<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** EmployeeNationalIdentityNumberCountry - The country code */
class EmployeeNationalIdentityNumberCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?EmployeeNationalIdentityNumberCountryValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeNationalIdentityNumberCountryValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeNationalIdentityNumberCountryValue $value = null;

    /**
     *
     * @var string|float|bool|EmployeeSourceValueNationalIdentityNumberCountry4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmployeeSourceValueNationalIdentityNumberCountry4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmployeeSourceValueNationalIdentityNumberCountry4|array|null $sourceValue = null;

    /**
     * @param  ?EmployeeNationalIdentityNumberCountryValue  $value
     * @param  string|float|bool|EmployeeSourceValueNationalIdentityNumberCountry4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmployeeNationalIdentityNumberCountryValue $value = null, string|float|bool|EmployeeSourceValueNationalIdentityNumberCountry4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}