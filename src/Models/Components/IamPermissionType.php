<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class IamPermissionType
{
    /**
     * The type of the permission, e.g. read, read_write, delete, etc.
     *
     * @var ?IamPermissionValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\IamPermissionValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?IamPermissionValue $value = null;

    /**
     *
     * @var string|float|bool|IamPermissionSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\IamPermissionSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|IamPermissionSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?IamPermissionValue  $value
     * @param  string|float|bool|IamPermissionSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?IamPermissionValue $value = null, string|float|bool|IamPermissionSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}