<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CustomFieldDefinition
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
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The type of the custom field.
     *
     * @var ?CustomFieldDefinitionType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CustomFieldDefinitionType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CustomFieldDefinitionType $type = null;

    /**
     * An array of possible options for the custom field.
     *
     * @var ?array<mixed> $options
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('options')]
    #[\Speakeasy\Serializer\Annotation\Type('array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $options = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?CustomFieldDefinitionType  $type
     * @param  ?array<mixed>  $options
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?string $description = null, ?CustomFieldDefinitionType $type = null, ?array $options = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->options = $options;
    }
}