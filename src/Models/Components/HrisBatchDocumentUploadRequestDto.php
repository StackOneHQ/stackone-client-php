<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class HrisBatchDocumentUploadRequestDto
{
    /**
     * The batch of items to create
     *
     * @var array<HrisDocumentsUploadRequestDto> $items
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('items')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\HrisDocumentsUploadRequestDto>')]
    public array $items;

    /**
     * @param  array<HrisDocumentsUploadRequestDto>  $items
     * @phpstan-pure
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}