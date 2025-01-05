<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** LmsCreateAssignmentRequestDtoStatus - The status of the assignment */
class LmsCreateAssignmentRequestDtoStatus
{
    /**
     *
     * @var ?LmsCreateAssignmentRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsCreateAssignmentRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LmsCreateAssignmentRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|LmsCreateAssignmentRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\LmsCreateAssignmentRequestDtoSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|LmsCreateAssignmentRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?LmsCreateAssignmentRequestDtoValue  $value
     * @param  string|float|bool|LmsCreateAssignmentRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?LmsCreateAssignmentRequestDtoValue $value = null, string|float|bool|LmsCreateAssignmentRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}