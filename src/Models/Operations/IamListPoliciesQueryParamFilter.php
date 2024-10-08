<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** IamListPoliciesQueryParamFilter - Filter parameters that allow greater customisation of the list response */
class IamListPoliciesQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * @param  ?string  $updatedAfter
     */
    public function __construct(?string $updatedAfter = null)
    {
        $this->updatedAfter = $updatedAfter;
    }
}