<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** CreateEmploymentApiModelEmploymentContractType - The employment work schedule type (e.g., full-time, part-time) */
class CreateEmploymentApiModelEmploymentContractType
{
    /**
     *
     * @var ?CreateEmploymentApiModelEmploymentContractTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\CreateEmploymentApiModelEmploymentContractTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CreateEmploymentApiModelEmploymentContractTypeValue $value = null;

    /**
     *
     * @var string|float|bool|CreateEmploymentApiModelSourceValueEmploymentContractType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\CreateEmploymentApiModelSourceValueEmploymentContractType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|CreateEmploymentApiModelSourceValueEmploymentContractType4|array|null $sourceValue = null;

    /**
     * @param  ?CreateEmploymentApiModelEmploymentContractTypeValue  $value
     * @param  string|float|bool|CreateEmploymentApiModelSourceValueEmploymentContractType4|array<mixed>|null  $sourceValue
     */
    public function __construct(?CreateEmploymentApiModelEmploymentContractTypeValue $value = null, string|float|bool|CreateEmploymentApiModelSourceValueEmploymentContractType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}