# Screening
(*screening*)

## Overview

### Available Operations

* [listScreeningPackages](#listscreeningpackages) - List Screening Packages
* [getScreeningPackage](#getscreeningpackage) - Get Screening Package
* [webhookScreeningResult](#webhookscreeningresult) - Webhook Screening Result
* [createScreeningOrder](#createscreeningorder) - Create Screening Order

## listScreeningPackages

List Screening Packages

### Example Usage

<!-- UsageSnippet language="php" operationID="screening_list_screening_packages" method="get" path="/unified/screening/packages" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;
use StackOne\client\Utils;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ScreeningListScreeningPackagesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description',
    filter: new Operations\ScreeningListScreeningPackagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->screening->listScreeningPackages(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ScreeningListScreeningPackagesRequest](../../Models/Operations/ScreeningListScreeningPackagesRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ScreeningListScreeningPackagesResponse](../../Models/Operations/ScreeningListScreeningPackagesResponse.md)**

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

## getScreeningPackage

Get Screening Package

### Example Usage

<!-- UsageSnippet language="php" operationID="screening_get_screening_package" method="get" path="/unified/screening/packages/{id}" -->
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

$request = new Operations\ScreeningGetScreeningPackageRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description',
);

$response = $sdk->screening->getScreeningPackage(
    request: $request
);

if ($response->screeningPackageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ScreeningGetScreeningPackageRequest](../../Models/Operations/ScreeningGetScreeningPackageRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ScreeningGetScreeningPackageResponse](../../Models/Operations/ScreeningGetScreeningPackageResponse.md)**

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

## webhookScreeningResult

Webhook Screening Result

### Example Usage

<!-- UsageSnippet language="php" operationID="screening_webhook_screening_result" method="post" path="/unified/screening/results/webhook" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$screeningResultWebhook = new Components\ScreeningResultWebhook(
    event: Components\Event::ScreeningResultsCompleted,
    data: new Components\ScreeningResult(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        unifiedCustomFields: [
            'my_project_custom_field_1' => 'REF-1236',
            'my_project_custom_field_2' => 'some other value',
        ],
        orderId: '12345',
        score: new Components\ScreeningResultScore(
            label: 'Overall Risk',
            value: '75',
            min: '0',
            max: '100',
        ),
        startDate: Utils\Utils::parseDateTime('2023-01-01T00:00:00Z'),
        submissionDate: Utils\Utils::parseDateTime('2023-01-02T00:00:00Z'),
        summary: 'Background check completed successfully',
        status: Components\ScreeningResultStatus::Completed,
        resultUrl: 'https://example.com/results/12345',
    ),
);

$response = $sdk->screening->webhookScreeningResult(
    xAccountId: '<id>',
    screeningResultWebhook: $screeningResultWebhook

);

if ($response->screeningResultWebhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `xAccountId`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | The account identifier                                                                 |
| `screeningResultWebhook`                                                               | [Components\ScreeningResultWebhook](../../Models/Components/ScreeningResultWebhook.md) | :heavy_check_mark:                                                                     | N/A                                                                                    |

### Response

**[?Operations\ScreeningWebhookScreeningResultResponse](../../Models/Operations/ScreeningWebhookScreeningResultResponse.md)**

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

## createScreeningOrder

Create Screening Order

### Example Usage

<!-- UsageSnippet language="php" operationID="screening_create_screening_order" method="post" path="/unified/screening/orders" -->
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

$screeningCreateOrderRequestDto = new Components\ScreeningCreateOrderRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    packageId: '54321',
    candidate: new Components\ScreeningOrderCandidate(
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@example.com',
    ),
);

$response = $sdk->screening->createScreeningOrder(
    xAccountId: '<id>',
    screeningCreateOrderRequestDto: $screeningCreateOrderRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `screeningCreateOrderRequestDto`                                                                       | [Components\ScreeningCreateOrderRequestDto](../../Models/Components/ScreeningCreateOrderRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\ScreeningCreateScreeningOrderResponse](../../Models/Operations/ScreeningCreateScreeningOrderResponse.md)**

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