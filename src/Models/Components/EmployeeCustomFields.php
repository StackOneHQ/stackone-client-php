<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class EmployeeCustomFields
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * The name of the custom field.
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The value associated with the custom field.
     *
     * @var string|float|bool|Value4|array<mixed>|null $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\Value4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|Value4|array|null $value = null;

    /**
     * The unique identifier for the value of the custom field.
     *
     * @var ?string $valueId
     */
    #[\JMS\Serializer\Annotation\SerializedName('value_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $valueId = null;

    /**
     * Provider's unique identifier for the value of the custom field.
     *
     * @var ?string $remoteValueId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_value_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteValueId = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  string|float|bool|Value4|array<mixed>|null  $value
     * @param  ?string  $valueId
     * @param  ?string  $remoteValueId
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, string|float|bool|Value4|array|null $value = null, ?string $valueId = null, ?string $remoteValueId = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->value = $value;
        $this->valueId = $valueId;
        $this->remoteValueId = $remoteValueId;
    }
}