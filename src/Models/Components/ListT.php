<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ListT
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
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * $items
     *
     * @var ?array<ListItem> $items
     */
    #[\JMS\Serializer\Annotation\SerializedName('items')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ListItem>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $items = null;

    /**
     * Timestamp when the list was created
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Timestamp when the list was last updated
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * The list type
     *
     * @var ?ListType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\ListType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?ListType $type = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $name
     * @param  ?array<ListItem>  $items
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?ListType  $type
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $name = null, ?array $items = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?ListType $type = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->name = $name;
        $this->items = $items;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->type = $type;
    }
}