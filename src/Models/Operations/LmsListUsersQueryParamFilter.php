<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** LmsListUsersQueryParamFilter - LMS Users Filter */
class LmsListUsersQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * Filter to select users by email
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:name=email')]
    public ?string $email = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?string  $email
     */
    public function __construct(?string $updatedAfter = null, ?string $email = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->email = $email;
    }
}