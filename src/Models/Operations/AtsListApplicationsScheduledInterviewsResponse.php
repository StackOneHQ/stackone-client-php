<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
class AtsListApplicationsScheduledInterviewsResponse
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
     * The list of applications scheduled interviews was retrieved.
     *
     * @var ?Components\ScheduledInterviewsPaginated $scheduledInterviewsPaginated
     */
    public ?Components\ScheduledInterviewsPaginated $scheduledInterviewsPaginated = null;

    /**
     * @var \Closure(string): ?AtsListApplicationsScheduledInterviewsResponse $next
     */
    public \Closure $next;
    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  array<string, array<string>>  $headers
     * @param  ?Components\ScheduledInterviewsPaginated  $scheduledInterviewsPaginated
     * @phpstan-pure
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\ScheduledInterviewsPaginated $scheduledInterviewsPaginated = null, ?array $headers = [])
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->headers = $headers;
        $this->scheduledInterviewsPaginated = $scheduledInterviewsPaginated;
    }
    /**
     * @param  string  $name
     * @param  array<mixed>  $args
     * @return ?AtsListApplicationsScheduledInterviewsResponse
     */
    public function __call($name, $args): ?AtsListApplicationsScheduledInterviewsResponse
    {
        if ($name === 'next') {
            return call_user_func_array($this->next, $args);
        }

        return null;
    }
}