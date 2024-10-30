<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** IamUserCategory - The category of the file */
class IamUserCategory
{
    /**
     * The category of the file
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     *
     * @var string|float|bool|IamUserSourceValueAvatar4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\IamUserSourceValueAvatar4|array<mixed>')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|IamUserSourceValueAvatar4|array|null $sourceValue = null;

    /**
     * @param  ?string  $value
     * @param  string|float|bool|IamUserSourceValueAvatar4|array<mixed>|null  $sourceValue
     */
    public function __construct(?string $value = null, string|float|bool|IamUserSourceValueAvatar4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}