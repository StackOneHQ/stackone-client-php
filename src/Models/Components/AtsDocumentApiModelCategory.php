<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** AtsDocumentApiModelCategory - The category of the the document */
class AtsDocumentApiModelCategory
{
    /**
     * The category of the file
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     *
     * @var string|float|bool|AtsDocumentApiModelSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AtsDocumentApiModelSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AtsDocumentApiModelSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?string  $value
     * @param  string|float|bool|AtsDocumentApiModelSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?string $value = null, string|float|bool|AtsDocumentApiModelSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}