<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class JobPostingContent
{
    /**
     *
     * @var ?string $plain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('plain')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $plain = null;

    /**
     *
     * @var ?string $html
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('html')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $html = null;

    /**
     * $sections
     *
     * @var ?array<JobPostingContentSection> $sections
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sections')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobPostingContentSection>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $sections = null;

    /**
     * @param  ?string  $plain
     * @param  ?string  $html
     * @param  ?array<JobPostingContentSection>  $sections
     * @phpstan-pure
     */
    public function __construct(?string $plain = null, ?string $html = null, ?array $sections = null)
    {
        $this->plain = $plain;
        $this->html = $html;
        $this->sections = $sections;
    }
}