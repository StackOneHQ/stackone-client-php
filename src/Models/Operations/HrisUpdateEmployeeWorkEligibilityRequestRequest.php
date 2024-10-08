<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class HrisUpdateEmployeeWorkEligibilityRequestRequest
{
    /**
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var string $subResourceId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=subResourceId')]
    public string $subResourceId;

    /**
     * The account identifier
     *
     * @var string $xAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-account-id')]
    public string $xAccountId;

    /**
     *
     * @var Components\HrisCreateWorkEligibilityRequestDto $hrisCreateWorkEligibilityRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\HrisCreateWorkEligibilityRequestDto $hrisCreateWorkEligibilityRequestDto;

    /**
     * @param  string  $id
     * @param  string  $subResourceId
     * @param  string  $xAccountId
     * @param  Components\HrisCreateWorkEligibilityRequestDto  $hrisCreateWorkEligibilityRequestDto
     */
    public function __construct(string $id, string $subResourceId, string $xAccountId, Components\HrisCreateWorkEligibilityRequestDto $hrisCreateWorkEligibilityRequestDto)
    {
        $this->id = $id;
        $this->subResourceId = $subResourceId;
        $this->xAccountId = $xAccountId;
        $this->hrisCreateWorkEligibilityRequestDto = $hrisCreateWorkEligibilityRequestDto;
    }
}