<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** ListType - The list type */
class ListType
{
    /**
     * The type of the list.
     *
     * @var ?ListValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ListValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ListValue $value = null;

    /**
     * The source value of the list type.
     *
     * @var string|float|bool|ListSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\ListSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|ListSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?ListValue  $value
     * @param  string|float|bool|ListSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?ListValue $value = null, string|float|bool|ListSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}