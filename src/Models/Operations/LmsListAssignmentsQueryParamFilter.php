<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
/** LmsListAssignmentsQueryParamFilter - LMS Assignment Filter */
class LmsListAssignmentsQueryParamFilter
{
    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     */
    #[SpeakeasyMetadata('queryParam:name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * Filter to select assignment by status
     *
     * @var ?LmsListAssignmentsQueryParamStatus $status
     */
    #[SpeakeasyMetadata('queryParam:name=status')]
    public ?LmsListAssignmentsQueryParamStatus $status = null;

    /**
     * Filter to select assignment by learning object type.
     *
     * @var ?LmsListAssignmentsQueryParamLearningObjectType $learningObjectType
     */
    #[SpeakeasyMetadata('queryParam:name=learning_object_type')]
    public ?LmsListAssignmentsQueryParamLearningObjectType $learningObjectType = null;

    /**
     * @param  ?string  $updatedAfter
     * @param  ?LmsListAssignmentsQueryParamStatus  $status
     * @param  ?LmsListAssignmentsQueryParamLearningObjectType  $learningObjectType
     */
    public function __construct(?string $updatedAfter = null, ?LmsListAssignmentsQueryParamStatus $status = null, ?LmsListAssignmentsQueryParamLearningObjectType $learningObjectType = null)
    {
        $this->updatedAfter = $updatedAfter;
        $this->status = $status;
        $this->learningObjectType = $learningObjectType;
    }
}