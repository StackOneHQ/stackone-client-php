<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class AtsUpdateCandidateRequestDto
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
     * Custom Unified Fields configured in your StackOne project
     *
     * @var ?array<string, mixed> $unifiedCustomFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('unified_custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $unifiedCustomFields = null;

    /**
     * Candidate name
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * Candidate first name
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * Candidate last name
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * Candidate email
     *
     * @var ?string $email
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('email')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $email = null;

    /**
     * List of candidate emails
     *
     * @var ?array<CandidateEmail> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CandidateEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * List of candidate social links
     *
     * @var ?array<SocialLink> $socialLinks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('social_links')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\SocialLink>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $socialLinks = null;

    /**
     * Candidate phone number
     *
     * @var ?string $phone
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $phone = null;

    /**
     * List of candidate phone numbers including the type of the number when available
     *
     * @var ?array<PhoneNumber> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\PhoneNumber>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * Candidate company
     *
     * @var ?string $company
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $company = null;

    /**
     * Candidate title
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * List of candidate application IDs
     *
     * @var ?array<string> $applicationIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('application_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $applicationIds = null;

    /**
     * Candidate hired date
     *
     * @var ?\DateTime $hiredAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hired_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $hiredAt = null;

    /**
     * Candidate country
     *
     * @var ?string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $country = null;

    /**
     * The candidate custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $name
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $email
     * @param  ?array<CandidateEmail>  $emails
     * @param  ?array<SocialLink>  $socialLinks
     * @param  ?string  $phone
     * @param  ?array<PhoneNumber>  $phoneNumbers
     * @param  ?string  $company
     * @param  ?string  $title
     * @param  ?array<string>  $applicationIds
     * @param  ?\DateTime  $hiredAt
     * @param  ?string  $country
     * @param  ?array<CustomFields>  $customFields
     * @phpstan-pure
     */
    public function __construct(?array $passthrough = null, ?array $unifiedCustomFields = null, ?string $name = null, ?string $firstName = null, ?string $lastName = null, ?string $email = null, ?array $emails = null, ?array $socialLinks = null, ?string $phone = null, ?array $phoneNumbers = null, ?string $company = null, ?string $title = null, ?array $applicationIds = null, ?\DateTime $hiredAt = null, ?string $country = null, ?array $customFields = null)
    {
        $this->passthrough = $passthrough;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->name = $name;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->emails = $emails;
        $this->socialLinks = $socialLinks;
        $this->phone = $phone;
        $this->phoneNumbers = $phoneNumbers;
        $this->company = $company;
        $this->title = $title;
        $this->applicationIds = $applicationIds;
        $this->hiredAt = $hiredAt;
        $this->country = $country;
        $this->customFields = $customFields;
    }
}