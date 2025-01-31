<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateApplicationRequestDtoApplicationStatus
{
    /**
     * The status of the application.
     *
     * @var ?AtsCreateApplicationRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateApplicationRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateApplicationRequestDtoValue $value = null;

    /**
     * The source value of the application status.
     *
     * @var string|float|bool|AtsCreateApplicationRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AtsCreateApplicationRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AtsCreateApplicationRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AtsCreateApplicationRequestDtoValue  $value
     * @param  string|float|bool|AtsCreateApplicationRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AtsCreateApplicationRequestDtoValue $value = null, string|float|bool|AtsCreateApplicationRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}