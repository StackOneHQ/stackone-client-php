<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class IamGroup
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
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?IamGroupType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\IamGroupType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?IamGroupType $type = null;

    /**
     * $roles
     *
     * @var ?array<IamRole> $roles
     */
    #[\JMS\Serializer\Annotation\SerializedName('roles')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\IamRole>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $roles = null;

    /**
     * The parent group id for when a group belongs to another group.
     *
     * @var ?string $parentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     * Provider's unique identifier of the parent group id for when a group belongs to another group.
     *
     * @var ?string $remoteParentId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_parent_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteParentId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?IamGroupType  $type
     * @param  ?array<IamRole>  $roles
     * @param  ?string  $parentId
     * @param  ?string  $remoteParentId
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?string $description = null, ?IamGroupType $type = null, ?array $roles = null, ?string $parentId = null, ?string $remoteParentId = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->roles = $roles;
        $this->parentId = $parentId;
        $this->remoteParentId = $remoteParentId;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}