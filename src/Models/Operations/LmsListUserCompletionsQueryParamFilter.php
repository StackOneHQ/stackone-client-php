<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** LmsListUserCompletionsQueryParamFilter - LMS Completions Filter */
class LmsListUserCompletionsQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * Filter to select completions by learning object type.
     *
     * @var ?string $learningObjectType
     */
    #[SpeakeasyMetadata('queryParam:name=learning_object_type')]
    public ?string $learningObjectType = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?string  $learningObjectType
     */
    public function __construct(?string $updatedAfter = null, ?string $learningObjectType = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->learningObjectType = $learningObjectType;
    }
}