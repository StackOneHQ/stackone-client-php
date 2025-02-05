<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class ApplicationStatus
{
    /**
     * The status of the application.
     *
     * @var ?ApplicationValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\ApplicationValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ApplicationValue $value = null;

    /**
     * The source value of the application status.
     *
     * @var string|float|bool|ApplicationSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\ApplicationSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|ApplicationSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?ApplicationValue  $value
     * @param  string|float|bool|ApplicationSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?ApplicationValue $value = null, string|float|bool|ApplicationSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}