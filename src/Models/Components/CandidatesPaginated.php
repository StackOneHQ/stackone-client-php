<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CandidatesPaginated
{
    /**
     * $data
     *
     * @var array<Candidate> $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Candidate>')]
    public array $data;

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
     * $raw
     *
     * @var ?array<RawResponse> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\RawResponse>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * @param  array<Candidate>  $data
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