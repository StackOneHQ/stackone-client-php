# Mcp
(*mcp*)

## Overview

Model Context Protocol endpoint.

### Available Operations

* [mcpGet](#mcpget) - Open MCP SSE stream
* [mcpPost](#mcppost) - Send MCP JSON-RPC message
* [mcpDelete](#mcpdelete) - Delete MCP session

## mcpGet

Open a dedicated Server-Sent Events stream for MCP notifications

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_mcp_get" method="get" path="/mcp" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()->build();


$requestSecurity = new Operations\StackoneMcpGetSecurity(
    basic: new Components\SchemeBasic(
        username: '',
        password: '',
    ),
);

$response = $sdk->mcp->mcpGet(
    security: $requestSecurity,
    xAccountId: '<id>',
    mcpSessionId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\StackoneMcpGetSecurity](../../Models/Operations/StackoneMcpGetSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `xAccountId`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | Account secure id for the target provider account                                      |
| `mcpSessionId`                                                                         | *string*                                                                               | :heavy_check_mark:                                                                     | Session id                                                                             |

### Response

**[?Operations\StackoneMcpGetResponse](../../Models/Operations/StackoneMcpGetResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\BadRequestResponse          | 400                                | application/json                   |
| Errors\UnauthorizedResponse        | 401                                | application/json                   |
| Errors\ForbiddenResponse           | 403                                | application/json                   |
| Errors\NotFoundResponse            | 404                                | application/json                   |
| Errors\RequestTimedOutResponse     | 408                                | application/json                   |
| Errors\ConflictResponse            | 409                                | application/json                   |
| Errors\UnprocessableEntityResponse | 422                                | application/json                   |
| Errors\TooManyRequestsResponse     | 429                                | application/json                   |
| Errors\InternalServerErrorResponse | 500                                | application/json                   |
| Errors\NotImplementedResponse      | 501                                | application/json                   |
| Errors\BadGatewayResponse          | 502                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## mcpPost

Send JSON-RPC request to the MCP server over HTTP streaming transport

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_mcp_post" method="post" path="/mcp" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()->build();

$jsonRpcMessageDto = new Components\JsonRpcMessageDto(
    jsonrpc: '2.0',
    method: 'initialize',
    params: new Components\Params(),
    id: new Components\Id(),
);
$requestSecurity = new Operations\StackoneMcpPostSecurity(
    basic: new Components\SchemeBasic(
        username: '',
        password: '',
    ),
);

$response = $sdk->mcp->mcpPost(
    security: $requestSecurity,
    xAccountId: '<id>',
    jsonRpcMessageDto: $jsonRpcMessageDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `security`                                                                               | [Operations\StackoneMcpPostSecurity](../../Models/Operations/StackoneMcpPostSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |
| `xAccountId`                                                                             | *string*                                                                                 | :heavy_check_mark:                                                                       | Account secure id for the target provider account                                        |
| `jsonRpcMessageDto`                                                                      | [Components\JsonRpcMessageDto](../../Models/Components/JsonRpcMessageDto.md)             | :heavy_check_mark:                                                                       | JSON-RPC 2.0 message                                                                     |
| `mcpSessionId`                                                                           | *?string*                                                                                | :heavy_minus_sign:                                                                       | Session id; omit for initialize, include for subsequent calls                            |

### Response

**[?Operations\StackoneMcpPostResponse](../../Models/Operations/StackoneMcpPostResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\BadRequestResponse          | 400                                | application/json                   |
| Errors\UnauthorizedResponse        | 401                                | application/json                   |
| Errors\ForbiddenResponse           | 403                                | application/json                   |
| Errors\NotFoundResponse            | 404                                | application/json                   |
| Errors\RequestTimedOutResponse     | 408                                | application/json                   |
| Errors\ConflictResponse            | 409                                | application/json                   |
| Errors\UnprocessableEntityResponse | 422                                | application/json                   |
| Errors\TooManyRequestsResponse     | 429                                | application/json                   |
| Errors\InternalServerErrorResponse | 500                                | application/json                   |
| Errors\NotImplementedResponse      | 501                                | application/json                   |
| Errors\BadGatewayResponse          | 502                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |

## mcpDelete

Close an existing MCP session for the provided session id

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_mcp_delete" method="delete" path="/mcp" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()->build();


$requestSecurity = new Operations\StackoneMcpDeleteSecurity(
    basic: new Components\SchemeBasic(
        username: '',
        password: '',
    ),
);

$response = $sdk->mcp->mcpDelete(
    security: $requestSecurity,
    xAccountId: '<id>',
    mcpSessionId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\StackoneMcpDeleteSecurity](../../Models/Operations/StackoneMcpDeleteSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `xAccountId`                                                                                 | *string*                                                                                     | :heavy_check_mark:                                                                           | Account secure id for the target provider account                                            |
| `mcpSessionId`                                                                               | *string*                                                                                     | :heavy_check_mark:                                                                           | Session id                                                                                   |

### Response

**[?Operations\StackoneMcpDeleteResponse](../../Models/Operations/StackoneMcpDeleteResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\BadRequestResponse          | 400                                | application/json                   |
| Errors\UnauthorizedResponse        | 401                                | application/json                   |
| Errors\ForbiddenResponse           | 403                                | application/json                   |
| Errors\NotFoundResponse            | 404                                | application/json                   |
| Errors\RequestTimedOutResponse     | 408                                | application/json                   |
| Errors\ConflictResponse            | 409                                | application/json                   |
| Errors\UnprocessableEntityResponse | 422                                | application/json                   |
| Errors\TooManyRequestsResponse     | 429                                | application/json                   |
| Errors\InternalServerErrorResponse | 500                                | application/json                   |
| Errors\NotImplementedResponse      | 501                                | application/json                   |
| Errors\BadGatewayResponse          | 502                                | application/json                   |
| Errors\SDKException                | 4XX, 5XX                           | \*/\*                              |