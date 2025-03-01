<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
use StackOne\client\Utils\SpeakeasyMetadata;
class AtsCreateJobRequest
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
     * @var Components\AtsCreateJobRequestDto $atsCreateJobRequestDto
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\AtsCreateJobRequestDto $atsCreateJobRequestDto;

    /**
     * @param  string  $xAccountId
     * @param  Components\AtsCreateJobRequestDto  $atsCreateJobRequestDto
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, Components\AtsCreateJobRequestDto $atsCreateJobRequestDto)
    {
        $this->xAccountId = $xAccountId;
        $this->atsCreateJobRequestDto = $atsCreateJobRequestDto;
    }
}