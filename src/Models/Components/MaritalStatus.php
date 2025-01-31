<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** MaritalStatus - The employee marital status */
class MaritalStatus
{
    /**
     *
     * @var ?EmployeeMaritalStatusValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeMaritalStatusValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeMaritalStatusValue $value = null;

    /**
     *
     * @var string|float|bool|EmployeeSourceValueMaritalStatus4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmployeeSourceValueMaritalStatus4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmployeeSourceValueMaritalStatus4|array|null $sourceValue = null;

    /**
     * @param  ?EmployeeMaritalStatusValue  $value
     * @param  string|float|bool|EmployeeSourceValueMaritalStatus4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmployeeMaritalStatusValue $value = null, string|float|bool|EmployeeSourceValueMaritalStatus4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}