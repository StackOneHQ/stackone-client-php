<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace StackOne\client\Utils\Retry;

enum RetryStrategy: string
{
    case NONE = 'none';
    case BACKOFF = 'backoff';
}