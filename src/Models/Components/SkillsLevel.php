<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** SkillsLevel - The hierarchal level of the skill */
class SkillsLevel
{
    /**
     *
     * @var ?SkillsValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SkillsValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SkillsValue $value = null;

    /**
     *
     * @var string|float|bool|SkillsSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\SkillsSourceValue4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|SkillsSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?SkillsValue  $value
     * @param  string|float|bool|SkillsSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?SkillsValue $value = null, string|float|bool|SkillsSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}