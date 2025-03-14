<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** JobStatus - Status of the job */
class JobStatus
{
    /**
     * The status of the job.
     *
     * @var ?JobValue $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobValue|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobValue $value = null;

    /**
     * The source value of the job status.
     *
     * @var string|float|bool|JobSourceValue4|array<mixed>|null $sourceValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source_value')]
    #[\Speakeasy\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\JobSourceValue4|array<mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|JobSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?JobValue  $value
     * @param  string|float|bool|JobSourceValue4|array<mixed>|null  $sourceValue
     * @phpstan-pure
     */
    public function __construct(?JobValue $value = null, string|float|bool|JobSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}