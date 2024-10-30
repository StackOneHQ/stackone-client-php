<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ProviderErrorApiModel
{
    /**
     *
     * @var ?float $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $status = null;

    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     *
     * @var ?Raw $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Raw|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Raw $raw = null;

    /**
     *
     * @var ?Headers $headers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('headers')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Headers|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Headers $headers = null;

    /**
     * @param  ?float  $status
     * @param  ?string  $url
     * @param  ?Raw  $raw
     * @param  ?Headers  $headers
     */
    public function __construct(?float $status = null, ?string $url = null, ?Raw $raw = null, ?Headers $headers = null)
    {
        $this->status = $status;
        $this->url = $url;
        $this->raw = $raw;
        $this->headers = $headers;
    }
}