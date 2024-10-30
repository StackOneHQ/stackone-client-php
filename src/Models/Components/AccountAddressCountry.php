<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** AccountAddressCountry - The country code */
class AccountAddressCountry
{
    /**
     * The ISO 3166-1 alpha-2 code of the country.
     *
     * @var ?AccountAddressValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AccountAddressValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountAddressValue $value = null;

    /**
     * The source value of the ISO 3166-1 alpha-2 code of the country.
     *
     * @var string|float|bool|AccountAddressSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AccountAddressSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AccountAddressSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AccountAddressValue  $value
     * @param  string|float|bool|AccountAddressSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AccountAddressValue $value = null, string|float|bool|AccountAddressSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}