<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** AtsListJobsQueryParamFilter - ATS Jobs filters */
class AtsListJobsQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * The status of the job
     *
     * @var ?Status $status
     */
    #[SpeakeasyMetadata('queryParam:name=status')]
    public ?Status $status = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?Status  $status
     */
    public function __construct(?string $updatedAfter = null, ?Status $status = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->status = $status;
    }
}