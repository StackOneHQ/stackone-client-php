<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class MessageContentPushMessageContents
{
    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $subtitle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('subtitle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $subtitle = null;

    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * @param  ?string  $title
     * @param  ?string  $subtitle
     * @param  ?string  $body
     * @phpstan-pure
     */
    public function __construct(?string $title = null, ?string $subtitle = null, ?string $body = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->body = $body;
    }
}