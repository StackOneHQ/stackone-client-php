<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** HrisListEmployeeTimeOffRequestsQueryParamFilter - HRIS Time Off filters */
class HrisListEmployeeTimeOffRequestsQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * List of time off type ids to filter by.
     *
     * @var ?array<string> $type
     */
    #[SpeakeasyMetadata('queryParam:name=type')]
    public ?array $type = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?array<string>  $type
     */
    public function __construct(?string $updatedAfter = null, ?array $type = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->type = $type;
    }
}