<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class QuestionType
{
    /**
     * The type of the questions.
     *
     * @var ?QuestionValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\QuestionValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?QuestionValue $value = null;

    /**
     * The source value of the questions type.
     *
     * @var string|float|bool|QuestionSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\QuestionSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|QuestionSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?QuestionValue  $value
     * @param  string|float|bool|QuestionSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?QuestionValue $value = null, string|float|bool|QuestionSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}