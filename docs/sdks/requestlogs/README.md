# RequestLogs
(*requestLogs*)

## Overview

API requests and response logs.

### Available Operations

* [listStepLogs](#liststeplogs) - List Step Logs
* [getLog](#getlog) - Get a Log
* [listLogs](#listlogs) - List Logs

## listStepLogs

List Step Logs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\StackoneListStepLogsRequest(
    orderBy: Operations\OrderBy::EventDatetime,
    orderDirection: Operations\OrderDirection::Asc,
    filter: new Operations\Filter(
        accountIds: '45355976281015164504,45355976281015164505',
        startDate: '2020-01-01T00:00:00.000Z',
        endDate: '2020-01-01T00:00:00.000Z',
        requestIds: 'adbf752f-6457-4ddd-89b3-98ae2252b83b,adbf752f-6457-4ddd-89b3-98ae2252b83c',
        httpMethods: 'GET,POST',
        providers: 'ashby,greenhouse',
        services: 'hris,ats',
        resources: 'employees,users',
        childResources: 'documents,time-off',
        subResources: 'documents,employees',
        actions: 'download,upload',
        statusCodes: '200,400',
        success: true,
    ),
);

$response = $sdk->requestLogs->listStepLogs(
    request: $request
);

if ($response->stepLogsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\StackoneListStepLogsRequest](../../Models/Operations/StackoneListStepLogsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\StackoneListStepLogsResponse](../../Models/Operations/StackoneListStepLogsResponse.md)**

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

## getLog

Get a Log

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->requestLogs->getLog(
    id: '<id>',
    include: Operations\IncludeT::StepLogs

);

if ($response->unifiedLogResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  | Example                                                                      |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `id`                                                                         | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |                                                                              |
| `include`                                                                    | [?Operations\IncludeT](../../Models/Operations/IncludeT.md)                  | :heavy_minus_sign:                                                           | The include parameter allows you to include additional data in the response. | step_logs                                                                    |

### Response

**[?Operations\StackoneGetLogResponse](../../Models/Operations/StackoneGetLogResponse.md)**

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

## listLogs

List Logs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\StackoneListLogsRequest(
    orderBy: Operations\QueryParamOrderBy::Duration,
    orderDirection: Operations\QueryParamOrderDirection::Asc,
    include: Operations\QueryParamInclude::StepLogs,
    filter: new Operations\QueryParamFilter(
        accountIds: '45355976281015164504,45355976281015164505',
        startDate: '2020-01-01T00:00:00.000Z',
        endDate: '2020-01-01T00:00:00.000Z',
        requestIds: 'adbf752f-6457-4ddd-89b3-98ae2252b83b,adbf752f-6457-4ddd-89b3-98ae2252b83c',
        sourceTypes: 'DASHBOARD,SYNTHETIC_WEBHOOK',
        httpMethods: 'GET,POST',
        providers: 'ashby,greenhouse',
        services: 'hris,ats',
        resources: 'employees,users',
        childResources: 'documents,time-off',
        subResources: 'documents,employees',
        actions: 'download,upload',
        statusCodes: '200,400',
        success: true,
        orderBy: Operations\StackoneListLogsQueryParamOrderBy::Duration,
        orderDirection: Operations\StackoneListLogsQueryParamOrderDirection::Asc,
    ),
);

$response = $sdk->requestLogs->listLogs(
    request: $request
);

if ($response->unifiedLogsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\StackoneListLogsRequest](../../Models/Operations/StackoneListLogsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\StackoneListLogsResponse](../../Models/Operations/StackoneListLogsResponse.md)**

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