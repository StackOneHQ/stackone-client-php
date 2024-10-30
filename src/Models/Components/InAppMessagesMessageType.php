<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class InAppMessagesMessageType
{
    /**
     * The unified message type.
     *
     * @var ?InAppMessagesValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\InAppMessagesValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?InAppMessagesValue $value = null;

    /**
     * The original value from the provider used to derive the unified message type.
     *
     * @var string|float|bool|InAppMessagesSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\InAppMessagesSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|InAppMessagesSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?InAppMessagesValue  $value
     * @param  string|float|bool|InAppMessagesSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?InAppMessagesValue $value = null, string|float|bool|InAppMessagesSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}