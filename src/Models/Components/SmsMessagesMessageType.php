<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class SmsMessagesMessageType
{
    /**
     * The unified message type.
     *
     * @var ?SmsMessagesValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SmsMessagesValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SmsMessagesValue $value = null;

    /**
     * The original value from the provider used to derive the unified message type.
     *
     * @var string|float|bool|SmsMessagesSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\SmsMessagesSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|SmsMessagesSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?SmsMessagesValue  $value
     * @param  string|float|bool|SmsMessagesSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?SmsMessagesValue $value = null, string|float|bool|SmsMessagesSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}