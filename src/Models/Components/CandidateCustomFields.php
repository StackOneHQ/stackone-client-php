<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CandidateCustomFields
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * The name of the custom field.
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The value associated with the custom field.
     *
     * @var string|float|bool|CandidateCustomFieldsValue4|array<mixed>|null $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CandidateCustomFieldsValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CandidateCustomFieldsValue4|array|null $value = null;

    /**
     * The unique identifier for the value of the custom field.
     *
     * @var ?string $valueId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $valueId = null;

    /**
     * Provider's unique identifier for the value of the custom field.
     *
     * @var ?string $remoteValueId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_value_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteValueId = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  string|float|bool|CandidateCustomFieldsValue4|array<mixed>|null  $value
     * @param  ?string  $valueId
     * @param  ?string  $remoteValueId
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, string|float|bool|CandidateCustomFieldsValue4|array|null $value = null, ?string $valueId = null, ?string $remoteValueId = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->value = $value;
        $this->valueId = $valueId;
        $this->remoteValueId = $remoteValueId;
    }
}