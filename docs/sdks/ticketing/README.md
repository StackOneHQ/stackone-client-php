# Ticketing
(*ticketing*)

## Overview

### Available Operations

* [listTickets](#listtickets) - List Tickets
* [createTicket](#createticket) - Create Ticket
* [getTicket](#getticket) - Get Ticket
* [updateTicket](#updateticket) - Update Ticket
* [listUsers](#listusers) - List Users
* [getUser](#getuser) - Get User
* [listComments](#listcomments) - List Comments
* [getComment](#getcomment) - Get Comment
* [downloadTicketingAttachment](#downloadticketingattachment) - Download Attachment
* [listAttachments](#listattachments) - List Attachments
* [getAttachment](#getattachment) - Get Attachment
* [listTicketTypes](#listtickettypes) - List Ticket Types
* [getTicketType](#gettickettype) - Get Ticket Type
* [listProjects](#listprojects) - List Projects
* [getProject](#getproject) - Get Project
* [listProjectComponents](#listprojectcomponents) - List Project Components
* [getProjectComponent](#getprojectcomponent) - Get Project Component
* [listProjectTicketTypes](#listprojecttickettypes) - List Project Ticket Types
* [listTicketStatuses](#listticketstatuses) - List Ticket Statuses

## listTickets

Retrieve a paginated list of tickets.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_tickets" method="get" path="/unified/ticketing/tickets" -->
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

$request = new Operations\TicketingListTicketsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,type,ticket_number,title,creator_id,remote_creator_id,reporters,assignees,content,parent_id,remote_parent_id,closed_at,ticket_url,status,priority,tags,projects,components,organization,created_at,updated_at',
    filter: new Operations\TicketingListTicketsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listTickets(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\TicketingListTicketsRequest](../../Models/Operations/TicketingListTicketsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\TicketingListTicketsResponse](../../Models/Operations/TicketingListTicketsResponse.md)**

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

## createTicket

Create a new ticket record.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_create_ticket" method="post" path="/unified/ticketing/tickets" -->
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

$ticketingTicketCreateRequestDto = new Components\TicketingTicketCreateRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    title: 'System outage in production environment',
    creatorId: 'user-001',
    reporters: [
        'user-001',
        'user-002',
    ],
    assignees: [
        'user-001',
        'user-002',
    ],
    content: [
        new Components\TicketingContent(
            plain: 'This is some content',
            html: '<p>This is some content</p>',
        ),
    ],
    parentId: 'ticket-002',
    priority: new Components\TicketingTicketCreateRequestDtoPriority(
        id: '001',
        value: Components\TicketingTicketCreateRequestDtoValue::Medium,
        sourceValue: 'Normal',
    ),
    tags: [
        'tag-001',
        'tag-002',
    ],
    organizationId: 'organization-001',
    projectId: 'project-001',
    componentIds: '["component-001","component-002"]',
    type: 'ticket-type-001',
);

$response = $sdk->ticketing->createTicket(
    xAccountId: '<id>',
    ticketingTicketCreateRequestDto: $ticketingTicketCreateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                             | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The account identifier                                                                                   |
| `ticketingTicketCreateRequestDto`                                                                        | [Components\TicketingTicketCreateRequestDto](../../Models/Components/TicketingTicketCreateRequestDto.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |

### Response

**[?Operations\TicketingCreateTicketResponse](../../Models/Operations/TicketingCreateTicketResponse.md)**

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

## getTicket

Retrieve a single ticket by its identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_ticket" method="get" path="/unified/ticketing/tickets/{id}" -->
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

$request = new Operations\TicketingGetTicketRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,type,ticket_number,title,creator_id,remote_creator_id,reporters,assignees,content,parent_id,remote_parent_id,closed_at,ticket_url,status,priority,tags,projects,components,organization,created_at,updated_at',
);

$response = $sdk->ticketing->getTicket(
    request: $request
);

if ($response->ticketingTicketResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\TicketingGetTicketRequest](../../Models/Operations/TicketingGetTicketRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\TicketingGetTicketResponse](../../Models/Operations/TicketingGetTicketResponse.md)**

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

## updateTicket

Update an existing ticket record by its identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_update_ticket" method="patch" path="/unified/ticketing/tickets/{id}" -->
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

$ticketingTicketUpdateRequestDto = new Components\TicketingTicketUpdateRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    title: 'System outage in production environment',
    reporters: [
        'user-001',
        'user-002',
    ],
    assignees: [
        'user-001',
        'user-002',
    ],
    content: [
        new Components\TicketingContent(
            plain: 'This is some content',
            html: '<p>This is some content</p>',
        ),
    ],
    parentId: 'ticket-002',
    priority: new Components\TicketingTicketUpdateRequestDtoPriority(
        id: '001',
        value: Components\TicketingTicketUpdateRequestDtoValue::Medium,
        sourceValue: 'Normal',
    ),
    tags: [
        'tag-001',
        'tag-002',
    ],
    projectId: 'project-001',
    componentIds: '["component-001","component-002"]',
    status: new Components\TicketingTicketUpdateRequestDtoStatus(
        id: '001',
        type: new Components\TicketingTicketUpdateRequestDtoType(
            value: Components\TicketingTicketUpdateRequestDtoStatusValue::ToDo,
            sourceValue: 'New',
        ),
        name: 'Backlog',
    ),
);

$response = $sdk->ticketing->updateTicket(
    xAccountId: '<id>',
    id: '<id>',
    ticketingTicketUpdateRequestDto: $ticketingTicketUpdateRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                             | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The account identifier                                                                                   |
| `id`                                                                                                     | *string*                                                                                                 | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `ticketingTicketUpdateRequestDto`                                                                        | [Components\TicketingTicketUpdateRequestDto](../../Models/Components/TicketingTicketUpdateRequestDto.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |

### Response

**[?Operations\TicketingUpdateTicketResponse](../../Models/Operations/TicketingUpdateTicketResponse.md)**

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

## listUsers

Retrieve a paginated list of users.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_users" method="get" path="/unified/ticketing/users" -->
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

$request = new Operations\TicketingListUsersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,type,name,primary_email,primary_phone,username,active,first_name,last_name,customer_account_reference,created_at,updated_at',
    filter: new Operations\TicketingListUsersQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listUsers(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\TicketingListUsersRequest](../../Models/Operations/TicketingListUsersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\TicketingListUsersResponse](../../Models/Operations/TicketingListUsersResponse.md)**

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

## getUser

Retrieve a single user by their identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_user" method="get" path="/unified/ticketing/users/{id}" -->
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

$request = new Operations\TicketingGetUserRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,type,name,primary_email,primary_phone,username,active,first_name,last_name,customer_account_reference,created_at,updated_at',
);

$response = $sdk->ticketing->getUser(
    request: $request
);

if ($response->ticketingUserResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\TicketingGetUserRequest](../../Models/Operations/TicketingGetUserRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\TicketingGetUserResponse](../../Models/Operations/TicketingGetUserResponse.md)**

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

## listComments

Retrieve a paginated list of comments for a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_comments" method="get" path="/unified/ticketing/tickets/{id}/comments" -->
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

$request = new Operations\TicketingListCommentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,ticket_id,remote_ticket_id,content,user_id,remote_user_id,internal,created_at,updated_at',
    filter: new Operations\TicketingListCommentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listComments(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\TicketingListCommentsRequest](../../Models/Operations/TicketingListCommentsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\TicketingListCommentsResponse](../../Models/Operations/TicketingListCommentsResponse.md)**

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

## getComment

Retrieve a single comment by its identifier for a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_comment" method="get" path="/unified/ticketing/tickets/{id}/comments/{subResourceId}" -->
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

$request = new Operations\TicketingGetCommentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,ticket_id,remote_ticket_id,content,user_id,remote_user_id,internal,created_at,updated_at',
);

$response = $sdk->ticketing->getComment(
    request: $request
);

if ($response->ticketingCommentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\TicketingGetCommentRequest](../../Models/Operations/TicketingGetCommentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\TicketingGetCommentResponse](../../Models/Operations/TicketingGetCommentResponse.md)**

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

## downloadTicketingAttachment

Download the attachment file from a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_download_ticketing_attachment" method="get" path="/unified/ticketing/tickets/{id}/attachments/{subResourceId}/download" -->
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

$request = new Operations\TicketingDownloadTicketingAttachmentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    format: 'base64',
    exportFormat: 'text/plain',
);

$response = $sdk->ticketing->downloadTicketingAttachment(
    request: $request
);

if ($response->body !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\TicketingDownloadTicketingAttachmentRequest](../../Models/Operations/TicketingDownloadTicketingAttachmentRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\TicketingDownloadTicketingAttachmentResponse](../../Models/Operations/TicketingDownloadTicketingAttachmentResponse.md)**

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

## listAttachments

Retrieve a paginated list of attachment details for a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_attachments" method="get" path="/unified/ticketing/tickets/{id}/attachments" -->
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

$request = new Operations\TicketingListAttachmentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,ticket_id,remote_ticket_id,user_id,remote_user_id,file_name,file_format,file_url,size,created_at,updated_at',
    filter: new Operations\TicketingListAttachmentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listAttachments(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\TicketingListAttachmentsRequest](../../Models/Operations/TicketingListAttachmentsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\TicketingListAttachmentsResponse](../../Models/Operations/TicketingListAttachmentsResponse.md)**

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

## getAttachment

Retrieve the details of a single attachment for a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_attachment" method="get" path="/unified/ticketing/tickets/{id}/attachments/{subResourceId}" -->
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

$request = new Operations\TicketingGetAttachmentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,ticket_id,remote_ticket_id,user_id,remote_user_id,file_name,file_format,file_url,size,created_at,updated_at',
);

$response = $sdk->ticketing->getAttachment(
    request: $request
);

if ($response->ticketingAttachmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\TicketingGetAttachmentRequest](../../Models/Operations/TicketingGetAttachmentRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\TicketingGetAttachmentResponse](../../Models/Operations/TicketingGetAttachmentResponse.md)**

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

## listTicketTypes

Retrieve a paginated list of all ticket types.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_ticket_types" method="get" path="/unified/ticketing/ticket_types" -->
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

$request = new Operations\TicketingListTicketTypesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,project_id,remote_project_id',
    filter: new Operations\TicketingListTicketTypesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listTicketTypes(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\TicketingListTicketTypesRequest](../../Models/Operations/TicketingListTicketTypesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\TicketingListTicketTypesResponse](../../Models/Operations/TicketingListTicketTypesResponse.md)**

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

## getTicketType

Retrieve a single ticket type by its identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_ticket_type" method="get" path="/unified/ticketing/ticket_types/{id}" -->
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

$request = new Operations\TicketingGetTicketTypeRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,project_id,remote_project_id',
);

$response = $sdk->ticketing->getTicketType(
    request: $request
);

if ($response->ticketingTicketTypeResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\TicketingGetTicketTypeRequest](../../Models/Operations/TicketingGetTicketTypeRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\TicketingGetTicketTypeResponse](../../Models/Operations/TicketingGetTicketTypeResponse.md)**

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

## listProjects

Retrieve a paginated list of projects.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_projects" method="get" path="/unified/ticketing/projects" -->
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

$request = new Operations\TicketingListProjectsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,organization_id,remote_organization_id,name,description,created_at,updated_at',
    filter: new Operations\TicketingListProjectsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listProjects(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\TicketingListProjectsRequest](../../Models/Operations/TicketingListProjectsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\TicketingListProjectsResponse](../../Models/Operations/TicketingListProjectsResponse.md)**

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

## getProject

Retrieve a single project by its identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_project" method="get" path="/unified/ticketing/projects/{id}" -->
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

$request = new Operations\TicketingGetProjectRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,organization_id,remote_organization_id,name,description,created_at,updated_at',
);

$response = $sdk->ticketing->getProject(
    request: $request
);

if ($response->ticketingProjectResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\TicketingGetProjectRequest](../../Models/Operations/TicketingGetProjectRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\TicketingGetProjectResponse](../../Models/Operations/TicketingGetProjectResponse.md)**

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

## listProjectComponents

Retrieve a paginated list of project components.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_project_components" method="get" path="/unified/ticketing/projects/{id}/components" -->
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

$request = new Operations\TicketingListProjectComponentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,organization_id,remote_organization_id,project_id,remote_project_id,name,description,created_at,updated_at',
    filter: null,
);

$responses = $sdk->ticketing->listProjectComponents(
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
| `$request`                                                                                                           | [Operations\TicketingListProjectComponentsRequest](../../Models/Operations/TicketingListProjectComponentsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\TicketingListProjectComponentsResponse](../../Models/Operations/TicketingListProjectComponentsResponse.md)**

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

## getProjectComponent

Retrieve a single project component by its identifier.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_get_project_component" method="get" path="/unified/ticketing/projects/{id}/components/{subResourceId}" -->
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

$request = new Operations\TicketingGetProjectComponentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,organization_id,remote_organization_id,project_id,remote_project_id,name,description,created_at,updated_at',
);

$response = $sdk->ticketing->getProjectComponent(
    request: $request
);

if ($response->ticketingComponentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\TicketingGetProjectComponentRequest](../../Models/Operations/TicketingGetProjectComponentRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\TicketingGetProjectComponentResponse](../../Models/Operations/TicketingGetProjectComponentResponse.md)**

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

## listProjectTicketTypes

Retrieve a paginated list of ticket types for a project.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_project_ticket_types" method="get" path="/unified/ticketing/projects/{id}/ticket_types" -->
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

$request = new Operations\TicketingListProjectTicketTypesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,project_id,remote_project_id',
    filter: new Operations\TicketingListProjectTicketTypesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listProjectTicketTypes(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\TicketingListProjectTicketTypesRequest](../../Models/Operations/TicketingListProjectTicketTypesRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\TicketingListProjectTicketTypesResponse](../../Models/Operations/TicketingListProjectTicketTypesResponse.md)**

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

## listTicketStatuses

Retrieve a paginated list of statuses for a ticket.

### Example Usage

<!-- UsageSnippet language="php" operationID="ticketing_list_ticket_statuses" method="get" path="/unified/ticketing/tickets/{id}/statuses" -->
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

$request = new Operations\TicketingListTicketStatusesRequest(
    xAccountId: '<id>',
    id: '<id>',
    filter: new Operations\TicketingListTicketStatusesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ticketing->listTicketStatuses(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\TicketingListTicketStatusesRequest](../../Models/Operations/TicketingListTicketStatusesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\TicketingListTicketStatusesResponse](../../Models/Operations/TicketingListTicketStatusesResponse.md)**

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