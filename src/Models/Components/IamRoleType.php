<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class IamRoleType
{
    /**
     *
     * @var ?IamRoleValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\IamRoleValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?IamRoleValue $value = null;

    /**
     *
     * @var string|float|bool|IamRoleSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\IamRoleSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|IamRoleSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?IamRoleValue  $value
     * @param  string|float|bool|IamRoleSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?IamRoleValue $value = null, string|float|bool|IamRoleSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}