<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Attachment
{
    /**
     * The URL of the attachment.
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     *
     * @var ?AttachmentContentType $contentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('content_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AttachmentContentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AttachmentContentType $contentType = null;

    /**
     * @param  ?string  $url
     * @param  ?AttachmentContentType  $contentType
     * @phpstan-pure
     */
    public function __construct(?string $url = null, ?AttachmentContentType $contentType = null)
    {
        $this->url = $url;
        $this->contentType = $contentType;
    }
}