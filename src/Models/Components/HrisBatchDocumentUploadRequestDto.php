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
    #[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\HrisDocumentsUploadRequestDto>')]
    public array $items;

    /**
     * @param  array<HrisDocumentsUploadRequestDto>  $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
}