<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsUpdateApplicationRequestDto
{
    /**
     * Value to pass through to the provider
     *
     * @var ?array<string, mixed> $passthrough
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('passthrough')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * The application custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     *
     * @var ?AtsUpdateApplicationRequestDtoApplicationStatus $applicationStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsUpdateApplicationRequestDtoApplicationStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsUpdateApplicationRequestDtoApplicationStatus $applicationStatus = null;

    /**
     *
     * @var ?AtsUpdateApplicationRequestDtoSource $source
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('source')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\AtsUpdateApplicationRequestDtoSource|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AtsUpdateApplicationRequestDtoSource $source = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?array<CustomFields>  $customFields
     * @param  ?AtsUpdateApplicationRequestDtoApplicationStatus  $applicationStatus
     * @param  ?AtsUpdateApplicationRequestDtoSource  $source
     * @phpstan-pure
     */
    public function __construct(?array $passthrough = null, ?array $customFields = null, ?AtsUpdateApplicationRequestDtoApplicationStatus $applicationStatus = null, ?AtsUpdateApplicationRequestDtoSource $source = null)
    {
        $this->passthrough = $passthrough;
        $this->customFields = $customFields;
        $this->applicationStatus = $applicationStatus;
        $this->source = $source;
    }
}