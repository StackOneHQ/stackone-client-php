<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class EntitySkills
{
    /**
     * The ID associated with this skill
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
     * The name associated with this skill
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Whether the skill is active and therefore available for use
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     * The language associated with this skill
     *
     * @var ?Language $language
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\Language|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Language $language = null;

    /**
     * The proficiency level of the skill
     *
     * @var ?MaximumProficiency $maximumProficiency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('maximum_proficiency')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MaximumProficiency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MaximumProficiency $maximumProficiency = null;

    /**
     * The proficiency level of the skill
     *
     * @var ?MinimumProficiency $minimumProficiency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('minimum_proficiency')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\MinimumProficiency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MinimumProficiency $minimumProficiency = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $name
     * @param  ?bool  $active
     * @param  ?Language  $language
     * @param  ?MaximumProficiency  $maximumProficiency
     * @param  ?MinimumProficiency  $minimumProficiency
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $name = null, ?bool $active = null, ?Language $language = null, ?MaximumProficiency $maximumProficiency = null, ?MinimumProficiency $minimumProficiency = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->name = $name;
        $this->active = $active;
        $this->language = $language;
        $this->maximumProficiency = $maximumProficiency;
        $this->minimumProficiency = $minimumProficiency;
    }
}