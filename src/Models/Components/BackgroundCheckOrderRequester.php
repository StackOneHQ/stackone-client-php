<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class BackgroundCheckOrderRequester
{
    /**
     * User ID of the hiring team member.
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * Provider's unique identifier of the user
     *
     * @var ?string $remoteUserId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteUserId = null;

    /**
     * First name of the hiring team member.
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Last name of the hiring team member.
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Email of the hiring team member.
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * Role of the hiring team member.
     *
     * @var ?string $role
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('role')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $role = null;

    /**
     * @param  ?string  $userId
     * @param  ?string  $remoteUserId
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @param  ?string  $role
     * @phpstan-pure
     */
    public function __construct(?string $userId = null, ?string $remoteUserId = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?string $role = null)
    {
        $this->userId = $userId;
        $this->remoteUserId = $remoteUserId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->role = $role;
    }
}