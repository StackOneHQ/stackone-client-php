<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateEventResponse
{
    /**
     * The event name
     *
     * @var string $event
     */
    #[\JMS\Serializer\Annotation\SerializedName('event')]
    public string $event;

    /**
     * The record id associated with the event
     *
     * @var string $recordId
     */
    #[\JMS\Serializer\Annotation\SerializedName('record_id')]
    public string $recordId;

    /**
     * The response http status code
     *
     * @var float $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    public float $status;

    /**
     * The message associated with the operation result
     *
     * @var ?string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     * @param  string  $event
     * @param  string  $recordId
     * @param  float  $status
     * @param  ?string  $message
     */
    public function __construct(string $event, string $recordId, float $status, ?string $message = null)
    {
        $this->event = $event;
        $this->recordId = $recordId;
        $this->status = $status;
        $this->message = $message;
    }
}