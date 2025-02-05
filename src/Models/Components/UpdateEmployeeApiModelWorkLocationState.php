<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelWorkLocationState - The ISO3166-2 sub division where the location is situated */
class UpdateEmployeeApiModelWorkLocationState
{
    /**
     *
     * @var ?UpdateEmployeeApiModelWorkLocationStateValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelWorkLocationStateValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelWorkLocationStateValue $value = null;

    /**
     *
     * @var string|float|bool|UpdateEmployeeApiModelSourceValueWorkLocationState4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UpdateEmployeeApiModelSourceValueWorkLocationState4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UpdateEmployeeApiModelSourceValueWorkLocationState4|array|null $sourceValue = null;

    /**
     * @param  ?UpdateEmployeeApiModelWorkLocationStateValue  $value
     * @param  string|float|bool|UpdateEmployeeApiModelSourceValueWorkLocationState4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?UpdateEmployeeApiModelWorkLocationStateValue $value = null, string|float|bool|UpdateEmployeeApiModelSourceValueWorkLocationState4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}