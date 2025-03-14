<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The unified value for the duration unit. If the provider does not specify this unit, the value will be set to unknown */
enum TimeOffBalancesValue: string
{
    case Minutes = 'minutes';
    case Hours = 'hours';
    case Days = 'days';
    case Weeks = 'weeks';
    case Months = 'months';
    case Years = 'years';
    case Unknown = 'unknown';
}
