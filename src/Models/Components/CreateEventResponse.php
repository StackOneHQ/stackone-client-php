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
    #[\Speakeasy\Serializer\Annotation\SerializedName('event')]
    public string $event;

    /**
     * The record id associated with the event
     *
     * @var string $recordId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('record_id')]
    public string $recordId;

    /**
     * The response http status code
     *
     * @var float $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    public float $status;

    /**
     * The message associated with the operation result
     *
     * @var ?string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
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