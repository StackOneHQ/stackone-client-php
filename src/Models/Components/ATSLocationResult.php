<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ATSLocationResult
{
    /**
     *
     * @var ATSLocation $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ATSLocation')]
    public ATSLocation $data;

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
     * @param  ATSLocation  $data
     * @param  ?array<RawResponse>  $raw
     * @phpstan-pure
     */
    public function __construct(ATSLocation $data, ?array $raw = null)
    {
        $this->data = $data;
        $this->raw = $raw;
    }
}