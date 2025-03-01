<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateEmploymentApiModelPayPeriod - The pay period */
class CreateEmploymentApiModelPayPeriod
{
    /**
     * The pay period of the job postings.
     *
     * @var ?CreateEmploymentApiModelValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelValue $value = null;

    /**
     * The source value of the pay period.
     *
     * @var string|float|bool|CreateEmploymentApiModelSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateEmploymentApiModelSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateEmploymentApiModelSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?CreateEmploymentApiModelValue  $value
     * @param  string|float|bool|CreateEmploymentApiModelSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?CreateEmploymentApiModelValue $value = null, string|float|bool|CreateEmploymentApiModelSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}