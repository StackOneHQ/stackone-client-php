<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The pay frequency of the job postings. */
enum UpdateEmployeeApiModelEmploymentPayFrequencyValue: string
{
    case Hourly = 'hourly';
    case Weekly = 'weekly';
    case BiWeekly = 'bi_weekly';
    case FourWeekly = 'four_weekly';
    case SemiMonthly = 'semi_monthly';
    case Monthly = 'monthly';
    case BiMonthly = 'bi_monthly';
    case Quarterly = 'quarterly';
    case SemiAnnually = 'semi_annually';
    case Yearly = 'yearly';
    case ThirteenMonthly = 'thirteen_monthly';
    case ProRata = 'pro_rata';
    case UnmappedValue = 'unmapped_value';
    case HalfYearly = 'half_yearly';
    case Daily = 'daily';
}
