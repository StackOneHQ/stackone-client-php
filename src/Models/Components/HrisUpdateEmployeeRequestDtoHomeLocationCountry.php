<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisUpdateEmployeeRequestDtoHomeLocationCountry - The country code */
class HrisUpdateEmployeeRequestDtoHomeLocationCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?HrisUpdateEmployeeRequestDtoHomeLocationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoHomeLocationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisUpdateEmployeeRequestDtoHomeLocationValue $value = null;

    /**
     *
     * @var string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisUpdateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueHomeLocation4|array|null $sourceValue = null;

    /**
     * @param  ?HrisUpdateEmployeeRequestDtoHomeLocationValue  $value
     * @param  string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisUpdateEmployeeRequestDtoHomeLocationValue $value = null, string|float|bool|HrisUpdateEmployeeRequestDtoSourceValueHomeLocation4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}