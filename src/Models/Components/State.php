<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** State - The ISO3166-2 sub division where the location is situated */
class State
{
    /**
     *
     * @var ?HrisCreateEmployeeRequestDtoHomeLocationStateValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoHomeLocationStateValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoHomeLocationStateValue $value = null;

    /**
     *
     * @var string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocationState4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoSourceValueHomeLocationState4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocationState4|array|null $sourceValue = null;

    /**
     * @param  ?HrisCreateEmployeeRequestDtoHomeLocationStateValue  $value
     * @param  string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocationState4|array<mixed>|null  $sourceValue
     */
    public function __construct(?HrisCreateEmployeeRequestDtoHomeLocationStateValue $value = null, string|float|bool|HrisCreateEmployeeRequestDtoSourceValueHomeLocationState4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}