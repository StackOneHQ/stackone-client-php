<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client;

use Speakeasy\Serializer\DeserializationContext;
use StackOne\client\Hooks\HookContext;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;
use StackOne\client\Utils\Options;

class Webhooks
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * create
     *
     * @param  array<Components\CreateEvent>  $requestBody
     * @param  string  $xAccountId
     * @param  float  $id
     * @return Operations\CreateResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function create(array $requestBody, string $xAccountId, float $id, ?Options $options = null): Operations\CreateResponse
    {
        $request = new Operations\CreateRequest(
            xAccountId: $xAccountId,
            id: $id,
            requestBody: $requestBody,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/webhooks/{id}/events', Operations\CreateRequest::class, $request);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $httpOptions = array_merge_recursive($httpOptions, $body);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);
        $hookContext = new HookContext('create', null, $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 400 || $statusCode == 403 || $statusCode == 404 || $statusCode == 408 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            if ($res !== null) {
                $httpResponse = $res;
            }
        }
        if ($statusCode == 207) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\StackOne\client\Models\Components\CreateEventResponse>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CreateResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    createEventResponses: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 404 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif ($statusCode == 408) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}