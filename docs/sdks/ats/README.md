# Ats
(*ats*)

## Overview

### Available Operations

* [listApplications](#listapplications) - List Applications
* [createApplication](#createapplication) - Create Application
* [getApplication](#getapplication) - Get Application
* [updateApplication](#updateapplication) - Update an Application
* [listApplicationsOffers](#listapplicationsoffers) - List Application Offers
* [moveApplication](#moveapplication) - Move Application
* [rejectApplication](#rejectapplication) - Reject Application
* [getApplicationOffer](#getapplicationoffer) - Get Application Offer
* [listApplicationScorecards](#listapplicationscorecards) - List Application Scorecards
* [getApplicationScorecard](#getapplicationscorecard) - Get Application Scorecard
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
* [listInterviewStages](#listinterviewstages) - List Interview Stages
* [getInterviewStage](#getinterviewstage) - Get Interview Stage
* [listInterviews](#listinterviews) - List Interviews
* [getInterview](#getinterview) - Get Interview
* [listJobs](#listjobs) - List Jobs
* [createJob](#createjob) - Create Job
* [getJob](#getjob) - Get Job
* [updateJob](#updatejob) - Update Job
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
* [createOffer](#createoffer) - Creates an offer
* [getOffer](#getoffer) - Get Offer
* [listAssessmentsPackages](#listassessmentspackages) - List Assessments Packages
* [getAssessmentsPackage](#getassessmentspackage) - Get Assessments Package
* [getAssessmentsRequest](#getassessmentsrequest) - Get Assessments Requests
* [getAssessmentsResult](#getassessmentsresult) - Get Assessments Results

## listApplications

List Applications

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

$request = new Operations\AtsListApplicationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
    filter: new Operations\AtsListApplicationsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    expand: 'documents',
    include: 'attachments,custom_fields',
);

$response = $sdk->ats->listApplications(
    request: $request
);

if ($response->applicationsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\AtsListApplicationsRequest](../../Models/Operations/AtsListApplicationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\AtsListApplicationsResponse](../../Models/Operations/AtsListApplicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createApplication

Create Application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$atsCreateApplicationRequestDto = new Components\AtsCreateApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    jobId: '4071538b-3cac-4fbf-ac76-f78ed250ffdd',
    locationId: 'dd8d41d1-5eb8-4408-9c87-9ba44604eae4',
    applicationStatus: new Components\AtsCreateApplicationRequestDtoApplicationStatus(
        value: Components\AtsCreateApplicationRequestDtoValue::Hired,
        sourceValue: 'Hired',
    ),
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
        phoneNumber: '+1234567890',
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
            new Components\CandidateCustomFields(
                id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
                remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
                name: 'Training Completion Status',
                value: 'Completed',
                valueId: 'value_456',
                remoteValueId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
            ),
        ],
    ),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplication

Get Application

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

$request = new Operations\AtsGetApplicationRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateApplication

Update an Application

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

$atsUpdateApplicationRequestDto = new Components\AtsUpdateApplicationRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    rejectedReasonId: 'f223d7f6-908b-48f0-9237-b201c307f609',
    customFields: [
        new Components\ApplicationCustomFields(
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
    interviewStageId: '18bcbb1b-3cbc-4198-a999-460861d19480',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listApplicationsOffers

List Application Offers

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

$request = new Operations\AtsListApplicationsOffersRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
    filter: new Operations\AtsListApplicationsOffersQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listApplicationsOffers(
    request: $request
);

if ($response->offersPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\AtsListApplicationsOffersRequest](../../Models/Operations/AtsListApplicationsOffersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\AtsListApplicationsOffersResponse](../../Models/Operations/AtsListApplicationsOffersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## moveApplication

Move Application

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## rejectApplication

Reject Application

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplicationOffer

Get Application Offer

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listApplicationScorecards

List Application Scorecards

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

$request = new Operations\AtsListApplicationScorecardsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,sections,label,candidate_id,remote_candidate_id,application_id,remote_application_id,interview_id,remote_interview_id,author_id,remote_author_id,overall_recommendation,created_at,updated_at',
    filter: new Operations\AtsListApplicationScorecardsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listApplicationScorecards(
    request: $request
);

if ($response->scorecardsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\AtsListApplicationScorecardsRequest](../../Models/Operations/AtsListApplicationScorecardsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\AtsListApplicationScorecardsResponse](../../Models/Operations/AtsListApplicationScorecardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplicationScorecard

Get Application Scorecard

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listApplicationsScheduledInterviews

List Applications scheduled interviews

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

$request = new Operations\AtsListApplicationsScheduledInterviewsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,interview_stage_id,remote_interview_stage_id,interview_stage,status,interview_status,interviewer_ids,remote_interviewer_ids,interview_parts,interviewers,start_at,end_at,meeting_url,created_at,updated_at',
    filter: new Operations\AtsListApplicationsScheduledInterviewsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listApplicationsScheduledInterviews(
    request: $request
);

if ($response->scheduledInterviewsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\AtsListApplicationsScheduledInterviewsRequest](../../Models/Operations/AtsListApplicationsScheduledInterviewsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\AtsListApplicationsScheduledInterviewsResponse](../../Models/Operations/AtsListApplicationsScheduledInterviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplicationScheduledInterview

Get Applications scheduled interview

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

$request = new Operations\AtsGetApplicationScheduledInterviewRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,candidate_id,remote_candidate_id,job_id,remote_job_id,interview_stage,interview_stage_id,remote_interview_stage_id,rejected_reason,rejected_reason_id,remote_rejected_reason_id,rejected_reason_ids,remote_rejected_reason_ids,rejected_reasons,rejected_at,location_id,remote_location_id,location_ids,remote_location_ids,status,application_status,questionnaires,attachments,result_links,source,created_at,updated_at,documents,custom_fields,candidate',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## uploadApplicationDocument

Upload Application Document

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

$unifiedUploadRequestDto = new Components\UnifiedUploadRequestDto(
    name: 'weather-forecast',
    fileFormat: new Components\UnifiedUploadRequestDtoFileFormat(
        value: Components\UnifiedUploadRequestDtoValue::Pdf,
        sourceValue: 'abc',
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

$response = $sdk->ats->uploadApplicationDocument(
    xAccountId: '<id>',
    id: '<id>',
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
| `id`                                                                                     | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `unifiedUploadRequestDto`                                                                | [Components\UnifiedUploadRequestDto](../../Models/Components/UnifiedUploadRequestDto.md) | :heavy_check_mark:                                                                       | N/A                                                                                      |

### Response

**[?Operations\AtsUploadApplicationDocumentResponse](../../Models/Operations/AtsUploadApplicationDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## downloadApplicationDocument

Download Application Document

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



$response = $sdk->ats->downloadApplicationDocument(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    format: 'base64'

);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        | Example                            |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `xAccountId`                       | *string*                           | :heavy_check_mark:                 | The account identifier             |                                    |
| `id`                               | *string*                           | :heavy_check_mark:                 | N/A                                |                                    |
| `subResourceId`                    | *string*                           | :heavy_check_mark:                 | N/A                                |                                    |
| `format`                           | *?string*                          | :heavy_minus_sign:                 | The format to download the file in | base64                             |

### Response

**[?Operations\AtsDownloadApplicationDocumentResponse](../../Models/Operations/AtsDownloadApplicationDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listApplicationDocuments

List Application Documents

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

$request = new Operations\AtsListApplicationDocumentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,path,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
    filter: new Operations\AtsListApplicationDocumentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listApplicationDocuments(
    request: $request
);

if ($response->atsDocumentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\AtsListApplicationDocumentsRequest](../../Models/Operations/AtsListApplicationDocumentsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\AtsListApplicationDocumentsResponse](../../Models/Operations/AtsListApplicationDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplicationDocument

Get Application Document

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

$request = new Operations\AtsGetApplicationDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,path,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCandidates

List Candidates

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

$request = new Operations\AtsListCandidatesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,first_name,last_name,email,emails,social_links,phone,phone_numbers,company,title,application_ids,remote_application_ids,hired_at,custom_fields,created_at,updated_at',
    filter: new Operations\AtsListCandidatesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    include: 'custom_fields',
);

$response = $sdk->ats->listCandidates(
    request: $request
);

if ($response->candidatesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\AtsListCandidatesRequest](../../Models/Operations/AtsListCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\AtsListCandidatesResponse](../../Models/Operations/AtsListCandidatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCandidate

Create Candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$atsCreateCandidateRequestDto = new Components\AtsCreateCandidateRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    phoneNumber: '+1234567890',
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
        new Components\CandidateCustomFields(
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCandidate

Get Candidate

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

$request = new Operations\AtsGetCandidateRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,first_name,last_name,email,emails,social_links,phone,phone_numbers,company,title,application_ids,remote_application_ids,hired_at,custom_fields,created_at,updated_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCandidate

Update Candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

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
    customFields: [
        new Components\CandidateCustomFields(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'Training Completion Status',
            value: 'Completed',
            valueId: 'value_456',
            remoteValueId: 'e3cb75bf-aa84-466e-a6c1-b8322b257a48',
        ),
    ],
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCandidateNotes

List Candidate Notes

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

$request = new Operations\AtsListCandidateNotesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,content,author_id,remote_author_id,visibility,created_at,updated_at,deleted_at',
    filter: new Operations\AtsListCandidateNotesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listCandidateNotes(
    request: $request
);

if ($response->notesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\AtsListCandidateNotesRequest](../../Models/Operations/AtsListCandidateNotesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\AtsListCandidateNotesResponse](../../Models/Operations/AtsListCandidateNotesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCandidateNote

Create Candidate Note

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCandidateNote

Get Candidate Note

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listApplicationCustomFieldDefinitions

List Application Custom Field Definitions

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

$request = new Operations\AtsListApplicationCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsListApplicationCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listApplicationCustomFieldDefinitions(
    request: $request
);

if ($response->customFieldDefinitionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                | Type                                                                                                                                     | Required                                                                                                                                 | Description                                                                                                                              |
| ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                               | [Operations\AtsListApplicationCustomFieldDefinitionsRequest](../../Models/Operations/AtsListApplicationCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                       | The request object to use for the request.                                                                                               |

### Response

**[?Operations\AtsListApplicationCustomFieldDefinitionsResponse](../../Models/Operations/AtsListApplicationCustomFieldDefinitionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getApplicationCustomFieldDefinition

Get Application Custom Field Definition

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

$request = new Operations\AtsGetApplicationCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsGetApplicationCustomFieldDefinitionQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCandidateCustomFieldDefinitions

List Candidate Custom Field Definitions

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

$request = new Operations\AtsListCandidateCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsListCandidateCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listCandidateCustomFieldDefinitions(
    request: $request
);

if ($response->customFieldDefinitionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\AtsListCandidateCustomFieldDefinitionsRequest](../../Models/Operations/AtsListCandidateCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\AtsListCandidateCustomFieldDefinitionsResponse](../../Models/Operations/AtsListCandidateCustomFieldDefinitionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCandidateCustomFieldDefinition

Get Candidate Custom Field Definition

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

$request = new Operations\AtsGetCandidateCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsGetCandidateCustomFieldDefinitionQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listJobCustomFieldDefinitions

List Job Custom Field Definitions

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

$request = new Operations\AtsListJobCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsListJobCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listJobCustomFieldDefinitions(
    request: $request
);

if ($response->customFieldDefinitionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\AtsListJobCustomFieldDefinitionsRequest](../../Models/Operations/AtsListJobCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\AtsListJobCustomFieldDefinitionsResponse](../../Models/Operations/AtsListJobCustomFieldDefinitionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getJobCustomFieldDefinition

Get Job Custom Field Definition

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

$request = new Operations\AtsGetJobCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\AtsGetJobCustomFieldDefinitionQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDepartments

List Departments

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

$request = new Operations\AtsListDepartmentsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name',
    filter: new Operations\AtsListDepartmentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listDepartments(
    request: $request
);

if ($response->departmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AtsListDepartmentsRequest](../../Models/Operations/AtsListDepartmentsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AtsListDepartmentsResponse](../../Models/Operations/AtsListDepartmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDepartment

Get Department

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listInterviewStages

List Interview Stages

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

$request = new Operations\AtsListInterviewStagesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,order,created_at,updated_at',
    filter: new Operations\AtsListInterviewStagesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listInterviewStages(
    request: $request
);

if ($response->interviewStagesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AtsListInterviewStagesRequest](../../Models/Operations/AtsListInterviewStagesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsListInterviewStagesResponse](../../Models/Operations/AtsListInterviewStagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getInterviewStage

Get Interview Stage

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listInterviews

List Interviews

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

$request = new Operations\AtsListInterviewsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,interview_stage_id,remote_interview_stage_id,interview_stage,status,interview_status,interviewer_ids,remote_interviewer_ids,interview_parts,interviewers,start_at,end_at,meeting_url,created_at,updated_at',
    filter: new Operations\AtsListInterviewsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listInterviews(
    request: $request
);

if ($response->interviewsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\AtsListInterviewsRequest](../../Models/Operations/AtsListInterviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\AtsListInterviewsResponse](../../Models/Operations/AtsListInterviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getInterview

Get Interview

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listJobs

List Jobs

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

$request = new Operations\AtsListJobsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,code,title,status,job_status,department_ids,remote_department_ids,location_ids,remote_location_ids,hiring_team,interview_stages,confidential,custom_fields,created_at,updated_at',
    filter: new Operations\AtsListJobsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    expand: 'job_postings,interview_stages',
    include: 'custom_fields',
);

$response = $sdk->ats->listJobs(
    request: $request
);

if ($response->jobsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\AtsListJobsRequest](../../Models/Operations/AtsListJobsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\AtsListJobsResponse](../../Models/Operations/AtsListJobsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createJob

Create Job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$atsCreateJobRequestDto = new Components\AtsCreateJobRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    code: '184919',
    title: 'Software Engineer',
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
        new Components\JobHiringTeam(
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
        new Components\JobCustomFields(
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getJob

Get Job

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

$request = new Operations\AtsGetJobRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,code,title,status,job_status,department_ids,remote_department_ids,location_ids,remote_location_ids,hiring_team,interview_stages,confidential,custom_fields,created_at,updated_at',
    expand: 'job_postings,interview_stages',
    include: 'custom_fields',
);

$response = $sdk->ats->getJob(
    request: $request
);

if ($response->jobResult !== null) {
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateJob

Update Job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

$atsUpdateJobRequestDto = new Components\AtsUpdateJobRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    code: '184919',
    title: 'Software Engineer',
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
        new Components\JobHiringTeam(
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
        new Components\JobCustomFields(
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLists

Get all Lists

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

$request = new Operations\AtsListListsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,created_at,updated_at,items,type',
    filter: new Operations\AtsListListsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listLists(
    request: $request
);

if ($response->listsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\AtsListListsRequest](../../Models/Operations/AtsListListsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\AtsListListsResponse](../../Models/Operations/AtsListListsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getList

Get List

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLocations

List locations

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

$request = new Operations\AtsListLocationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name',
    filter: new Operations\AtsListLocationsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listLocations(
    request: $request
);

if ($response->atsLocationsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\AtsListLocationsRequest](../../Models/Operations/AtsListLocationsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\AtsListLocationsResponse](../../Models/Operations/AtsListLocationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLocation

Get Location

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRejectedReasons

List Rejected Reasons

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

$request = new Operations\AtsListRejectedReasonsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,label,type,rejected_reason_type',
    filter: new Operations\AtsListRejectedReasonsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listRejectedReasons(
    request: $request
);

if ($response->rejectedReasonsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\AtsListRejectedReasonsRequest](../../Models/Operations/AtsListRejectedReasonsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\AtsListRejectedReasonsResponse](../../Models/Operations/AtsListRejectedReasonsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRejectedReason

Get Rejected Reason

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

$request = new Operations\AtsListUsersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,email',
    filter: new Operations\AtsListUsersQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listUsers(
    request: $request
);

if ($response->usersPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\AtsListUsersRequest](../../Models/Operations/AtsListUsersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\AtsListUsersResponse](../../Models/Operations/AtsListUsersResponse.md)**

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

$request = new Operations\AtsGetUserRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,email',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listJobPostings

List Job Postings

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

$request = new Operations\AtsListJobPostingsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,title,locations,internal,status,job_id,remote_job_id,content,compensation,employment_type,employment_contract_type,external_url,external_apply_url,questionnaires,updated_at,created_at',
    filter: new Operations\AtsListJobPostingsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    include: 'questionnaires',
);

$response = $sdk->ats->listJobPostings(
    request: $request
);

if ($response->jobPostingsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\AtsListJobPostingsRequest](../../Models/Operations/AtsListJobPostingsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\AtsListJobPostingsResponse](../../Models/Operations/AtsListJobPostingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getJobPosting

Get Job Posting

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

$request = new Operations\AtsGetJobPostingRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,title,locations,internal,status,job_id,remote_job_id,content,compensation,employment_type,employment_contract_type,external_url,external_apply_url,questionnaires,updated_at,created_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listOffers

List Offers

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

$request = new Operations\AtsListOffersRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,application_id,remote_application_id,start_date,status,offer_status,salary,currency,created_at,updated_at,offer_history',
    filter: new Operations\AtsListOffersQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listOffers(
    request: $request
);

if ($response->offersPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\AtsListOffersRequest](../../Models/Operations/AtsListOffersRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\AtsListOffersResponse](../../Models/Operations/AtsListOffersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createOffer

Creates an offer

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils;

$security = new Components\Security(
    username: '',
    password: '',
);

$sdk = client\StackOne::builder()->setSecurity($security)->build();

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getOffer

Get Offer

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAssessmentsPackages

List Assessments Packages

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

$request = new Operations\AtsListAssessmentsPackagesRequest(
    xAccountId: '<id>',
    filter: new Operations\AtsListAssessmentsPackagesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->ats->listAssessmentsPackages(
    request: $request
);

if ($response->assessmentsPackagesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\AtsListAssessmentsPackagesRequest](../../Models/Operations/AtsListAssessmentsPackagesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\AtsListAssessmentsPackagesResponse](../../Models/Operations/AtsListAssessmentsPackagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentsPackage

Get Assessments Package

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

$request = new Operations\AtsGetAssessmentsPackageRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAssessmentsPackage(
    request: $request
);

if ($response->assessmentsPackagesResult !== null) {
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentsRequest

Get Assessments Requests

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

$request = new Operations\AtsGetAssessmentsRequestRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'assessment_id,remote_assessment_id,candidate,score,assessment_date,submission_date,summary,result,result_url,attachments',
);

$response = $sdk->ats->getAssessmentsRequest(
    request: $request
);

if ($response->assessmentsResultsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\AtsGetAssessmentsRequestRequest](../../Models/Operations/AtsGetAssessmentsRequestRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\AtsGetAssessmentsRequestResponse](../../Models/Operations/AtsGetAssessmentsRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentsResult

Get Assessments Results

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

$request = new Operations\AtsGetAssessmentsResultRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'assessment_id,remote_assessment_id,candidate,score,assessment_date,submission_date,summary,result,result_url,attachments',
);

$response = $sdk->ats->getAssessmentsResult(
    request: $request
);

if ($response->assessmentsResultsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\AtsGetAssessmentsResultRequest](../../Models/Operations/AtsGetAssessmentsResultRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\AtsGetAssessmentsResultResponse](../../Models/Operations/AtsGetAssessmentsResultResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |