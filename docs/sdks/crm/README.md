# Crm
(*crm*)

## Overview

### Available Operations

* [listContacts](#listcontacts) - List Contacts
* [createContact](#createcontact) - Creates a new Contact
* [getContact](#getcontact) - Get Contact
* [updateContact](#updatecontact) - Update Contact (early access)
* [listAccounts](#listaccounts) - List Accounts
* [getAccount](#getaccount) - Get Account
* [listLists](#listlists) - Get all Lists
* [getList](#getlist) - Get List
* [listContactCustomFieldDefinitions](#listcontactcustomfielddefinitions) - List Contact Custom Field Definitions
* [getContactCustomFieldDefinition](#getcontactcustomfielddefinition) - Get Contact Custom Field Definition

## listContacts

List Contacts

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

$request = new Operations\CrmListContactsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,first_name,last_name,company_name,emails,phone_numbers,deal_ids,remote_deal_ids,account_ids,remote_account_ids,custom_fields,created_at,updated_at',
    filter: new Operations\CrmListContactsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    include: 'custom_fields',
);

$responses = $sdk->crm->listContacts(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CrmListContactsRequest](../../Models/Operations/CrmListContactsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CrmListContactsResponse](../../Models/Operations/CrmListContactsResponse.md)**

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

## createContact

Creates a new Contact

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

$crmCreateContactRequestDto = new Components\CrmCreateContactRequestDto(
    firstName: 'Steve',
    lastName: 'Wozniak',
    companyName: 'Apple Inc.',
    emails: [
        'steve@apple.com',
    ],
    phoneNumbers: [
        '123-456-7890',
    ],
    dealIds: [
        'deal-001',
        'deal-002',
    ],
    accountIds: [
        'account-123',
        'account-456',
    ],
    customFields: [
        new Components\CustomFields(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'Training Completion Status',
            value: 'Completed',
            valueId: 'value_456',
            remoteValueId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->crm->createContact(
    xAccountId: '<id>',
    crmCreateContactRequestDto: $crmCreateContactRequestDto

);

if ($response->contactResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | The account identifier                                                                         |
| `crmCreateContactRequestDto`                                                                   | [Components\CrmCreateContactRequestDto](../../Models/Components/CrmCreateContactRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\CrmCreateContactResponse](../../Models/Operations/CrmCreateContactResponse.md)**

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

## getContact

Get Contact

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

$request = new Operations\CrmGetContactRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,first_name,last_name,company_name,emails,phone_numbers,deal_ids,remote_deal_ids,account_ids,remote_account_ids,custom_fields,created_at,updated_at',
    include: 'custom_fields',
);

$response = $sdk->crm->getContact(
    request: $request
);

if ($response->contactResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CrmGetContactRequest](../../Models/Operations/CrmGetContactRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CrmGetContactResponse](../../Models/Operations/CrmGetContactResponse.md)**

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

## updateContact

Update Contact (early access)

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

$crmCreateContactRequestDto = new Components\CrmCreateContactRequestDto(
    firstName: 'Steve',
    lastName: 'Wozniak',
    companyName: 'Apple Inc.',
    emails: [
        'steve@apple.com',
    ],
    phoneNumbers: [
        '123-456-7890',
    ],
    dealIds: [
        'deal-001',
        'deal-002',
    ],
    accountIds: [
        'account-123',
        'account-456',
    ],
    customFields: [
        new Components\CustomFields(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'Training Completion Status',
            value: 'Completed',
            valueId: 'value_456',
            remoteValueId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->crm->updateContact(
    xAccountId: '<id>',
    id: '<id>',
    crmCreateContactRequestDto: $crmCreateContactRequestDto

);

if ($response->contactResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | The account identifier                                                                         |
| `id`                                                                                           | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `crmCreateContactRequestDto`                                                                   | [Components\CrmCreateContactRequestDto](../../Models/Components/CrmCreateContactRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\CrmUpdateContactResponse](../../Models/Operations/CrmUpdateContactResponse.md)**

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

## listAccounts

List Accounts

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

$request = new Operations\CrmListAccountsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,owner_id,remote_owner_id,name,description,industries,annual_revenue,website,addresses,phone_numbers,created_at,updated_at',
    filter: new Operations\CrmListAccountsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->crm->listAccounts(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CrmListAccountsRequest](../../Models/Operations/CrmListAccountsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CrmListAccountsResponse](../../Models/Operations/CrmListAccountsResponse.md)**

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

## getAccount

Get Account

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

$request = new Operations\CrmGetAccountRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,owner_id,remote_owner_id,name,description,industries,annual_revenue,website,addresses,phone_numbers,created_at,updated_at',
);

$response = $sdk->crm->getAccount(
    request: $request
);

if ($response->accountResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CrmGetAccountRequest](../../Models/Operations/CrmGetAccountRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CrmGetAccountResponse](../../Models/Operations/CrmGetAccountResponse.md)**

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

## listLists

Get all Lists

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

$request = new Operations\CrmListListsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,items,type',
    filter: new Operations\CrmListListsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->crm->listLists(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CrmListListsRequest](../../Models/Operations/CrmListListsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CrmListListsResponse](../../Models/Operations/CrmListListsResponse.md)**

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

## getList

Get List

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

$request = new Operations\CrmGetListRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,items,type',
);

$response = $sdk->crm->getList(
    request: $request
);

if ($response->listResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\CrmGetListRequest](../../Models/Operations/CrmGetListRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\CrmGetListResponse](../../Models/Operations/CrmGetListResponse.md)**

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

## listContactCustomFieldDefinitions

List Contact Custom Field Definitions

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

$request = new Operations\CrmListContactCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\CrmListContactCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->crm->listContactCustomFieldDefinitions(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\CrmListContactCustomFieldDefinitionsRequest](../../Models/Operations/CrmListContactCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\CrmListContactCustomFieldDefinitionsResponse](../../Models/Operations/CrmListContactCustomFieldDefinitionsResponse.md)**

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

## getContactCustomFieldDefinition

Get Contact Custom Field Definition

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

$request = new Operations\CrmGetContactCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\CrmGetContactCustomFieldDefinitionQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->crm->getContactCustomFieldDefinition(
    request: $request
);

if ($response->customFieldDefinitionResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\CrmGetContactCustomFieldDefinitionRequest](../../Models/Operations/CrmGetContactCustomFieldDefinitionRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\CrmGetContactCustomFieldDefinitionResponse](../../Models/Operations/CrmGetContactCustomFieldDefinitionResponse.md)**

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