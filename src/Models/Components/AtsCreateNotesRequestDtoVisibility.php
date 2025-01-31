<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** AtsCreateNotesRequestDtoVisibility - Visibility of the note */
class AtsCreateNotesRequestDtoVisibility
{
    /**
     * The visibility of the notes.
     *
     * @var ?AtsCreateNotesRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateNotesRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateNotesRequestDtoValue $value = null;

    /**
     * The source value of the notes visibility.
     *
     * @var string|float|bool|AtsCreateNotesRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AtsCreateNotesRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AtsCreateNotesRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AtsCreateNotesRequestDtoValue  $value
     * @param  string|float|bool|AtsCreateNotesRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AtsCreateNotesRequestDtoValue $value = null, string|float|bool|AtsCreateNotesRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}