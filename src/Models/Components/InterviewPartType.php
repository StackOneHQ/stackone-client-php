<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class InterviewPartType
{
    /**
     * The type of the interview.
     *
     * @var ?InterviewPartValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\InterviewPartValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InterviewPartValue $value = null;

    /**
     * The source value of the interview type.
     *
     * @var string|float|bool|InterviewPartSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\InterviewPartSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|InterviewPartSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?InterviewPartValue  $value
     * @param  string|float|bool|InterviewPartSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?InterviewPartValue $value = null, string|float|bool|InterviewPartSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}