<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class HrisCreateEmployeeRequest
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
     * @var Components\HrisCreateEmployeeRequestDto $hrisCreateEmployeeRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\HrisCreateEmployeeRequestDto $hrisCreateEmployeeRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  Components\HrisCreateEmployeeRequestDto  $hrisCreateEmployeeRequestDto
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, Components\HrisCreateEmployeeRequestDto $hrisCreateEmployeeRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->hrisCreateEmployeeRequestDto = $hrisCreateEmployeeRequestDto;
    }
}