<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class CrmCreateContactRequestDto
{
    /**
     * The contact first name
     *
     * @var ?string $firstName
     */
    #[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The contact last name
     *
     * @var ?string $lastName
     */
    #[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The contact company name
     *
     * @var ?string $companyName
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * List of contact email addresses
     *
     * @var ?array<string> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * List of contact phone numbers
     *
     * @var ?array<string> $phoneNumbers
     */
    #[\JMS\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * List of associated deal IDs
     *
     * @var ?array<string> $dealIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('deal_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     * List of associated account IDs
     *
     * @var ?array<string> $accountIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('account_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $accountIds = null;

    /**
     * Contact custom fields
     *
     * @var ?array<ContactsCustomFields> $customFields
     */
    #[\JMS\Serializer\Annotation\SerializedName('custom_fields')]
    #[\JMS\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\ContactsCustomFields>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

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
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $companyName
     * @param  ?array<string>  $emails
     * @param  ?array<string>  $phoneNumbers
     * @param  ?array<string>  $dealIds
     * @param  ?array<string>  $accountIds
     * @param  ?array<ContactsCustomFields>  $customFields
     * @param  ?array<string, mixed>  $passthrough
     */
    public function __construct(?string $firstName = null, ?string $lastName = null, ?string $companyName = null, ?array $emails = null, ?array $phoneNumbers = null, ?array $dealIds = null, ?array $accountIds = null, ?array $customFields = null, ?array $passthrough = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->companyName = $companyName;
        $this->emails = $emails;
        $this->phoneNumbers = $phoneNumbers;
        $this->dealIds = $dealIds;
        $this->accountIds = $accountIds;
        $this->customFields = $customFields;
        $this->passthrough = $passthrough;
    }
}