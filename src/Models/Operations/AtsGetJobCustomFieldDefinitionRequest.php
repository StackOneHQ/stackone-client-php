<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class AtsGetJobCustomFieldDefinitionRequest
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
     * Filter parameters that allow greater customisation of the list response
     *
     * @var ?AtsGetJobCustomFieldDefinitionQueryParamFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=deepObject,explode=true,name=filter')]
    public ?AtsGetJobCustomFieldDefinitionQueryParamFilter $filter = null;

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
     * @param  string  $xAccountId
     * @param  string  $id
     * @param  ?bool  $raw
     * @param  ?array<string, mixed>  $proxy
     * @param  ?string  $fields
     * @param  ?AtsGetJobCustomFieldDefinitionQueryParamFilter  $filter
     * @param  ?string  $page
     * @param  ?string  $pageSize
     * @param  ?string  $next
     * @param  ?string  $updatedAfter
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, string $id, ?bool $raw = null, ?array $proxy = null, ?string $fields = null, ?AtsGetJobCustomFieldDefinitionQueryParamFilter $filter = null, ?string $page = null, ?string $pageSize = null, ?string $next = null, ?string $updatedAfter = null)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->raw = $raw;
        $this->proxy = $proxy;
        $this->fields = $fields;
        $this->filter = $filter;
        $this->page = $page;
        $this->pageSize = $pageSize;
        $this->next = $next;
        $this->updatedAfter = $updatedAfter;
    }
}