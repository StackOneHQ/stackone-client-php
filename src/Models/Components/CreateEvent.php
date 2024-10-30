<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateEvent
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
     * @param  string  $event
     * @param  string  $recordId
     */
    public function __construct(string $event, string $recordId)
    {
        $this->event = $event;
        $this->recordId = $recordId;
    }
}