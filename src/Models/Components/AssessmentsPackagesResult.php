<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AssessmentsPackagesResult
{
    /**
     *
     * @var AssessmentsPackages $data
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('data')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AssessmentsPackages')]
    public AssessmentsPackages $data;

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
     * @param  AssessmentsPackages  $data
     * @param  ?array<RawResponse>  $raw
     */
    public function __construct(AssessmentsPackages $data, ?array $raw = null)
    {
        $this->data = $data;
        $this->raw = $raw;
    }
}