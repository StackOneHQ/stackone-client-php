<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;


/** Filter to select assignment by learning object type. */
enum LearningObjectType: string
{
    case Content = 'content';
    case Course = 'course';
    case Collection = 'collection';
}