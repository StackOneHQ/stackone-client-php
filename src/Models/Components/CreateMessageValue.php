<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


/** The unified message type. */
enum CreateMessageValue: string
{
    case Email = 'email';
    case Sms = 'sms';
    case Push = 'push';
    case WebPush = 'web_push';
    case IosPush = 'ios_push';
    case AndroidPush = 'android_push';
    case AppPush = 'app_push';
    case OmniChannel = 'omni_channel';
    case ContentBlock = 'content_block';
    case InApp = 'in_app';
    case Unknown = 'unknown';
    case UnmappedValue = 'unmapped_value';
}
