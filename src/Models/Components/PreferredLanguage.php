<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** PreferredLanguage - The employee preferred language */
class PreferredLanguage
{
    /**
     * The ISO639-2 Code of the language
     *
     * @var ?EmployeePreferredLanguageValue $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeePreferredLanguageValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EmployeePreferredLanguageValue $value = null;

    /**
     *
     * @var string|float|bool|EmployeeSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\EmployeeSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|EmployeeSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?EmployeePreferredLanguageValue  $value
     * @param  string|float|bool|EmployeeSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?EmployeePreferredLanguageValue $value = null, string|float|bool|EmployeeSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}