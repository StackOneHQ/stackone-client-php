<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/**
 * HrisCreateEmployeeRequestDtoNationalIdentityNumber - The national identity number
 *
 * @deprecated  class: This will be removed in a future release, please migrate away from it as soon as possible.
 */
class HrisCreateEmployeeRequestDtoNationalIdentityNumber
{
    /**
     *
     * @var ?string $value
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('value')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $value = null;

    /**
     *
     * @var ?HrisCreateEmployeeRequestDtoType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoType $type = null;

    /**
     * The country code
     *
     * @var ?HrisCreateEmployeeRequestDtoCountry $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    #[\Speakeasy\Serializer\Annotation\Type('\StackOne\client\Models\Components\HrisCreateEmployeeRequestDtoCountry|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisCreateEmployeeRequestDtoCountry $country = null;

    /**
     * @param  ?string  $value
     * @param  ?HrisCreateEmployeeRequestDtoType  $type
     * @param  ?HrisCreateEmployeeRequestDtoCountry  $country
     * @phpstan-pure
     */
    public function __construct(?string $value = null, ?HrisCreateEmployeeRequestDtoType $type = null, ?HrisCreateEmployeeRequestDtoCountry $country = null)
    {
        $this->value = $value;
        $this->type = $type;
        $this->country = $country;
    }
}