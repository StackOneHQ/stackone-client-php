<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The status of the application. */
enum AtsCreateBackgroundCheckOrderRequestDtoValue: string
{
    case Active = 'active';
    case Assessment = 'assessment';
    case BackgroundCheck = 'background_check';
    case Converted = 'converted';
    case DeclinedByCandidate = 'declined_by_candidate';
    case Hired = 'hired';
    case Interview = 'interview';
    case Lead = 'lead';
    case Offer = 'offer';
    case ReferenceCheck = 'reference_check';
    case Rejected = 'rejected';
    case Review = 'review';
    case Screen = 'screen';
    case New = 'new';
    case Onboarding = 'onboarding';
    case Created = 'created';
    case Accepted = 'accepted';
    case ShortList = 'short_list';
    case Approved = 'approved';
    case UnmappedValue = 'unmapped_value';
}
