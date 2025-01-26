# Lms
(*lms*)

## Overview

### Available Operations

* [batchUpsertContent](#batchupsertcontent) - Batch Upsert Content
* [batchUpsertCourse](#batchupsertcourse) - Batch Upsert Course
* [createCollection](#createcollection) - Create Collection
* [createUserAssignment](#createuserassignment) - Create User Assignment
* [createUserCompletion](#createusercompletion) - Create User Completion
* [getAssignment](#getassignment) - Get Assignment
* [getCategory](#getcategory) - Get Category
* [getCompletion](#getcompletion) - Get Completion
* [getContent](#getcontent) - Get Content
* [getCourse](#getcourse) - Get Course
* [getSkill](#getskill) - Get Skill
* [getUser](#getuser) - Get User
* [getUserAssignment](#getuserassignment) - Get User Assignment
* [getUserCompletion](#getusercompletion) - Get User Completion
* [listAssignments](#listassignments) - List Assignments
* [listCategories](#listcategories) - List Categories
* [listCompletions](#listcompletions) - List Completions
* [listContent](#listcontent) - List Content
* [listCourses](#listcourses) - List Courses
* [listSkills](#listskills) - List Skills
* [listUserAssignments](#listuserassignments) - List User Assignments
* [listUserCompletions](#listusercompletions) - List User Completions
* [listUsers](#listusers) - List Users
* [updateCollection](#updatecollection) - Update Collection
* [upsertContent](#upsertcontent) - Upsert Content
* [upsertCourse](#upsertcourse) - Upsert Course

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
            shortDescription: 'This course is a valuable resource and acts as learning content for...',
            languages: [
                new Components\LanguageEnum(
                    value: Components\LanguageEnumValue::EnGB,
                ),
            ],
            contentUrl: 'https://www.youtube.com/watch?v=16873',
            coverUrl: 'https://www.googledrive.com/?v=16873',
            active: true,
            duration: 'P3Y6M4DT12H30M5S',
            skills: [
                new Components\CreateSkillsApiModel(
                    id: '12345',
                    name: 'Sales Techniques',
                ),
            ],
            order: 1,
            provider: 'Content Provider',
            categories: [
                new Components\CreateCategoriesApiModel(
                    id: '16873-IT345',
                    unifiedCustomFields: [
                        'my_project_custom_field_1' => 'REF-1236',
                        'my_project_custom_field_2' => 'some other value',
                    ],
                    name: 'Information-Technology',
                    language: new Components\Language(
                        value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
                    ),
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

## batchUpsertCourse

Batch Upsert Course

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

$lmsBatchUpsertCourseRequestDto = new Components\LmsBatchUpsertCourseRequestDto(
    items: [
        new Components\LmsUpsertCourseRequestDto(
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
            contentIds: [
                '16873-SOFTWARE-ENG-Content',
            ],
            title: 'Software Engineer Lv 1',
            description: 'This course acts as learning content for software engineers.',
            languages: [
                new Components\LanguageEnum(
                    value: Components\LanguageEnumValue::EnGB,
                ),
            ],
            coverUrl: 'https://www.googledrive.com/?v=16873',
            url: 'https://www.linkedinlearning.com/?v=16873',
            active: true,
            duration: 'P3Y6M4DT12H30M5S',
            provider: 'Course Provider',
            categories: [
                new Components\CreateCategoriesApiModel(
                    id: '16873-IT345',
                    unifiedCustomFields: [
                        'my_project_custom_field_1' => 'REF-1236',
                        'my_project_custom_field_2' => 'some other value',
                    ],
                    name: 'Information-Technology',
                    language: new Components\Language(
                        value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
                    ),
                ),
            ],
            skills: [
                new Components\CreateSkillsApiModel(
                    id: '16873-IT345',
                    name: 'Information-Technology',
                ),
            ],
            content: [
                new Components\CreateContentApiModel(
                    title: 'Software Engineer Lv 1',
                    description: 'This video acts as learning content for software engineers.',
                    contentUrl: 'https://www.youtube.com/watch?v=16873',
                    order: 1,
                ),
            ],
        ),
    ],
);

$response = $sdk->lms->batchUpsertCourse(
    xAccountId: '<id>',
    lmsBatchUpsertCourseRequestDto: $lmsBatchUpsertCourseRequestDto

);

if ($response->batchResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `lmsBatchUpsertCourseRequestDto`                                                                       | [Components\LmsBatchUpsertCourseRequestDto](../../Models/Components/LmsBatchUpsertCourseRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\LmsBatchUpsertCourseResponse](../../Models/Operations/LmsBatchUpsertCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCollection

Create Collection

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

$lmsCreateCollectionRequestDto = new Components\LmsCreateCollectionRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-collection-1',
    learningObjectIds: [
        '16873-SOFTWARE-ENG-COURSE',
        '16874-SOFTWARE-ENG-COURSE',
    ],
    remoteLearningObjectIds: [
        'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        'e3cb75bf-aa84-466e-a6c1-b8322b257a49',
    ],
    title: 'Software Engineer Lv 1 Collection',
    description: 'This collection acts as learning pathway for software engineers.',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    categories: [
        new Components\CreateCategoriesApiModel(
            id: '16873-IT345',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Information-Technology',
            language: new Components\Language(
                value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
            ),
        ),
    ],
    skills: [
        new Components\CreateSkillsApiModel(
            id: '16873-IT345',
            name: 'Information-Technology',
        ),
    ],
);

$response = $sdk->lms->createCollection(
    xAccountId: '<id>',
    lmsCreateCollectionRequestDto: $lmsCreateCollectionRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                         | *string*                                                                                             | :heavy_check_mark:                                                                                   | The account identifier                                                                               |
| `lmsCreateCollectionRequestDto`                                                                      | [Components\LmsCreateCollectionRequestDto](../../Models/Components/LmsCreateCollectionRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\LmsCreateCollectionResponse](../../Models/Operations/LmsCreateCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUserAssignment

Create User Assignment

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

$lmsCreateAssignmentRequestDto = new Components\LmsCreateAssignmentRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    externalReference: 'e3gd34-23tr21-er234-345er56',
    learningObjectId: 'e3gd34-23tr21-er234-345er56',
    learningObjectExternalReference: 'learning-content-123',
    progress: 40,
    createdAt: '2021-07-21T14:00:00.000Z',
    dueDate: '2021-07-21T14:00:00.000Z',
    status: new Components\LmsCreateAssignmentRequestDtoStatus(
        value: Components\LmsCreateAssignmentRequestDtoValue::Pending,
    ),
);

$response = $sdk->lms->createUserAssignment(
    xAccountId: '<id>',
    id: '<id>',
    lmsCreateAssignmentRequestDto: $lmsCreateAssignmentRequestDto

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
| `lmsCreateAssignmentRequestDto`                                                                      | [Components\LmsCreateAssignmentRequestDto](../../Models/Components/LmsCreateAssignmentRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\LmsCreateUserAssignmentResponse](../../Models/Operations/LmsCreateUserAssignmentResponse.md)**

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
    externalReference: 'e3gd34-23tr21-er234-345er56',
    completedAt: '2021-07-21T14:00:00.000Z',
    learningObjectId: 'e3gd34-23tr21-er234-345er56',
    learningObjectExternalReference: 'learning-content-123',
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
    fields: 'id,remote_id,name,active,level,language',
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
    fields: 'id,remote_id,external_reference,course_ids,remote_course_ids,title,description,short_description,languages,content_url,content_type,cover_url,active,duration,order,categories,skills,updated_at,created_at,provider',
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
    fields: 'id,remote_id,external_reference,content_ids,remote_content_ids,title,description,languages,cover_url,url,active,duration,categories,skills,updated_at,created_at,content,provider',
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
    fields: 'id,remote_id,external_reference,user_id,remote_user_id,course_id,remote_course_id,updated_at,created_at,due_date,status,progress,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
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
    fields: 'id,remote_id,name,active,level,language',
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
    fields: 'id,remote_id,external_id,remote_external_id,external_reference,content_id,remote_content_id,course_id,remote_course_id,user_id,remote_user_id,completed_at,updated_at,created_at,result,content_external_reference,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
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
    fields: 'id,remote_id,external_reference,course_ids,remote_course_ids,title,description,short_description,languages,content_url,content_type,cover_url,active,duration,order,categories,skills,updated_at,created_at,provider',
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
    fields: 'id,remote_id,external_reference,content_ids,remote_content_ids,title,description,languages,cover_url,url,active,duration,categories,skills,updated_at,created_at,content,provider',
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
    fields: 'id,remote_id,external_reference,user_id,remote_user_id,course_id,remote_course_id,updated_at,created_at,due_date,status,progress,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
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
    fields: 'id,remote_id,external_id,remote_external_id,external_reference,content_id,remote_content_id,course_id,remote_course_id,user_id,remote_user_id,completed_at,updated_at,created_at,result,content_external_reference,learning_object_type,learning_object_id,remote_learning_object_id,learning_object_external_reference',
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

## updateCollection

Update Collection

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

$lmsCreateCollectionRequestDto = new Components\LmsCreateCollectionRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-collection-1',
    learningObjectIds: [
        '16873-SOFTWARE-ENG-COURSE',
        '16874-SOFTWARE-ENG-COURSE',
    ],
    remoteLearningObjectIds: [
        'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        'e3cb75bf-aa84-466e-a6c1-b8322b257a49',
    ],
    title: 'Software Engineer Lv 1 Collection',
    description: 'This collection acts as learning pathway for software engineers.',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    categories: [
        new Components\CreateCategoriesApiModel(
            id: '16873-IT345',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Information-Technology',
            language: new Components\Language(
                value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
            ),
        ),
    ],
    skills: [
        new Components\CreateSkillsApiModel(
            id: '16873-IT345',
            name: 'Information-Technology',
        ),
    ],
);

$response = $sdk->lms->updateCollection(
    xAccountId: '<id>',
    id: '<id>',
    lmsCreateCollectionRequestDto: $lmsCreateCollectionRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                         | *string*                                                                                             | :heavy_check_mark:                                                                                   | The account identifier                                                                               |
| `id`                                                                                                 | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `lmsCreateCollectionRequestDto`                                                                      | [Components\LmsCreateCollectionRequestDto](../../Models/Components/LmsCreateCollectionRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\LmsUpdateCollectionResponse](../../Models/Operations/LmsUpdateCollectionResponse.md)**

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
    shortDescription: 'This course is a valuable resource and acts as learning content for...',
    languages: [
        new Components\LanguageEnum(
            value: Components\LanguageEnumValue::EnGB,
        ),
    ],
    contentUrl: 'https://www.youtube.com/watch?v=16873',
    coverUrl: 'https://www.googledrive.com/?v=16873',
    active: true,
    duration: 'P3Y6M4DT12H30M5S',
    skills: [
        new Components\CreateSkillsApiModel(
            id: '12345',
            name: 'Sales Techniques',
        ),
    ],
    order: 1,
    provider: 'Content Provider',
    categories: [
        new Components\CreateCategoriesApiModel(
            id: '16873-IT345',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Information-Technology',
            language: new Components\Language(
                value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
            ),
        ),
    ],
);

$response = $sdk->lms->upsertContent(
    xAccountId: '<id>',
    lmsUpsertContentRequestDto: $lmsUpsertContentRequestDto

);

if ($response->upsertResult !== null) {
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

## upsertCourse

Upsert Course

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

$lmsUpsertCourseRequestDto = new Components\LmsUpsertCourseRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    externalReference: 'SOFTWARE-ENG-LV1-TRAINING-VIDEO-1',
    contentIds: [
        '16873-SOFTWARE-ENG-Content',
    ],
    title: 'Software Engineer Lv 1',
    description: 'This course acts as learning content for software engineers.',
    languages: [
        new Components\LanguageEnum(
            value: Components\LanguageEnumValue::EnGB,
        ),
    ],
    coverUrl: 'https://www.googledrive.com/?v=16873',
    url: 'https://www.linkedinlearning.com/?v=16873',
    active: true,
    duration: 'P3Y6M4DT12H30M5S',
    provider: 'Course Provider',
    categories: [
        new Components\CreateCategoriesApiModel(
            id: '16873-IT345',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            name: 'Information-Technology',
            language: new Components\Language(
                value: Components\CreateCategoriesApiModelLanguageValue::EnGB,
            ),
        ),
    ],
    skills: [
        new Components\CreateSkillsApiModel(
            id: '16873-IT345',
            name: 'Information-Technology',
        ),
    ],
    content: [
        new Components\CreateContentApiModel(
            title: 'Software Engineer Lv 1',
            description: 'This video acts as learning content for software engineers.',
            contentUrl: 'https://www.youtube.com/watch?v=16873',
            order: 1,
        ),
    ],
);

$response = $sdk->lms->upsertCourse(
    xAccountId: '<id>',
    lmsUpsertCourseRequestDto: $lmsUpsertCourseRequestDto

);

if ($response->upsertResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                 | *string*                                                                                     | :heavy_check_mark:                                                                           | The account identifier                                                                       |
| `lmsUpsertCourseRequestDto`                                                                  | [Components\LmsUpsertCourseRequestDto](../../Models/Components/LmsUpsertCourseRequestDto.md) | :heavy_check_mark:                                                                           | N/A                                                                                          |

### Response

**[?Operations\LmsUpsertCourseResponse](../../Models/Operations/LmsUpsertCourseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |