<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class Contact
{
    /**
     * Unique identifier
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * Provider's unique identifier
     *
     * @var ?string $remoteId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteId = null;

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
     * The contact first name
     *
     * @var ?string $firstName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('first_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $firstName = null;

    /**
     * The contact last name
     *
     * @var ?string $lastName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('last_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $lastName = null;

    /**
     * The contact company name
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     * List of contact email addresses
     *
     * @var ?array<string> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     * List of contact phone numbers
     *
     * @var ?array<string> $phoneNumbers
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_numbers')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $phoneNumbers = null;

    /**
     * List of associated deal IDs
     *
     * @var ?array<string> $dealIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deal_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $dealIds = null;

    /**
     * Provider's list of associated deal IDs
     *
     * @var ?array<string> $remoteDealIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_deal_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteDealIds = null;

    /**
     * List of associated account IDs
     *
     * @var ?array<string> $accountIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $accountIds = null;

    /**
     * Provider's list of associated account IDs
     *
     * @var ?array<string> $remoteAccountIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_account_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $remoteAccountIds = null;

    /**
     * Contact custom fields
     *
     * @var ?array<CustomFields> $customFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('custom_fields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\StackOne\client\Models\Components\CustomFields>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $customFields = null;

    /**
     * Timestamp when the contact was created
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * Timestamp when the contact was last updated
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $remoteId
     * @param  ?array<string, mixed>  $unifiedCustomFields
     * @param  ?string  $firstName
     * @param  ?string  $lastName
     * @param  ?string  $companyName
     * @param  ?array<string>  $emails
     * @param  ?array<string>  $phoneNumbers
     * @param  ?array<string>  $dealIds
     * @param  ?array<string>  $remoteDealIds
     * @param  ?array<string>  $accountIds
     * @param  ?array<string>  $remoteAccountIds
     * @param  ?array<CustomFields>  $customFields
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $firstName = null, ?string $lastName = null, ?string $companyName = null, ?array $emails = null, ?array $phoneNumbers = null, ?array $dealIds = null, ?array $remoteDealIds = null, ?array $accountIds = null, ?array $remoteAccountIds = null, ?array $customFields = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->companyName = $companyName;
        $this->emails = $emails;
        $this->phoneNumbers = $phoneNumbers;
        $this->dealIds = $dealIds;
        $this->remoteDealIds = $remoteDealIds;
        $this->accountIds = $accountIds;
        $this->remoteAccountIds = $remoteAccountIds;
        $this->customFields = $customFields;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}