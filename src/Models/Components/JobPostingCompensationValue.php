<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the compensation. */
enum JobPostingCompensationValue: string
{
    case Salary = 'salary';
    case Hourly = 'hourly';
    case Commission = 'commission';
    case Bonus = 'bonus';
    case Equity = 'equity';
    case Other = 'other';
    case UnmappedValue = 'unmapped_value';
}
