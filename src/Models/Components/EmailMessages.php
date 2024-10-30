<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class EmailMessages
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
     * @var ?MessageType $messageType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MessageType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MessageType $messageType = null;

    /**
     *
     * @var ?MessageContent $messageContent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message_content')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MessageContent|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MessageContent $messageContent = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?MessageType  $messageType
     * @param  ?MessageContent  $messageContent
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?MessageType $messageType = null, ?MessageContent $messageContent = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->messageType = $messageType;
        $this->messageContent = $messageContent;
    }
}