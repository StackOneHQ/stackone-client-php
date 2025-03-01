<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/**
 * SkillsLevel - The hierarchal level of the skill
 *
 * @deprecated  class: This will be removed in a future release, please migrate away from it as soon as possible.
 */
class SkillsLevel
{
    /**
     *
     * @var ?SkillsLevelValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\SkillsLevelValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SkillsLevelValue $value = null;

    /**
     *
     * @var string|float|bool|SkillsSourceValueLevel4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\SkillsSourceValueLevel4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|SkillsSourceValueLevel4|array|null $sourceValue = null;

    /**
     * @param  ?SkillsLevelValue  $value
     * @param  string|float|bool|SkillsSourceValueLevel4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?SkillsLevelValue $value = null, string|float|bool|SkillsSourceValueLevel4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}