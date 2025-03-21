<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPostingCompensation
{
    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?JobPostingCompensationType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingCompensationType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingCompensationType $type = null;

    /**
     *
     * @var ?JobPostingCompensationPayPeriod $payPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_period')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingCompensationPayPeriod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingCompensationPayPeriod $payPeriod = null;

    /**
     *
     * @var ?JobPostingCompensationPayFrequency $payFrequency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pay_frequency')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\JobPostingCompensationPayFrequency|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?JobPostingCompensationPayFrequency $payFrequency = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     *
     * @var ?string $minValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('min_value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $minValue = null;

    /**
     *
     * @var ?string $maxValue
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('max_value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $maxValue = null;

    /**
     * @param  ?string  $name
     * @param  ?JobPostingCompensationType  $type
     * @param  ?JobPostingCompensationPayPeriod  $payPeriod
     * @param  ?JobPostingCompensationPayFrequency  $payFrequency
     * @param  ?string  $currency
     * @param  ?string  $value
     * @param  ?string  $minValue
     * @param  ?string  $maxValue
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?JobPostingCompensationType $type = null, ?JobPostingCompensationPayPeriod $payPeriod = null, ?JobPostingCompensationPayFrequency $payFrequency = null, ?string $currency = null, ?string $value = null, ?string $minValue = null, ?string $maxValue = null)
    {
        $this->name = $name;
        $this->type = $type;
        $this->payPeriod = $payPeriod;
        $this->payFrequency = $payFrequency;
        $this->currency = $currency;
        $this->value = $value;
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
    }
}