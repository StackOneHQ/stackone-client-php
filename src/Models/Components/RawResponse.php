<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class RawResponse
{
    /**
     *
     * @var string $method
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('method')]
    public string $method;

    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * $response
     *
     * @var ?array<string, mixed> $response
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('response')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $response = null;

    /**
     * @param  string  $method
     * @param  string  $url
     * @param  ?string  $body
     * @param  ?array<string, mixed>  $response
     * @phpstan-pure
     */
    public function __construct(string $method, string $url, ?string $body = null, ?array $response = null)
    {
        $this->method = $method;
        $this->url = $url;
        $this->body = $body;
        $this->response = $response;
    }
}