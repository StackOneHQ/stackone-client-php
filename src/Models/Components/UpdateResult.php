<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client\Models\Components;


class UpdateResult
{
    /**
     *
     * @var float $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statusCode')]
    public float $statusCode;

    /**
     *
     * @var string $message
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('message')]
    public string $message;

    /**
     *
     * @var \DateTime $timestamp
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timestamp')]
    public \DateTime $timestamp;

    /**
     * @param  float  $statusCode
     * @param  string  $message
     * @param  \DateTime  $timestamp
     */
    public function __construct(float $statusCode, string $message, \DateTime $timestamp)
    {
        $this->statusCode = $statusCode;
        $this->message = $message;
        $this->timestamp = $timestamp;
    }
}