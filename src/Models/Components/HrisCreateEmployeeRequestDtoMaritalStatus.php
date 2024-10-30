<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HrisCreateEmployeeRequestDtoMaritalStatus - The employee marital status */
class HrisCreateEmployeeRequestDtoMaritalStatus
{
    /**
     *
     * @var ?HrisCreateEmployeeRequestDtoMaritalStatusValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoMaritalStatusValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoMaritalStatusValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueMaritalStatus4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueMaritalStatus4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueMaritalStatus4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoMaritalStatusValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueMaritalStatus4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisCreateEmployeeRequestDtoMaritalStatusValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueMaritalStatus4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}