<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the rejected reason. */
enum RejectedReasonValue: string
{
    case RejectedByCandidate = 'rejected_by_candidate';
    case RejectedByOrganization = 'rejected_by_organization';
    case Other = 'other';
    case Unknown = 'unknown';
    case UnmappedValue = 'unmapped_value';
}
