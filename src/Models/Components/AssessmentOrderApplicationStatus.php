<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentOrderApplicationStatus
{
    /**
     * The status of the application.
     *
     * @var ?AssessmentOrderValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentOrderValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AssessmentOrderValue $value = null;

    /**
     * The source value of the application status.
     *
     * @var string|float|bool|AssessmentOrderSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AssessmentOrderSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AssessmentOrderSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AssessmentOrderValue  $value
     * @param  string|float|bool|AssessmentOrderSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AssessmentOrderValue $value = null, string|float|bool|AssessmentOrderSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}