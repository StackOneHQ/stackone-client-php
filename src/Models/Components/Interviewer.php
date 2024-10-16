<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Interviewer
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
     * @var ?string $firstName
     */
    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     *
     * @var ?string $lastName
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $name
     * @param  ?string  $email
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $firstName = null, ?string $lastName = null, ?string $name = null, ?string $email = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->name = $name;
        $this->email = $email;
    }
}