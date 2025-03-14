<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CreateQuestionnaire
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
     * $answers
     *
     * @var ?array<CreateAnswer> $answers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('answers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreateAnswer>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $answers = null;

    /**
     * @param  ?string  $id
     * @param  ?array<CreateAnswer>  $answers
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?array $answers = null)
    {
        $this->id = $id;
        $this->answers = $answers;
    }
}