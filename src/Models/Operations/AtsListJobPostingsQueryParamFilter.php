<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** AtsListJobPostingsQueryParamFilter - ATS Job Postings Filter */
class AtsListJobPostingsQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * Use a string with a date to only select results created after that given date
     *
     * @var ?string $createdAfter
     */
    #[SpeakeasyMetadata('queryParam:name=created_after')]
    public ?string $createdAfter = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?string  $createdAfter
     * @phpstan-pure
     */
    public function __construct(?string $updatedAfter = null, ?string $createdAfter = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->createdAfter = $createdAfter;
    }
}