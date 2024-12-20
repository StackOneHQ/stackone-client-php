<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace StackOne\client;

use Speakeasy\Serializer\DeserializationContext;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

class Crm
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
     * List Contacts
     *
     * @param  Operations\CrmListContactsRequest  $request
     * @return Operations\CrmListContactsResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function listContacts(Operations\CrmListContactsRequest $request): Operations\CrmListContactsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/contacts');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmListContactsRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ContactsPaginated', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmListContactsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    contactsPaginated: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Creates a new Contact
     *
     * @param  Components\CrmCreateContactRequestDto  $crmCreateContactRequestDto
     * @param  string  $xAccountId
     * @return Operations\CrmCreateContactResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function createContact(Components\CrmCreateContactRequestDto $crmCreateContactRequestDto, string $xAccountId): Operations\CrmCreateContactResponse
    {
        $request = new Operations\CrmCreateContactRequest(
            xAccountId: $xAccountId,
            crmCreateContactRequestDto: $crmCreateContactRequestDto,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/contacts');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmCreateContactRequestDto', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('POST', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ContactResult', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmCreateContactResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    contactResult: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Contact
     *
     * @param  Operations\CrmGetContactRequest  $request
     * @return Operations\CrmGetContactResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function getContact(Operations\CrmGetContactRequest $request): Operations\CrmGetContactResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/contacts/{id}', Operations\CrmGetContactRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmGetContactRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ContactResult', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmGetContactResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    contactResult: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Update Contact (early access)
     *
     * @param  Components\CrmCreateContactRequestDto  $crmCreateContactRequestDto
     * @param  string  $xAccountId
     * @param  string  $id
     * @return Operations\CrmUpdateContactResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function updateContact(Components\CrmCreateContactRequestDto $crmCreateContactRequestDto, string $xAccountId, string $id): Operations\CrmUpdateContactResponse
    {
        $request = new Operations\CrmUpdateContactRequest(
            xAccountId: $xAccountId,
            id: $id,
            crmCreateContactRequestDto: $crmCreateContactRequestDto,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/contacts/{id}', Operations\CrmUpdateContactRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'crmCreateContactRequestDto', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('PATCH', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ContactResult', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmUpdateContactResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    contactResult: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List Accounts
     *
     * @param  Operations\CrmListAccountsRequest  $request
     * @return Operations\CrmListAccountsResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function listAccounts(Operations\CrmListAccountsRequest $request): Operations\CrmListAccountsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/accounts');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmListAccountsRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\AccountsPaginated', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmListAccountsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    accountsPaginated: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Account
     *
     * @param  Operations\CrmGetAccountRequest  $request
     * @return Operations\CrmGetAccountResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function getAccount(Operations\CrmGetAccountRequest $request): Operations\CrmGetAccountResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/accounts/{id}', Operations\CrmGetAccountRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmGetAccountRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\AccountResult', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmGetAccountResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    accountResult: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get all Lists
     *
     * @param  Operations\CrmListListsRequest  $request
     * @return Operations\CrmListListsResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function listLists(Operations\CrmListListsRequest $request): Operations\CrmListListsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/lists');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmListListsRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ListsPaginated', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmListListsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    listsPaginated: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get List
     *
     * @param  Operations\CrmGetListRequest  $request
     * @return Operations\CrmGetListResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function getList(Operations\CrmGetListRequest $request): Operations\CrmGetListResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/lists/{id}', Operations\CrmGetListRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmGetListRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\ListResult', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmGetListResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    listResult: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * List Contact Custom Field Definitions
     *
     * @param  Operations\CrmListContactCustomFieldDefinitionsRequest  $request
     * @return Operations\CrmListContactCustomFieldDefinitionsResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function listContactCustomFieldDefinitions(Operations\CrmListContactCustomFieldDefinitionsRequest $request): Operations\CrmListContactCustomFieldDefinitionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/custom_field_definitions/contacts');
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmListContactCustomFieldDefinitionsRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\CustomFieldDefinitionsPaginated', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmListContactCustomFieldDefinitionsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    customFieldDefinitionsPaginated: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Get Contact Custom Field Definition
     *
     * @param  Operations\CrmGetContactCustomFieldDefinitionRequest  $request
     * @return Operations\CrmGetContactCustomFieldDefinitionResponse
     * @throws \StackOne\client\Models\Errors\SDKException
     */
    public function getContactCustomFieldDefinition(Operations\CrmGetContactCustomFieldDefinitionRequest $request): Operations\CrmGetContactCustomFieldDefinitionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/unified/crm/custom_field_definitions/contacts/{id}', Operations\CrmGetContactCustomFieldDefinitionRequest::class, $request);
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(Operations\CrmGetContactCustomFieldDefinitionRequest::class, $request));
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);


        $httpResponse = $this->sdkConfiguration->securityClient->send($httpRequest, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $obj = $serializer->deserialize((string) $httpResponse->getBody(), '\StackOne\client\Models\Components\CustomFieldDefinitionResultApiModel', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\CrmGetContactCustomFieldDefinitionResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    customFieldDefinitionResultApiModel: $obj);

                return $response;
            } else {
                throw new \StackOne\client\Models\Errors\SDKException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 400 || $statusCode == 403 || $statusCode == 412 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 501 || $statusCode >= 500 && $statusCode < 600) {
            throw new \StackOne\client\Models\Errors\SDKException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \StackOne\client\Models\Errors\SDKException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}