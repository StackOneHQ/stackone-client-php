<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateCategoriesApiModelLevel - The hierarchal level of the category */
class CreateCategoriesApiModelLevel
{
    /**
     *
     * @var ?CreateCategoriesApiModelValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateCategoriesApiModelValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?CreateCategoriesApiModelValue $value = null;

    /**
     *
     * @var string|float|bool|CreateCategoriesApiModelSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateCategoriesApiModelSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateCategoriesApiModelSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?CreateCategoriesApiModelValue  $value
     * @param  string|float|bool|CreateCategoriesApiModelSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?CreateCategoriesApiModelValue $value = null, string|float|bool|CreateCategoriesApiModelSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}