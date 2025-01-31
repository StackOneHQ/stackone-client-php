<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class IamResourceType
{
    /**
     * The type of the resource, e.g. user, group, permission, etc.
     *
     * @var ?IamResourceValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\IamResourceValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?IamResourceValue $value = null;

    /**
     *
     * @var string|float|bool|IamResourceSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\IamResourceSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|IamResourceSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?IamResourceValue  $value
     * @param  string|float|bool|IamResourceSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?IamResourceValue $value = null, string|float|bool|IamResourceSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}