<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The status of the user, e.g. whether the user is enabled, has been disabled (eg. by an admin), or is pending (ie: awaiting approval by the user or an admin). */
enum IamUserValue: string
{
    case Enabled = 'enabled';
    case Disabled = 'disabled';
    case Pending = 'pending';
    case UnmappedValue = 'unmapped_value';
}
