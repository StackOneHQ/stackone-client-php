# Documents
(*documents*)

## Overview

### Available Operations

* [downloadFile](#downloadfile) - Download File
* [uploadFile](#uploadfile) - Upload File
* [listFiles](#listfiles) - List Files
* [getFile](#getfile) - Get File
* [listFolders](#listfolders) - List Folders
* [getFolder](#getfolder) - Get Folder
* [listDrives](#listdrives) - List Drives
* [getDrive](#getdrive) - Get Drive

## downloadFile

Download File

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_download_file" method="get" path="/unified/documents/files/{id}/download" -->
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

$request = new Operations\DocumentsDownloadFileRequest(
    xAccountId: '<id>',
    id: '<id>',
    format: 'base64',
    exportFormat: 'text/plain',
);

$response = $sdk->documents->downloadFile(
    request: $request
);

if ($response->body !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\DocumentsDownloadFileRequest](../../Models/Operations/DocumentsDownloadFileRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\DocumentsDownloadFileResponse](../../Models/Operations/DocumentsDownloadFileResponse.md)**

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

## uploadFile

Upload File

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_upload_file" method="post" path="/unified/documents/files/upload" -->
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

$unifiedUploadRequestDto = new Components\UnifiedUploadRequestDto(
    name: 'weather-forecast',
    fileFormat: new Components\UnifiedUploadRequestDtoFileFormat(
        value: Components\UnifiedUploadRequestDtoValue::Pdf,
        sourceValue: 'application/pdf',
    ),
    content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
    categoryId: '6530',
    path: '/path/to/file',
    category: new Components\UnifiedUploadRequestDtoCategory(
        value: 'reports, resumes',
        sourceValue: '550e8400-e29b-41d4-a716-446655440000, CUSTOM_CATEGORY_NAME',
    ),
    confidential: new Components\UnifiedUploadRequestDtoConfidential(
        value: Components\UnifiedUploadRequestDtoConfidentialValue::True,
        sourceValue: 'public',
    ),
);

$response = $sdk->documents->uploadFile(
    xAccountId: '<id>',
    unifiedUploadRequestDto: $unifiedUploadRequestDto

);

if ($response->writeResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `xAccountId`                                                                             | *string*                                                                                 | :heavy_check_mark:                                                                       | The account identifier                                                                   |
| `unifiedUploadRequestDto`                                                                | [Components\UnifiedUploadRequestDto](../../Models/Components/UnifiedUploadRequestDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `xStackoneApiSessionToken`                                                               | *?string*                                                                                | :heavy_minus_sign:                                                                       | The session token                                                                        |

### Response

**[?Operations\DocumentsUploadFileResponse](../../Models/Operations/DocumentsUploadFileResponse.md)**

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

## listFiles

List Files

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_list_files" method="get" path="/unified/documents/files" -->
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

$request = new Operations\DocumentsListFilesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,url,size,file_format,path,owner_id,remote_owner_id,folder_id,remote_folder_id,drive_id,remote_drive_id,export_formats,default_download_format,created_at,updated_at,has_content,has_children,all_parent_folder_ids,remote_all_parent_folder_ids',
    filter: new Operations\DocumentsListFilesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        name: 'john_doe_resume.pdf',
        content: 'FAQ of the project',
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        driveId: '1234567890',
        folderId: '1234567890',
    ),
    folderId: '1234567890',
    nestedItems: 'true',
    include: 'all_parent_folder_ids',
);

$responses = $sdk->documents->listFiles(
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
| `$request`                                                                                   | [Operations\DocumentsListFilesRequest](../../Models/Operations/DocumentsListFilesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\DocumentsListFilesResponse](../../Models/Operations/DocumentsListFilesResponse.md)**

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

## getFile

Get File

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_get_file" method="get" path="/unified/documents/files/{id}" -->
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

$request = new Operations\DocumentsGetFileRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,url,size,file_format,path,owner_id,remote_owner_id,folder_id,remote_folder_id,drive_id,remote_drive_id,export_formats,default_download_format,created_at,updated_at,has_content,has_children,all_parent_folder_ids,remote_all_parent_folder_ids',
    include: 'all_parent_folder_ids',
);

$response = $sdk->documents->getFile(
    request: $request
);

if ($response->fileResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\DocumentsGetFileRequest](../../Models/Operations/DocumentsGetFileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\DocumentsGetFileResponse](../../Models/Operations/DocumentsGetFileResponse.md)**

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

## listFolders

List Folders

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_list_folders" method="get" path="/unified/documents/folders" -->
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

$request = new Operations\DocumentsListFoldersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,url,size,path,owner_id,remote_owner_id,parent_folder_id,remote_parent_folder_id,drive_id,remote_drive_id,created_at,updated_at,has_content,has_children,is_root,all_parent_folder_ids,remote_all_parent_folder_ids',
    filter: new Operations\DocumentsListFoldersQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        driveId: '1234567890',
        folderId: '1234567890',
    ),
    folderId: '1234567890',
    nestedItems: 'true',
    include: 'all_parent_folder_ids',
);

$responses = $sdk->documents->listFolders(
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
| `$request`                                                                                       | [Operations\DocumentsListFoldersRequest](../../Models/Operations/DocumentsListFoldersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\DocumentsListFoldersResponse](../../Models/Operations/DocumentsListFoldersResponse.md)**

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

## getFolder

Get Folder

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_get_folder" method="get" path="/unified/documents/folders/{id}" -->
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

$request = new Operations\DocumentsGetFolderRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,url,size,path,owner_id,remote_owner_id,parent_folder_id,remote_parent_folder_id,drive_id,remote_drive_id,created_at,updated_at,has_content,has_children,is_root,all_parent_folder_ids,remote_all_parent_folder_ids',
    include: 'all_parent_folder_ids',
);

$response = $sdk->documents->getFolder(
    request: $request
);

if ($response->folderResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\DocumentsGetFolderRequest](../../Models/Operations/DocumentsGetFolderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\DocumentsGetFolderResponse](../../Models/Operations/DocumentsGetFolderResponse.md)**

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

## listDrives

List Drives

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_list_drives" method="get" path="/unified/documents/drives" -->
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

$request = new Operations\DocumentsListDrivesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,url,created_at,updated_at',
    filter: new Operations\DocumentsListDrivesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->documents->listDrives(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\DocumentsListDrivesRequest](../../Models/Operations/DocumentsListDrivesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\DocumentsListDrivesResponse](../../Models/Operations/DocumentsListDrivesResponse.md)**

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

## getDrive

Get Drive

### Example Usage

<!-- UsageSnippet language="php" operationID="documents_get_drive" method="get" path="/unified/documents/drives/{id}" -->
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

$request = new Operations\DocumentsGetDriveRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,url,created_at,updated_at',
);

$response = $sdk->documents->getDrive(
    request: $request
);

if ($response->driveResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\DocumentsGetDriveRequest](../../Models/Operations/DocumentsGetDriveRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\DocumentsGetDriveResponse](../../Models/Operations/DocumentsGetDriveResponse.md)**

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