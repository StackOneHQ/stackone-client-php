<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** Role - The role of manager */
class Role
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
     * The label of the role type
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * The manager role type (e.g., admin, viewer)
     *
     * @var ?RoleType $roleType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\RoleType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?RoleType $roleType = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $label
     * @param  ?RoleType  $roleType
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $label = null, ?RoleType $roleType = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->label = $label;
        $this->roleType = $roleType;
    }
}