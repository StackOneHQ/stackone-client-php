<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The type of the content blocks. */
enum ContentBlockValue: string
{
    case Text = 'text';
    case Html = 'html';
    case Image = 'image';
    case CodeSnippet = 'code-snippet';
}
