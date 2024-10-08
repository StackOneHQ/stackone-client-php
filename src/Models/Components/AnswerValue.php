<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the answer. */
enum AnswerValue: string
{
    case ShortText = 'short_text';
    case LongText = 'long_text';
    case Attachment = 'attachment';
    case MultiSelect = 'multi_select';
    case SingleSelect = 'single_select';
    case Boolean = 'boolean';
    case Number = 'number';
    case Date = 'date';
    case Video = 'video';
}
