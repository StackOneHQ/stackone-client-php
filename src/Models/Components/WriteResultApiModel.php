<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class WriteResultApiModel
{
    /**
     *
     * @var ?float $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statusCode')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $statusCode = null;

    /**
     *
     * @var ?string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     *
     * @var ?\DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $timestamp = null;

    /**
     * $providerErrors
     *
     * @var ?array<ProviderErrorApiModel> $providerErrors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('provider_errors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ProviderErrorApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $providerErrors = null;

    /**
     * $unifiedWarnings
     *
     * @var ?array<UnifiedWarningApiModel> $unifiedWarnings
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_warnings')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\UnifiedWarningApiModel>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedWarnings = null;

    /**
     * @param  ?float  $statusCode
     * @param  ?string  $message
     * @param  ?\DateTime  $timestamp
     * @param  ?array<ProviderErrorApiModel>  $providerErrors
     * @param  ?array<UnifiedWarningApiModel>  $unifiedWarnings
     * @phpstan-pure
     */
    public function __construct(?float $statusCode = null, ?string $message = null, ?\DateTime $timestamp = null, ?array $providerErrors = null, ?array $unifiedWarnings = null)
    {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->providerErrors = $providerErrors;
        $this->unifiedWarnings = $unifiedWarnings;
    }
}