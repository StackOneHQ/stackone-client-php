<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Answer
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\JMS\Serializer\Annotation\SerializedName('remote_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

    /**
     * Type of the answer
     *
     * @var ?AnswerType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\AnswerType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?AnswerType $type = null;

    /**
     * Values of the answer
     *
     * @var ?array<string> $values
     */
    #[\JMS\Serializer\Annotation\SerializedName('values')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $values = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?AnswerType  $type
     * @param  ?array<string>  $values
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?AnswerType $type = null, ?array $values = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->type = $type;
        $this->values = $values;
    }
}