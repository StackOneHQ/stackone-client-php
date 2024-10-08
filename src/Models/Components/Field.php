<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Field
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
     * The label of the field
     *
     * @var ?string $label
     */
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * The type of the field
     *
     * @var ?FieldType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\FieldType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?FieldType $type = null;

    /**
     * The possible values for the field
     *
     * @var ?array<string> $values
     */
    #[\JMS\Serializer\Annotation\SerializedName('values')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $values = null;

    /**
     * Indicates if the field is required
     *
     * @var bool|Required2|null $required
     */
    #[\JMS\Serializer\Annotation\SerializedName('required')]
    #[\JMS\Serializer\Annotation\Type('bool|\StackOne\client\Models\Components\Required2')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public bool|Required2|null $required = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $label
     * @param  ?FieldType  $type
     * @param  ?array<string>  $values
     * @param  bool|Required2|null  $required
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $label = null, ?FieldType $type = null, ?array $values = null, bool|Required2|null $required = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->label = $label;
        $this->type = $type;
        $this->values = $values;
        $this->required = $required;
    }
}