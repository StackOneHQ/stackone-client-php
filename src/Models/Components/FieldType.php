<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the field */
enum FieldType: string
{
    case ShortText = 'short_text';
    case LongText = 'long_text';
    case MultiSelect = 'multi_select';
    case SingleSelect = 'single_select';
    case Boolean = 'boolean';
    case Number = 'number';
    case Date = 'date';
    case Phone = 'phone';
    case Email = 'email';
    case Score = 'score';
    case Location = 'location';
    case UnmappedValue = 'unmapped_value';
}
