<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ConnectSessionCreate
{
    /**
     * The categories of the provider to connect to
     *
     * @var ?array<Categories> $categories
     */
    #[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Categories>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $categories = null;

    /**
     * The provider to connect to
     *
     * @var ?string $provider
     */
    #[\JMS\Serializer\Annotation\SerializedName('provider')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     * The origin owner identifier
     *
     * @var string $originOwnerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_owner_id')]
    public string $originOwnerId;

    /**
     * The origin owner name
     *
     * @var string $originOwnerName
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_owner_name')]
    public string $originOwnerName;

    /**
     * The origin username
     *
     * @var ?string $originUsername
     */
    #[\JMS\Serializer\Annotation\SerializedName('origin_username')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $originUsername = null;

    /**
     * The unique identifier for the account associated with this connect session. When this field is present, the hub will launch in edit mode using the retrieved token.
     *
     * @var ?string $accountId
     */
    #[\JMS\Serializer\Annotation\SerializedName('account_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     * How long the session should be valid for in seconds
     *
     * @var ?float $expiresIn
     */
    #[\JMS\Serializer\Annotation\SerializedName('expires_in')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $expiresIn = null;

    /**
     * The metadata for the connection
     *
     * @var ?Metadata $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\Metadata|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Metadata $metadata = null;

    /**
     * If set, this connect session will allow creation of multiple accounts with the same origin owner id and provider. Has no effect if account_id is set.
     *
     * @var ?bool $multiple
     */
    #[\JMS\Serializer\Annotation\SerializedName('multiple')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $multiple = null;

    /**
     * The label to be applied to the account associated with this connect session.
     *
     * @var ?string $label
     */
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * @param  string  $originOwnerId
     * @param  string  $originOwnerName
     * @param  ?array<Categories>  $categories
     * @param  ?string  $provider
     * @param  ?string  $originUsername
     * @param  ?string  $accountId
     * @param  ?float  $expiresIn
     * @param  ?Metadata  $metadata
     * @param  ?bool  $multiple
     * @param  ?string  $label
     */
    public function __construct(string $originOwnerId, string $originOwnerName, ?array $categories = null, ?string $provider = null, ?string $originUsername = null, ?string $accountId = null, ?Metadata $metadata = null, ?string $label = null, ?float $expiresIn = 1800, ?bool $multiple = false)
    {
        $this->originOwnerId = $originOwnerId;
        $this->originOwnerName = $originOwnerName;
        $this->categories = $categories;
        $this->provider = $provider;
        $this->originUsername = $originUsername;
        $this->accountId = $accountId;
        $this->expiresIn = $expiresIn;
        $this->metadata = $metadata;
        $this->multiple = $multiple;
        $this->label = $label;
    }
}