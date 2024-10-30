<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateTimeOffRequestDtoStatus - The status of the time off request */
class HrisCreateTimeOffRequestDtoStatus
{
    /**
     *
     * @var ?HrisCreateTimeOffRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateTimeOffRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateTimeOffRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateTimeOffRequestDtoSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateTimeOffRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateTimeOffRequestDtoValue  $value
     * @param  string|float|bool|HrisCreateTimeOffRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisCreateTimeOffRequestDtoValue $value = null, string|float|bool|HrisCreateTimeOffRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}