<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class QuestionMultipleChoiceAnswers
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
     *
     * @var ?string $text
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('text')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $text = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?string  $text
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?string $text = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->text = $text;
    }
}