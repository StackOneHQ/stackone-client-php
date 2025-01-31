<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/**
 * EmploymentEmploymentType - The type of employment (e.g., contractor, permanent)
 *
 * @deprecated  class: This will be removed in a future release, please migrate away from it as soon as possible.
 */
class EmploymentEmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?EmploymentEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmploymentEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|EmploymentSourceValueEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmploymentSourceValueEmploymentType4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmploymentSourceValueEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?EmploymentEmploymentTypeValue  $value
     * @param  string|float|bool|EmploymentSourceValueEmploymentType4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmploymentEmploymentTypeValue $value = null, string|float|bool|EmploymentSourceValueEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}