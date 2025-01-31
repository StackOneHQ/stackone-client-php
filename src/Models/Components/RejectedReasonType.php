<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class RejectedReasonType
{
    /**
     * The type of the rejected reason.
     *
     * @var ?RejectedReasonValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\RejectedReasonValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RejectedReasonValue $value = null;

    /**
     * The source value of the rejected reason type.
     *
     * @var string|float|bool|RejectedReasonSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\RejectedReasonSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|RejectedReasonSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?RejectedReasonValue  $value
     * @param  string|float|bool|RejectedReasonSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?RejectedReasonValue $value = null, string|float|bool|RejectedReasonSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}