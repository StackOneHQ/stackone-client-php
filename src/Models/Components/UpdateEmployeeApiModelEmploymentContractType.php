<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelEmploymentContractType - The employment work schedule type (e.g., full-time, part-time) */
class UpdateEmployeeApiModelEmploymentContractType
{
    /**
     *
     * @var ?UpdateEmployeeApiModelEmploymentContractTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelEmploymentContractTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelEmploymentContractTypeValue $value = null;

    /**
     *
     * @var string|float|bool|UpdateEmployeeApiModelSourceValueEmploymentContractType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\UpdateEmployeeApiModelSourceValueEmploymentContractType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|UpdateEmployeeApiModelSourceValueEmploymentContractType4|array|null $sourceValue = null;

    /**
     * @param  ?UpdateEmployeeApiModelEmploymentContractTypeValue  $value
     * @param  string|float|bool|UpdateEmployeeApiModelSourceValueEmploymentContractType4|array<mixed>|null  $sourceValue
     */
    public function __construct(?UpdateEmployeeApiModelEmploymentContractTypeValue $value = null, string|float|bool|UpdateEmployeeApiModelSourceValueEmploymentContractType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}