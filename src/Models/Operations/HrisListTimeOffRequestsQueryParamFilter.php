<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** HrisListTimeOffRequestsQueryParamFilter - HRIS Time Off filters */
class HrisListTimeOffRequestsQueryParamFilter
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
     * @var ?array<string> $typeIds
     */
    #[SpeakeasyMetadata('queryParam:name=type_ids')]
    public ?array $typeIds = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?array<string>  $typeIds
     * @phpstan-pure
     */
    public function __construct(?string $updatedAfter = null, ?array $typeIds = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->typeIds = $typeIds;
    }
}