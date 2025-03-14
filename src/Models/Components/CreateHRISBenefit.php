<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateHRISBenefit
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
     * The name of the benefit
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The type of the benefit
     *
     * @var ?CreateHRISBenefitBenefitType $benefitType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('benefit_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateHRISBenefitBenefitType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateHRISBenefitBenefitType $benefitType = null;

    /**
     * The provider of the benefit
     *
     * @var ?string $provider
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $provider = null;

    /**
     * The description of the benefit
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * The date and time the benefit was created
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The date and time the benefit was last updated
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?CreateHRISBenefitBenefitType  $benefitType
     * @param  ?string  $provider
     * @param  ?string  $description
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?CreateHRISBenefitBenefitType $benefitType = null, ?string $provider = null, ?string $description = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->benefitType = $benefitType;
        $this->provider = $provider;
        $this->description = $description;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}