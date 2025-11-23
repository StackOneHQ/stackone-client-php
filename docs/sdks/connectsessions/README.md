# ConnectSessions
(*connectSessions*)

## Overview

Generate connection session tokens or auth URLs to allow your customers to connect their accounts.

### Available Operations

* [createConnectSession](#createconnectsession) - Create Connect Session
* [authenticateConnectSession](#authenticateconnectsession) - Authenticate Connect Session

## createConnectSession

Create Connect Session

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_create_connect_session" method="post" path="/connect_sessions" -->
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

$request = new Components\ConnectSessionCreate(
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Ticketing,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Iam,
        Components\Categories::Documents,
        Components\Categories::Ticketing,
        Components\Categories::Screening,
        Components\Categories::Messaging,
        Components\Categories::Accounting,
        Components\Categories::Scheduling,
    ],
    originOwnerId: '<id>',
    originOwnerName: '<value>',
);

$response = $sdk->connectSessions->createConnectSession(
    request: $request
);

if ($response->connectSessionTokenAuthLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Components\ConnectSessionCreate](../../Models/Components/ConnectSessionCreate.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\StackoneCreateConnectSessionResponse](../../Models/Operations/StackoneCreateConnectSessionResponse.md)**

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

## authenticateConnectSession

Authenticate Connect Session

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_authenticate_connect_session" method="post" path="/connect_sessions/authenticate" -->
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

$request = new Components\ConnectSessionAuthenticate(
    token: '<value>',
);

$response = $sdk->connectSessions->authenticateConnectSession(
    request: $request
);

if ($response->connectSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Components\ConnectSessionAuthenticate](../../Models/Components/ConnectSessionAuthenticate.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\StackoneAuthenticateConnectSessionResponse](../../Models/Operations/StackoneAuthenticateConnectSessionResponse.md)**

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