<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** HrisListTimeEntriesQueryParamFilter - HRIS Time Entries filters */
class HrisListTimeEntriesQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * Filter to select time entries by employee_id
     *
     * @var ?string $employeeId
     */
    #[SpeakeasyMetadata('queryParam:name=employee_id')]
    public ?string $employeeId = null;

    /**
     * Filter to select time entries after a given time
     *
     * @var ?string $startTime
     */
    #[SpeakeasyMetadata('queryParam:name=start_time')]
    public ?string $startTime = null;

    /**
     * Filter to select time entries before a given time
     *
     * @var ?string $endTime
     */
    #[SpeakeasyMetadata('queryParam:name=end_time')]
    public ?string $endTime = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?string  $employeeId
     * @param  ?string  $startTime
     * @param  ?string  $endTime
     * @phpstan-pure
     */
    public function __construct(?string $updatedAfter = null, ?string $employeeId = null, ?string $startTime = null, ?string $endTime = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->employeeId = $employeeId;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }
}