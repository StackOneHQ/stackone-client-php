<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Operations;

use StackOne\client\Models\Components;
class AtsGetApplicationDocumentResponse
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
     * The document related to the application with the given identifiers was retrieved.
     *
     * @var ?Components\AtsDocumentResult $atsDocumentResult
     */
    public ?Components\AtsDocumentResult $atsDocumentResult = null;

    /**
     * @param  string  $contentType
     * @param  int  $statusCode
     * @param  \Psr\Http\Message\ResponseInterface  $rawResponse
     * @param  ?Components\AtsDocumentResult  $atsDocumentResult
     */
    public function __construct(string $contentType, int $statusCode, \Psr\Http\Message\ResponseInterface $rawResponse, ?Components\AtsDocumentResult $atsDocumentResult = null)
    {
        $this->contentType = $contentType;
        $this->statusCode = $statusCode;
        $this->rawResponse = $rawResponse;
        $this->atsDocumentResult = $atsDocumentResult;
    }
}