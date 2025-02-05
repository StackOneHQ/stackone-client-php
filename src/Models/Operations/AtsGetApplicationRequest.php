<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Utils\SpeakeasyMetadata;
class AtsGetApplicationRequest
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
     * Indicates that the raw request result is returned
     *
     * @var ?bool $raw
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=raw')]
    public ?bool $raw = null;

    /**
     * @param  string  $xAccountId
     * @param  string  $id
     * @param  ?bool  $raw
     * @param  ?array<string, mixed>  $proxy
     * @param  ?string  $fields
     * @param  ?string  $expand
     * @param  ?string  $include
     * @phpstan-pure
     */
    public function __construct(string $xAccountId, string $id, ?array $proxy = null, ?string $fields = null, ?string $expand = null, ?string $include = null, ?bool $raw = false)
    {
        $this->xAccountId = $xAccountId;
        $this->id = $id;
        $this->proxy = $proxy;
        $this->fields = $fields;
        $this->expand = $expand;
        $this->include = $include;
        $this->raw = $raw;
    }
}