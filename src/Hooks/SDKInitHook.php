<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace StackOne\client\Hooks;

interface SDKInitHook
{
    public function sdkInit(string $baseUrl, \GuzzleHttp\ClientInterface $client): SDKRequestContext;
}
