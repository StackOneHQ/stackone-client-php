<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HRISCostCenterType - The type of the group */
class HRISCostCenterType
{
    /**
     *
     * @var ?HRISCostCenterValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HRISCostCenterValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HRISCostCenterValue $value = null;

    /**
     *
     * @var string|float|bool|HRISCostCenterSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HRISCostCenterSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HRISCostCenterSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HRISCostCenterValue  $value
     * @param  string|float|bool|HRISCostCenterSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HRISCostCenterValue $value = null, string|float|bool|HRISCostCenterSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}