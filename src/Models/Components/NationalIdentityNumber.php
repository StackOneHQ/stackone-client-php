<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** NationalIdentityNumber - The national identity number */
class NationalIdentityNumber
{
    /**
     *
     * @var ?string $value
     */
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     *
     * @var ?EmployeeType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeType|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeType $type = null;

    /**
     * The country code
     *
     * @var ?EmployeeNationalIdentityNumberCountry $country
     */
    #[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('\StackOne\client\Models\Components\EmployeeNationalIdentityNumberCountry|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?EmployeeNationalIdentityNumberCountry $country = null;

    /**
     * @param  ?string  $value
     * @param  ?EmployeeType  $type
     * @param  ?EmployeeNationalIdentityNumberCountry  $country
     */
    public function __construct(?string $value = null, ?EmployeeType $type = null, ?EmployeeNationalIdentityNumberCountry $country = null)
    {
        $this->value = $value;
        $this->type = $type;
        $this->country = $country;
    }
}