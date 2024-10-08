<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class StackoneListLinkedAccountsRequest
{
    /**
     * The page number of the results to fetch
     *
     * @var ?float $page
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?float $page = null;

    /**
     * The number of results per page
     *
     * @var ?float $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_size')]
    public ?float $pageSize = null;

    /**
     * The provider of the results to fetch
     *
     * @var ?string $provider
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=provider')]
    public ?string $provider = null;

    /**
     * The origin owner identifier of the results to fetch
     *
     * @var ?string $originOwnerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=origin_owner_id')]
    public ?string $originOwnerId = null;

    /**
     * The providers list of the results to fetch
     *
     * @var ?array<string> $providers
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=providers')]
    public ?array $providers = null;

    /**
     * The providers list of the results to fetch
     *
     * @var ?array<string> $accountIds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=account_ids')]
    public ?array $accountIds = null;

    /**
     * @param  ?array<string>  $providers
     * @param  ?array<string>  $accountIds
     * @param  ?float  $page
     * @param  ?float  $pageSize
     * @param  ?string  $provider
     * @param  ?string  $originOwnerId
     */
    public function __construct(?array $providers = null, ?array $accountIds = null, ?float $page = null, ?string $provider = null, ?string $originOwnerId = null, ?float $pageSize = 25)
    {
        $this->providers = $providers;
        $this->accountIds = $accountIds;
        $this->page = $page;
        $this->pageSize = $pageSize;
        $this->provider = $provider;
        $this->originOwnerId = $originOwnerId;
    }
}