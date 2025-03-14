<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelPayPeriod - The pay period */
class UpdateEmployeeApiModelPayPeriod
{
    /**
     * The pay period of the job postings.
     *
     * @var ?UpdateEmployeeApiModelEmploymentValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelEmploymentValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelEmploymentValue $value = null;

    /**
     * The source value of the pay period.
     *
     * @var string|float|bool|UpdateEmployeeApiModelSourceValueEmployment4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UpdateEmployeeApiModelSourceValueEmployment4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UpdateEmployeeApiModelSourceValueEmployment4|array|null $sourceValue = null;

    /**
     * @param  ?UpdateEmployeeApiModelEmploymentValue  $value
     * @param  string|float|bool|UpdateEmployeeApiModelSourceValueEmployment4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?UpdateEmployeeApiModelEmploymentValue $value = null, string|float|bool|UpdateEmployeeApiModelSourceValueEmployment4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}