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
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobValue|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?JobValue $value = null;

    /**
     * The source value of the job status.
     *
     * @var string|float|bool|JobSourceValue4|array<mixed>|null $sourceValue
     */
    #[\JMS\Serializer\Annotation\SerializedName('source_value')]
    #[\JMS\Serializer\Annotation\Type('string|float|bool|\StackOne\client\Models\Components\JobSourceValue4|array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public string|float|bool|JobSourceValue4|array|null $sourceValue = null;

    /**
     * @param  ?JobValue  $value
     * @param  string|float|bool|JobSourceValue4|array<mixed>|null  $sourceValue
     */
    public function __construct(?JobValue $value = null, string|float|bool|JobSourceValue4|array|null $sourceValue = null)
    {
        $this->value = $value;
        $this->sourceValue = $sourceValue;
    }
}