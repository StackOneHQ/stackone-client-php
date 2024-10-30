<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** EmploymentType - The employee employment type */
class EmploymentType
{
    /**
     * The type of the employment.
     *
     * @var ?EmployeeEmploymentTypeValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeEmploymentTypeValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeEmploymentTypeValue $value = null;

    /**
     * The source value of the employment type.
     *
     * @var string|float|bool|EmployeeSourceValueEmploymentType4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmployeeSourceValueEmploymentType4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmployeeSourceValueEmploymentType4|array|null $sourceValue = null;

    /**
     * @param  ?EmployeeEmploymentTypeValue  $value
     * @param  string|float|bool|EmployeeSourceValueEmploymentType4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmployeeEmploymentTypeValue $value = null, string|float|bool|EmployeeSourceValueEmploymentType4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}