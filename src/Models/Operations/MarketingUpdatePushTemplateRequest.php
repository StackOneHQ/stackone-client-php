<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class MarketingUpdatePushTemplateRequest
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
     * @var Components\MarketingCreatePushTemplateRequestDto $marketingCreatePushTemplateRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\MarketingCreatePushTemplateRequestDto $marketingCreatePushTemplateRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  string  $id
     * @param  Components\MarketingCreatePushTemplateRequestDto  $marketingCreatePushTemplateRequestDto
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, string $id, Components\MarketingCreatePushTemplateRequestDto $marketingCreatePushTemplateRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->marketingCreatePushTemplateRequestDto = $marketingCreatePushTemplateRequestDto;
    }
}