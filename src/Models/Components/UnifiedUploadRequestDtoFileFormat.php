<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UnifiedUploadRequestDtoFileFormat - The file format of the file */
class UnifiedUploadRequestDtoFileFormat
{
    /**
     * The file format of the file, expressed as a file extension
     *
     * @var ?UnifiedUploadRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UnifiedUploadRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UnifiedUploadRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|UnifiedUploadRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UnifiedUploadRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UnifiedUploadRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?UnifiedUploadRequestDtoValue  $value
     * @param  string|float|bool|UnifiedUploadRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?UnifiedUploadRequestDtoValue $value = null, string|float|bool|UnifiedUploadRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}