<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace StackOne\client\Hooks;

use Psr\Http\Message\RequestInterface;

interface BeforeRequestHook
{
    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface;
}
