<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class CrmUpdateContactRequest
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
     * @var Components\CrmCreateContactRequestDto $crmCreateContactRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CrmCreateContactRequestDto $crmCreateContactRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  string  $id
     * @param  Components\CrmCreateContactRequestDto  $crmCreateContactRequestDto
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, string $id, Components\CrmCreateContactRequestDto $crmCreateContactRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->crmCreateContactRequestDto = $crmCreateContactRequestDto;
    }
}