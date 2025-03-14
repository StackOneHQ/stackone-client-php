<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** LmsUpsertContentRequestDtoContentType - The type of content */
class LmsUpsertContentRequestDtoContentType
{
    /**
     *
     * @var ?LmsUpsertContentRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\LmsUpsertContentRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?LmsUpsertContentRequestDtoValue $value = null;

    /**
     *
     * @var string|float|bool|LmsUpsertContentRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\LmsUpsertContentRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|LmsUpsertContentRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?LmsUpsertContentRequestDtoValue  $value
     * @param  string|float|bool|LmsUpsertContentRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?LmsUpsertContentRequestDtoValue $value = null, string|float|bool|LmsUpsertContentRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}