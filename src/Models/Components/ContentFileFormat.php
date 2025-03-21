<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** ContentFileFormat - The file format of the file */
class ContentFileFormat
{
    /**
     * The file format of the file, expressed as a file extension
     *
     * @var ?ContentValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ContentValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ContentValue $value = null;

    /**
     *
     * @var string|float|bool|ContentSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\ContentSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|ContentSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?ContentValue  $value
     * @param  string|float|bool|ContentSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?ContentValue $value = null, string|float|bool|ContentSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}