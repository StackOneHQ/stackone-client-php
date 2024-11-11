<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** LearningObjectType - The learning object type of the assignment */
class LearningObjectType
{
    /**
     *
     * @var ?AssignmentValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssignmentValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssignmentValue $value = null;

    /**
     *
     * @var string|float|bool|AssignmentSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AssignmentSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AssignmentSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AssignmentValue  $value
     * @param  string|float|bool|AssignmentSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AssignmentValue $value = null, string|float|bool|AssignmentSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}