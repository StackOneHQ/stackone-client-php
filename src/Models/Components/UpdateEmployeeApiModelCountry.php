<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelCountry - The country code */
class UpdateEmployeeApiModelCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?UpdateEmployeeApiModelNationalIdentityNumberCountryValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelNationalIdentityNumberCountryValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelNationalIdentityNumberCountryValue $value = null;

    /**
     *
     * @var string|float|bool|UpdateEmployeeApiModelSourceValueNationalIdentityNumberCountry4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UpdateEmployeeApiModelSourceValueNationalIdentityNumberCountry4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UpdateEmployeeApiModelSourceValueNationalIdentityNumberCountry4|array|null $sourceValue = null;

    /**
     * @param  ?UpdateEmployeeApiModelNationalIdentityNumberCountryValue  $value
     * @param  string|float|bool|UpdateEmployeeApiModelSourceValueNationalIdentityNumberCountry4|array<mixed>|null  $sourceValue
     */
    public function __construct(?UpdateEmployeeApiModelNationalIdentityNumberCountryValue $value = null, string|float|bool|UpdateEmployeeApiModelSourceValueNationalIdentityNumberCountry4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}