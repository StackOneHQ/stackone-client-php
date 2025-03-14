<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class AtsListJobsRequest
{
    /**
     * The account identifier
     *
     * @var string $xAccountId
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-account-id')]
    public string $xAccountId;

    /**
     * Indicates that the raw request result should be returned in addition to the mapped result (default value is false)
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

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
     * ATS Jobs filters
     *
     * @var ?AtsListJobsQueryParamFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?AtsListJobsQueryParamFilter $filter = null;

    /**
     * The page number of the results to fetch
     *
     * @var ?string $page
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?string $page = null;

    /**
     * The number of results per page (default value is 25)
     *
     * @var ?string $pageSize
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_size')]
    public ?string $pageSize = null;

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
     * The comma separated list of fields that will be expanded in the response
     *
     * @var ?string $expand
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=expand')]
    public ?string $expand = null;

    /**
     * The comma separated list of fields that will be included in the response
     *
     * @var ?string $include
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=include')]
    public ?string $include = null;

    /**
     * @param  string  $xAccountId
     * @param  ?bool  $raw
     * @param  ?array<string, mixed>  $proxy
     * @param  ?string  $fields
     * @param  ?AtsListJobsQueryParamFilter  $filter
     * @param  ?string  $page
     * @param  ?string  $pageSize
     * @param  ?string  $next
     * @param  ?string  $updatedAfter
     * @param  ?string  $syncToken
     * @param  ?string  $expand
     * @param  ?string  $include
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, ?bool $raw = null, ?array $proxy = null, ?string $fields = null, ?AtsListJobsQueryParamFilter $filter = null, ?string $page = null, ?string $pageSize = null, ?string $next = null, ?string $updatedAfter = null, ?string $syncToken = null, ?string $expand = null, ?string $include = null)
    {
        $this->xAccountId = $xAccountId;
        $this->raw = $raw;
        $this->proxy = $proxy;
        $this->fields = $fields;
        $this->filter = $filter;
        $this->page = $page;
        $this->pageSize = $pageSize;
        $this->next = $next;
        $this->updatedAfter = $updatedAfter;
        $this->syncToken = $syncToken;
        $this->expand = $expand;
        $this->include = $include;
    }
}