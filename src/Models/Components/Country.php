<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** Country - The country code */
class Country
{
    /**
     * The ISO3166-1 Alpha2 Code of the Country
     *
     * @var ?HRISLocationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HRISLocationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HRISLocationValue $value = null;

    /**
     *
     * @var string|float|bool|HRISLocationSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HRISLocationSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HRISLocationSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HRISLocationValue  $value
     * @param  string|float|bool|HRISLocationSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HRISLocationValue $value = null, string|float|bool|HRISLocationSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}