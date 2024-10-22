<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class CreateRequest
{
    /**
     * The account identifier
     *
     * @var string $xAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-account-id')]
    public string $xAccountId;

    /**
     *
     * @var float $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public float $id;

    /**
     * $requestBody
     *
     * @var array<Components\CreateEvent> $requestBody
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public array $requestBody;

    /**
     * @param  string  $xAccountId
     * @param  float  $id
     * @param  array<Components\CreateEvent>  $requestBody
     */
    public function __construct(string $xAccountId, float $id, array $requestBody)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->requestBody = $requestBody;
    }
}