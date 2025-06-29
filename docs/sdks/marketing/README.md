# Marketing
(*marketing*)

## Overview

### Available Operations

* [listEmailTemplates](#listemailtemplates) - List Email Templates
* [createEmailTemplate](#createemailtemplate) - Create Email Templates
* [getEmailTemplate](#getemailtemplate) - Get Email Templates
* [updateEmailTemplate](#updateemailtemplate) - Update Email Templates
* [listInAppTemplates](#listinapptemplates) - List In-App Templates
* [createInAppTemplate](#createinapptemplate) - Create In-App Template
* [getInAppTemplate](#getinapptemplate) - Get In-App Template
* [updateInAppTemplate](#updateinapptemplate) - Update In-App Template
* [listSmsTemplates](#listsmstemplates) - List SMS Templates
* [createSmsTemplate](#createsmstemplate) - Create SMS Template
* [getSmsTemplate](#getsmstemplate) - Get SMS Template
* [updateSmsTemplate](#updatesmstemplate) - Update SMS Template
* [~~listOmniChannelTemplates~~](#listomnichanneltemplates) - List Omni-Channel Templates :warning: **Deprecated**
* [~~createOmniChannelTemplate~~](#createomnichanneltemplate) - Create Omni-Channel Template :warning: **Deprecated**
* [~~getOmniChannelTemplate~~](#getomnichanneltemplate) - Get Omni-Channel Template :warning: **Deprecated**
* [~~updateOmniChannelTemplate~~](#updateomnichanneltemplate) - Update Omni-Channel Template :warning: **Deprecated**
* [listPushTemplates](#listpushtemplates) - List Push Templates
* [createPushTemplate](#createpushtemplate) - Create Push Template
* [getPushTemplate](#getpushtemplate) - Get Push Template
* [updatePushTemplate](#updatepushtemplate) - Update Push Template
* [listCampaigns](#listcampaigns) - List campaigns
* [getCampaign](#getcampaign) - Get campaign
* [listContentBlocks](#listcontentblocks) - List Content Blocks
* [createContentBlock](#createcontentblock) - Create Content Block
* [getContentBlock](#getcontentblock) - Get Content Blocks
* [updateContentBlock](#updatecontentblock) - Update Content Block

## listEmailTemplates

List Email Templates

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

$request = new Operations\MarketingListEmailTemplatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
    filter: new Operations\MarketingListEmailTemplatesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listEmailTemplates(
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
| `$request`                                                                                                     | [Operations\MarketingListEmailTemplatesRequest](../../Models/Operations/MarketingListEmailTemplatesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\MarketingListEmailTemplatesResponse](../../Models/Operations/MarketingListEmailTemplatesResponse.md)**

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

## createEmailTemplate

Create Email Templates

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

$marketingCreateEmailTemplateRequestDto = new Components\MarketingCreateEmailTemplateRequestDto(
    messages: [
        new Components\EmailMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: null,
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createEmailTemplate(
    xAccountId: '<id>',
    marketingCreateEmailTemplateRequestDto: $marketingCreateEmailTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `marketingCreateEmailTemplateRequestDto`                                                                               | [Components\MarketingCreateEmailTemplateRequestDto](../../Models/Components/MarketingCreateEmailTemplateRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingCreateEmailTemplateResponse](../../Models/Operations/MarketingCreateEmailTemplateResponse.md)**

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

## getEmailTemplate

Get Email Templates

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

$request = new Operations\MarketingGetEmailTemplateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
);

$response = $sdk->marketing->getEmailTemplate(
    request: $request
);

if ($response->emailTemplateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\MarketingGetEmailTemplateRequest](../../Models/Operations/MarketingGetEmailTemplateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\MarketingGetEmailTemplateResponse](../../Models/Operations/MarketingGetEmailTemplateResponse.md)**

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

## updateEmailTemplate

Update Email Templates

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

$marketingCreateEmailTemplateRequestDto = new Components\MarketingCreateEmailTemplateRequestDto(
    messages: [
        new Components\EmailMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\MessageType(
                value: Components\EmailMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updateEmailTemplate(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreateEmailTemplateRequestDto: $marketingCreateEmailTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `id`                                                                                                                   | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `marketingCreateEmailTemplateRequestDto`                                                                               | [Components\MarketingCreateEmailTemplateRequestDto](../../Models/Components/MarketingCreateEmailTemplateRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingUpdateEmailTemplateResponse](../../Models/Operations/MarketingUpdateEmailTemplateResponse.md)**

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

## listInAppTemplates

List In-App Templates

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

$request = new Operations\MarketingListInAppTemplatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
    filter: null,
);

$responses = $sdk->marketing->listInAppTemplates(
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
| `$request`                                                                                                     | [Operations\MarketingListInAppTemplatesRequest](../../Models/Operations/MarketingListInAppTemplatesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\MarketingListInAppTemplatesResponse](../../Models/Operations/MarketingListInAppTemplatesResponse.md)**

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

## createInAppTemplate

Create In-App Template

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

$marketingCreateInAppTemplateRequestDto = new Components\MarketingCreateInAppTemplateRequestDto(
    messages: [
        new Components\InAppMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\InAppMessagesMessageType(
                value: Components\InAppMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createInAppTemplate(
    xAccountId: '<id>',
    marketingCreateInAppTemplateRequestDto: $marketingCreateInAppTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `marketingCreateInAppTemplateRequestDto`                                                                               | [Components\MarketingCreateInAppTemplateRequestDto](../../Models/Components/MarketingCreateInAppTemplateRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingCreateInAppTemplateResponse](../../Models/Operations/MarketingCreateInAppTemplateResponse.md)**

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

## getInAppTemplate

Get In-App Template

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

$request = new Operations\MarketingGetInAppTemplateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
);

$response = $sdk->marketing->getInAppTemplate(
    request: $request
);

if ($response->inAppTemplateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\MarketingGetInAppTemplateRequest](../../Models/Operations/MarketingGetInAppTemplateRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\MarketingGetInAppTemplateResponse](../../Models/Operations/MarketingGetInAppTemplateResponse.md)**

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

## updateInAppTemplate

Update In-App Template

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

$marketingCreateInAppTemplateRequestDto = new Components\MarketingCreateInAppTemplateRequestDto(
    messages: [
        new Components\InAppMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\InAppMessagesMessageType(
                value: Components\InAppMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updateInAppTemplate(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreateInAppTemplateRequestDto: $marketingCreateInAppTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `id`                                                                                                                   | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `marketingCreateInAppTemplateRequestDto`                                                                               | [Components\MarketingCreateInAppTemplateRequestDto](../../Models/Components/MarketingCreateInAppTemplateRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingUpdateInAppTemplateResponse](../../Models/Operations/MarketingUpdateInAppTemplateResponse.md)**

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

## listSmsTemplates

List SMS Templates

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

$request = new Operations\MarketingListSmsTemplatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
    filter: new Operations\MarketingListSmsTemplatesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listSmsTemplates(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\MarketingListSmsTemplatesRequest](../../Models/Operations/MarketingListSmsTemplatesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\MarketingListSmsTemplatesResponse](../../Models/Operations/MarketingListSmsTemplatesResponse.md)**

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

## createSmsTemplate

Create SMS Template

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

$marketingCreateSmsTemplateRequestDto = new Components\MarketingCreateSmsTemplateRequestDto(
    messages: [
        new Components\SmsMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\SmsMessagesMessageType(
                value: Components\SmsMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createSmsTemplate(
    xAccountId: '<id>',
    marketingCreateSmsTemplateRequestDto: $marketingCreateSmsTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                       | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | The account identifier                                                                                             |
| `marketingCreateSmsTemplateRequestDto`                                                                             | [Components\MarketingCreateSmsTemplateRequestDto](../../Models/Components/MarketingCreateSmsTemplateRequestDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |

### Response

**[?Operations\MarketingCreateSmsTemplateResponse](../../Models/Operations/MarketingCreateSmsTemplateResponse.md)**

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

## getSmsTemplate

Get SMS Template

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

$request = new Operations\MarketingGetSmsTemplateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
);

$response = $sdk->marketing->getSmsTemplate(
    request: $request
);

if ($response->smsTemplateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\MarketingGetSmsTemplateRequest](../../Models/Operations/MarketingGetSmsTemplateRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\MarketingGetSmsTemplateResponse](../../Models/Operations/MarketingGetSmsTemplateResponse.md)**

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

## updateSmsTemplate

Update SMS Template

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

$marketingCreateSmsTemplateRequestDto = new Components\MarketingCreateSmsTemplateRequestDto(
    messages: [
        new Components\SmsMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\SmsMessagesMessageType(
                value: Components\SmsMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updateSmsTemplate(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreateSmsTemplateRequestDto: $marketingCreateSmsTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                       | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | The account identifier                                                                                             |
| `id`                                                                                                               | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `marketingCreateSmsTemplateRequestDto`                                                                             | [Components\MarketingCreateSmsTemplateRequestDto](../../Models/Components/MarketingCreateSmsTemplateRequestDto.md) | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |

### Response

**[?Operations\MarketingUpdateSmsTemplateResponse](../../Models/Operations/MarketingUpdateSmsTemplateResponse.md)**

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

## ~~listOmniChannelTemplates~~

List Omni-Channel Templates

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

$request = new Operations\MarketingListOmniChannelTemplatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
    filter: new Operations\MarketingListOmniChannelTemplatesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listOmniChannelTemplates(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\MarketingListOmniChannelTemplatesRequest](../../Models/Operations/MarketingListOmniChannelTemplatesRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\MarketingListOmniChannelTemplatesResponse](../../Models/Operations/MarketingListOmniChannelTemplatesResponse.md)**

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

## ~~createOmniChannelTemplate~~

Create Omni-Channel Template

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

$marketingCreateTemplateRequestDto = new Components\MarketingCreateTemplateRequestDto(
    messages: [
        new Components\CreateMessage(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\CreateMessageMessageType(
                value: Components\CreateMessageValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createOmniChannelTemplate(
    xAccountId: '<id>',
    marketingCreateTemplateRequestDto: $marketingCreateTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The account identifier                                                                                       |
| `marketingCreateTemplateRequestDto`                                                                          | [Components\MarketingCreateTemplateRequestDto](../../Models/Components/MarketingCreateTemplateRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |

### Response

**[?Operations\MarketingCreateOmniChannelTemplateResponse](../../Models/Operations/MarketingCreateOmniChannelTemplateResponse.md)**

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

## ~~getOmniChannelTemplate~~

Get Omni-Channel Template

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

$request = new Operations\MarketingGetOmniChannelTemplateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
);

$response = $sdk->marketing->getOmniChannelTemplate(
    request: $request
);

if ($response->templateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\MarketingGetOmniChannelTemplateRequest](../../Models/Operations/MarketingGetOmniChannelTemplateRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\MarketingGetOmniChannelTemplateResponse](../../Models/Operations/MarketingGetOmniChannelTemplateResponse.md)**

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

## ~~updateOmniChannelTemplate~~

Update Omni-Channel Template

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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

$marketingCreateTemplateRequestDto = new Components\MarketingCreateTemplateRequestDto(
    messages: [
        new Components\CreateMessage(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\CreateMessageMessageType(
                value: Components\CreateMessageValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updateOmniChannelTemplate(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreateTemplateRequestDto: $marketingCreateTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The account identifier                                                                                       |
| `id`                                                                                                         | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `marketingCreateTemplateRequestDto`                                                                          | [Components\MarketingCreateTemplateRequestDto](../../Models/Components/MarketingCreateTemplateRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |

### Response

**[?Operations\MarketingUpdateOmniChannelTemplateResponse](../../Models/Operations/MarketingUpdateOmniChannelTemplateResponse.md)**

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

## listPushTemplates

List Push Templates

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

$request = new Operations\MarketingListPushTemplatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
    filter: new Operations\MarketingListPushTemplatesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listPushTemplates(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\MarketingListPushTemplatesRequest](../../Models/Operations/MarketingListPushTemplatesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\MarketingListPushTemplatesResponse](../../Models/Operations/MarketingListPushTemplatesResponse.md)**

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

## createPushTemplate

Create Push Template

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

$marketingCreatePushTemplateRequestDto = new Components\MarketingCreatePushTemplateRequestDto(
    messages: [
        new Components\PushMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\PushMessagesMessageType(
                value: Components\PushMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createPushTemplate(
    xAccountId: '<id>',
    marketingCreatePushTemplateRequestDto: $marketingCreatePushTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                         | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | The account identifier                                                                                               |
| `marketingCreatePushTemplateRequestDto`                                                                              | [Components\MarketingCreatePushTemplateRequestDto](../../Models/Components/MarketingCreatePushTemplateRequestDto.md) | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  |

### Response

**[?Operations\MarketingCreatePushTemplateResponse](../../Models/Operations/MarketingCreatePushTemplateResponse.md)**

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

## getPushTemplate

Get Push Template

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

$request = new Operations\MarketingGetPushTemplateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,messages,created_at,updated_at,tags',
);

$response = $sdk->marketing->getPushTemplate(
    request: $request
);

if ($response->pushTemplateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\MarketingGetPushTemplateRequest](../../Models/Operations/MarketingGetPushTemplateRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\MarketingGetPushTemplateResponse](../../Models/Operations/MarketingGetPushTemplateResponse.md)**

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

## updatePushTemplate

Update Push Template

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

$marketingCreatePushTemplateRequestDto = new Components\MarketingCreatePushTemplateRequestDto(
    messages: [
        new Components\PushMessages(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            messageType: new Components\PushMessagesMessageType(
                value: Components\PushMessagesValue::Email,
                sourceValue: 'Email',
            ),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updatePushTemplate(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreatePushTemplateRequestDto: $marketingCreatePushTemplateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                         | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | The account identifier                                                                                               |
| `id`                                                                                                                 | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  |
| `marketingCreatePushTemplateRequestDto`                                                                              | [Components\MarketingCreatePushTemplateRequestDto](../../Models/Components/MarketingCreatePushTemplateRequestDto.md) | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  |

### Response

**[?Operations\MarketingUpdatePushTemplateResponse](../../Models/Operations/MarketingUpdatePushTemplateResponse.md)**

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

## listCampaigns

List campaigns

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

$request = new Operations\MarketingListCampaignsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,description,schedule_type,status,channels,first_sent_at,last_sent_at,tags,messages',
    filter: new Operations\MarketingListCampaignsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listCampaigns(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\MarketingListCampaignsRequest](../../Models/Operations/MarketingListCampaignsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\MarketingListCampaignsResponse](../../Models/Operations/MarketingListCampaignsResponse.md)**

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

## getCampaign

Get campaign

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

$request = new Operations\MarketingGetCampaignRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,description,schedule_type,status,channels,first_sent_at,last_sent_at,tags,messages',
);

$response = $sdk->marketing->getCampaign(
    request: $request
);

if ($response->campaignResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\MarketingGetCampaignRequest](../../Models/Operations/MarketingGetCampaignRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\MarketingGetCampaignResponse](../../Models/Operations/MarketingGetCampaignResponse.md)**

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

## listContentBlocks

List Content Blocks

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

$request = new Operations\MarketingListContentBlocksRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,content,status,tags,created_at,updated_at',
    filter: new Operations\MarketingListContentBlocksQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->marketing->listContentBlocks(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\MarketingListContentBlocksRequest](../../Models/Operations/MarketingListContentBlocksRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\MarketingListContentBlocksResponse](../../Models/Operations/MarketingListContentBlocksResponse.md)**

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

## createContentBlock

Create Content Block

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

$marketingCreateContentBlocksRequestDto = new Components\MarketingCreateContentBlocksRequestDto(
    type: new Components\MarketingCreateContentBlocksRequestDtoType(
        value: Components\MarketingCreateContentBlocksRequestDtoValue::Html,
        sourceValue: 'text',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->createContentBlock(
    xAccountId: '<id>',
    marketingCreateContentBlocksRequestDto: $marketingCreateContentBlocksRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `marketingCreateContentBlocksRequestDto`                                                                               | [Components\MarketingCreateContentBlocksRequestDto](../../Models/Components/MarketingCreateContentBlocksRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingCreateContentBlockResponse](../../Models/Operations/MarketingCreateContentBlockResponse.md)**

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

## getContentBlock

Get Content Blocks

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

$request = new Operations\MarketingGetContentBlockRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,content,status,tags,created_at,updated_at',
);

$response = $sdk->marketing->getContentBlock(
    request: $request
);

if ($response->contentBlockResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\MarketingGetContentBlockRequest](../../Models/Operations/MarketingGetContentBlockRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\MarketingGetContentBlockResponse](../../Models/Operations/MarketingGetContentBlockResponse.md)**

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

## updateContentBlock

Update Content Block

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

$marketingCreateContentBlocksRequestDto = new Components\MarketingCreateContentBlocksRequestDto(
    type: new Components\MarketingCreateContentBlocksRequestDtoType(
        value: Components\MarketingCreateContentBlocksRequestDtoValue::Html,
        sourceValue: 'text',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->marketing->updateContentBlock(
    xAccountId: '<id>',
    id: '<id>',
    marketingCreateContentBlocksRequestDto: $marketingCreateContentBlocksRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                           | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | The account identifier                                                                                                 |
| `id`                                                                                                                   | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `marketingCreateContentBlocksRequestDto`                                                                               | [Components\MarketingCreateContentBlocksRequestDto](../../Models/Components/MarketingCreateContentBlocksRequestDto.md) | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |

### Response

**[?Operations\MarketingUpdateContentBlockResponse](../../Models/Operations/MarketingUpdateContentBlockResponse.md)**

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