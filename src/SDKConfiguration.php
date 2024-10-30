<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Components\Security $security = null;

    /** @var pure-Closure(): Models\Components\Security */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '1.0.0';

    public string $sdkVersion = '0.21.0';

    public string $genVersion = '2.436.1';

    public string $userAgent = 'speakeasy-sdk/php 0.21.0 2.436.1 1.0.0 stackone/client-sdk';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        return StackOne::SERVERS[$this->serverIndex];
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        if ($this->securitySource !== null) {
            $security = $this->securitySource->call($this);

            return $security;
        } else {
            return $this->security;
        }
    }
}