<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** Policy - The time off policy associated with this balance */
class Policy
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
     * The name of this policy
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The description of this policy
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The type of this policy
     *
     * @var ?TimeOffBalancesType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffBalancesType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffBalancesType $type = null;

    /**
     * The duration unit of the current policy
     *
     * @var ?TimeOffBalancesDurationUnit $durationUnit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('duration_unit')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\TimeOffBalancesDurationUnit|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?TimeOffBalancesDurationUnit $durationUnit = null;

    /**
     * $reasons
     *
     * @var ?array<Reason> $reasons
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('reasons')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\Reason>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $reasons = null;

    /**
     * The created_at date of this policy
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The updated_at date of this policy
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?TimeOffBalancesType  $type
     * @param  ?TimeOffBalancesDurationUnit  $durationUnit
     * @param  ?array<Reason>  $reasons
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?string $description = null, ?TimeOffBalancesType $type = null, ?TimeOffBalancesDurationUnit $durationUnit = null, ?array $reasons = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
        $this->durationUnit = $durationUnit;
        $this->reasons = $reasons;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}