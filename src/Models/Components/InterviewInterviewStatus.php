<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class InterviewInterviewStatus
{
    /**
     * The status of the interview.
     *
     * @var ?InterviewValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\InterviewValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?InterviewValue $value = null;

    /**
     * The source value of the interview status.
     *
     * @var string|float|bool|InterviewSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\InterviewSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|InterviewSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?InterviewValue  $value
     * @param  string|float|bool|InterviewSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?InterviewValue $value = null, string|float|bool|InterviewSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}