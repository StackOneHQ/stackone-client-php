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
    #[\JMS\Serializer\Annotation\SerializedName('plain')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $plain = null;

    /**
     *
     * @var ?string $html
     */
    #[\JMS\Serializer\Annotation\SerializedName('html')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $html = null;

    /**
     * $sections
     *
     * @var ?array<JobPostingContentSection> $sections
     */
    #[\JMS\Serializer\Annotation\SerializedName('sections')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\JobPostingContentSection>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $sections = null;

    /**
     * @param  ?string  $plain
     * @param  ?string  $html
     * @param  ?array<JobPostingContentSection>  $sections
     */
    public function __construct(?string $plain = null, ?string $html = null, ?array $sections = null)
    {
        $this->plain = $plain;
        $this->html = $html;
        $this->sections = $sections;
    }
}