<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsUpdateBackgroundCheckResultRequestDtoScore
{
    /**
     * The label of the score
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     * The value is the actual score
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     * The minimum value of the score
     *
     * @var ?string $min
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('min')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $min = null;

    /**
     * The maximum value of the score
     *
     * @var ?string $max
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $max = null;

    /**
     * @param  ?string  $label
     * @param  ?string  $value
     * @param  ?string  $min
     * @param  ?string  $max
     * @phpstan-pure
     */
    public function __construct(?string $label = null, ?string $value = null, ?string $min = null, ?string $max = null)
    {
        $this->label = $label;
        $this->value = $value;
        $this->min = $min;
        $this->max = $max;
    }
}