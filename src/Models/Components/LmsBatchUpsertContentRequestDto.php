<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LmsBatchUpsertContentRequestDto
{
    /**
     * The batch of items to upsert
     *
     * @var array<LmsUpsertContentRequestDto> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\LmsUpsertContentRequestDto>')]
    public array $items;

    /**
     * @param  array<LmsUpsertContentRequestDto>  $items
     * @phpstan-pure
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}