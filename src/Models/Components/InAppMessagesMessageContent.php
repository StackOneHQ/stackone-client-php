<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class InAppMessagesMessageContent
{
    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * @param  ?string  $body
     * @phpstan-pure
     */
    public function __construct(?string $body = null)
    {
        $this->body = $body;
    }
}