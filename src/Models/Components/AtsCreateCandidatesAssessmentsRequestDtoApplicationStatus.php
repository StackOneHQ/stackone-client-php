<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateCandidatesAssessmentsRequestDtoApplicationStatus
{
    /**
     * The status of the application.
     *
     * @var ?AtsCreateCandidatesAssessmentsRequestDtoValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsCreateCandidatesAssessmentsRequestDtoValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsCreateCandidatesAssessmentsRequestDtoValue $value = null;

    /**
     * The source value of the application status.
     *
     * @var string|float|bool|AtsCreateCandidatesAssessmentsRequestDtoSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\AtsCreateCandidatesAssessmentsRequestDtoSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|AtsCreateCandidatesAssessmentsRequestDtoSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?AtsCreateCandidatesAssessmentsRequestDtoValue  $value
     * @param  string|float|bool|AtsCreateCandidatesAssessmentsRequestDtoSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?AtsCreateCandidatesAssessmentsRequestDtoValue $value = null, string|float|bool|AtsCreateCandidatesAssessmentsRequestDtoSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}