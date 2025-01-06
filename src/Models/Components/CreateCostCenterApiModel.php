<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateCostCenterApiModel
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
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?float $distributionPercentage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('distribution_percentage')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $distributionPercentage = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?float  $distributionPercentage
     */
    public function __construct(?string $id = null, ?string $name = null, ?float $distributionPercentage = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->distributionPercentage = $distributionPercentage;
    }
}