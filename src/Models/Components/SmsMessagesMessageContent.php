<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class SmsMessagesMessageContent
{
    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     *
     * @var ?string $from
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('from')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $from = null;

    /**
     * @param  ?string  $body
     * @param  ?string  $from
     * @phpstan-pure
     */
    public function __construct(?string $body = null, ?string $from = null)
    {
        $this->body = $body;
        $this->from = $from;
    }
}