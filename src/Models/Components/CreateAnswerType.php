<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateAnswerType - Type of the answer */
class CreateAnswerType
{
    /**
     * The type of the answer.
     *
     * @var ?CreateAnswerValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateAnswerValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateAnswerValue $value = null;

    /**
     * The source value of the answer type.
     *
     * @var string|float|bool|CreateAnswerSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateAnswerSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateAnswerSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?CreateAnswerValue  $value
     * @param  string|float|bool|CreateAnswerSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?CreateAnswerValue $value = null, string|float|bool|CreateAnswerSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}