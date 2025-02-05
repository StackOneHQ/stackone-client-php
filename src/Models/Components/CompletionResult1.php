<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CompletionResult1 - The result of the completion */
class CompletionResult1
{
    /**
     *
     * @var ?CompletionValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CompletionValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CompletionValue $value = null;

    /**
     *
     * @var string|float|bool|CompletionSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CompletionSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CompletionSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?CompletionValue  $value
     * @param  string|float|bool|CompletionSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?CompletionValue $value = null, string|float|bool|CompletionSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}