<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class MarketingCreateContentBlocksRequestDto
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
     *
     * @var ?string $content
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $content = null;

    /**
     * Stackone enum identifying the type of content block.
     *
     * @var ?MarketingCreateContentBlocksRequestDtoType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MarketingCreateContentBlocksRequestDtoType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MarketingCreateContentBlocksRequestDtoType $type = null;

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
     * @param  ?string  $content
     * @param  ?MarketingCreateContentBlocksRequestDtoType  $type
     * @param  ?array<string, mixed>  $passthrough
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?array $tags = null, ?string $content = null, ?MarketingCreateContentBlocksRequestDtoType $type = null, ?array $passthrough = null)
    {
        $this->name = $name;
        $this->tags = $tags;
        $this->content = $content;
        $this->type = $type;
        $this->passthrough = $passthrough;
    }
}