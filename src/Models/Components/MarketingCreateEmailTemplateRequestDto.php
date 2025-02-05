<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class MarketingCreateEmailTemplateRequestDto
{
    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     * $messages
     *
     * @var ?array<EmailMessages> $messages
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('messages')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\EmailMessages>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $messages = null;

    /**
     * Value to pass through to the provider
     *
     * @var ?array<string, mixed> $passthrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('passthrough')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * @param  ?string  $name
     * @param  ?array<string>  $tags
     * @param  ?array<EmailMessages>  $messages
     * @param  ?array<string, mixed>  $passthrough
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?array $tags = null, ?array $messages = null, ?array $passthrough = null)
    {
        $this->name = $name;
        $this->tags = $tags;
        $this->messages = $messages;
        $this->passthrough = $passthrough;
    }
}