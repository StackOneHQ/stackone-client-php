<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisDocumentApiModelFileFormat - The file format of the file */
class HrisDocumentApiModelFileFormat
{
    /**
     * The file format of the file, expressed as a file extension
     *
     * @var ?HrisDocumentApiModelFileFormatValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisDocumentApiModelFileFormatValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisDocumentApiModelFileFormatValue $value = null;

    /**
     *
     * @var string|float|bool|HrisDocumentApiModelSourceValueFileFormat4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisDocumentApiModelSourceValueFileFormat4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisDocumentApiModelSourceValueFileFormat4|array|null $sourceValue = null;

    /**
     * @param  ?HrisDocumentApiModelFileFormatValue  $value
     * @param  string|float|bool|HrisDocumentApiModelSourceValueFileFormat4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisDocumentApiModelFileFormatValue $value = null, string|float|bool|HrisDocumentApiModelSourceValueFileFormat4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}