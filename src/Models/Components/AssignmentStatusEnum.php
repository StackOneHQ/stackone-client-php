<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssignmentStatusEnum
{
    /**
     *
     * @var ?AssignmentStatusEnumValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssignmentStatusEnumValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssignmentStatusEnumValue $value = null;

    /**
     *
     * @var string|float|bool|AssignmentStatusEnumSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AssignmentStatusEnumSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AssignmentStatusEnumSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AssignmentStatusEnumValue  $value
     * @param  string|float|bool|AssignmentStatusEnumSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AssignmentStatusEnumValue $value = null, string|float|bool|AssignmentStatusEnumSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}