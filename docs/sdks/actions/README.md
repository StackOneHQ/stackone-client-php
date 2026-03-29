# Actions

## Overview

Retrieve Actions metadata and definitions.

### Available Operations

* [listActionsMeta](#listactionsmeta) - List all actions metadata
* [searchActions](#searchactions) - Search connector actions by semantic similarity
* [buildActionEmbeddings](#buildactionembeddings) - Rebuild action embeddings for semantic search
* [rpcAction](#rpcaction) - Make an RPC call to an action

## listActionsMeta

Retrieves a list of all actions metadata

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_list_actions_meta" method="get" path="/actions" -->
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

$request = new Operations\StackoneListActionsMetaRequest(
    groupBy: '["connector"]',
    filter: new Operations\StackoneListActionsMetaQueryParamFilter(
        connectors: 'connector1,connector2',
        accountIds: 'account1,account2',
        actionKey: 'action1',
    ),
    include: [
        Operations\StackoneListActionsMetaQueryParamInclude::ActionDetails,
    ],
    search: 'employee',
    exclude: [
        Operations\Exclude::Actions,
    ],
);

$responses = $sdk->actions->listActionsMeta(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\StackoneListActionsMetaRequest](../../Models/Operations/StackoneListActionsMetaRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\StackoneListActionsMetaResponse](../../Models/Operations/StackoneListActionsMetaResponse.md)**

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

## searchActions

Search connector actions by semantic similarity

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_search_actions" method="post" path="/actions/search" -->
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

$request = new Components\ActionSearchDto(
    query: 'send a message',
    connector: 'slack',
);

$response = $sdk->actions->searchActions(
    request: $request
);

if ($response->actionSearchResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Components\ActionSearchDto](../../Models/Components/ActionSearchDto.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\StackoneSearchActionsResponse](../../Models/Operations/StackoneSearchActionsResponse.md)**

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

## buildActionEmbeddings

Rebuild action embeddings for semantic search

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_build_action_embeddings" method="post" path="/actions/build" -->
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

$request = new Components\ActionBuildDto(
    connectorKey: 'slack',
);

$response = $sdk->actions->buildActionEmbeddings(
    request: $request
);

if ($response->actionBuildResponseDto !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Components\ActionBuildDto](../../Models/Components/ActionBuildDto.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\StackoneBuildActionEmbeddingsResponse](../../Models/Operations/StackoneBuildActionEmbeddingsResponse.md)**

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

## rpcAction

Makes a remote procedure call to the specified action

### Example Usage

<!-- UsageSnippet language="php" operationID="stackone_rpc_action" method="post" path="/actions/rpc" -->
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

$actionsRpcRequestDto = new Components\ActionsRpcRequestDto(
    action: 'create_employee',
    path: [
        'id' => '123',
    ],
    query: new Components\Query(
        debug: false,
    ),
    headers: [
        'Content-Type' => 'application/json',
    ],
    body: [
        'data' => 'example',
    ],
    defenderConfig: new Components\DefenderConfig(
        enabled: true,
        blockHighRisk: false,
        useTier1Classification: true,
        useTier2Classification: true,
    ),
);

$response = $sdk->actions->rpcAction(
    xAccountId: '<id>',
    actionsRpcRequestDto: $actionsRpcRequestDto

);

if ($response->actionsRpcResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `xAccountId`                                                                       | *string*                                                                           | :heavy_check_mark:                                                                 | The account identifier                                                             |
| `actionsRpcRequestDto`                                                             | [Components\ActionsRpcRequestDto](../../Models/Components/ActionsRpcRequestDto.md) | :heavy_check_mark:                                                                 | N/A                                                                                |

### Response

**[?Operations\StackoneRpcActionResponse](../../Models/Operations/StackoneRpcActionResponse.md)**

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