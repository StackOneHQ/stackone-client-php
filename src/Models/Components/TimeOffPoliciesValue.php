<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The unified value for the type of the time off policy. If the provider does not specify this unit, the value will be set to unmapped_value */
enum TimeOffPoliciesValue: string
{
    case Paid = 'paid';
    case Unpaid = 'unpaid';
    case Holiday = 'holiday';
    case Vacation = 'vacation';
    case Sick = 'sick';
    case Personal = 'personal';
    case InLieu = 'in_lieu';
    case Bereavement = 'bereavement';
    case JuryDuty = 'jury_duty';
    case UnmappedValue = 'unmapped_value';
}
