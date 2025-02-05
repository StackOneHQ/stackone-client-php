<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** HRISTeamType - The type of the team group */
class HRISTeamType
{
    /**
     *
     * @var ?HRISTeamValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HRISTeamValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HRISTeamValue $value = null;

    /**
     *
     * @var string|float|bool|HRISTeamSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\HRISTeamSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|HRISTeamSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?HRISTeamValue  $value
     * @param  string|float|bool|HRISTeamSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?HRISTeamValue $value = null, string|float|bool|HRISTeamSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}