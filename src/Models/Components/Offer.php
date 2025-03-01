<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Offer
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
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     *
     * @var ?string $applicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $applicationId = null;

    /**
     * Provider's unique identifier of the application
     *
     * @var ?string $remoteApplicationId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_application_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteApplicationId = null;

    /**
     * Date of creation
     *
     * @var ?\DateTime $startDate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_date')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startDate = null;

    /**
     *
     * @var ?OfferStatus $offerStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('offer_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\OfferStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?OfferStatus $offerStatus = null;

    /**
     *
     * @var ?float $salary
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salary')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $salary = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     * Date of creation
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Date of last update
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * $offerHistory
     *
     * @var ?array<OfferHistory> $offerHistory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('offer_history')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\OfferHistory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $offerHistory = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $applicationId
     * @param  ?string  $remoteApplicationId
     * @param  ?\DateTime  $startDate
     * @param  ?OfferStatus  $offerStatus
     * @param  ?float  $salary
     * @param  ?string  $currency
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<OfferHistory>  $offerHistory
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $applicationId = null, ?string $remoteApplicationId = null, ?\DateTime $startDate = null, ?OfferStatus $offerStatus = null, ?float $salary = null, ?string $currency = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null, ?array $offerHistory = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->applicationId = $applicationId;
        $this->remoteApplicationId = $remoteApplicationId;
        $this->startDate = $startDate;
        $this->offerStatus = $offerStatus;
        $this->salary = $salary;
        $this->currency = $currency;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->offerHistory = $offerHistory;
    }
}