<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** AtsCreateApplicationRequestDtoCandidate - Candidate Properties. Provide this OR candidate_id, but not both. Providing this attempts to create a new candidate with the application. */
class AtsCreateApplicationRequestDtoCandidate
{
    /**
     * Value to pass through to the provider
     *
     * @var ?array<string, mixed> $passthrough
     */
    #[\JMS\Serializer\Annotation\SerializedName('passthrough')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $passthrough = null;

    /**
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * The candidate personal phone number
     *
     * @var ?string $phoneNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('phone_number')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $phoneNumber = null;

    /**
     * Candidate name
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Candidate first name
     *
     * @var ?string $firstName
     */
    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Candidate last name
     *
     * @var ?string $lastName
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Candidate email
     *
     * @var ?string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * List of candidate social links
     *
     * @var ?array<SocialLink> $socialLinks
     */
    #[\JMS\Serializer\Annotation\SerializedName('social_links')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\SocialLink>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $socialLinks = null;

    /**
     * Candidate company
     *
     * @var ?string $company
     */
    #[\JMS\Serializer\Annotation\SerializedName('company')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $company = null;

    /**
     * Candidate title
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * Candidate hired date
     *
     * @var ?\DateTime $hiredAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('hired_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $hiredAt = null;

    /**
     * Candidate country
     *
     * @var ?string $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * The candidate custom fields
     *
     * @var ?array<CandidateCustomFields> $customFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CandidateCustomFields>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $phoneNumber
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @param  ?array<SocialLink>  $socialLinks
     * @param  ?string  $company
     * @param  ?string  $title
     * @param  ?\DateTime  $hiredAt
     * @param  ?string  $country
     * @param  ?array<CandidateCustomFields>  $customFields
     */
    public function __construct(?array $passthrough = null, ?array $unifiedCustomFields = null, ?string $phoneNumber = null, ?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?array $socialLinks = null, ?string $company = null, ?string $title = null, ?\DateTime $hiredAt = null, ?string $country = null, ?array $customFields = null)
    {
        $this->passthrough = $passthrough;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->phoneNumber = $phoneNumber;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->socialLinks = $socialLinks;
        $this->company = $company;
        $this->title = $title;
        $this->hiredAt = $hiredAt;
        $this->country = $country;
        $this->customFields = $customFields;
    }
}