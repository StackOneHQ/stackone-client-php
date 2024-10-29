<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class HrisCreateEmployeeEmploymentRequest
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
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var Components\HrisCreateEmploymentRequestDto $hrisCreateEmploymentRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\HrisCreateEmploymentRequestDto $hrisCreateEmploymentRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  string  $id
     * @param  Components\HrisCreateEmploymentRequestDto  $hrisCreateEmploymentRequestDto
     */
    public function __construct(string $xAccountId, string $id, Components\HrisCreateEmploymentRequestDto $hrisCreateEmploymentRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->hrisCreateEmploymentRequestDto = $hrisCreateEmploymentRequestDto;
    }
}