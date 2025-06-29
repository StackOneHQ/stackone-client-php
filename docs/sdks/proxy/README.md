# Proxy
(*proxy*)

## Overview

Routing API requests through StackOne directly to the underlying provider.

### Available Operations

* [proxyRequest](#proxyrequest) - Proxy Request

## proxyRequest

Proxy Request

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$proxyRequestBody = new Components\ProxyRequestBody(
    url: 'https://api.sample-integration.com/v1',
    path: '/employees/directory',
    headers: [
        'Content-Type' => 'application/json',
    ],
);

$response = $sdk->proxy->proxyRequest(
    xAccountId: '<id>',
    proxyRequestBody: $proxyRequestBody

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `xAccountId`                                                               | *string*                                                                   | :heavy_check_mark:                                                         | The account identifier                                                     |
| `proxyRequestBody`                                                         | [Components\ProxyRequestBody](../../Models/Components/ProxyRequestBody.md) | :heavy_check_mark:                                                         | The request body                                                           |

### Response

**[?Operations\StackoneProxyRequestResponse](../../Models/Operations/StackoneProxyRequestResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\BadRequestResponse          | 400                                | application/json                   |
| Errors\UnauthorizedResponse        | 401                                | application/json                   |
| Errors\ForbiddenResponse           | 403                                | application/json                   |
| Errors\NotFoundResponse            | 404                                | application/json                   |
| Errors\RequestTimedOutResponse     | 408                                | application/json                   |
| Errors\ConflictResponse            | 409                                | application/json                   |
| Errors\PreconditionFailedResponse  | 412                                | application/json                   |
| Errors\UnprocessableEntityResponse | 422                                | application/json                   |
| Errors\TooManyRequestsResponse     | 429                                | application/json                   |
| Errors\InternalServerErrorResponse | 500                                | application/json                   |
| Errors\NotImplementedResponse      | 501                                | application/json                   |
| Errors\BadGatewayResponse          | 502                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |