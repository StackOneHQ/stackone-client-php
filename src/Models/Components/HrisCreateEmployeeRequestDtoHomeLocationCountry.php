<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoHomeLocationCountry - The country code */
class HrisCreateEmployeeRequestDtoHomeLocationCountry
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?HrisCreateEmployeeRequestDtoHomeLocationValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoHomeLocationValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoHomeLocationValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocation4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoHomeLocationValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocation4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisCreateEmployeeRequestDtoHomeLocationValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocation4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}