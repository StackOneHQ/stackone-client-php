<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CustomFieldDefinitionType - The type of the custom field. */
class CustomFieldDefinitionType
{
    /**
     *
     * @var ?CustomFieldDefinitionValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CustomFieldDefinitionValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomFieldDefinitionValue $value = null;

    /**
     *
     * @var string|float|bool|CustomFieldDefinitionSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CustomFieldDefinitionSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CustomFieldDefinitionSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?CustomFieldDefinitionValue  $value
     * @param  string|float|bool|CustomFieldDefinitionSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?CustomFieldDefinitionValue $value = null, string|float|bool|CustomFieldDefinitionSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}