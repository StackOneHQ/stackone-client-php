<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ConnectSession
{
    /**
     *
     * @var float $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public float $id;

    /**
     *
     * @var float $organizationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('organization_id')]
    public float $organizationId;

    /**
     *
     * @var string $projectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('project_id')]
    public string $projectId;

    /**
     * $categories
     *
     * @var ?array<ConnectSessionCategories> $categories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('categories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ConnectSessionCategories>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $categories = null;

    /**
     *
     * @var ?string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

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
     * @var ?string $originUsername
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('origin_username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originUsername = null;

    /**
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * @param  float  $id
     * @param  float  $organizationId
     * @param  string  $projectId
     * @param  string  $originOwnerId
     * @param  string  $originOwnerName
     * @param  \DateTime  $createdAt
     * @param  ?array<ConnectSessionCategories>  $categories
     * @param  ?string  $provider
     * @param  ?string  $originUsername
     * @param  ?string  $accountId
     * @param  ?string  $label
     */
    public function __construct(float $id, float $organizationId, string $projectId, string $originOwnerId, string $originOwnerName, \DateTime $createdAt, ?array $categories = null, ?string $provider = null, ?string $originUsername = null, ?string $accountId = null, ?string $label = null)
    {
        $this->id = $id;
        $this->organizationId = $organizationId;
        $this->projectId = $projectId;
        $this->originOwnerId = $originOwnerId;
        $this->originOwnerName = $originOwnerName;
        $this->createdAt = $createdAt;
        $this->categories = $categories;
        $this->provider = $provider;
        $this->originUsername = $originUsername;
        $this->accountId = $accountId;
        $this->label = $label;
    }
}