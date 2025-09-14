# Ats
(*ats*)

## Overview

### Available Operations

* [listApplications](#listapplications) - List Applications
* [createApplication](#createapplication) - Create Application
* [getApplication](#getapplication) - Get Application
* [updateApplication](#updateapplication) - Update Application
* [listApplicationsOffers](#listapplicationsoffers) - List Application Offers
* [moveApplication](#moveapplication) - Move Application
* [rejectApplication](#rejectapplication) - Reject Application
* [getApplicationOffer](#getapplicationoffer) - Get Application Offer
* [listApplicationScorecards](#listapplicationscorecards) - List Application Scorecards
* [getApplicationScorecard](#getapplicationscorecard) - Get Application Scorecard
* [listApplicationChanges](#listapplicationchanges) - List Application Changes
* [listApplicationNotes](#listapplicationnotes) - List Application Notes
* [createApplicationNote](#createapplicationnote) - Create Application Note
* [getApplicationNote](#getapplicationnote) - Get Application Note
* [updateApplicationNote](#updateapplicationnote) - Update Application Note
* [listApplicationsScheduledInterviews](#listapplicationsscheduledinterviews) - List Applications scheduled interviews
* [getApplicationScheduledInterview](#getapplicationscheduledinterview) - Get Applications scheduled interview
* [uploadApplicationDocument](#uploadapplicationdocument) - Upload Application Document
* [downloadApplicationDocument](#downloadapplicationdocument) - Download Application Document
* [listApplicationDocuments](#listapplicationdocuments) - List Application Documents
* [getApplicationDocument](#getapplicationdocument) - Get Application Document
* [listCandidates](#listcandidates) - List Candidates
* [createCandidate](#createcandidate) - Create Candidate
* [getCandidate](#getcandidate) - Get Candidate
* [updateCandidate](#updatecandidate) - Update Candidate
* [listCandidateNotes](#listcandidatenotes) - List Candidate Notes
* [createCandidateNote](#createcandidatenote) - Create Candidate Note
* [getCandidateNote](#getcandidatenote) - Get Candidate Note
* [listApplicationCustomFieldDefinitions](#listapplicationcustomfielddefinitions) - List Application Custom Field Definitions
* [getApplicationCustomFieldDefinition](#getapplicationcustomfielddefinition) - Get Application Custom Field Definition
* [listCandidateCustomFieldDefinitions](#listcandidatecustomfielddefinitions) - List Candidate Custom Field Definitions
* [getCandidateCustomFieldDefinition](#getcandidatecustomfielddefinition) - Get Candidate Custom Field Definition
* [listJobCustomFieldDefinitions](#listjobcustomfielddefinitions) - List Job Custom Field Definitions
* [getJobCustomFieldDefinition](#getjobcustomfielddefinition) - Get Job Custom Field Definition
* [listDepartments](#listdepartments) - List Departments
* [getDepartment](#getdepartment) - Get Department
* [~~listInterviewStages~~](#listinterviewstages) - List Interview Stages :warning: **Deprecated**
* [~~getInterviewStage~~](#getinterviewstage) - Get Interview Stage :warning: **Deprecated**
* [listApplicationStages](#listapplicationstages) - List Application Stages
* [getApplicationStage](#getapplicationstage) - Get Application Stage
* [listInterviews](#listinterviews) - List Interviews
* [getInterview](#getinterview) - Get Interview
* [listJobs](#listjobs) - List Jobs
* [createJob](#createjob) - Create Job
* [listJobApplicationStages](#listjobapplicationstages) - List Job Application Stages
* [getJob](#getjob) - Get Job
* [updateJob](#updatejob) - Update Job
* [getJobApplicationStage](#getjobapplicationstage) - Get Job Application Stage
* [listLists](#listlists) - Get all Lists
* [getList](#getlist) - Get List
* [listLocations](#listlocations) - List locations
* [getLocation](#getlocation) - Get Location
* [listRejectedReasons](#listrejectedreasons) - List Rejected Reasons
* [getRejectedReason](#getrejectedreason) - Get Rejected Reason
* [listUsers](#listusers) - List Users
* [getUser](#getuser) - Get User
* [listJobPostings](#listjobpostings) - List Job Postings
* [getJobPosting](#getjobposting) - Get Job Posting
* [listOffers](#listoffers) - List Offers
* [createOffer](#createoffer) - Create Offer
* [getOffer](#getoffer) - Get Offer
* [listAssessmentsPackages](#listassessmentspackages) - List Assessments Packages
* [getAssessmentsPackage](#getassessmentspackage) - Get Assessments Package
* [orderAssessmentsRequest](#orderassessmentsrequest) - Order Assessments Request
* [updateAssessmentsResult](#updateassessmentsresult) - Update Assessments Result
* [listBackgroundCheckPackages](#listbackgroundcheckpackages) - List Background Check Packages
* [createBackgroundCheckPackage](#createbackgroundcheckpackage) - Create Background Check Package
* [getBackgroundCheckPackage](#getbackgroundcheckpackage) - Get Background Check Package
* [deleteBackgroundCheckPackage](#deletebackgroundcheckpackage) - Delete Background Check Package
* [updateBackgroundCheckPackage](#updatebackgroundcheckpackage) - Update Background Check Package
* [orderBackgroundCheckRequest](#orderbackgroundcheckrequest) - Order Background Check Request
* [updateBackgroundCheckResult](#updatebackgroundcheckresult) - Update Background Check Result
* [listApplicationDocumentCategories](#listapplicationdocumentcategories) - List Application Document Categories
* [getApplicationDocumentCategory](#getapplicationdocumentcategory) - Get Application Document Category

## listApplications

List Applications

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_applications" method="get" path="/unified/ats/applications" -->
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

$request = new Operations\AtsListApplicationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,job_posting_id,remote_job_posting_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
    filter: new Operations\AtsListApplicationsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'documents',
    include: 'attachments,custom_fields',
);

$responses = $sdk->ats->listApplications(
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
| `$request`                                                                                     | [Operations\AtsListApplicationsRequest](../../Models/Operations/AtsListApplicationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\AtsListApplicationsResponse](../../Models/Operations/AtsListApplicationsResponse.md)**

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

## createApplication

Create Application

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_application" method="post" path="/unified/ats/applications" -->
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

$atsCreateApplicationRequestDto = new Components\AtsCreateApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    jobId: '4071538b-3cac-4fbf-ac76-f78ed250ffdd',
    jobPostingId: '1c702a20-8de8-4d03-ac18-cbf4ac42eb51',
    locationId: 'dd8d41d1-5eb8-4408-9c87-9ba44604eae4',
    applicationStatus: null,
    questionnaires: [
        new Components\CreateQuestionnaire(
            id: 'right_to_work',
            answers: [
                new Components\CreateAnswer(
                    id: 'answer1',
                    type: new Components\CreateAnswerType(
                        value: Components\CreateAnswerValue::ShortText,
                        sourceValue: 'Short Text',
                    ),
                    values: [
                        'Yes',
                    ],
                ),
            ],
        ),
    ],
    source: new Components\AtsCreateApplicationRequestDtoSource(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'LinkedIn',
    ),
    candidateId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
    candidate: new Components\AtsCreateApplicationRequestDtoCandidate(
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        unifiedCustomFields: [
            'my_project_custom_field_1' => 'REF-1236',
            'my_project_custom_field_2' => 'some other value',
        ],
        phoneNumbers: [
            new Components\PhoneNumber(
                phone: '+447700112233',
            ),
        ],
        name: 'Romain Sestier',
        firstName: 'Romain',
        lastName: 'Sestier',
        email: 'sestier.romain123@gmail.com',
        socialLinks: [
            new Components\SocialLink(
                type: 'linkedin',
                url: 'https://www.linkedin.com/in/romainsestier/',
            ),
        ],
        company: 'Company Inc.',
        title: 'Software Engineer',
        hiredAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        country: 'United States',
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
    ),
    documents: [
        new Components\AtsDocumentsUploadRequestDto(
            name: 'weather-forecast',
            fileFormat: new Components\AtsDocumentsUploadRequestDtoFileFormat(
                value: Components\AtsDocumentsUploadRequestDtoValue::Pdf,
                sourceValue: 'application/pdf',
            ),
            content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
            categoryId: '6530',
            path: '/path/to/file',
            confidential: new Components\AtsDocumentsUploadRequestDtoConfidential(
                value: Components\AtsDocumentsUploadRequestDtoConfidentialValue::True,
                sourceValue: 'public',
            ),
            category: null,
        ),
    ],
);

$response = $sdk->ats->createApplication(
    xAccountId: '<id>',
    atsCreateApplicationRequestDto: $atsCreateApplicationRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `atsCreateApplicationRequestDto`                                                                       | [Components\AtsCreateApplicationRequestDto](../../Models/Components/AtsCreateApplicationRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\AtsCreateApplicationResponse](../../Models/Operations/AtsCreateApplicationResponse.md)**

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

## getApplication

Get Application

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application" method="get" path="/unified/ats/applications/{id}" -->
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

$request = new Operations\AtsGetApplicationRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,job_posting_id,remote_job_posting_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
    expand: 'documents',
    include: 'attachments,custom_fields',
);

$response = $sdk->ats->getApplication(
    request: $request
);

if ($response->applicationResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\AtsGetApplicationRequest](../../Models/Operations/AtsGetApplicationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\AtsGetApplicationResponse](../../Models/Operations/AtsGetApplicationResponse.md)**

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

## updateApplication

Update Application

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_application" method="patch" path="/unified/ats/applications/{id}" -->
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

$atsUpdateApplicationRequestDto = new Components\AtsUpdateApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
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
    applicationStatus: new Components\AtsUpdateApplicationRequestDtoApplicationStatus(
        value: Components\AtsUpdateApplicationRequestDtoValue::Hired,
        sourceValue: 'Hired',
    ),
    source: new Components\AtsUpdateApplicationRequestDtoSource(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'LinkedIn',
    ),
);

$response = $sdk->ats->updateApplication(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateApplicationRequestDto: $atsUpdateApplicationRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `id`                                                                                                   | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `atsUpdateApplicationRequestDto`                                                                       | [Components\AtsUpdateApplicationRequestDto](../../Models/Components/AtsUpdateApplicationRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\AtsUpdateApplicationResponse](../../Models/Operations/AtsUpdateApplicationResponse.md)**

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

## listApplicationsOffers

List Application Offers

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_applications_offers" method="get" path="/unified/ats/applications/{id}/offers" -->
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

$request = new Operations\AtsListApplicationsOffersRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
    filter: new Operations\AtsListApplicationsOffersQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationsOffers(
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
| `$request`                                                                                                 | [Operations\AtsListApplicationsOffersRequest](../../Models/Operations/AtsListApplicationsOffersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AtsListApplicationsOffersResponse](../../Models/Operations/AtsListApplicationsOffersResponse.md)**

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

## moveApplication

Move Application

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_move_application" method="post" path="/unified/ats/applications/{id}/move" -->
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

$atsMoveApplicationRequestDto = new Components\AtsMoveApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    interviewStageId: 'f223d7f6-908b-48f0-9237-b201c307f609',
);

$response = $sdk->ats->moveApplication(
    xAccountId: '<id>',
    id: '<id>',
    atsMoveApplicationRequestDto: $atsMoveApplicationRequestDto

);

if ($response->moveApplicationResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `atsMoveApplicationRequestDto`                                                                     | [Components\AtsMoveApplicationRequestDto](../../Models/Components/AtsMoveApplicationRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\AtsMoveApplicationResponse](../../Models/Operations/AtsMoveApplicationResponse.md)**

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

## rejectApplication

Reject Application

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_reject_application" method="post" path="/unified/ats/applications/{id}/reject" -->
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

$atsRejectApplicationRequestDto = new Components\AtsRejectApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    rejectedReasonId: 'f223d7f6-908b-48f0-9237-b201c307f609',
);

$response = $sdk->ats->rejectApplication(
    xAccountId: '<id>',
    id: '<id>',
    atsRejectApplicationRequestDto: $atsRejectApplicationRequestDto

);

if ($response->rejectApplicationResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `id`                                                                                                   | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `atsRejectApplicationRequestDto`                                                                       | [Components\AtsRejectApplicationRequestDto](../../Models/Components/AtsRejectApplicationRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\AtsRejectApplicationResponse](../../Models/Operations/AtsRejectApplicationResponse.md)**

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

## getApplicationOffer

Get Application Offer

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_offer" method="get" path="/unified/ats/applications/{id}/offers/{subResourceId}" -->
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

$request = new Operations\AtsGetApplicationOfferRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
);

$response = $sdk->ats->getApplicationOffer(
    request: $request
);

if ($response->offersResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AtsGetApplicationOfferRequest](../../Models/Operations/AtsGetApplicationOfferRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsGetApplicationOfferResponse](../../Models/Operations/AtsGetApplicationOfferResponse.md)**

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

## listApplicationScorecards

List Application Scorecards

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_scorecards" method="get" path="/unified/ats/applications/{id}/scorecards" -->
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

$request = new Operations\AtsListApplicationScorecardsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,sections,label,candidate_id,remote_candidate_id,application_id,remote_application_id,interview_id,remote_interview_id,author_id,remote_author_id,overall_recommendation,created_at,updated_at',
    filter: new Operations\AtsListApplicationScorecardsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationScorecards(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AtsListApplicationScorecardsRequest](../../Models/Operations/AtsListApplicationScorecardsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AtsListApplicationScorecardsResponse](../../Models/Operations/AtsListApplicationScorecardsResponse.md)**

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

## getApplicationScorecard

Get Application Scorecard

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_scorecard" method="get" path="/unified/ats/applications/{id}/scorecards/{subResourceId}" -->
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

$request = new Operations\AtsGetApplicationScorecardRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,sections,label,candidate_id,remote_candidate_id,application_id,remote_application_id,interview_id,remote_interview_id,author_id,remote_author_id,overall_recommendation,created_at,updated_at',
);

$response = $sdk->ats->getApplicationScorecard(
    request: $request
);

if ($response->scorecardsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AtsGetApplicationScorecardRequest](../../Models/Operations/AtsGetApplicationScorecardRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AtsGetApplicationScorecardResponse](../../Models/Operations/AtsGetApplicationScorecardResponse.md)**

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

## listApplicationChanges

List Application Changes

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_changes" method="get" path="/unified/ats/applications/{id}/changes" -->
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

$request = new Operations\AtsListApplicationChangesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'event_id,remote_event_id,created_at,effective_at,change_type,actor,new_values',
    filter: new Operations\AtsListApplicationChangesQueryParamFilter(
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationChanges(
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
| `$request`                                                                                                 | [Operations\AtsListApplicationChangesRequest](../../Models/Operations/AtsListApplicationChangesRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AtsListApplicationChangesResponse](../../Models/Operations/AtsListApplicationChangesResponse.md)**

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

## listApplicationNotes

List Application Notes

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_notes" method="get" path="/unified/ats/applications/{id}/notes" -->
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

$request = new Operations\AtsListApplicationNotesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,content,author_id,remote_author_id,visibility,created_at,updated_at,deleted_at',
    filter: new Operations\AtsListApplicationNotesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationNotes(
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
| `$request`                                                                                             | [Operations\AtsListApplicationNotesRequest](../../Models/Operations/AtsListApplicationNotesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\AtsListApplicationNotesResponse](../../Models/Operations/AtsListApplicationNotesResponse.md)**

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

## createApplicationNote

Create Application Note

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_application_note" method="post" path="/unified/ats/applications/{id}/notes" -->
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

$atsCreateNotesRequestDto = new Components\AtsCreateNotesRequestDto(
    content: [
        new Components\NoteContentApiModel(
            body: 'This candidate seems like a good fit for the role',
        ),
    ],
    authorId: '1234567890',
    visibility: new Components\AtsCreateNotesRequestDtoVisibility(
        value: Components\AtsCreateNotesRequestDtoValue::Public,
        sourceValue: 'Public',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->createApplicationNote(
    xAccountId: '<id>',
    id: '<id>',
    atsCreateNotesRequestDto: $atsCreateNotesRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The account identifier                                                                     |
| `id`                                                                                       | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `atsCreateNotesRequestDto`                                                                 | [Components\AtsCreateNotesRequestDto](../../Models/Components/AtsCreateNotesRequestDto.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\AtsCreateApplicationNoteResponse](../../Models/Operations/AtsCreateApplicationNoteResponse.md)**

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

## getApplicationNote

Get Application Note

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_note" method="get" path="/unified/ats/applications/{id}/notes/{subResourceId}" -->
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

$request = new Operations\AtsGetApplicationNoteRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,content,author_id,remote_author_id,visibility,created_at,updated_at,deleted_at',
);

$response = $sdk->ats->getApplicationNote(
    request: $request
);

if ($response->noteResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AtsGetApplicationNoteRequest](../../Models/Operations/AtsGetApplicationNoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AtsGetApplicationNoteResponse](../../Models/Operations/AtsGetApplicationNoteResponse.md)**

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

## updateApplicationNote

Update Application Note

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_application_note" method="patch" path="/unified/ats/applications/{id}/notes/{subResourceId}" -->
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

$atsUpdateNotesRequestDto = new Components\AtsUpdateNotesRequestDto(
    content: [
        new Components\NoteContentApiModel(
            body: 'This candidate seems like a good fit for the role',
        ),
    ],
    authorId: '1234567890',
    visibility: new Components\AtsUpdateNotesRequestDtoVisibility(
        value: Components\AtsUpdateNotesRequestDtoValue::Public,
        sourceValue: 'Public',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->updateApplicationNote(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    atsUpdateNotesRequestDto: $atsUpdateNotesRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The account identifier                                                                     |
| `id`                                                                                       | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `subResourceId`                                                                            | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `atsUpdateNotesRequestDto`                                                                 | [Components\AtsUpdateNotesRequestDto](../../Models/Components/AtsUpdateNotesRequestDto.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\AtsUpdateApplicationNoteResponse](../../Models/Operations/AtsUpdateApplicationNoteResponse.md)**

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

## listApplicationsScheduledInterviews

List Applications scheduled interviews

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_applications_scheduled_interviews" method="get" path="/unified/ats/applications/{id}/scheduled_interviews" -->
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

$request = new Operations\AtsListApplicationsScheduledInterviewsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,interview_stage_id,remote_interview_stage_id,interview_stage,status,interview_status,interviewer_ids,remote_interviewer_ids,interview_parts,interviewers,start_at,end_at,meeting_url,created_at,updated_at',
    filter: new Operations\AtsListApplicationsScheduledInterviewsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationsScheduledInterviews(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\AtsListApplicationsScheduledInterviewsRequest](../../Models/Operations/AtsListApplicationsScheduledInterviewsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\AtsListApplicationsScheduledInterviewsResponse](../../Models/Operations/AtsListApplicationsScheduledInterviewsResponse.md)**

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

## getApplicationScheduledInterview

Get Applications scheduled interview

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_scheduled_interview" method="get" path="/unified/ats/applications/{id}/scheduled_interviews/{subResourceId}" -->
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

$request = new Operations\AtsGetApplicationScheduledInterviewRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,job_posting_id,remote_job_posting_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
);

$response = $sdk->ats->getApplicationScheduledInterview(
    request: $request
);

if ($response->scheduledInterviewsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\AtsGetApplicationScheduledInterviewRequest](../../Models/Operations/AtsGetApplicationScheduledInterviewRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\AtsGetApplicationScheduledInterviewResponse](../../Models/Operations/AtsGetApplicationScheduledInterviewResponse.md)**

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

## uploadApplicationDocument

Upload Application Document

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_upload_application_document" method="post" path="/unified/ats/applications/{id}/documents/upload" -->
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

$atsDocumentsUploadRequestDto = new Components\AtsDocumentsUploadRequestDto(
    name: 'weather-forecast',
    fileFormat: null,
    content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
    categoryId: '6530',
    path: '/path/to/file',
    confidential: new Components\AtsDocumentsUploadRequestDtoConfidential(
        value: Components\AtsDocumentsUploadRequestDtoConfidentialValue::True,
        sourceValue: 'public',
    ),
    category: new Components\AtsDocumentsUploadRequestDtoCategory(),
);

$response = $sdk->ats->uploadApplicationDocument(
    xAccountId: '<id>',
    id: '<id>',
    atsDocumentsUploadRequestDto: $atsDocumentsUploadRequestDto

);

if ($response->writeResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `atsDocumentsUploadRequestDto`                                                                     | [Components\AtsDocumentsUploadRequestDto](../../Models/Components/AtsDocumentsUploadRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\AtsUploadApplicationDocumentResponse](../../Models/Operations/AtsUploadApplicationDocumentResponse.md)**

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

## downloadApplicationDocument

Download Application Document

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_download_application_document" method="get" path="/unified/ats/applications/{id}/documents/{subResourceId}/download" -->
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

$request = new Operations\AtsDownloadApplicationDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    format: 'base64',
    exportFormat: 'text/plain',
);

$response = $sdk->ats->downloadApplicationDocument(
    request: $request
);

if ($response->body !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AtsDownloadApplicationDocumentRequest](../../Models/Operations/AtsDownloadApplicationDocumentRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AtsDownloadApplicationDocumentResponse](../../Models/Operations/AtsDownloadApplicationDocumentResponse.md)**

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

## listApplicationDocuments

List Application Documents

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_documents" method="get" path="/unified/ats/applications/{id}/documents" -->
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

$request = new Operations\AtsListApplicationDocumentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
    filter: new Operations\AtsListApplicationDocumentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationDocuments(
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
| `$request`                                                                                                     | [Operations\AtsListApplicationDocumentsRequest](../../Models/Operations/AtsListApplicationDocumentsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AtsListApplicationDocumentsResponse](../../Models/Operations/AtsListApplicationDocumentsResponse.md)**

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

## getApplicationDocument

Get Application Document

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_document" method="get" path="/unified/ats/applications/{id}/documents/{subResourceId}" -->
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

$request = new Operations\AtsGetApplicationDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
);

$response = $sdk->ats->getApplicationDocument(
    request: $request
);

if ($response->atsDocumentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AtsGetApplicationDocumentRequest](../../Models/Operations/AtsGetApplicationDocumentRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AtsGetApplicationDocumentResponse](../../Models/Operations/AtsGetApplicationDocumentResponse.md)**

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

## listCandidates

List Candidates

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_candidates" method="get" path="/unified/ats/candidates" -->
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

$request = new Operations\AtsListCandidatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,first_name,last_name,email,emails,social_links,phone,phone_numbers,company,country,title,application_ids,remote_application_ids,hired_at,custom_fields,created_at,updated_at',
    filter: new Operations\AtsListCandidatesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    include: 'custom_fields',
);

$responses = $sdk->ats->listCandidates(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\AtsListCandidatesRequest](../../Models/Operations/AtsListCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\AtsListCandidatesResponse](../../Models/Operations/AtsListCandidatesResponse.md)**

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

## createCandidate

Create Candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_candidate" method="post" path="/unified/ats/candidates" -->
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

$atsCreateCandidateRequestDto = new Components\AtsCreateCandidateRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    phoneNumbers: [
        new Components\PhoneNumber(
            phone: '+447700112233',
        ),
    ],
    name: 'Romain Sestier',
    firstName: 'Romain',
    lastName: 'Sestier',
    email: 'sestier.romain123@gmail.com',
    socialLinks: [
        new Components\SocialLink(
            type: 'linkedin',
            url: 'https://www.linkedin.com/in/romainsestier/',
        ),
    ],
    company: 'Company Inc.',
    title: 'Software Engineer',
    hiredAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    country: 'United States',
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
);

$response = $sdk->ats->createCandidate(
    xAccountId: '<id>',
    atsCreateCandidateRequestDto: $atsCreateCandidateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `atsCreateCandidateRequestDto`                                                                     | [Components\AtsCreateCandidateRequestDto](../../Models/Components/AtsCreateCandidateRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\AtsCreateCandidateResponse](../../Models/Operations/AtsCreateCandidateResponse.md)**

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

## getCandidate

Get Candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_candidate" method="get" path="/unified/ats/candidates/{id}" -->
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

$request = new Operations\AtsGetCandidateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,first_name,last_name,email,emails,social_links,phone,phone_numbers,company,country,title,application_ids,remote_application_ids,hired_at,custom_fields,created_at,updated_at',
    include: 'custom_fields',
);

$response = $sdk->ats->getCandidate(
    request: $request
);

if ($response->candidateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\AtsGetCandidateRequest](../../Models/Operations/AtsGetCandidateRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\AtsGetCandidateResponse](../../Models/Operations/AtsGetCandidateResponse.md)**

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

## updateCandidate

Update Candidate

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_candidate" method="patch" path="/unified/ats/candidates/{id}" -->
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

$atsUpdateCandidateRequestDto = new Components\AtsUpdateCandidateRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    name: 'Romain Sestier',
    firstName: 'Romain',
    lastName: 'Sestier',
    email: 'sestier.romain123@gmail.com',
    emails: [
        new Components\CandidateEmail(
            type: 'personal',
            value: 'sestier.romain123@gmail.com',
        ),
    ],
    socialLinks: [
        new Components\SocialLink(
            type: 'linkedin',
            url: 'https://www.linkedin.com/in/romainsestier/',
        ),
    ],
    phoneNumbers: [
        new Components\PhoneNumber(
            phone: '+447700112233',
        ),
    ],
    company: 'Company Inc.',
    title: 'Software Engineer',
    applicationIds: [
        '123e4567-e89b-12d3-a456-426614174000',
        '523e1234-e89b-fdd2-a456-762545121101',
    ],
    hiredAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    country: 'United States',
    customFields: null,
);

$response = $sdk->ats->updateCandidate(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateCandidateRequestDto: $atsUpdateCandidateRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `atsUpdateCandidateRequestDto`                                                                     | [Components\AtsUpdateCandidateRequestDto](../../Models/Components/AtsUpdateCandidateRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\AtsUpdateCandidateResponse](../../Models/Operations/AtsUpdateCandidateResponse.md)**

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

## listCandidateNotes

List Candidate Notes

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_candidate_notes" method="get" path="/unified/ats/candidates/{id}/notes" -->
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

$request = new Operations\AtsListCandidateNotesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,content,author_id,remote_author_id,visibility,created_at,updated_at,deleted_at',
    filter: new Operations\AtsListCandidateNotesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listCandidateNotes(
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
| `$request`                                                                                         | [Operations\AtsListCandidateNotesRequest](../../Models/Operations/AtsListCandidateNotesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AtsListCandidateNotesResponse](../../Models/Operations/AtsListCandidateNotesResponse.md)**

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

## createCandidateNote

Create Candidate Note

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_candidate_note" method="post" path="/unified/ats/candidates/{id}/notes" -->
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

$atsCreateNotesRequestDto = new Components\AtsCreateNotesRequestDto(
    content: [
        new Components\NoteContentApiModel(
            body: 'This candidate seems like a good fit for the role',
        ),
    ],
    authorId: '1234567890',
    visibility: new Components\AtsCreateNotesRequestDtoVisibility(
        value: Components\AtsCreateNotesRequestDtoValue::Public,
        sourceValue: 'Public',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->createCandidateNote(
    xAccountId: '<id>',
    id: '<id>',
    atsCreateNotesRequestDto: $atsCreateNotesRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The account identifier                                                                     |
| `id`                                                                                       | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `atsCreateNotesRequestDto`                                                                 | [Components\AtsCreateNotesRequestDto](../../Models/Components/AtsCreateNotesRequestDto.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\AtsCreateCandidateNoteResponse](../../Models/Operations/AtsCreateCandidateNoteResponse.md)**

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

## getCandidateNote

Get Candidate Note

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_candidate_note" method="get" path="/unified/ats/candidates/{id}/notes/{subResourceId}" -->
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

$request = new Operations\AtsGetCandidateNoteRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,content,author_id,remote_author_id,visibility,created_at,updated_at,deleted_at',
);

$response = $sdk->ats->getCandidateNote(
    request: $request
);

if ($response->noteResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\AtsGetCandidateNoteRequest](../../Models/Operations/AtsGetCandidateNoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\AtsGetCandidateNoteResponse](../../Models/Operations/AtsGetCandidateNoteResponse.md)**

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

## listApplicationCustomFieldDefinitions

List Application Custom Field Definitions

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_custom_field_definitions" method="get" path="/unified/ats/custom_field_definitions/applications" -->
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

$request = new Operations\AtsListApplicationCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: null,
);

$responses = $sdk->ats->listApplicationCustomFieldDefinitions(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [Operations\AtsListApplicationCustomFieldDefinitionsRequest](../../Models/Operations/AtsListApplicationCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |

### Response

**[?Operations\AtsListApplicationCustomFieldDefinitionsResponse](../../Models/Operations/AtsListApplicationCustomFieldDefinitionsResponse.md)**

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

## getApplicationCustomFieldDefinition

Get Application Custom Field Definition

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_custom_field_definition" method="get" path="/unified/ats/custom_field_definitions/applications/{id}" -->
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

$request = new Operations\AtsGetApplicationCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: null,
);

$response = $sdk->ats->getApplicationCustomFieldDefinition(
    request: $request
);

if ($response->customFieldDefinitionResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\AtsGetApplicationCustomFieldDefinitionRequest](../../Models/Operations/AtsGetApplicationCustomFieldDefinitionRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\AtsGetApplicationCustomFieldDefinitionResponse](../../Models/Operations/AtsGetApplicationCustomFieldDefinitionResponse.md)**

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

## listCandidateCustomFieldDefinitions

List Candidate Custom Field Definitions

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_candidate_custom_field_definitions" method="get" path="/unified/ats/custom_field_definitions/candidates" -->
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

$request = new Operations\AtsListCandidateCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsListCandidateCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listCandidateCustomFieldDefinitions(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\AtsListCandidateCustomFieldDefinitionsRequest](../../Models/Operations/AtsListCandidateCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\AtsListCandidateCustomFieldDefinitionsResponse](../../Models/Operations/AtsListCandidateCustomFieldDefinitionsResponse.md)**

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

## getCandidateCustomFieldDefinition

Get Candidate Custom Field Definition

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_candidate_custom_field_definition" method="get" path="/unified/ats/custom_field_definitions/candidates/{id}" -->
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

$request = new Operations\AtsGetCandidateCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsGetCandidateCustomFieldDefinitionQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$response = $sdk->ats->getCandidateCustomFieldDefinition(
    request: $request
);

if ($response->customFieldDefinitionResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\AtsGetCandidateCustomFieldDefinitionRequest](../../Models/Operations/AtsGetCandidateCustomFieldDefinitionRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\AtsGetCandidateCustomFieldDefinitionResponse](../../Models/Operations/AtsGetCandidateCustomFieldDefinitionResponse.md)**

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

## listJobCustomFieldDefinitions

List Job Custom Field Definitions

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_job_custom_field_definitions" method="get" path="/unified/ats/custom_field_definitions/jobs" -->
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

$request = new Operations\AtsListJobCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsListJobCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listJobCustomFieldDefinitions(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\AtsListJobCustomFieldDefinitionsRequest](../../Models/Operations/AtsListJobCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\AtsListJobCustomFieldDefinitionsResponse](../../Models/Operations/AtsListJobCustomFieldDefinitionsResponse.md)**

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

## getJobCustomFieldDefinition

Get Job Custom Field Definition

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_job_custom_field_definition" method="get" path="/unified/ats/custom_field_definitions/jobs/{id}" -->
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

$request = new Operations\AtsGetJobCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsGetJobCustomFieldDefinitionQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$response = $sdk->ats->getJobCustomFieldDefinition(
    request: $request
);

if ($response->customFieldDefinitionResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\AtsGetJobCustomFieldDefinitionRequest](../../Models/Operations/AtsGetJobCustomFieldDefinitionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AtsGetJobCustomFieldDefinitionResponse](../../Models/Operations/AtsGetJobCustomFieldDefinitionResponse.md)**

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

## listDepartments

List Departments

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_departments" method="get" path="/unified/ats/departments" -->
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

$request = new Operations\AtsListDepartmentsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name',
    filter: new Operations\AtsListDepartmentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listDepartments(
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
| `$request`                                                                                   | [Operations\AtsListDepartmentsRequest](../../Models/Operations/AtsListDepartmentsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AtsListDepartmentsResponse](../../Models/Operations/AtsListDepartmentsResponse.md)**

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

## getDepartment

Get Department

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_department" method="get" path="/unified/ats/departments/{id}" -->
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

$request = new Operations\AtsGetDepartmentRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name',
);

$response = $sdk->ats->getDepartment(
    request: $request
);

if ($response->departmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsGetDepartmentRequest](../../Models/Operations/AtsGetDepartmentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsGetDepartmentResponse](../../Models/Operations/AtsGetDepartmentResponse.md)**

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

## ~~listInterviewStages~~

List Interview Stages

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_interview_stages" method="get" path="/unified/ats/interview_stages" -->
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

$request = new Operations\AtsListInterviewStagesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
    filter: new Operations\AtsListInterviewStagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listInterviewStages(
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
| `$request`                                                                                           | [Operations\AtsListInterviewStagesRequest](../../Models/Operations/AtsListInterviewStagesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsListInterviewStagesResponse](../../Models/Operations/AtsListInterviewStagesResponse.md)**

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

## ~~getInterviewStage~~

Get Interview Stage

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_interview_stage" method="get" path="/unified/ats/interview_stages/{id}" -->
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

$request = new Operations\AtsGetInterviewStageRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
);

$response = $sdk->ats->getInterviewStage(
    request: $request
);

if ($response->interviewStageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\AtsGetInterviewStageRequest](../../Models/Operations/AtsGetInterviewStageRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\AtsGetInterviewStageResponse](../../Models/Operations/AtsGetInterviewStageResponse.md)**

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

## listApplicationStages

List Application Stages

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_stages" method="get" path="/unified/ats/application_stages" -->
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

$request = new Operations\AtsListApplicationStagesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
    filter: new Operations\AtsListApplicationStagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationStages(
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
| `$request`                                                                                               | [Operations\AtsListApplicationStagesRequest](../../Models/Operations/AtsListApplicationStagesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AtsListApplicationStagesResponse](../../Models/Operations/AtsListApplicationStagesResponse.md)**

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

## getApplicationStage

Get Application Stage

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_stage" method="get" path="/unified/ats/application_stages/{id}" -->
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

$request = new Operations\AtsGetApplicationStageRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
);

$response = $sdk->ats->getApplicationStage(
    request: $request
);

if ($response->interviewStageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AtsGetApplicationStageRequest](../../Models/Operations/AtsGetApplicationStageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsGetApplicationStageResponse](../../Models/Operations/AtsGetApplicationStageResponse.md)**

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

## listInterviews

List Interviews

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_interviews" method="get" path="/unified/ats/interviews" -->
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

$request = new Operations\AtsListInterviewsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,interview_stage_id,remote_interview_stage_id,interview_stage,status,interview_status,interviewer_ids,remote_interviewer_ids,interview_parts,interviewers,start_at,end_at,meeting_url,created_at,updated_at',
    filter: new Operations\AtsListInterviewsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listInterviews(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\AtsListInterviewsRequest](../../Models/Operations/AtsListInterviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\AtsListInterviewsResponse](../../Models/Operations/AtsListInterviewsResponse.md)**

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

## getInterview

Get Interview

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_interview" method="get" path="/unified/ats/interviews/{id}" -->
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

$request = new Operations\AtsGetInterviewRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,interview_stage_id,remote_interview_stage_id,interview_stage,status,interview_status,interviewer_ids,remote_interviewer_ids,interview_parts,interviewers,start_at,end_at,meeting_url,created_at,updated_at',
);

$response = $sdk->ats->getInterview(
    request: $request
);

if ($response->interviewsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\AtsGetInterviewRequest](../../Models/Operations/AtsGetInterviewRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\AtsGetInterviewResponse](../../Models/Operations/AtsGetInterviewResponse.md)**

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

## listJobs

List Jobs

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_jobs" method="get" path="/unified/ats/jobs" -->
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

$request = new Operations\AtsListJobsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,code,title,description,status,job_status,department_ids,remote_department_ids,location_ids,remote_location_ids,hiring_team,interview_stages,confidential,custom_fields,created_at,updated_at',
    filter: new Operations\AtsListJobsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'job_postings,interview_stages',
    include: 'custom_fields',
);

$responses = $sdk->ats->listJobs(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\AtsListJobsRequest](../../Models/Operations/AtsListJobsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\AtsListJobsResponse](../../Models/Operations/AtsListJobsResponse.md)**

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

## createJob

Create Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_job" method="post" path="/unified/ats/jobs" -->
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

$atsCreateJobRequestDto = new Components\AtsCreateJobRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    code: '184919',
    title: 'Software Engineer',
    description: 'Responsible for identifying business requirements',
    jobStatus: new Components\AtsCreateJobRequestDtoJobStatus(
        value: Components\AtsCreateJobRequestDtoValue::Published,
        sourceValue: 'Published',
    ),
    departmentIds: [
        '308570',
        '308571',
        '308572',
    ],
    locationIds: [
        '668570',
        '678571',
        '688572',
    ],
    hiringTeam: [
        new Components\AtsJobHiringTeam(
            userId: '123456',
            remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
            firstName: 'John',
            lastName: 'Doe',
            email: 'john.doe@gmail.com',
            role: 'Software Engineer',
        ),
    ],
    interviewStages: [
        new Components\InterviewStage(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
            updatedAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        ),
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

$response = $sdk->ats->createJob(
    xAccountId: '<id>',
    atsCreateJobRequestDto: $atsCreateJobRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `xAccountId`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | The account identifier                                                                 |
| `atsCreateJobRequestDto`                                                               | [Components\AtsCreateJobRequestDto](../../Models/Components/AtsCreateJobRequestDto.md) | :heavy_check_mark:                                                                     | N/A                                                                                    |

### Response

**[?Operations\AtsCreateJobResponse](../../Models/Operations/AtsCreateJobResponse.md)**

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

## listJobApplicationStages

List Job Application Stages

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_job_application_stages" method="get" path="/unified/ats/jobs/{id}/application_stages" -->
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

$request = new Operations\AtsListJobApplicationStagesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
    filter: new Operations\AtsListJobApplicationStagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listJobApplicationStages(
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
| `$request`                                                                                                     | [Operations\AtsListJobApplicationStagesRequest](../../Models/Operations/AtsListJobApplicationStagesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AtsListJobApplicationStagesResponse](../../Models/Operations/AtsListJobApplicationStagesResponse.md)**

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

## getJob

Get Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_job" method="get" path="/unified/ats/jobs/{id}" -->
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

$request = new Operations\AtsGetJobRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,code,title,description,status,job_status,department_ids,remote_department_ids,location_ids,remote_location_ids,hiring_team,interview_stages,confidential,custom_fields,created_at,updated_at',
    expand: 'job_postings,interview_stages',
    include: 'custom_fields',
);

$response = $sdk->ats->getJob(
    request: $request
);

if ($response->atsJobResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\AtsGetJobRequest](../../Models/Operations/AtsGetJobRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\AtsGetJobResponse](../../Models/Operations/AtsGetJobResponse.md)**

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

## updateJob

Update Job

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_job" method="patch" path="/unified/ats/jobs/{id}" -->
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

$atsUpdateJobRequestDto = new Components\AtsUpdateJobRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    code: '184919',
    title: 'Software Engineer',
    description: 'Responsible for identifying business requirements',
    jobStatus: new Components\AtsUpdateJobRequestDtoJobStatus(
        value: Components\AtsUpdateJobRequestDtoValue::Published,
        sourceValue: 'Published',
    ),
    departmentIds: [
        '308570',
        '308571',
        '308572',
    ],
    locationIds: [
        '668570',
        '678571',
        '688572',
    ],
    hiringTeam: [
        new Components\AtsJobHiringTeam(
            userId: '123456',
            remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
            firstName: 'John',
            lastName: 'Doe',
            email: 'john.doe@gmail.com',
            role: 'Software Engineer',
        ),
    ],
    interviewStages: null,
    customFields: null,
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->updateJob(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateJobRequestDto: $atsUpdateJobRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `xAccountId`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | The account identifier                                                                 |
| `id`                                                                                   | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `atsUpdateJobRequestDto`                                                               | [Components\AtsUpdateJobRequestDto](../../Models/Components/AtsUpdateJobRequestDto.md) | :heavy_check_mark:                                                                     | N/A                                                                                    |

### Response

**[?Operations\AtsUpdateJobResponse](../../Models/Operations/AtsUpdateJobResponse.md)**

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

## getJobApplicationStage

Get Job Application Stage

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_job_application_stage" method="get" path="/unified/ats/jobs/{id}/application_stages/{subResourceId}" -->
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

$request = new Operations\AtsGetJobApplicationStageRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
);

$response = $sdk->ats->getJobApplicationStage(
    request: $request
);

if ($response->applicationStageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AtsGetJobApplicationStageRequest](../../Models/Operations/AtsGetJobApplicationStageRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AtsGetJobApplicationStageResponse](../../Models/Operations/AtsGetJobApplicationStageResponse.md)**

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

<!-- UsageSnippet language="php" operationID="ats_list_lists" method="get" path="/unified/ats/lists" -->
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

$request = new Operations\AtsListListsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,items,type',
    filter: null,
);

$responses = $sdk->ats->listLists(
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
| `$request`                                                                       | [Operations\AtsListListsRequest](../../Models/Operations/AtsListListsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\AtsListListsResponse](../../Models/Operations/AtsListListsResponse.md)**

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

<!-- UsageSnippet language="php" operationID="ats_get_list" method="get" path="/unified/ats/lists/{id}" -->
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

$request = new Operations\AtsGetListRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,items,type',
);

$response = $sdk->ats->getList(
    request: $request
);

if ($response->listResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\AtsGetListRequest](../../Models/Operations/AtsGetListRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\AtsGetListResponse](../../Models/Operations/AtsGetListResponse.md)**

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

## listLocations

List locations

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_locations" method="get" path="/unified/ats/locations" -->
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

$request = new Operations\AtsListLocationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name',
    filter: new Operations\AtsListLocationsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listLocations(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsListLocationsRequest](../../Models/Operations/AtsListLocationsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsListLocationsResponse](../../Models/Operations/AtsListLocationsResponse.md)**

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

## getLocation

Get Location

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_location" method="get" path="/unified/ats/locations/{id}" -->
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

$request = new Operations\AtsGetLocationRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name',
);

$response = $sdk->ats->getLocation(
    request: $request
);

if ($response->atsLocationResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\AtsGetLocationRequest](../../Models/Operations/AtsGetLocationRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\AtsGetLocationResponse](../../Models/Operations/AtsGetLocationResponse.md)**

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

## listRejectedReasons

List Rejected Reasons

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_rejected_reasons" method="get" path="/unified/ats/rejected_reasons" -->
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

$request = new Operations\AtsListRejectedReasonsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,label,type,rejected_reason_type',
    filter: new Operations\AtsListRejectedReasonsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listRejectedReasons(
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
| `$request`                                                                                           | [Operations\AtsListRejectedReasonsRequest](../../Models/Operations/AtsListRejectedReasonsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsListRejectedReasonsResponse](../../Models/Operations/AtsListRejectedReasonsResponse.md)**

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

## getRejectedReason

Get Rejected Reason

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_rejected_reason" method="get" path="/unified/ats/rejected_reasons/{id}" -->
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

$request = new Operations\AtsGetRejectedReasonRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,label,type,rejected_reason_type',
);

$response = $sdk->ats->getRejectedReason(
    request: $request
);

if ($response->rejectedReasonResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\AtsGetRejectedReasonRequest](../../Models/Operations/AtsGetRejectedReasonRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\AtsGetRejectedReasonResponse](../../Models/Operations/AtsGetRejectedReasonResponse.md)**

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

List Users

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_users" method="get" path="/unified/ats/users" -->
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

$request = new Operations\AtsListUsersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,email,phone',
    filter: null,
);

$responses = $sdk->ats->listUsers(
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
| `$request`                                                                       | [Operations\AtsListUsersRequest](../../Models/Operations/AtsListUsersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\AtsListUsersResponse](../../Models/Operations/AtsListUsersResponse.md)**

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

Get User

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_user" method="get" path="/unified/ats/users/{id}" -->
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

$request = new Operations\AtsGetUserRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,email,phone',
);

$response = $sdk->ats->getUser(
    request: $request
);

if ($response->userResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\AtsGetUserRequest](../../Models/Operations/AtsGetUserRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\AtsGetUserResponse](../../Models/Operations/AtsGetUserResponse.md)**

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

## listJobPostings

List Job Postings

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_job_postings" method="get" path="/unified/ats/job_postings" -->
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

$request = new Operations\AtsListJobPostingsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,title,locations,internal,status,job_id,remote_job_id,content,compensation,employment_type,employment_contract_type,external_url,external_apply_url,questionnaires,start_date,updated_at,created_at',
    filter: new Operations\AtsListJobPostingsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        createdAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    include: 'questionnaires',
);

$responses = $sdk->ats->listJobPostings(
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
| `$request`                                                                                   | [Operations\AtsListJobPostingsRequest](../../Models/Operations/AtsListJobPostingsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AtsListJobPostingsResponse](../../Models/Operations/AtsListJobPostingsResponse.md)**

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

## getJobPosting

Get Job Posting

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_job_posting" method="get" path="/unified/ats/job_postings/{id}" -->
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

$request = new Operations\AtsGetJobPostingRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,title,locations,internal,status,job_id,remote_job_id,content,compensation,employment_type,employment_contract_type,external_url,external_apply_url,questionnaires,start_date,updated_at,created_at',
    include: 'questionnaires',
);

$response = $sdk->ats->getJobPosting(
    request: $request
);

if ($response->jobPostingResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsGetJobPostingRequest](../../Models/Operations/AtsGetJobPostingRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsGetJobPostingResponse](../../Models/Operations/AtsGetJobPostingResponse.md)**

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

## listOffers

List Offers

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_offers" method="get" path="/unified/ats/offers" -->
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

$request = new Operations\AtsListOffersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
    filter: new Operations\AtsListOffersQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listOffers(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\AtsListOffersRequest](../../Models/Operations/AtsListOffersRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\AtsListOffersResponse](../../Models/Operations/AtsListOffersResponse.md)**

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

## createOffer

Create Offer

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_offer" method="post" path="/unified/ats/offers" -->
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

$atsCreateOfferRequestDto = new Components\AtsCreateOfferRequestDto(
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    offerStatus: new Components\AtsCreateOfferRequestDtoOfferStatus(
        value: Components\AtsCreateOfferRequestDtoValue::Pending,
        sourceValue: 'Pending',
    ),
    offerHistory: [
        new Components\OfferHistory(
            startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
            createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
            updatedAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->createOffer(
    xAccountId: '<id>',
    atsCreateOfferRequestDto: $atsCreateOfferRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                               | *string*                                                                                   | :heavy_check_mark:                                                                         | The account identifier                                                                     |
| `atsCreateOfferRequestDto`                                                                 | [Components\AtsCreateOfferRequestDto](../../Models/Components/AtsCreateOfferRequestDto.md) | :heavy_check_mark:                                                                         | N/A                                                                                        |

### Response

**[?Operations\AtsCreateOfferResponse](../../Models/Operations/AtsCreateOfferResponse.md)**

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

## getOffer

Get Offer

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_offer" method="get" path="/unified/ats/offers/{id}" -->
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

$request = new Operations\AtsGetOfferRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
);

$response = $sdk->ats->getOffer(
    request: $request
);

if ($response->offersResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\AtsGetOfferRequest](../../Models/Operations/AtsGetOfferRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\AtsGetOfferResponse](../../Models/Operations/AtsGetOfferResponse.md)**

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

## listAssessmentsPackages

List Assessments Packages

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_assessments_packages" method="get" path="/unified/ats/assessments/packages" -->
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

$request = new Operations\AtsListAssessmentsPackagesRequest(
    xAccountId: '<id>',
    filter: new Operations\AtsListAssessmentsPackagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listAssessmentsPackages(
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
| `$request`                                                                                                   | [Operations\AtsListAssessmentsPackagesRequest](../../Models/Operations/AtsListAssessmentsPackagesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AtsListAssessmentsPackagesResponse](../../Models/Operations/AtsListAssessmentsPackagesResponse.md)**

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

## getAssessmentsPackage

Get Assessments Package

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_assessments_package" method="get" path="/unified/ats/assessments/packages/{id}" -->
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

$request = new Operations\AtsGetAssessmentsPackageRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAssessmentsPackage(
    request: $request
);

if ($response->assessmentPackageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AtsGetAssessmentsPackageRequest](../../Models/Operations/AtsGetAssessmentsPackageRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AtsGetAssessmentsPackageResponse](../../Models/Operations/AtsGetAssessmentsPackageResponse.md)**

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

## orderAssessmentsRequest

Order Assessments Request

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_order_assessments_request" method="post" path="/unified/ats/assessments/orders" -->
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

$atsCreateCandidatesAssessmentsRequestDto = new Components\AtsCreateCandidatesAssessmentsRequestDto(
    id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    package: new Components\AtsCreateCandidatesAssessmentsRequestDtoPackage(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Test 1',
        description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
    ),
    application: new Components\AtsCreateCandidatesAssessmentsRequestDtoApplication(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        applicationStatus: new Components\AtsCreateCandidatesAssessmentsRequestDtoApplicationStatus(
            value: Components\AtsCreateCandidatesAssessmentsRequestDtoValue::Hired,
            sourceValue: 'Hired',
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
    ),
    job: new Components\AtsCreateCandidatesAssessmentsRequestDtoJob(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        title: 'Software Engineer',
        hiringTeam: [
            new Components\AtsJobHiringTeam(
                userId: '123456',
                remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
                firstName: 'John',
                lastName: 'Doe',
                email: 'john.doe@gmail.com',
                role: 'Software Engineer',
            ),
        ],
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
    ),
    candidate: new Components\AtsCreateCandidatesAssessmentsRequestDtoCandidate(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        firstName: 'Romain',
        lastName: 'Sestier',
        emails: [
            new Components\CandidateEmail(
                type: 'personal',
                value: 'sestier.romain123@gmail.com',
            ),
        ],
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        profileUrl: 'https://exmaple.com/candidate?id=xyz',
    ),
    requester: new Components\Requester(
        userId: '123456',
        remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@gmail.com',
        role: 'Software Engineer',
    ),
    resultsUpdateUrl: 'https://exmaple.com/integrations/results/update',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->orderAssessmentsRequest(
    xAccountId: '<id>',
    atsCreateCandidatesAssessmentsRequestDto: $atsCreateCandidatesAssessmentsRequestDto

);

if ($response->createAssessmentOrderResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                               | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The account identifier                                                                                                     |
| `atsCreateCandidatesAssessmentsRequestDto`                                                                                 | [Components\AtsCreateCandidatesAssessmentsRequestDto](../../Models/Components/AtsCreateCandidatesAssessmentsRequestDto.md) | :heavy_check_mark:                                                                                                         | N/A                                                                                                                        |

### Response

**[?Operations\AtsOrderAssessmentsRequestResponse](../../Models/Operations/AtsOrderAssessmentsRequestResponse.md)**

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

## updateAssessmentsResult

Update Assessments Result

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_assessments_result" method="patch" path="/unified/ats/assessments/orders/{id}/result" -->
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

$atsUpdateCandidatesAssessmentsResultsRequestDto = new Components\AtsUpdateCandidatesAssessmentsResultsRequestDto(
    score: null,
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    submissionDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    summary: 'Test is passed',
    result: new Components\Result(
        value: Components\AtsUpdateCandidatesAssessmentsResultsRequestDtoValue::Passed,
        sourceValue: 'Passed',
    ),
    resultUrl: 'https://exmaple.com/result?id=xyz',
    attachments: [
        new Components\Attachment(
            url: 'http://example.com/resume.pdf',
            contentType: new Components\AttachmentContentType(
                value: Components\AttachmentValue::Text,
                sourceValue: 'Text',
            ),
        ),
    ],
    candidate: new Components\AtsUpdateCandidatesAssessmentsResultsRequestDtoCandidate(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        profileUrl: 'https://exmaple.com/candidate?id=xyz',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->updateAssessmentsResult(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateCandidatesAssessmentsResultsRequestDto: $atsUpdateCandidatesAssessmentsResultsRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                                             | *string*                                                                                                                                 | :heavy_check_mark:                                                                                                                       | The account identifier                                                                                                                   |
| `id`                                                                                                                                     | *string*                                                                                                                                 | :heavy_check_mark:                                                                                                                       | N/A                                                                                                                                      |
| `atsUpdateCandidatesAssessmentsResultsRequestDto`                                                                                        | [Components\AtsUpdateCandidatesAssessmentsResultsRequestDto](../../Models/Components/AtsUpdateCandidatesAssessmentsResultsRequestDto.md) | :heavy_check_mark:                                                                                                                       | N/A                                                                                                                                      |

### Response

**[?Operations\AtsUpdateAssessmentsResultResponse](../../Models/Operations/AtsUpdateAssessmentsResultResponse.md)**

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

## listBackgroundCheckPackages

List Background Check Packages

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_background_check_packages" method="get" path="/unified/ats/background_checks/packages" -->
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

$request = new Operations\AtsListBackgroundCheckPackagesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,tests',
    filter: new Operations\AtsListBackgroundCheckPackagesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listBackgroundCheckPackages(
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
| `$request`                                                                                                           | [Operations\AtsListBackgroundCheckPackagesRequest](../../Models/Operations/AtsListBackgroundCheckPackagesRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\AtsListBackgroundCheckPackagesResponse](../../Models/Operations/AtsListBackgroundCheckPackagesResponse.md)**

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

## createBackgroundCheckPackage

Create Background Check Package

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_create_background_check_package" method="post" path="/unified/ats/background_checks/packages" -->
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

$atsCreateBackgroundCheckPackagesRequestDto = new Components\AtsCreateBackgroundCheckPackagesRequestDto(
    name: 'Test 1',
    description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
    tests: [
        new Components\CreatePackage(
            name: 'Test 1',
            description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->createBackgroundCheckPackage(
    xAccountId: '<id>',
    atsCreateBackgroundCheckPackagesRequestDto: $atsCreateBackgroundCheckPackagesRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                                   | *string*                                                                                                                       | :heavy_check_mark:                                                                                                             | The account identifier                                                                                                         |
| `atsCreateBackgroundCheckPackagesRequestDto`                                                                                   | [Components\AtsCreateBackgroundCheckPackagesRequestDto](../../Models/Components/AtsCreateBackgroundCheckPackagesRequestDto.md) | :heavy_check_mark:                                                                                                             | N/A                                                                                                                            |

### Response

**[?Operations\AtsCreateBackgroundCheckPackageResponse](../../Models/Operations/AtsCreateBackgroundCheckPackageResponse.md)**

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

## getBackgroundCheckPackage

Get Background Check Package

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_background_check_package" method="get" path="/unified/ats/background_checks/packages/{id}" -->
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

$request = new Operations\AtsGetBackgroundCheckPackageRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,tests',
);

$response = $sdk->ats->getBackgroundCheckPackage(
    request: $request
);

if ($response->backgroundCheckPackageResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AtsGetBackgroundCheckPackageRequest](../../Models/Operations/AtsGetBackgroundCheckPackageRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AtsGetBackgroundCheckPackageResponse](../../Models/Operations/AtsGetBackgroundCheckPackageResponse.md)**

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

## deleteBackgroundCheckPackage

Delete Background Check Package

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_delete_background_check_package" method="delete" path="/unified/ats/background_checks/packages/{id}" -->
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



$response = $sdk->ats->deleteBackgroundCheckPackage(
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

**[?Operations\AtsDeleteBackgroundCheckPackageResponse](../../Models/Operations/AtsDeleteBackgroundCheckPackageResponse.md)**

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

## updateBackgroundCheckPackage

Update Background Check Package

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_background_check_package" method="patch" path="/unified/ats/background_checks/packages/{id}" -->
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

$atsUpdateBackgroundCheckPackagesRequestDto = new Components\AtsUpdateBackgroundCheckPackagesRequestDto(
    name: 'Test 1',
    description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
    tests: [
        new Components\UpdatePackage(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'Test 1',
            description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->updateBackgroundCheckPackage(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateBackgroundCheckPackagesRequestDto: $atsUpdateBackgroundCheckPackagesRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                                   | *string*                                                                                                                       | :heavy_check_mark:                                                                                                             | The account identifier                                                                                                         |
| `id`                                                                                                                           | *string*                                                                                                                       | :heavy_check_mark:                                                                                                             | N/A                                                                                                                            |
| `atsUpdateBackgroundCheckPackagesRequestDto`                                                                                   | [Components\AtsUpdateBackgroundCheckPackagesRequestDto](../../Models/Components/AtsUpdateBackgroundCheckPackagesRequestDto.md) | :heavy_check_mark:                                                                                                             | N/A                                                                                                                            |

### Response

**[?Operations\AtsUpdateBackgroundCheckPackageResponse](../../Models/Operations/AtsUpdateBackgroundCheckPackageResponse.md)**

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

## orderBackgroundCheckRequest

Order Background Check Request

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_order_background_check_request" method="post" path="/unified/ats/background_checks/orders" -->
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

$atsCreateBackgroundCheckOrderRequestDto = new Components\AtsCreateBackgroundCheckOrderRequestDto(
    id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    application: new Components\AtsCreateBackgroundCheckOrderRequestDtoApplication(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        applicationStatus: new Components\AtsCreateBackgroundCheckOrderRequestDtoApplicationStatus(
            value: Components\AtsCreateBackgroundCheckOrderRequestDtoValue::Hired,
            sourceValue: 'Hired',
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
    ),
    job: null,
    candidate: new Components\AtsCreateBackgroundCheckOrderRequestDtoCandidate(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        firstName: 'Romain',
        lastName: 'Sestier',
        emails: [
            new Components\CandidateEmail(
                type: 'personal',
                value: 'sestier.romain123@gmail.com',
            ),
        ],
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        profileUrl: 'https://exmaple.com/candidate?id=xyz',
    ),
    requester: new Components\AtsCreateBackgroundCheckOrderRequestDtoRequester(
        userId: '123456',
        remoteUserId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        firstName: 'John',
        lastName: 'Doe',
        email: 'john.doe@gmail.com',
        role: 'Software Engineer',
    ),
    resultsUpdateUrl: 'https://exmaple.com/integrations/results/update',
    package: new Components\AtsCreateBackgroundCheckOrderRequestDtoPackage(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Test 1',
        description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
        tests: [
            new Components\Package(
                id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
                remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
                name: 'Test 1',
                description: 'Skills test to gauge a candidate\'s proficiency in job-specific skills',
            ),
        ],
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->orderBackgroundCheckRequest(
    xAccountId: '<id>',
    atsCreateBackgroundCheckOrderRequestDto: $atsCreateBackgroundCheckOrderRequestDto

);

if ($response->createBackgroundCheckOrderResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                             | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | The account identifier                                                                                                   |
| `atsCreateBackgroundCheckOrderRequestDto`                                                                                | [Components\AtsCreateBackgroundCheckOrderRequestDto](../../Models/Components/AtsCreateBackgroundCheckOrderRequestDto.md) | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |

### Response

**[?Operations\AtsOrderBackgroundCheckRequestResponse](../../Models/Operations/AtsOrderBackgroundCheckRequestResponse.md)**

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

## updateBackgroundCheckResult

Update Background Check Result

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_update_background_check_result" method="patch" path="/unified/ats/background_checks/orders/{id}/result" -->
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

$atsUpdateBackgroundCheckResultRequestDto = new Components\AtsUpdateBackgroundCheckResultRequestDto(
    score: new Components\AtsUpdateBackgroundCheckResultRequestDtoScore(
        label: 'Percentage',
        value: '80',
        min: '0',
        max: '100',
    ),
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    submissionDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    summary: 'Test is passed',
    result: new Components\AtsUpdateBackgroundCheckResultRequestDtoResult(
        value: Components\AtsUpdateBackgroundCheckResultRequestDtoValue::Passed,
        sourceValue: 'Passed',
    ),
    resultUrl: 'https://exmaple.com/result?id=xyz',
    attachments: [
        new Components\Attachment(
            url: 'http://example.com/resume.pdf',
            contentType: new Components\AttachmentContentType(
                value: Components\AttachmentValue::Text,
                sourceValue: 'Text',
            ),
        ),
    ],
    candidate: new Components\AtsUpdateBackgroundCheckResultRequestDtoCandidate(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        profileUrl: 'https://exmaple.com/candidate?id=xyz',
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->ats->updateBackgroundCheckResult(
    xAccountId: '<id>',
    id: '<id>',
    atsUpdateBackgroundCheckResultRequestDto: $atsUpdateBackgroundCheckResultRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                                               | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | The account identifier                                                                                                     |
| `id`                                                                                                                       | *string*                                                                                                                   | :heavy_check_mark:                                                                                                         | N/A                                                                                                                        |
| `atsUpdateBackgroundCheckResultRequestDto`                                                                                 | [Components\AtsUpdateBackgroundCheckResultRequestDto](../../Models/Components/AtsUpdateBackgroundCheckResultRequestDto.md) | :heavy_check_mark:                                                                                                         | N/A                                                                                                                        |

### Response

**[?Operations\AtsUpdateBackgroundCheckResultResponse](../../Models/Operations/AtsUpdateBackgroundCheckResultResponse.md)**

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

## listApplicationDocumentCategories

List Application Document Categories

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_list_application_document_categories" method="get" path="/unified/ats/documents/application_categories" -->
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

$request = new Operations\AtsListApplicationDocumentCategoriesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active',
    filter: new Operations\AtsListApplicationDocumentCategoriesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->ats->listApplicationDocumentCategories(
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
| `$request`                                                                                                                       | [Operations\AtsListApplicationDocumentCategoriesRequest](../../Models/Operations/AtsListApplicationDocumentCategoriesRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\AtsListApplicationDocumentCategoriesResponse](../../Models/Operations/AtsListApplicationDocumentCategoriesResponse.md)**

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

## getApplicationDocumentCategory

Get Application Document Category

### Example Usage

<!-- UsageSnippet language="php" operationID="ats_get_application_document_category" method="get" path="/unified/ats/documents/application_categories/{id}" -->
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

$request = new Operations\AtsGetApplicationDocumentCategoryRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active',
);

$response = $sdk->ats->getApplicationDocumentCategory(
    request: $request
);

if ($response->referenceResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\AtsGetApplicationDocumentCategoryRequest](../../Models/Operations/AtsGetApplicationDocumentCategoryRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\AtsGetApplicationDocumentCategoryResponse](../../Models/Operations/AtsGetApplicationDocumentCategoryResponse.md)**

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