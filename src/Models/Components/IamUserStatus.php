<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class IamUserStatus
{
    /**
     * The status of the user, e.g. whether the user is enabled, has been disabled (eg. by an admin), or is pending (ie: awaiting approval by the user or an admin).
     *
     * @var ?IamUserValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\IamUserValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?IamUserValue $value = null;

    /**
     *
     * @var string|float|bool|IamUserSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\IamUserSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|IamUserSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?IamUserValue  $value
     * @param  string|float|bool|IamUserSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?IamUserValue $value = null, string|float|bool|IamUserSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}