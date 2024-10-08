<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AccountsPaginated
{
    /**
     *
     * @var ?string $nextPage
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\JMS\Serializer\Annotation\SerializedName('next_page')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $nextPage = null;

    /**
     *
     * @var ?string $next
     */
    #[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $next = null;

    /**
     * $data
     *
     * @var array<Account> $data
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Account>')]
    public array $data;

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
     * @param  array<Account>  $data
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