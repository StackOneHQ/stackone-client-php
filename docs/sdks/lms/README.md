# Lms
(*lms*)

## Overview

### Available Operations

* [listCourses](#listcourses) - List Courses
* [getCourse](#getcourse) - Get Course
* [listUserAssignments](#listuserassignments) - List User Assignments
* [getUserAssignment](#getuserassignment) - Get User Assignment
* [batchUpsertContent](#batchupsertcontent) - Batch Upsert Content
* [listContent](#listcontent) - List Content
* [upsertContent](#upsertcontent) - Upsert Content
* [createContent](#createcontent) - Create Content
* [getContent](#getcontent) - Get Content
* [deleteContent](#deletecontent) - Delete Content
* [updateContent](#updatecontent) - Update Content
* [listUserCompletions](#listusercompletions) - List User Completions
* [createUserCompletion](#createusercompletion) - Create User Completion
* [getUserCompletion](#getusercompletion) - Get User Completion
* [listCompletions](#listcompletions) - List Completions
* [getCompletion](#getcompletion) - Get Completion
* [getCategory](#getcategory) - Get Category
* [listCategories](#listcategories) - List Categories
* [listUsers](#listusers) - List Users
* [getUser](#getuser) - Get User
* [getSkill](#getskill) - Get Skill
* [listSkills](#listskills) - List Skills
* [listAssignments](#listassignments) - List Assignments
* [getAssignment](#getassignment) - Get Assignment

## listCourses

List Courses

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListCoursesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,external_reference,content_ids,remote_content_ids,title,description,languages,course_type,cover_url,url,active,duration,categories,skills,updated_at,created_at',
    filter: new Operations\LmsListCoursesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listCourses(
    request: $request
);

if ($response->coursePaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\LmsListCoursesRequest](../../Models/Operations/LmsListCoursesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\LmsListCoursesResponse](../../Models/Operations/LmsListCoursesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCourse

Get Course

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetCourseRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,external_reference,content_ids,remote_content_ids,title,description,languages,course_type,cover_url,url,active,duration,categories,skills,updated_at,created_at',
);

$response = $sdk->lms->getCourse(
    request: $request
);

if ($response->courseResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\LmsGetCourseRequest](../../Models/Operations/LmsGetCourseRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\LmsGetCourseResponse](../../Models/Operations/LmsGetCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUserAssignments

List User Assignments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListUserAssignmentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,user_id,remote_user_id,course_id,remote_course_id,updated_at,created_at,due_date,status,progress,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
    filter: new Operations\LmsListUserAssignmentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    userId: 'c28xyrc55866bvuv',
    remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
);

$response = $sdk->lms->listUserAssignments(
    request: $request
);

if ($response->assignmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\LmsListUserAssignmentsRequest](../../Models/Operations/LmsListUserAssignmentsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\LmsListUserAssignmentsResponse](../../Models/Operations/LmsListUserAssignmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUserAssignment

Get User Assignment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetUserAssignmentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
);

$response = $sdk->lms->getUserAssignment(
    request: $request
);

if ($response->assignmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\LmsGetUserAssignmentRequest](../../Models/Operations/LmsGetUserAssignmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\LmsGetUserAssignmentResponse](../../Models/Operations/LmsGetUserAssignmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## batchUpsertContent

Batch Upsert Content

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

$lmsBatchUpsertContentRequestDto = new Components\LmsBatchUpsertContentRequestDto(
    items: [
        new Components\LmsUpsertContentRequestDto(
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
            courseIds: [
                '16873-SOFTWARE-ENG-COURSE',
            ],
            title: 'Software Engineer Lv 1',
            description: 'This video acts as learning content for software engineers.',
            languages: [
                new Components\ContentLanguageEnum(
                    value: Components\ContentLanguageEnumValue::EnGB,
                ),
            ],
            contentUrl: 'https://www.youtube.com/watch?v=16873',
            coverUrl: 'https://www.googledrive.com/?v=16873',
            active: true,
            duration: 'P3Y6M4DT12H30M5S',
            contentLaunchMethod: new Components\ContentLaunchMethod(),
            order: 1,
            categories: [
                new Components\CreateCategoriesApiModel(
                    unifiedCustomFields: [
                        'my_project_custom_field_1' => 'REF-1236',
                        'my_project_custom_field_2' => 'some other value',
                    ],
                    name: 'Technology',
                    active: true,
                ),
            ],
        ),
    ],
);

$response = $sdk->lms->batchUpsertContent(
    xAccountId: '<id>',
    lmsBatchUpsertContentRequestDto: $lmsBatchUpsertContentRequestDto

);

if ($response->batchResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                             | *string*                                                                                                 | :heavy_check_mark:                                                                                       | The account identifier                                                                                   |
| `lmsBatchUpsertContentRequestDto`                                                                        | [Components\LmsBatchUpsertContentRequestDto](../../Models/Components/LmsBatchUpsertContentRequestDto.md) | :heavy_check_mark:                                                                                       | N/A                                                                                                      |

### Response

**[?Operations\LmsBatchUpsertContentResponse](../../Models/Operations/LmsBatchUpsertContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listContent

List Content

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListContentRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,external_reference,course_ids,remote_course_ids,title,description,languages,content_url,content_type,cover_url,active,duration,categories,order,content_launch_method',
    filter: new Operations\LmsListContentQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listContent(
    request: $request
);

if ($response->contentPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\LmsListContentRequest](../../Models/Operations/LmsListContentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\LmsListContentResponse](../../Models/Operations/LmsListContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## upsertContent

Upsert Content

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

$lmsUpsertContentRequestDto = new Components\LmsUpsertContentRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
    courseIds: [
        '16873-SOFTWARE-ENG-COURSE',
    ],
    title: 'Software Engineer Lv 1',
    description: 'This video acts as learning content for software engineers.',
    languages: [
        new Components\ContentLanguageEnum(
            value: Components\ContentLanguageEnumValue::EnGB,
        ),
    ],
    contentUrl: 'https://www.youtube.com/watch?v=16873',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    active: true,
    duration: 'P3Y6M4DT12H30M5S',
    contentLaunchMethod: new Components\ContentLaunchMethod(),
    order: 1,
    categories: [
        new Components\CreateCategoriesApiModel(
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Technology',
            active: true,
        ),
    ],
);

$response = $sdk->lms->upsertContent(
    xAccountId: '<id>',
    lmsUpsertContentRequestDto: $lmsUpsertContentRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | The account identifier                                                                         |
| `lmsUpsertContentRequestDto`                                                                   | [Components\LmsUpsertContentRequestDto](../../Models/Components/LmsUpsertContentRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\LmsUpsertContentResponse](../../Models/Operations/LmsUpsertContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createContent

Create Content

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

$lmsCreateContentRequestDto = new Components\LmsCreateContentRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
    courseIds: [
        '16873-SOFTWARE-ENG-COURSE',
    ],
    title: 'Software Engineer Lv 1',
    description: 'This video acts as learning content for software engineers.',
    languages: [
        new Components\ContentLanguageEnum(
            value: Components\ContentLanguageEnumValue::EnGB,
        ),
    ],
    contentUrl: 'https://www.youtube.com/watch?v=16873',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    active: true,
    duration: 'P3Y6M4DT12H30M5S',
    contentLaunchMethod: new Components\LmsCreateContentRequestDtoContentLaunchMethod(),
    order: 1,
    categories: [
        new Components\CreateCategoriesApiModel(
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Technology',
            active: true,
        ),
    ],
);

$response = $sdk->lms->createContent(
    xAccountId: '<id>',
    lmsCreateContentRequestDto: $lmsCreateContentRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | The account identifier                                                                         |
| `lmsCreateContentRequestDto`                                                                   | [Components\LmsCreateContentRequestDto](../../Models/Components/LmsCreateContentRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\LmsCreateContentResponse](../../Models/Operations/LmsCreateContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getContent

Get Content

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetContentRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,external_reference,course_ids,remote_course_ids,title,description,languages,content_url,content_type,cover_url,active,duration,categories,order,content_launch_method',
);

$response = $sdk->lms->getContent(
    request: $request
);

if ($response->contentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\LmsGetContentRequest](../../Models/Operations/LmsGetContentRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\LmsGetContentResponse](../../Models/Operations/LmsGetContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## deleteContent

Delete Content

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



$response = $sdk->lms->deleteContent(
    xAccountId: '<id>',
    id: '<id>'

);

if ($response->deleteResult !== null) {
    // handle response
}
```

### Parameters

| Parameter              | Type                   | Required               | Description            |
| ---------------------- | ---------------------- | ---------------------- | ---------------------- |
| `xAccountId`           | *string*               | :heavy_check_mark:     | The account identifier |
| `id`                   | *string*               | :heavy_check_mark:     | N/A                    |

### Response

**[?Operations\LmsDeleteContentResponse](../../Models/Operations/LmsDeleteContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateContent

Update Content

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

$lmsCreateContentRequestDto = new Components\LmsCreateContentRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
    courseIds: [
        '16873-SOFTWARE-ENG-COURSE',
    ],
    title: 'Software Engineer Lv 1',
    description: 'This video acts as learning content for software engineers.',
    languages: [
        new Components\ContentLanguageEnum(
            value: Components\ContentLanguageEnumValue::EnGB,
        ),
    ],
    contentUrl: 'https://www.youtube.com/watch?v=16873',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    active: true,
    duration: 'P3Y6M4DT12H30M5S',
    contentLaunchMethod: new Components\LmsCreateContentRequestDtoContentLaunchMethod(),
    order: 1,
    categories: [
        new Components\CreateCategoriesApiModel(
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Technology',
            active: true,
        ),
    ],
);

$response = $sdk->lms->updateContent(
    xAccountId: '<id>',
    id: '<id>',
    lmsCreateContentRequestDto: $lmsCreateContentRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | The account identifier                                                                         |
| `id`                                                                                           | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `lmsCreateContentRequestDto`                                                                   | [Components\LmsCreateContentRequestDto](../../Models/Components/LmsCreateContentRequestDto.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\LmsUpdateContentResponse](../../Models/Operations/LmsUpdateContentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUserCompletions

List User Completions

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListUserCompletionsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,external_id,remote_external_id,content_id,remote_content_id,course_id,remote_course_id,user_id,remote_user_id,completed_at,updated_at,created_at,result,content_external_reference,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
    filter: new Operations\LmsListUserCompletionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listUserCompletions(
    request: $request
);

if ($response->completionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\LmsListUserCompletionsRequest](../../Models/Operations/LmsListUserCompletionsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\LmsListUserCompletionsResponse](../../Models/Operations/LmsListUserCompletionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUserCompletion

Create User Completion

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

$lmsCreateCompletionRequestDto = new Components\LmsCreateCompletionRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    externalId: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1-COMPLETION',
    contentExternalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1-CONTENT',
    contentId: '16873-ENG-VIDEO-1',
    completedAt: '2021-07-21T14:00:00.000Z',
);

$response = $sdk->lms->createUserCompletion(
    xAccountId: '<id>',
    id: '<id>',
    lmsCreateCompletionRequestDto: $lmsCreateCompletionRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                         | *string*                                                                                             | :heavy_check_mark:                                                                                   | The account identifier                                                                               |
| `id`                                                                                                 | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `lmsCreateCompletionRequestDto`                                                                      | [Components\LmsCreateCompletionRequestDto](../../Models/Components/LmsCreateCompletionRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\LmsCreateUserCompletionResponse](../../Models/Operations/LmsCreateUserCompletionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUserCompletion

Get User Completion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetUserCompletionRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
);

$response = $sdk->lms->getUserCompletion(
    request: $request
);

if ($response->completionResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\LmsGetUserCompletionRequest](../../Models/Operations/LmsGetUserCompletionRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\LmsGetUserCompletionResponse](../../Models/Operations/LmsGetUserCompletionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCompletions

List Completions

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListCompletionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,external_id,remote_external_id,content_id,remote_content_id,course_id,remote_course_id,user_id,remote_user_id,completed_at,updated_at,created_at,result,content_external_reference,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
    filter: new Operations\LmsListCompletionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listCompletions(
    request: $request
);

if ($response->completionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\LmsListCompletionsRequest](../../Models/Operations/LmsListCompletionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\LmsListCompletionsResponse](../../Models/Operations/LmsListCompletionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCompletion

Get Completion

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetCompletionRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getCompletion(
    request: $request
);

if ($response->completionResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\LmsGetCompletionRequest](../../Models/Operations/LmsGetCompletionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\LmsGetCompletionResponse](../../Models/Operations/LmsGetCompletionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCategory

Get Category

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetCategoryRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active,level',
);

$response = $sdk->lms->getCategory(
    request: $request
);

if ($response->categoryResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\LmsGetCategoryRequest](../../Models/Operations/LmsGetCategoryRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\LmsGetCategoryResponse](../../Models/Operations/LmsGetCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCategories

List Categories

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListCategoriesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active,level',
    filter: new Operations\LmsListCategoriesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listCategories(
    request: $request
);

if ($response->categoriesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\LmsListCategoriesRequest](../../Models/Operations/LmsListCategoriesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\LmsListCategoriesResponse](../../Models/Operations/LmsListCategoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUsers

List Users

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListUsersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,external_reference,active,email,phone_number,created_at,updated_at,name',
    filter: new Operations\LmsListUsersQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listUsers(
    request: $request
);

if ($response->usersPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\LmsListUsersRequest](../../Models/Operations/LmsListUsersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\LmsListUsersResponse](../../Models/Operations/LmsListUsersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUser

Get User

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetUserRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,external_reference,active,email,phone_number,created_at,updated_at,name',
);

$response = $sdk->lms->getUser(
    request: $request
);

if ($response->userResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\LmsGetUserRequest](../../Models/Operations/LmsGetUserRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\LmsGetUserResponse](../../Models/Operations/LmsGetUserResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getSkill

Get Skill

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetSkillRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active,level',
);

$response = $sdk->lms->getSkill(
    request: $request
);

if ($response->skillResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\LmsGetSkillRequest](../../Models/Operations/LmsGetSkillRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\LmsGetSkillResponse](../../Models/Operations/LmsGetSkillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSkills

List Skills

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListSkillsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active,level',
    filter: new Operations\LmsListSkillsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->lms->listSkills(
    request: $request
);

if ($response->skillsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\LmsListSkillsRequest](../../Models/Operations/LmsListSkillsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\LmsListSkillsResponse](../../Models/Operations/LmsListSkillsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAssignments

List Assignments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsListAssignmentsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,user_id,remote_user_id,course_id,remote_course_id,updated_at,created_at,due_date,status,progress,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
    filter: new Operations\LmsListAssignmentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    userId: 'c28xyrc55866bvuv',
    remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
);

$response = $sdk->lms->listAssignments(
    request: $request
);

if ($response->assignmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\LmsListAssignmentsRequest](../../Models/Operations/LmsListAssignmentsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\LmsListAssignmentsResponse](../../Models/Operations/LmsListAssignmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssignment

Get Assignment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$request = new Operations\LmsGetAssignmentRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->lms->getAssignment(
    request: $request
);

if ($response->assignmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\LmsGetAssignmentRequest](../../Models/Operations/LmsGetAssignmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\LmsGetAssignmentResponse](../../Models/Operations/LmsGetAssignmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |