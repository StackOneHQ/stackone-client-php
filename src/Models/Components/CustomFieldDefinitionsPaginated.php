<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CustomFieldDefinitionsPaginated
{
    /**
     *
     * @var ?string $nextPage
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next_page')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $nextPage = null;

    /**
     *
     * @var ?string $next
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('next')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $next = null;

    /**
     * $data
     *
     * @var array<CustomFieldDefinition> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFieldDefinition>')]
    public array $data;

    /**
     * $raw
     *
     * @var ?array<RawResponse> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\RawResponse>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * @param  array<CustomFieldDefinition>  $data
     * @param  ?string  $nextPage
     * @param  ?string  $next
     * @param  ?array<RawResponse>  $raw
     */
    public function __construct(array $data, ?string $nextPage = null, ?string $next = null, ?array $raw = null)
    {
        $this->data = $data;
        $this->nextPage = $nextPage;
        $this->next = $next;
        $this->raw = $raw;
    }
}