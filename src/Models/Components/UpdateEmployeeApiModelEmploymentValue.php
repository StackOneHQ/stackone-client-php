<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The pay period of the job postings. */
enum UpdateEmployeeApiModelEmploymentValue: string
{
    case Hour = 'hour';
    case Day = 'day';
    case Week = 'week';
    case EveryTwoWeeks = 'every_two_weeks';
    case Month = 'month';
    case TwiceAMonth = 'twice_a_month';
    case EveryTwoMonths = 'every_two_months';
    case Quarter = 'quarter';
    case EverySixMonths = 'every_six_months';
    case Year = 'year';
    case OneOff = 'one_off';
    case None = 'none';
    case UnmappedValue = 'unmapped_value';
}
