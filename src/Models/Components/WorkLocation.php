<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** WorkLocation - The employee work location */
class WorkLocation
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
     * The employee ID
     *
     * @var ?string $employeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeId = null;

    /**
     * Provider's unique identifier of the employee
     *
     * @var ?string $remoteEmployeeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('remote_employee_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $remoteEmployeeId = null;

    /**
     * The name of the location
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The phone number of the location
     *
     * @var ?string $phoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $phoneNumber = null;

    /**
     * The first line of the address
     *
     * @var ?string $street1
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('street_1')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $street1 = null;

    /**
     * The second line of the address
     *
     * @var ?string $street2
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('street_2')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $street2 = null;

    /**
     * The city where the location is situated
     *
     * @var ?string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $city = null;

    /**
     * The state where the location is situated
     *
     * @var ?string $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $state = null;

    /**
     * The ZIP code/Postal code of the location
     *
     * @var ?string $zipCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('zip_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $zipCode = null;

    /**
     * The country code
     *
     * @var ?EmployeeCountry $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeCountry|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeCountry $country = null;

    /**
     * The location type
     *
     * @var ?EmployeeLocationType $locationType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeLocationType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeLocationType $locationType = null;

    /**
     * The created_at date
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The updated_at date
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
     * @param  ?string  $employeeId
     * @param  ?string  $remoteEmployeeId
     * @param  ?string  $name
     * @param  ?string  $phoneNumber
     * @param  ?string  $street1
     * @param  ?string  $street2
     * @param  ?string  $city
     * @param  ?string  $state
     * @param  ?string  $zipCode
     * @param  ?EmployeeCountry  $country
     * @param  ?EmployeeLocationType  $locationType
     * @param  ?\DateTime  $createdAt
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $id = null, ?string $remoteId = null, ?array $unifiedCustomFields = null, ?string $employeeId = null, ?string $remoteEmployeeId = null, ?string $name = null, ?string $phoneNumber = null, ?string $street1 = null, ?string $street2 = null, ?string $city = null, ?string $state = null, ?string $zipCode = null, ?EmployeeCountry $country = null, ?EmployeeLocationType $locationType = null, ?\DateTime $createdAt = null, ?\DateTime $updatedAt = null)
    {
        $this->id = $id;
        $this->remoteId = $remoteId;
        $this->unifiedCustomFields = $unifiedCustomFields;
        $this->employeeId = $employeeId;
        $this->remoteEmployeeId = $remoteEmployeeId;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->country = $country;
        $this->locationType = $locationType;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}