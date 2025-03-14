<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** BalanceUnit - The duration unit of the current balance */
class BalanceUnit
{
    /**
     * The unified value for the duration unit. If the provider does not specify this unit, the value will be set to unknown
     *
     * @var ?TimeOffBalancesValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffBalancesValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffBalancesValue $value = null;

    /**
     *
     * @var string|float|bool|TimeOffBalancesSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\TimeOffBalancesSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|TimeOffBalancesSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?TimeOffBalancesValue  $value
     * @param  string|float|bool|TimeOffBalancesSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?TimeOffBalancesValue $value = null, string|float|bool|TimeOffBalancesSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}