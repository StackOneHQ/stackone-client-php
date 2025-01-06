<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class AtsListLocationsRequest
{
    /**
     * The account identifier
     *
     * @var string $xAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-account-id')]
    public string $xAccountId;

    /**
     * Query parameters that can be used to pass through parameters to the underlying provider request by surrounding them with 'proxy' key
     *
     * @var ?array<string, mixed> $proxy
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=proxy')]
    public ?array $proxy = null;

    /**
     * The comma separated list of fields that will be returned in the response (if empty, all fields are returned)
     *
     * @var ?string $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?string $fields = null;

    /**
     * Filter parameters that allow greater customisation of the list response
     *
     * @var ?AtsListLocationsQueryParamFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?AtsListLocationsQueryParamFilter $filter = null;

    /**
     * The page number of the results to fetch
     *
     * @var ?string $page
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?string $page = null;

    /**
     * The unified cursor
     *
     * @var ?string $next
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=next')]
    public ?string $next = null;

    /**
     * Use a string with a date to only select results updated after that given date
     *
     * @var ?string $updatedAfter
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=updated_after')]
    public ?string $updatedAfter = null;

    /**
     * The sync token to select the only updated results
     *
     * @var ?string $syncToken
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sync_token')]
    public ?string $syncToken = null;

    /**
     * Indicates that the raw request result is returned
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

    /**
     * The number of results per page
     *
     * @var ?string $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_size')]
    public ?string $pageSize = null;

    /**
     * @param  string  $xAccountId
     * @param  ?bool  $raw
     * @param  ?array<string, mixed>  $proxy
     * @param  ?string  $fields
     * @param  ?AtsListLocationsQueryParamFilter  $filter
     * @param  ?string  $page
     * @param  ?string  $pageSize
     * @param  ?string  $next
     * @param  ?string  $updatedAfter
     * @param  ?string  $syncToken
     */
    public function __construct(string $xAccountId, ?array $proxy = null, ?string $fields = null, ?AtsListLocationsQueryParamFilter $filter = null, ?string $page = null, ?string $next = null, ?string $updatedAfter = null, ?string $syncToken = null, ?bool $raw = false, ?string $pageSize = '25')
    {
        $this->xAccountId = $xAccountId;
        $this->proxy = $proxy;
        $this->fields = $fields;
        $this->filter = $filter;
        $this->page = $page;
        $this->next = $next;
        $this->updatedAfter = $updatedAfter;
        $this->syncToken = $syncToken;
        $this->raw = $raw;
        $this->pageSize = $pageSize;
    }
}