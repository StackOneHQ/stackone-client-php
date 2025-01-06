<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsCreateBackgroundCheckPackagesRequestDto
{
    /**
     * Package name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Package description
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     * Package tests
     *
     * @var ?array<CreatePackage> $tests
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tests')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CreatePackage>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tests = null;

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
     * @param  ?string  $name
     * @param  ?string  $description
     * @param  ?array<CreatePackage>  $tests
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?string $name = null, ?string $description = null, ?array $tests = null, ?array $passthrough = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->tests = $tests;
        $this->passthrough = $passthrough;
    }
}