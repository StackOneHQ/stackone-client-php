<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
class HrisListCostCenterGroupsResponse
{
    /**
     * HTTP response content type for this operation
     *
     * @var string $contentType
     */
    public string $contentType;

    /**
     * HTTP response status code for this operation
     *
     * @var int $statusCode
     */
    public int $statusCode;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var \Psr\Http\Message\ResponseInterface $rawResponse
     */
    public \Psr\Http\Message\ResponseInterface $rawResponse;

    /**
     * $headers
     *
     * @var array<string, array<string>> $headers
     */
    public array $headers;

    /**
     * The list of cost center groups was retrieved.
     *
     * @var ?Components\HRISCostCenterPaginated $hrisCostCenterPaginated
     */
    public ?Components\HRISCostCenterPaginated $hrisCostCenterPaginated = null;

    /**
     * @var \Closure(string): ?HrisListCostCenterGroupsResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  array<string, array<string>>  $headers
     * @param  ?Components\HRISCostCenterPaginated  $hrisCostCenterPaginated
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\HRISCostCenterPaginated $hrisCostCenterPaginated = null, ?array $headers = [])
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->headers = $headers;
        $this->hrisCostCenterPaginated = $hrisCostCenterPaginated;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?HrisListCostCenterGroupsResponse
     */
    public function __call($name, $args): ?HrisListCostCenterGroupsResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}