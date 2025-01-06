<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class LmsListUserAssignmentsRequest
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
     * Query parameters that can be used to pass through parameters to the underlying provider request by surrounding them with 'proxy' key
     *
     * @var ?array<string, mixed> $proxy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=proxy')]
    public ?array $proxy = null;

    /**
     * The comma separated list of fields that will be returned in the response (if empty, all fields are returned)
     *
     * @var ?string $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?string $fields = null;

    /**
     * LMS Assignment Filter
     *
     * @var ?LmsListUserAssignmentsQueryParamFilter $filter
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter')]
    public ?LmsListUserAssignmentsQueryParamFilter $filter = null;

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
     * The user ID associated with this assignment
     *
     * @var ?string $userId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=user_id')]
    public ?string $userId = null;

    /**
     * Provider's unique identifier of the user related to the assignment
     *
     * @var ?string $remoteUserId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=remote_user_id')]
    public ?string $remoteUserId = null;

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
     * @param  string  $id
     * @param  ?bool  $raw
     * @param  ?array<string, mixed>  $proxy
     * @param  ?string  $fields
     * @param  ?LmsListUserAssignmentsQueryParamFilter  $filter
     * @param  ?string  $page
     * @param  ?string  $pageSize
     * @param  ?string  $next
     * @param  ?string  $updatedAfter
     * @param  ?string  $userId
     * @param  ?string  $remoteUserId
     */
    public function __construct(string $xAccountId, string $id, ?array $proxy = null, ?string $fields = null, ?LmsListUserAssignmentsQueryParamFilter $filter = null, ?string $page = null, ?string $next = null, ?string $updatedAfter = null, ?string $userId = null, ?string $remoteUserId = null, ?bool $raw = false, ?string $pageSize = '25')
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->proxy = $proxy;
        $this->fields = $fields;
        $this->filter = $filter;
        $this->page = $page;
        $this->next = $next;
        $this->updatedAfter = $updatedAfter;
        $this->userId = $userId;
        $this->remoteUserId = $remoteUserId;
        $this->raw = $raw;
        $this->pageSize = $pageSize;
    }
}