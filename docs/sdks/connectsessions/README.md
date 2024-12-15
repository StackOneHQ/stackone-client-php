# ConnectSessions
(*connectSessions*)

## Overview

### Available Operations

* [createConnectSession](#createconnectsession) - Create Connect Session
* [authenticateConnectSession](#authenticateconnectsession) - Authenticate Connect Session

## createConnectSession

Create Connect Session

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Components\ConnectSessionCreate(
    originOwnerId: '<id>',
    originOwnerName: '<value>',
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Crm,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Ats,
        Components\Categories::Documents,
    ],
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## authenticateConnectSession

Authenticate Connect Session

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |