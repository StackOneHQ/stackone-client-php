<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class HrisCreateWorkEligibilityRequestDtoType
{
    /**
     *
     * @var ?HrisCreateWorkEligibilityRequestDtoTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateWorkEligibilityRequestDtoTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateWorkEligibilityRequestDtoTypeValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateWorkEligibilityRequestDtoSourceValueType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateWorkEligibilityRequestDtoSourceValueType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateWorkEligibilityRequestDtoSourceValueType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateWorkEligibilityRequestDtoTypeValue  $value
     * @param  string|float|bool|HrisCreateWorkEligibilityRequestDtoSourceValueType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateWorkEligibilityRequestDtoTypeValue $value = null, string|float|bool|HrisCreateWorkEligibilityRequestDtoSourceValueType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}