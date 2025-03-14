<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The status of the offer. */
enum AtsCreateOfferRequestDtoValue: string
{
    case Pending = 'pending';
    case Retracted = 'retracted';
    case Accepted = 'accepted';
    case Rejected = 'rejected';
    case Created = 'created';
    case Approved = 'approved';
    case NotApproved = 'not_approved';
    case UnmappedValue = 'unmapped_value';
}
