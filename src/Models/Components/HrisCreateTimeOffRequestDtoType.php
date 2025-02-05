<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateTimeOffRequestDtoType - The type of the time off request */
class HrisCreateTimeOffRequestDtoType
{
    /**
     *
     * @var ?HrisCreateTimeOffRequestDtoTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateTimeOffRequestDtoTypeValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateTimeOffRequestDtoSourceValueType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoSourceValueType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateTimeOffRequestDtoSourceValueType4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateTimeOffRequestDtoTypeValue  $value
     * @param  string|float|bool|HrisCreateTimeOffRequestDtoSourceValueType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HrisCreateTimeOffRequestDtoTypeValue $value = null, string|float|bool|HrisCreateTimeOffRequestDtoSourceValueType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}