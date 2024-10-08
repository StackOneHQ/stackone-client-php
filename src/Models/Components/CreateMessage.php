<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateMessage
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Stackone enum identifying the type of message associated with the content.
     *
     * @var ?CreateMessageMessageType $messageType
     */
    #[\JMS\Serializer\Annotation\SerializedName('message_type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateMessageMessageType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateMessageMessageType $messageType = null;

    /**
     *
     * @var SmsMessageContents|EmailMessageContents|PushMessageContents|null $messageContent
     */
    #[\JMS\Serializer\Annotation\SerializedName('message_content')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\SmsMessageContents|\StackOne\client\Models\Components\EmailMessageContents|\StackOne\client\Models\Components\PushMessageContents')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public SmsMessageContents|EmailMessageContents|PushMessageContents|null $messageContent = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?CreateMessageMessageType  $messageType
     * @param  SmsMessageContents|EmailMessageContents|PushMessageContents|null  $messageContent
     */
    public function __construct(?string $id = null, ?string $name = null, ?CreateMessageMessageType $messageType = null, SmsMessageContents|EmailMessageContents|PushMessageContents|null $messageContent = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->messageType = $messageType;
        $this->messageContent = $messageContent;
    }
}