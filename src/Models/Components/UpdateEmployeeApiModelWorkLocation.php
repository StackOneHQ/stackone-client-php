<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** UpdateEmployeeApiModelWorkLocation - The employee work location */
class UpdateEmployeeApiModelWorkLocation
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
     * @var ?UpdateEmployeeApiModelWorkLocationCountry $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelWorkLocationCountry|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelWorkLocationCountry $country = null;

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
     * The ISO3166-2 sub division where the location is situated
     *
     * @var ?UpdateEmployeeApiModelWorkLocationState $state
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('state')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\UpdateEmployeeApiModelWorkLocationState|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UpdateEmployeeApiModelWorkLocationState $state = null;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $phoneNumber
     * @param  ?string  $street1
     * @param  ?string  $street2
     * @param  ?string  $city
     * @param  ?string  $zipCode
     * @param  ?UpdateEmployeeApiModelWorkLocationCountry  $country
     * @param  ?array<string, mixed>  $passthrough
     * @param  ?UpdateEmployeeApiModelWorkLocationState  $state
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $phoneNumber = null, ?string $street1 = null, ?string $street2 = null, ?string $city = null, ?string $zipCode = null, ?UpdateEmployeeApiModelWorkLocationCountry $country = null, ?array $passthrough = null, ?UpdateEmployeeApiModelWorkLocationState $state = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->city = $city;
        $this->zipCode = $zipCode;
        $this->country = $country;
        $this->passthrough = $passthrough;
        $this->state = $state;
    }
}