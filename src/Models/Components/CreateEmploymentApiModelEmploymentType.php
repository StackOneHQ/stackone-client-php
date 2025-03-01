<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateEmploymentApiModelEmploymentType - The type of employment (e.g., contractor, permanent) */
class CreateEmploymentApiModelEmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?CreateEmploymentApiModelEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|CreateEmploymentApiModelSourceValueEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateEmploymentApiModelSourceValueEmploymentType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateEmploymentApiModelSourceValueEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?CreateEmploymentApiModelEmploymentTypeValue  $value
     * @param  string|float|bool|CreateEmploymentApiModelSourceValueEmploymentType4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?CreateEmploymentApiModelEmploymentTypeValue $value = null, string|float|bool|CreateEmploymentApiModelSourceValueEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}