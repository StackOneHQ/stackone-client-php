<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class LinkedAccount
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    public string $provider;

    /**
     *
     * @var Status $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Status')]
    public Status $status;

    /**
     *
     * @var string $originOwnerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin_owner_id')]
    public string $originOwnerId;

    /**
     *
     * @var string $originOwnerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin_owner_name')]
    public string $originOwnerName;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     *
     * @var \DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    public \DateTime $updatedAt;

    /**
     *
     * @var ?string $providerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $providerName = null;

    /**
     * $statusReasons
     *
     * @var ?array<StatusReason> $statusReasons
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status_reasons')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\StatusReason>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $statusReasons = null;

    /**
     *
     * @var ?string $originUsername
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin_username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originUsername = null;

    /**
     *
     * @var ?Credentials $credentials
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('credentials')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Credentials|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Credentials $credentials = null;

    /**
     *
     * @var ?SetupInformation $setupInformation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('setup_information')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SetupInformation|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SetupInformation $setupInformation = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * @param  string  $id
     * @param  string  $provider
     * @param  Status  $status
     * @param  string  $originOwnerId
     * @param  string  $originOwnerName
     * @param  \DateTime  $createdAt
     * @param  \DateTime  $updatedAt
     * @param  ?string  $providerName
     * @param  ?array<StatusReason>  $statusReasons
     * @param  ?string  $originUsername
     * @param  ?Credentials  $credentials
     * @param  ?SetupInformation  $setupInformation
     * @param  ?string  $label
     * @phpstan-pure
     */
    public function __construct(string $id, string $provider, Status $status, string $originOwnerId, string $originOwnerName, \DateTime $createdAt, \DateTime $updatedAt, ?string $providerName = null, ?array $statusReasons = null, ?string $originUsername = null, ?Credentials $credentials = null, ?SetupInformation $setupInformation = null, ?string $label = null)
    {
        $this->id = $id;
        $this->provider = $provider;
        $this->status = $status;
        $this->originOwnerId = $originOwnerId;
        $this->originOwnerName = $originOwnerName;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->providerName = $providerName;
        $this->statusReasons = $statusReasons;
        $this->originUsername = $originUsername;
        $this->credentials = $credentials;
        $this->setupInformation = $setupInformation;
        $this->label = $label;
    }
}