<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelHomeLocationCountry - The country code */
class UpdateEmployeeApiModelHomeLocationCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?UpdateEmployeeApiModelHomeLocationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelHomeLocationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelHomeLocationValue $value = null;

    /**
     *
     * @var string|float|bool|UpdateEmployeeApiModelSourceValueHomeLocation4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UpdateEmployeeApiModelSourceValueHomeLocation4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UpdateEmployeeApiModelSourceValueHomeLocation4|array|null $sourceValue = null;

    /**
     * @param  ?UpdateEmployeeApiModelHomeLocationValue  $value
     * @param  string|float|bool|UpdateEmployeeApiModelSourceValueHomeLocation4|array<mixed>|null  $sourceValue
     */
    public function __construct(?UpdateEmployeeApiModelHomeLocationValue $value = null, string|float|bool|UpdateEmployeeApiModelSourceValueHomeLocation4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}