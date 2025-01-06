<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ParentQuestion
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
     * List of parent questions's option IDs
     *
     * @var ?array<string> $optionIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('option_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $optionIds = null;

    /**
     * Provider's list of parent questions's option IDs
     *
     * @var ?array<string> $remoteOptionIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_option_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteOptionIds = null;

    /**
     *
     * @var ?ConditionType $conditionType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('condition_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ConditionType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ConditionType $conditionType = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string>  $optionIds
     * @param  ?array<string>  $remoteOptionIds
     * @param  ?ConditionType  $conditionType
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $optionIds = null, ?array $remoteOptionIds = null, ?ConditionType $conditionType = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->optionIds = $optionIds;
        $this->remoteOptionIds = $remoteOptionIds;
        $this->conditionType = $conditionType;
    }
}