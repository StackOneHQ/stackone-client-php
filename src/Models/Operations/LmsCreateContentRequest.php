<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class LmsCreateContentRequest
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
     * @var Components\LmsCreateContentRequestDto $lmsCreateContentRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\LmsCreateContentRequestDto $lmsCreateContentRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  Components\LmsCreateContentRequestDto  $lmsCreateContentRequestDto
     */
    public function __construct(string $xAccountId, Components\LmsCreateContentRequestDto $lmsCreateContentRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->lmsCreateContentRequestDto = $lmsCreateContentRequestDto;
    }
}