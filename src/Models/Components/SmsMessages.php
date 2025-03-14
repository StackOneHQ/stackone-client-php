<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class SmsMessages
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?SmsMessagesMessageType $messageType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SmsMessagesMessageType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SmsMessagesMessageType $messageType = null;

    /**
     *
     * @var ?SmsMessagesMessageContent $messageContent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message_content')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SmsMessagesMessageContent|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SmsMessagesMessageContent $messageContent = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?SmsMessagesMessageType  $messageType
     * @param  ?SmsMessagesMessageContent  $messageContent
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?SmsMessagesMessageType $messageType = null, ?SmsMessagesMessageContent $messageContent = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->messageType = $messageType;
        $this->messageContent = $messageContent;
    }
}