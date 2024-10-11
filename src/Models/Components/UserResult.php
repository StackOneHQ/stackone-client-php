<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class UserResult
{
    /**
     *
     * @var LmsUser $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsUser')]
    public LmsUser $data;

    /**
     * $raw
     *
     * @var ?array<RawResponse> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\RawResponse>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * @param  LmsUser  $data
     * @param  ?array<RawResponse>  $raw
     */
    public function __construct(LmsUser $data, ?array $raw = null)
    {
        $this->data = $data;
        $this->raw = $raw;
    }
}