<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ResultLink
{
    /**
     * The label of the result link.
     *
     * @var ?string $label
     */
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * The URL of the result link.
     *
     * @var ?string $url
     */
    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?string  $label
     * @param  ?string  $url
     */
    public function __construct(?string $label = null, ?string $url = null)
    {
        $this->label = $label;
        $this->url = $url;
    }
}