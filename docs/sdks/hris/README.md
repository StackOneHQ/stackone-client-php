# Hris
(*hris*)

## Overview

### Available Operations

* [listCompanies](#listcompanies) - List Companies
* [getCompany](#getcompany) - Get Company
* [listEmployeeCustomFieldDefinitions](#listemployeecustomfielddefinitions) - List employee Custom Field Definitions
* [getEmployeeCustomFieldDefinition](#getemployeecustomfielddefinition) - Get employee Custom Field Definition
* [listEmployees](#listemployees) - List Employees
* [createEmployee](#createemployee) - Create Employee
* [getEmployee](#getemployee) - Get Employee
* [updateEmployee](#updateemployee) - Update Employee
* [inviteEmployee](#inviteemployee) - Invite Employee
* [listEmployeeTimeOffRequests](#listemployeetimeoffrequests) - List Employee Time Off Requests
* [createEmployeeTimeOffRequest](#createemployeetimeoffrequest) - Create Employee Time Off Request
* [getEmployeesTimeOffRequest](#getemployeestimeoffrequest) - Get Employees Time Off Request
* [cancelEmployeeTimeOffRequest](#cancelemployeetimeoffrequest) - Cancel Employee Time Off Request
* [updateEmployeeTimeOffRequest](#updateemployeetimeoffrequest) - Update Employee Time Off Request
* [batchUploadEmployeeDocument](#batchuploademployeedocument) - Batch Upload Employee Document
* [uploadEmployeeDocument](#uploademployeedocument) - Upload Employee Document
* [downloadEmployeeDocument](#downloademployeedocument) - Download Employee Document
* [listEmployeeDocuments](#listemployeedocuments) - List Employee Documents
* [getEmployeeDocument](#getemployeedocument) - Get Employee Document
* [listEmployeeCategories](#listemployeecategories) - List Employee Document Categories
* [getEmployeeDocumentCategory](#getemployeedocumentcategory) - Get Employee Document Category
* [listEmployeeWorkEligibility](#listemployeeworkeligibility) - List Employee Work Eligibility
* [createEmployeeWorkEligibilityRequest](#createemployeeworkeligibilityrequest) - Create Employee Work Eligibility Request
* [getEmployeesWorkEligibility](#getemployeesworkeligibility) - Get Employees Work Eligibility
* [updateEmployeeWorkEligibilityRequest](#updateemployeeworkeligibilityrequest) - Update Employee Work Eligibility Request
* [listEmployeeTimeOffBalances](#listemployeetimeoffbalances) - List Employee Time Off Balances
* [getEmployeeTimeOffBalance](#getemployeetimeoffbalance) - Get Employee Time Off Balance
* [listEmployments](#listemployments) - List Employments
* [getEmployment](#getemployment) - Get Employment
* [listEmployeeEmployments](#listemployeeemployments) - List Employee Employments
* [createEmployeeEmployment](#createemployeeemployment) - Create Employee Employment
* [getEmployeeEmployment](#getemployeeemployment) - Get Employee Employment
* [updateEmployeeEmployment](#updateemployeeemployment) - Update Employee Employment
* [listGroups](#listgroups) - List Groups
* [listDepartmentGroups](#listdepartmentgroups) - List Department Groups
* [listCostCenterGroups](#listcostcentergroups) - List Cost Center Groups
* [listTeamGroups](#listteamgroups) - List Team Groups
* [listDivisionGroups](#listdivisiongroups) - List Division Groups
* [listCompaniesGroups](#listcompaniesgroups) - List Companies Groups
* [getGroup](#getgroup) - Get Group
* [getDepartmentGroup](#getdepartmentgroup) - Get Department Group
* [getCostCenterGroup](#getcostcentergroup) - Get Cost Center Group
* [getTeamGroup](#getteamgroup) - Get Team Group
* [getDivisionGroup](#getdivisiongroup) - Get Division Group
* [getCompanyGroup](#getcompanygroup) - Get Company Group
* [listJobs](#listjobs) - List Jobs
* [getJob](#getjob) - Get Job
* [listLocations](#listlocations) - List Work Locations
* [getLocation](#getlocation) - Get Work Location
* [listPositions](#listpositions) - List Positions
* [getPosition](#getposition) - Get Position
* [listTimeEntries](#listtimeentries) - List Time Entries
* [getTimeEntries](#gettimeentries) - Get Time Entry
* [listTimeOffRequests](#listtimeoffrequests) - List time off requests
* [getTimeOffRequest](#gettimeoffrequest) - Get time off request
* [listShifts](#listshifts) - List Shifts
* [getShift](#getshift) - Get Shift
* [~~listTimeOffTypes~~](#listtimeofftypes) - List time off types :warning: **Deprecated**
* [~~getTimeOffType~~](#gettimeofftype) - Get time off type :warning: **Deprecated**
* [listTimeOffPolicies](#listtimeoffpolicies) - List Time Off Policies
* [getTimeOffPolicy](#gettimeoffpolicy) - Get Time Off Policy
* [listEmployeeTimeOffPolicies](#listemployeetimeoffpolicies) - List Assigned Time Off Policies
* [listBenefits](#listbenefits) - List benefits
* [getBenefit](#getbenefit) - Get Benefit
* [listEmployeeSkills](#listemployeeskills) - List Employee Skills
* [createEmployeeSkill](#createemployeeskill) - Create Employee Skill
* [getEmployeeSkill](#getemployeeskill) - Get Employee Skill
* [listEmployeeTasks](#listemployeetasks) - List Employee Tasks
* [getEmployeeTask](#getemployeetask) - Get Employee Task
* [updateEmployeeTask](#updateemployeetask) - Update Employee Task
* [listTasks](#listtasks) - List Tasks
* [getTask](#gettask) - Get Task

## listCompanies

List Companies

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_companies" method="get" path="/unified/hris/companies" -->
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

$request = new Operations\HrisListCompaniesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,full_name,display_name,created_at,updated_at',
    filter: new Operations\HrisListCompaniesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listCompanies(
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
| `$request`                                                                                 | [Operations\HrisListCompaniesRequest](../../Models/Operations/HrisListCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListCompaniesResponse](../../Models/Operations/HrisListCompaniesResponse.md)**

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

## getCompany

Get Company

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_company" method="get" path="/unified/hris/companies/{id}" -->
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

$request = new Operations\HrisGetCompanyRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,full_name,display_name,created_at,updated_at',
);

$response = $sdk->hris->getCompany(
    request: $request
);

if ($response->companyResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\HrisGetCompanyRequest](../../Models/Operations/HrisGetCompanyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\HrisGetCompanyResponse](../../Models/Operations/HrisGetCompanyResponse.md)**

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

## listEmployeeCustomFieldDefinitions

List employee Custom Field Definitions

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_custom_field_definitions" method="get" path="/unified/hris/custom_field_definitions/employees" -->
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

$request = new Operations\HrisListEmployeeCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\HrisListEmployeeCustomFieldDefinitionsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listEmployeeCustomFieldDefinitions(
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
| `$request`                                                                                                                           | [Operations\HrisListEmployeeCustomFieldDefinitionsRequest](../../Models/Operations/HrisListEmployeeCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\HrisListEmployeeCustomFieldDefinitionsResponse](../../Models/Operations/HrisListEmployeeCustomFieldDefinitionsResponse.md)**

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

## getEmployeeCustomFieldDefinition

Get employee Custom Field Definition

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_custom_field_definition" method="get" path="/unified/hris/custom_field_definitions/employees/{id}" -->
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

$request = new Operations\HrisGetEmployeeCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\HrisGetEmployeeCustomFieldDefinitionQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$response = $sdk->hris->getEmployeeCustomFieldDefinition(
    request: $request
);

if ($response->customFieldDefinitionResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                        | Type                                                                                                                             | Required                                                                                                                         | Description                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                       | [Operations\HrisGetEmployeeCustomFieldDefinitionRequest](../../Models/Operations/HrisGetEmployeeCustomFieldDefinitionRequest.md) | :heavy_check_mark:                                                                                                               | The request object to use for the request.                                                                                       |

### Response

**[?Operations\HrisGetEmployeeCustomFieldDefinitionResponse](../../Models/Operations/HrisGetEmployeeCustomFieldDefinitionResponse.md)**

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

## listEmployees

List Employees

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employees" method="get" path="/unified/hris/employees" -->
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

$request = new Operations\HrisListEmployeesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,display_name,gender,ethnicity,date_of_birth,birthday,marital_status,avatar_url,avatar,personal_email,personal_phone_number,work_email,work_phone_number,job_id,remote_job_id,job_title,job_description,department_id,remote_department_id,department,cost_centers,company,manager_id,remote_manager_id,hire_date,start_date,tenure,work_anniversary,employment_type,employment_contract_type,employment_status,termination_date,company_name,company_id,remote_company_id,preferred_language,citizenships,home_location,work_location,employments,custom_fields,created_at,updated_at,benefits,employee_number,national_identity_number,national_identity_numbers,skills',
    filter: new Operations\HrisListEmployeesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'company,employments,work_location,home_location,groups,skills',
    include: 'avatar_url,avatar,custom_fields,job_description,benefits',
);

$responses = $sdk->hris->listEmployees(
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
| `$request`                                                                                 | [Operations\HrisListEmployeesRequest](../../Models/Operations/HrisListEmployeesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListEmployeesResponse](../../Models/Operations/HrisListEmployeesResponse.md)**

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

## createEmployee

Create Employee

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_create_employee" method="post" path="/unified/hris/employees" -->
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

$hrisCreateEmployeeRequestDto = new Components\HrisCreateEmployeeRequestDto(
    firstName: 'Isaac',
    lastName: 'Newton',
    name: 'Isaac Newton',
    displayName: 'Sir Isaac Newton',
    avatarUrl: 'https://example.com/avatar.png',
    personalEmail: 'isaac.newton@example.com',
    personalPhoneNumber: '+1234567890',
    workEmail: 'newton@example.com',
    workPhoneNumber: '+1234567890',
    jobTitle: 'Physicist',
    departmentId: '3093',
    teamId: '2913',
    department: 'Physics',
    managerId: '67890',
    gender: new Components\HrisCreateEmployeeRequestDtoGender(),
    preferredLanguage: new Components\HrisCreateEmployeeRequestDtoPreferredLanguage(
        value: Components\HrisCreateEmployeeRequestDtoPreferredLanguageValue::Eng,
    ),
    ethnicity: new Components\HrisCreateEmployeeRequestDtoEthnicity(),
    dateOfBirth: Utils\Utils::parseDateTime('1990-01-01T00:00:00.000Z'),
    birthday: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    maritalStatus: new Components\HrisCreateEmployeeRequestDtoMaritalStatus(),
    avatar: new Components\HrisCreateEmployeeRequestDtoAvatar(),
    hireDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    startDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    employmentStatus: new Components\HrisCreateEmployeeRequestDtoEmploymentStatus(),
    terminationDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    companyId: '1234567890',
    citizenships: [
        new Components\CountryCodeEnum(
            value: Components\CountryCodeEnumValue::Us,
        ),
    ],
    employment: null,
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
    benefits: [
        new Components\CreateHRISBenefit(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'Health Insurance',
            provider: 'Aetna',
            description: 'Health insurance for employees',
            createdAt: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
            updatedAt: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
        ),
    ],
    employeeNumber: '125',
    nationalIdentityNumbers: [
        new Components\NationalIdentityNumberApiModel(
            value: '123456789',
            type: new Components\NationalIdentityNumberApiModelType(
                value: Components\NationalIdentityNumberApiModelValue::Ssn,
            ),
            country: new Components\Country(
                value: Components\NationalIdentityNumberApiModelCountryValue::Us,
            ),
        ),
    ],
    homeLocation: new Components\HrisCreateEmployeeRequestDtoHomeLocation(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Woolsthorpe Manor',
        phoneNumber: '+44 1476 860 364',
        street1: 'Water Lane',
        street2: 'Woolsthorpe by Colsterworth',
        city: 'Grantham',
        zipCode: 'NG33 5NR',
        country: new Components\HrisCreateEmployeeRequestDtoHomeLocationCountry(
            value: Components\HrisCreateEmployeeRequestDtoHomeLocationValue::Us,
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        state: new Components\State(),
    ),
    workLocation: null,
    costCenters: [
        new Components\CreateCostCenterApiModel(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            name: 'R&D',
            distributionPercentage: 100,
        ),
    ],
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createEmployee(
    xAccountId: '<id>',
    hrisCreateEmployeeRequestDto: $hrisCreateEmployeeRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `hrisCreateEmployeeRequestDto`                                                                     | [Components\HrisCreateEmployeeRequestDto](../../Models/Components/HrisCreateEmployeeRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\HrisCreateEmployeeResponse](../../Models/Operations/HrisCreateEmployeeResponse.md)**

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

## getEmployee

Get Employee

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee" method="get" path="/unified/hris/employees/{id}" -->
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

$request = new Operations\HrisGetEmployeeRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,display_name,gender,ethnicity,date_of_birth,birthday,marital_status,avatar_url,avatar,personal_email,personal_phone_number,work_email,work_phone_number,job_id,remote_job_id,job_title,job_description,department_id,remote_department_id,department,cost_centers,company,manager_id,remote_manager_id,hire_date,start_date,tenure,work_anniversary,employment_type,employment_contract_type,employment_status,termination_date,company_name,company_id,remote_company_id,preferred_language,citizenships,home_location,work_location,employments,custom_fields,created_at,updated_at,benefits,employee_number,national_identity_number,national_identity_numbers,skills',
    expand: 'company,employments,work_location,home_location,groups,skills',
    include: 'avatar_url,avatar,custom_fields,job_description,benefits',
);

$response = $sdk->hris->getEmployee(
    request: $request
);

if ($response->employeeResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\HrisGetEmployeeRequest](../../Models/Operations/HrisGetEmployeeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\HrisGetEmployeeResponse](../../Models/Operations/HrisGetEmployeeResponse.md)**

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

## updateEmployee

Update Employee

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_update_employee" method="patch" path="/unified/hris/employees/{id}" -->
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

$hrisUpdateEmployeeRequestDto = new Components\HrisUpdateEmployeeRequestDto(
    firstName: 'Isaac',
    lastName: 'Newton',
    name: 'Isaac Newton',
    displayName: 'Sir Isaac Newton',
    avatarUrl: 'https://example.com/avatar.png',
    personalEmail: 'isaac.newton@example.com',
    personalPhoneNumber: '+1234567890',
    workEmail: 'newton@example.com',
    workPhoneNumber: '+1234567890',
    jobTitle: 'Physicist',
    departmentId: '3093',
    teamId: '2913',
    department: 'Physics',
    managerId: '67890',
    gender: new Components\HrisUpdateEmployeeRequestDtoGender(),
    preferredLanguage: new Components\HrisUpdateEmployeeRequestDtoPreferredLanguage(
        value: Components\HrisUpdateEmployeeRequestDtoPreferredLanguageValue::Eng,
    ),
    ethnicity: new Components\HrisUpdateEmployeeRequestDtoEthnicity(),
    dateOfBirth: Utils\Utils::parseDateTime('1990-01-01T00:00:00.000Z'),
    birthday: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    maritalStatus: new Components\HrisUpdateEmployeeRequestDtoMaritalStatus(),
    avatar: new Components\HrisUpdateEmployeeRequestDtoAvatar(),
    hireDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    startDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    employmentStatus: new Components\HrisUpdateEmployeeRequestDtoEmploymentStatus(),
    terminationDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    companyId: '1234567890',
    citizenships: [
        new Components\CountryCodeEnum(
            value: Components\CountryCodeEnumValue::Us,
        ),
    ],
    employment: null,
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
    benefits: null,
    employeeNumber: '125',
    nationalIdentityNumbers: [
        new Components\NationalIdentityNumberApiModel(
            value: '123456789',
            type: new Components\NationalIdentityNumberApiModelType(
                value: Components\NationalIdentityNumberApiModelValue::Ssn,
            ),
            country: new Components\Country(
                value: Components\NationalIdentityNumberApiModelCountryValue::Us,
            ),
        ),
    ],
    homeLocation: new Components\HrisUpdateEmployeeRequestDtoHomeLocation(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Woolsthorpe Manor',
        phoneNumber: '+44 1476 860 364',
        street1: 'Water Lane',
        street2: 'Woolsthorpe by Colsterworth',
        city: 'Grantham',
        zipCode: 'NG33 5NR',
        country: new Components\HrisUpdateEmployeeRequestDtoHomeLocationCountry(
            value: Components\HrisUpdateEmployeeRequestDtoHomeLocationValue::Us,
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        state: new Components\HrisUpdateEmployeeRequestDtoState(),
    ),
    workLocation: new Components\HrisUpdateEmployeeRequestDtoWorkLocation(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Woolsthorpe Manor',
        phoneNumber: '+44 1476 860 364',
        street1: 'Water Lane',
        street2: 'Woolsthorpe by Colsterworth',
        city: 'Grantham',
        zipCode: 'NG33 5NR',
        country: new Components\HrisUpdateEmployeeRequestDtoWorkLocationCountry(
            value: Components\HrisUpdateEmployeeRequestDtoWorkLocationValue::Us,
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        state: new Components\HrisUpdateEmployeeRequestDtoWorkLocationState(),
    ),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateEmployee(
    xAccountId: '<id>',
    id: '<id>',
    hrisUpdateEmployeeRequestDto: $hrisUpdateEmployeeRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `hrisUpdateEmployeeRequestDto`                                                                     | [Components\HrisUpdateEmployeeRequestDto](../../Models/Components/HrisUpdateEmployeeRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\HrisUpdateEmployeeResponse](../../Models/Operations/HrisUpdateEmployeeResponse.md)**

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

## inviteEmployee

Invite Employee

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_invite_employee" method="post" path="/unified/hris/employees/{id}/invite" -->
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

$hrisInviteEmployeeRequestDto = new Components\HrisInviteEmployeeRequestDto(
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->inviteEmployee(
    xAccountId: '<id>',
    id: '<id>',
    hrisInviteEmployeeRequestDto: $hrisInviteEmployeeRequestDto

);

if ($response->inviteEmployeeResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | The account identifier                                                                             |
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `hrisInviteEmployeeRequestDto`                                                                     | [Components\HrisInviteEmployeeRequestDto](../../Models/Components/HrisInviteEmployeeRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\HrisInviteEmployeeResponse](../../Models/Operations/HrisInviteEmployeeResponse.md)**

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

## listEmployeeTimeOffRequests

List Employee Time Off Requests

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_time_off_requests" method="get" path="/unified/hris/employees/{id}/time_off" -->
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

$request = new Operations\HrisListEmployeeTimeOffRequestsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,time_off_policy_id,remote_time_off_policy_id,reason,comment,duration,created_at,updated_at,policy',
    filter: new Operations\HrisListEmployeeTimeOffRequestsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'policy',
);

$responses = $sdk->hris->listEmployeeTimeOffRequests(
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
| `$request`                                                                                                             | [Operations\HrisListEmployeeTimeOffRequestsRequest](../../Models/Operations/HrisListEmployeeTimeOffRequestsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeTimeOffRequestsResponse](../../Models/Operations/HrisListEmployeeTimeOffRequestsResponse.md)**

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

## createEmployeeTimeOffRequest

Create Employee Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_create_employee_time_off_request" method="post" path="/unified/hris/employees/{id}/time_off" -->
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

$hrisCreateTimeOffRequestDto = new Components\HrisCreateTimeOffRequestDto(
    approverId: '1687-4',
    startDate: '2021-01-01T01:01:01.000',
    endDate: '2021-01-01T01:01:01.000',
    startHalfDay: true,
    endHalfDay: true,
    timeOffPolicyId: 'cx280928933',
    reason: new Components\HrisCreateTimeOffRequestDtoReason(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    ),
    comment: 'Taking a day off for personal reasons',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createEmployeeTimeOffRequest(
    xAccountId: '<id>',
    id: '<id>',
    hrisCreateTimeOffRequestDto: $hrisCreateTimeOffRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                     | *string*                                                                                         | :heavy_check_mark:                                                                               | The account identifier                                                                           |
| `id`                                                                                             | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `hrisCreateTimeOffRequestDto`                                                                    | [Components\HrisCreateTimeOffRequestDto](../../Models/Components/HrisCreateTimeOffRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |

### Response

**[?Operations\HrisCreateEmployeeTimeOffRequestResponse](../../Models/Operations/HrisCreateEmployeeTimeOffRequestResponse.md)**

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

## getEmployeesTimeOffRequest

Get Employees Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employees_time_off_request" method="get" path="/unified/hris/employees/{id}/time_off/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeesTimeOffRequestRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,time_off_policy_id,remote_time_off_policy_id,reason,comment,duration,created_at,updated_at,policy',
    expand: 'policy',
);

$response = $sdk->hris->getEmployeesTimeOffRequest(
    request: $request
);

if ($response->timeOffResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\HrisGetEmployeesTimeOffRequestRequest](../../Models/Operations/HrisGetEmployeesTimeOffRequestRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\HrisGetEmployeesTimeOffRequestResponse](../../Models/Operations/HrisGetEmployeesTimeOffRequestResponse.md)**

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

## cancelEmployeeTimeOffRequest

Cancel Employee Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_cancel_employee_time_off_request" method="delete" path="/unified/hris/employees/{id}/time_off/{subResourceId}" -->
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



$response = $sdk->hris->cancelEmployeeTimeOffRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>'

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
| `subResourceId`        | *string*               | :heavy_check_mark:     | N/A                    |

### Response

**[?Operations\HrisCancelEmployeeTimeOffRequestResponse](../../Models/Operations/HrisCancelEmployeeTimeOffRequestResponse.md)**

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

## updateEmployeeTimeOffRequest

Update Employee Time Off Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_update_employee_time_off_request" method="patch" path="/unified/hris/employees/{id}/time_off/{subResourceId}" -->
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

$hrisCreateTimeOffRequestDto = new Components\HrisCreateTimeOffRequestDto(
    approverId: '1687-4',
    startDate: '2021-01-01T01:01:01.000',
    endDate: '2021-01-01T01:01:01.000',
    startHalfDay: true,
    endHalfDay: true,
    timeOffPolicyId: 'cx280928933',
    reason: new Components\HrisCreateTimeOffRequestDtoReason(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    ),
    comment: 'Taking a day off for personal reasons',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateEmployeeTimeOffRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    hrisCreateTimeOffRequestDto: $hrisCreateTimeOffRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                     | *string*                                                                                         | :heavy_check_mark:                                                                               | The account identifier                                                                           |
| `id`                                                                                             | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `subResourceId`                                                                                  | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `hrisCreateTimeOffRequestDto`                                                                    | [Components\HrisCreateTimeOffRequestDto](../../Models/Components/HrisCreateTimeOffRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |

### Response

**[?Operations\HrisUpdateEmployeeTimeOffRequestResponse](../../Models/Operations/HrisUpdateEmployeeTimeOffRequestResponse.md)**

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

## batchUploadEmployeeDocument

Batch Upload Employee Document

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_batch_upload_employee_document" method="post" path="/unified/hris/employees/{id}/documents/upload/batch" -->
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

$hrisBatchDocumentUploadRequestDto = new Components\HrisBatchDocumentUploadRequestDto(
    items: [
        new Components\HrisDocumentsUploadRequestDto(
            name: 'weather-forecast',
            fileFormat: new Components\FileFormat(
                value: Components\HrisDocumentsUploadRequestDtoValue::Pdf,
                sourceValue: 'application/pdf',
            ),
            content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
            categoryId: '6530',
            path: '/path/to/file',
            confidential: new Components\Confidential(
                value: Components\HrisDocumentsUploadRequestDtoConfidentialValue::True,
                sourceValue: 'public',
            ),
            category: new Components\HrisDocumentsUploadRequestDtoCategory(),
        ),
    ],
);

$response = $sdk->hris->batchUploadEmployeeDocument(
    xAccountId: '<id>',
    id: '<id>',
    hrisBatchDocumentUploadRequestDto: $hrisBatchDocumentUploadRequestDto

);

if ($response->batchResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | The account identifier                                                                                       |
| `id`                                                                                                         | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `hrisBatchDocumentUploadRequestDto`                                                                          | [Components\HrisBatchDocumentUploadRequestDto](../../Models/Components/HrisBatchDocumentUploadRequestDto.md) | :heavy_check_mark:                                                                                           | N/A                                                                                                          |

### Response

**[?Operations\HrisBatchUploadEmployeeDocumentResponse](../../Models/Operations/HrisBatchUploadEmployeeDocumentResponse.md)**

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

## uploadEmployeeDocument

Upload Employee Document

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_upload_employee_document" method="post" path="/unified/hris/employees/{id}/documents/upload" -->
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

$hrisDocumentsUploadRequestDto = new Components\HrisDocumentsUploadRequestDto(
    name: 'weather-forecast',
    fileFormat: new Components\FileFormat(
        value: Components\HrisDocumentsUploadRequestDtoValue::Pdf,
        sourceValue: 'application/pdf',
    ),
    content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
    categoryId: '6530',
    path: '/path/to/file',
    confidential: new Components\Confidential(
        value: Components\HrisDocumentsUploadRequestDtoConfidentialValue::True,
        sourceValue: 'public',
    ),
    category: new Components\HrisDocumentsUploadRequestDtoCategory(),
);

$response = $sdk->hris->uploadEmployeeDocument(
    xAccountId: '<id>',
    id: '<id>',
    hrisDocumentsUploadRequestDto: $hrisDocumentsUploadRequestDto

);

if ($response->writeResultApiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `xAccountId`                                                                                         | *string*                                                                                             | :heavy_check_mark:                                                                                   | The account identifier                                                                               |
| `id`                                                                                                 | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `hrisDocumentsUploadRequestDto`                                                                      | [Components\HrisDocumentsUploadRequestDto](../../Models/Components/HrisDocumentsUploadRequestDto.md) | :heavy_check_mark:                                                                                   | N/A                                                                                                  |

### Response

**[?Operations\HrisUploadEmployeeDocumentResponse](../../Models/Operations/HrisUploadEmployeeDocumentResponse.md)**

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

## downloadEmployeeDocument

Download Employee Document

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_download_employee_document" method="get" path="/unified/hris/employees/{id}/documents/{subResourceId}/download" -->
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

$request = new Operations\HrisDownloadEmployeeDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    format: 'base64',
    exportFormat: 'text/plain',
);

$response = $sdk->hris->downloadEmployeeDocument(
    request: $request
);

if ($response->body !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\HrisDownloadEmployeeDocumentRequest](../../Models/Operations/HrisDownloadEmployeeDocumentRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\HrisDownloadEmployeeDocumentResponse](../../Models/Operations/HrisDownloadEmployeeDocumentResponse.md)**

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

## listEmployeeDocuments

List Employee Documents

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_documents" method="get" path="/unified/hris/employees/{id}/documents" -->
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

$request = new Operations\HrisListEmployeeDocumentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
    filter: new Operations\HrisListEmployeeDocumentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listEmployeeDocuments(
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
| `$request`                                                                                                 | [Operations\HrisListEmployeeDocumentsRequest](../../Models/Operations/HrisListEmployeeDocumentsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\HrisListEmployeeDocumentsResponse](../../Models/Operations/HrisListEmployeeDocumentsResponse.md)**

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

## getEmployeeDocument

Get Employee Document

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_document" method="get" path="/unified/hris/employees/{id}/documents/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeeDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
);

$response = $sdk->hris->getEmployeeDocument(
    request: $request
);

if ($response->hrisDocumentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\HrisGetEmployeeDocumentRequest](../../Models/Operations/HrisGetEmployeeDocumentRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\HrisGetEmployeeDocumentResponse](../../Models/Operations/HrisGetEmployeeDocumentResponse.md)**

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

## listEmployeeCategories

List Employee Document Categories

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_categories" method="get" path="/unified/hris/documents/employee_categories" -->
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

$request = new Operations\HrisListEmployeeCategoriesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active',
    filter: new Operations\HrisListEmployeeCategoriesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listEmployeeCategories(
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
| `$request`                                                                                                   | [Operations\HrisListEmployeeCategoriesRequest](../../Models/Operations/HrisListEmployeeCategoriesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\HrisListEmployeeCategoriesResponse](../../Models/Operations/HrisListEmployeeCategoriesResponse.md)**

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

## getEmployeeDocumentCategory

Get Employee Document Category

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_document_category" method="get" path="/unified/hris/documents/employee_categories/{id}" -->
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

$request = new Operations\HrisGetEmployeeDocumentCategoryRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active',
);

$response = $sdk->hris->getEmployeeDocumentCategory(
    request: $request
);

if ($response->referenceResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\HrisGetEmployeeDocumentCategoryRequest](../../Models/Operations/HrisGetEmployeeDocumentCategoryRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisGetEmployeeDocumentCategoryResponse](../../Models/Operations/HrisGetEmployeeDocumentCategoryResponse.md)**

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

## listEmployeeWorkEligibility

List Employee Work Eligibility

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_work_eligibility" method="get" path="/unified/hris/employees/{id}/work_eligibility" -->
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

$request = new Operations\HrisListEmployeeWorkEligibilityRequest(
    id: '<id>',
    fields: 'id,remote_id,type,sub_type,document,valid_from,valid_to,issued_by,number',
    filter: new Operations\HrisListEmployeeWorkEligibilityQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    xAccountId: '<id>',
);

$responses = $sdk->hris->listEmployeeWorkEligibility(
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
| `$request`                                                                                                             | [Operations\HrisListEmployeeWorkEligibilityRequest](../../Models/Operations/HrisListEmployeeWorkEligibilityRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeWorkEligibilityResponse](../../Models/Operations/HrisListEmployeeWorkEligibilityResponse.md)**

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

## createEmployeeWorkEligibilityRequest

Create Employee Work Eligibility Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_create_employee_work_eligibility_request" method="post" path="/unified/hris/employees/{id}/work_eligibility" -->
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

$hrisCreateWorkEligibilityRequestDto = new Components\HrisCreateWorkEligibilityRequestDto(
    document: new Components\HrisCreateWorkEligibilityRequestDtoDocument(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'My Document',
        category: new Components\HrisCreateWorkEligibilityRequestDtoCategory(),
        categoryId: '6530',
        createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-01-02T01:01:01.000Z'),
        remoteUrl: 'https://example.com/file.pdf',
        fileFormat: null,
    ),
    issuedBy: new Components\HrisCreateWorkEligibilityRequestDtoIssuedBy(
        value: Components\HrisCreateWorkEligibilityRequestDtoValue::Us,
    ),
    number: '1234567890',
    subType: 'H1B',
    type: new Components\HrisCreateWorkEligibilityRequestDtoType(),
    validFrom: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    validTo: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createEmployeeWorkEligibilityRequest(
    id: '<id>',
    xAccountId: '<id>',
    hrisCreateWorkEligibilityRequestDto: $hrisCreateWorkEligibilityRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                             | *string*                                                                                                         | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `xAccountId`                                                                                                     | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The account identifier                                                                                           |
| `hrisCreateWorkEligibilityRequestDto`                                                                            | [Components\HrisCreateWorkEligibilityRequestDto](../../Models/Components/HrisCreateWorkEligibilityRequestDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |

### Response

**[?Operations\HrisCreateEmployeeWorkEligibilityRequestResponse](../../Models/Operations/HrisCreateEmployeeWorkEligibilityRequestResponse.md)**

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

## getEmployeesWorkEligibility

Get Employees Work Eligibility

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employees_work_eligibility" method="get" path="/unified/hris/employees/{id}/work_eligibility/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeesWorkEligibilityRequest(
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,type,sub_type,document,valid_from,valid_to,issued_by,number',
    xAccountId: '<id>',
);

$response = $sdk->hris->getEmployeesWorkEligibility(
    request: $request
);

if ($response->workEligibilityResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\HrisGetEmployeesWorkEligibilityRequest](../../Models/Operations/HrisGetEmployeesWorkEligibilityRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisGetEmployeesWorkEligibilityResponse](../../Models/Operations/HrisGetEmployeesWorkEligibilityResponse.md)**

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

## updateEmployeeWorkEligibilityRequest

Update Employee Work Eligibility Request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_update_employee_work_eligibility_request" method="patch" path="/unified/hris/employees/{id}/work_eligibility/{subResourceId}" -->
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

$hrisCreateWorkEligibilityRequestDto = new Components\HrisCreateWorkEligibilityRequestDto(
    document: new Components\HrisCreateWorkEligibilityRequestDtoDocument(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'My Document',
        category: new Components\HrisCreateWorkEligibilityRequestDtoCategory(),
        categoryId: '6530',
        createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-01-02T01:01:01.000Z'),
        remoteUrl: 'https://example.com/file.pdf',
        fileFormat: new Components\HrisCreateWorkEligibilityRequestDtoFileFormat(
            value: Components\HrisCreateWorkEligibilityRequestDtoDocumentValue::Pdf,
            sourceValue: 'application/pdf',
        ),
    ),
    issuedBy: new Components\HrisCreateWorkEligibilityRequestDtoIssuedBy(
        value: Components\HrisCreateWorkEligibilityRequestDtoValue::Us,
    ),
    number: '1234567890',
    subType: 'H1B',
    type: new Components\HrisCreateWorkEligibilityRequestDtoType(),
    validFrom: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    validTo: Utils\Utils::parseDateTime('2021-01-01T00:00:00.000Z'),
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateEmployeeWorkEligibilityRequest(
    id: '<id>',
    subResourceId: '<id>',
    xAccountId: '<id>',
    hrisCreateWorkEligibilityRequestDto: $hrisCreateWorkEligibilityRequestDto

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                             | *string*                                                                                                         | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `subResourceId`                                                                                                  | *string*                                                                                                         | :heavy_check_mark:                                                                                               | N/A                                                                                                              |
| `xAccountId`                                                                                                     | *string*                                                                                                         | :heavy_check_mark:                                                                                               | The account identifier                                                                                           |
| `hrisCreateWorkEligibilityRequestDto`                                                                            | [Components\HrisCreateWorkEligibilityRequestDto](../../Models/Components/HrisCreateWorkEligibilityRequestDto.md) | :heavy_check_mark:                                                                                               | N/A                                                                                                              |

### Response

**[?Operations\HrisUpdateEmployeeWorkEligibilityRequestResponse](../../Models/Operations/HrisUpdateEmployeeWorkEligibilityRequestResponse.md)**

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

## listEmployeeTimeOffBalances

List Employee Time Off Balances

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_time_off_balances" method="get" path="/unified/hris/employees/{id}/time_off_balances" -->
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

$request = new Operations\HrisListEmployeeTimeOffBalancesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,policy_id,remote_policy_id,policy,current_balance,initial_balance,balance_unit,balance_start_date,balance_expiry_date,updated_at',
    filter: new Operations\HrisListEmployeeTimeOffBalancesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'policy',
);

$responses = $sdk->hris->listEmployeeTimeOffBalances(
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
| `$request`                                                                                                             | [Operations\HrisListEmployeeTimeOffBalancesRequest](../../Models/Operations/HrisListEmployeeTimeOffBalancesRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeTimeOffBalancesResponse](../../Models/Operations/HrisListEmployeeTimeOffBalancesResponse.md)**

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

## getEmployeeTimeOffBalance

Get Employee Time Off Balance

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_time_off_balance" method="get" path="/unified/hris/employees/{id}/time_off_balances/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeeTimeOffBalanceRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,policy_id,remote_policy_id,policy,current_balance,initial_balance,balance_unit,balance_start_date,balance_expiry_date,updated_at',
    expand: 'policy',
);

$response = $sdk->hris->getEmployeeTimeOffBalance(
    request: $request
);

if ($response->timeOffBalanceResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\HrisGetEmployeeTimeOffBalanceRequest](../../Models/Operations/HrisGetEmployeeTimeOffBalanceRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\HrisGetEmployeeTimeOffBalanceResponse](../../Models/Operations/HrisGetEmployeeTimeOffBalanceResponse.md)**

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

## listEmployments

List Employments

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employments" method="get" path="/unified/hris/employments" -->
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

$request = new Operations\HrisListEmploymentsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,end_date,employment_type,employment_contract_type,type,contract_type,change_reason,grade,work_time,payroll_code,fte,created_at,updated_at,start_date,active,department,team,cost_center,cost_centers,division,job,manager',
    filter: new Operations\HrisListEmploymentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'groups',
);

$responses = $sdk->hris->listEmployments(
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
| `$request`                                                                                     | [Operations\HrisListEmploymentsRequest](../../Models/Operations/HrisListEmploymentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisListEmploymentsResponse](../../Models/Operations/HrisListEmploymentsResponse.md)**

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

## getEmployment

Get Employment

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employment" method="get" path="/unified/hris/employments/{id}" -->
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

$request = new Operations\HrisGetEmploymentRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,end_date,employment_type,employment_contract_type,type,contract_type,change_reason,grade,work_time,payroll_code,fte,created_at,updated_at,start_date,active,department,team,cost_center,cost_centers,division,job,manager',
    expand: 'groups',
);

$response = $sdk->hris->getEmployment(
    request: $request
);

if ($response->employmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\HrisGetEmploymentRequest](../../Models/Operations/HrisGetEmploymentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisGetEmploymentResponse](../../Models/Operations/HrisGetEmploymentResponse.md)**

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

## listEmployeeEmployments

List Employee Employments

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_employments" method="get" path="/unified/hris/employees/{id}/employments" -->
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

$request = new Operations\HrisListEmployeeEmploymentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,end_date,employment_type,employment_contract_type,type,contract_type,change_reason,grade,work_time,payroll_code,fte,created_at,updated_at,start_date,active,department,team,cost_center,cost_centers,division,job,manager',
    filter: new Operations\HrisListEmployeeEmploymentsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'groups',
);

$responses = $sdk->hris->listEmployeeEmployments(
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
| `$request`                                                                                                     | [Operations\HrisListEmployeeEmploymentsRequest](../../Models/Operations/HrisListEmployeeEmploymentsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\HrisListEmployeeEmploymentsResponse](../../Models/Operations/HrisListEmployeeEmploymentsResponse.md)**

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

## createEmployeeEmployment

Create Employee Employment

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_create_employee_employment" method="post" path="/unified/hris/employees/{id}/employments" -->
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

$hrisCreateEmploymentRequestDto = new Components\HrisCreateEmploymentRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    jobTitle: 'Software Engineer',
    payRate: '40.00',
    payPeriod: new Components\HrisCreateEmploymentRequestDtoPayPeriod(
        value: Components\HrisCreateEmploymentRequestDtoValue::Hour,
        sourceValue: 'Hour',
    ),
    payFrequency: new Components\HrisCreateEmploymentRequestDtoPayFrequency(
        value: Components\HrisCreateEmploymentRequestDtoPayFrequencyValue::Hourly,
        sourceValue: 'Hourly',
    ),
    payCurrency: 'USD',
    effectiveDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    endDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    grade: new Components\HrisCreateEmploymentRequestDtoGrade(
        id: '1687-3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: '1687-4',
        description: 'Mid-level employee demonstrating proficiency and autonomy.',
    ),
    type: new Components\HrisCreateEmploymentRequestDtoType(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        label: 'Permanent',
        type: new Components\HrisCreateEmploymentRequestDtoTypeType(),
    ),
    contractType: new Components\HrisCreateEmploymentRequestDtoContractType(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        label: 'Full-Time',
        contractType: new Components\HrisCreateEmploymentRequestDtoContractTypeContractType(),
    ),
    workTime: new Components\HrisCreateEmploymentRequestDtoWorkTime(
        duration: 'P0Y0M0DT8H0M0S',
        durationUnit: new Components\HrisCreateEmploymentRequestDtoDurationUnit(
            value: Components\HrisCreateEmploymentRequestDtoWorkTimeValue::Month,
        ),
    ),
    payrollCode: 'PC1',
    jobId: '5290',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createEmployeeEmployment(
    xAccountId: '<id>',
    id: '<id>',
    hrisCreateEmploymentRequestDto: $hrisCreateEmploymentRequestDto

);

if ($response->createResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `id`                                                                                                   | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `hrisCreateEmploymentRequestDto`                                                                       | [Components\HrisCreateEmploymentRequestDto](../../Models/Components/HrisCreateEmploymentRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\HrisCreateEmployeeEmploymentResponse](../../Models/Operations/HrisCreateEmployeeEmploymentResponse.md)**

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

## getEmployeeEmployment

Get Employee Employment

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_employment" method="get" path="/unified/hris/employees/{id}/employments/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeeEmploymentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,end_date,employment_type,employment_contract_type,type,contract_type,change_reason,grade,work_time,payroll_code,fte,created_at,updated_at,start_date,active,department,team,cost_center,cost_centers,division,job,manager',
    expand: 'groups',
);

$response = $sdk->hris->getEmployeeEmployment(
    request: $request
);

if ($response->employmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\HrisGetEmployeeEmploymentRequest](../../Models/Operations/HrisGetEmployeeEmploymentRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\HrisGetEmployeeEmploymentResponse](../../Models/Operations/HrisGetEmployeeEmploymentResponse.md)**

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

## updateEmployeeEmployment

Update Employee Employment

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_update_employee_employment" method="patch" path="/unified/hris/employees/{id}/employments/{subResourceId}" -->
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

$hrisUpdateEmploymentRequestDto = new Components\HrisUpdateEmploymentRequestDto(
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    jobTitle: 'Software Engineer',
    payRate: '40.00',
    payPeriod: new Components\HrisUpdateEmploymentRequestDtoPayPeriod(
        value: Components\HrisUpdateEmploymentRequestDtoValue::Hour,
        sourceValue: 'Hour',
    ),
    payFrequency: new Components\HrisUpdateEmploymentRequestDtoPayFrequency(
        value: Components\HrisUpdateEmploymentRequestDtoPayFrequencyValue::Hourly,
        sourceValue: 'Hourly',
    ),
    payCurrency: 'USD',
    effectiveDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    endDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    grade: new Components\HrisUpdateEmploymentRequestDtoGrade(
        id: '1687-3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: '1687-4',
        description: 'Mid-level employee demonstrating proficiency and autonomy.',
    ),
    type: new Components\HrisUpdateEmploymentRequestDtoType(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        label: 'Permanent',
        type: new Components\HrisUpdateEmploymentRequestDtoTypeType(),
    ),
    contractType: new Components\HrisUpdateEmploymentRequestDtoContractType(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        label: 'Full-Time',
        contractType: new Components\HrisUpdateEmploymentRequestDtoContractTypeContractType(),
    ),
    workTime: new Components\HrisUpdateEmploymentRequestDtoWorkTime(
        duration: 'P0Y0M0DT8H0M0S',
        durationUnit: new Components\HrisUpdateEmploymentRequestDtoDurationUnit(
            value: Components\HrisUpdateEmploymentRequestDtoWorkTimeValue::Month,
        ),
    ),
    payrollCode: 'PC1',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateEmployeeEmployment(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    hrisUpdateEmploymentRequestDto: $hrisUpdateEmploymentRequestDto

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
| `subResourceId`                                                                                        | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `hrisUpdateEmploymentRequestDto`                                                                       | [Components\HrisUpdateEmploymentRequestDto](../../Models/Components/HrisUpdateEmploymentRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\HrisUpdateEmployeeEmploymentResponse](../../Models/Operations/HrisUpdateEmployeeEmploymentResponse.md)**

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

## listGroups

List Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_groups" method="get" path="/unified/hris/groups" -->
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

$request = new Operations\HrisListGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
    filter: new Operations\HrisListGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listGroups(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\HrisListGroupsRequest](../../Models/Operations/HrisListGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\HrisListGroupsResponse](../../Models/Operations/HrisListGroupsResponse.md)**

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

## listDepartmentGroups

List Department Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_department_groups" method="get" path="/unified/hris/groups/departments" -->
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

$request = new Operations\HrisListDepartmentGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
    filter: new Operations\HrisListDepartmentGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listDepartmentGroups(
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
| `$request`                                                                                               | [Operations\HrisListDepartmentGroupsRequest](../../Models/Operations/HrisListDepartmentGroupsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\HrisListDepartmentGroupsResponse](../../Models/Operations/HrisListDepartmentGroupsResponse.md)**

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

## listCostCenterGroups

List Cost Center Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_cost_center_groups" method="get" path="/unified/hris/groups/cost_centers" -->
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

$request = new Operations\HrisListCostCenterGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,distribution_percentage,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
    filter: new Operations\HrisListCostCenterGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listCostCenterGroups(
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
| `$request`                                                                                               | [Operations\HrisListCostCenterGroupsRequest](../../Models/Operations/HrisListCostCenterGroupsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\HrisListCostCenterGroupsResponse](../../Models/Operations/HrisListCostCenterGroupsResponse.md)**

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

## listTeamGroups

List Team Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_team_groups" method="get" path="/unified/hris/groups/teams" -->
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

$request = new Operations\HrisListTeamGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
    filter: new Operations\HrisListTeamGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listTeamGroups(
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
| `$request`                                                                                   | [Operations\HrisListTeamGroupsRequest](../../Models/Operations/HrisListTeamGroupsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\HrisListTeamGroupsResponse](../../Models/Operations/HrisListTeamGroupsResponse.md)**

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

## listDivisionGroups

List Division Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_division_groups" method="get" path="/unified/hris/groups/divisions" -->
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

$request = new Operations\HrisListDivisionGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
    filter: new Operations\HrisListDivisionGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listDivisionGroups(
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
| `$request`                                                                                           | [Operations\HrisListDivisionGroupsRequest](../../Models/Operations/HrisListDivisionGroupsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisListDivisionGroupsResponse](../../Models/Operations/HrisListDivisionGroupsResponse.md)**

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

## listCompaniesGroups

List Companies Groups

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_companies_groups" method="get" path="/unified/hris/groups/companies" -->
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

$request = new Operations\HrisListCompaniesGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,full_name,display_name,created_at,updated_at',
    filter: new Operations\HrisListCompaniesGroupsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listCompaniesGroups(
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
| `$request`                                                                                             | [Operations\HrisListCompaniesGroupsRequest](../../Models/Operations/HrisListCompaniesGroupsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\HrisListCompaniesGroupsResponse](../../Models/Operations/HrisListCompaniesGroupsResponse.md)**

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

## getGroup

Get Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_group" method="get" path="/unified/hris/groups/{id}" -->
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

$request = new Operations\HrisGetGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
);

$response = $sdk->hris->getGroup(
    request: $request
);

if ($response->hrisGroupsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\HrisGetGroupRequest](../../Models/Operations/HrisGetGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\HrisGetGroupResponse](../../Models/Operations/HrisGetGroupResponse.md)**

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

## getDepartmentGroup

Get Department Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_department_group" method="get" path="/unified/hris/groups/departments/{id}" -->
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

$request = new Operations\HrisGetDepartmentGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
);

$response = $sdk->hris->getDepartmentGroup(
    request: $request
);

if ($response->hrisDepartmentsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\HrisGetDepartmentGroupRequest](../../Models/Operations/HrisGetDepartmentGroupRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisGetDepartmentGroupResponse](../../Models/Operations/HrisGetDepartmentGroupResponse.md)**

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

## getCostCenterGroup

Get Cost Center Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_cost_center_group" method="get" path="/unified/hris/groups/cost_centers/{id}" -->
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

$request = new Operations\HrisGetCostCenterGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,distribution_percentage,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
);

$response = $sdk->hris->getCostCenterGroup(
    request: $request
);

if ($response->hrisCostCenterResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\HrisGetCostCenterGroupRequest](../../Models/Operations/HrisGetCostCenterGroupRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisGetCostCenterGroupResponse](../../Models/Operations/HrisGetCostCenterGroupResponse.md)**

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

## getTeamGroup

Get Team Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_team_group" method="get" path="/unified/hris/groups/teams/{id}" -->
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

$request = new Operations\HrisGetTeamGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
);

$response = $sdk->hris->getTeamGroup(
    request: $request
);

if ($response->hrisTeamsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\HrisGetTeamGroupRequest](../../Models/Operations/HrisGetTeamGroupRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisGetTeamGroupResponse](../../Models/Operations/HrisGetTeamGroupResponse.md)**

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

## getDivisionGroup

Get Division Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_division_group" method="get" path="/unified/hris/groups/divisions/{id}" -->
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

$request = new Operations\HrisGetDivisionGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids,company_id,remote_company_id',
);

$response = $sdk->hris->getDivisionGroup(
    request: $request
);

if ($response->hrisDivisionsResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\HrisGetDivisionGroupRequest](../../Models/Operations/HrisGetDivisionGroupRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\HrisGetDivisionGroupResponse](../../Models/Operations/HrisGetDivisionGroupResponse.md)**

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

## getCompanyGroup

Get Company Group

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_company_group" method="get" path="/unified/hris/groups/companies/{id}" -->
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

$request = new Operations\HrisGetCompanyGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,full_name,display_name,created_at,updated_at',
);

$response = $sdk->hris->getCompanyGroup(
    request: $request
);

if ($response->companyResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\HrisGetCompanyGroupRequest](../../Models/Operations/HrisGetCompanyGroupRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisGetCompanyGroupResponse](../../Models/Operations/HrisGetCompanyGroupResponse.md)**

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

<!-- UsageSnippet language="php" operationID="hris_list_jobs" method="get" path="/unified/hris/jobs" -->
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

$request = new Operations\HrisListJobsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,code,title,description,status,created_at,updated_at',
    filter: new Operations\HrisListJobsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listJobs(
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
| `$request`                                                                       | [Operations\HrisListJobsRequest](../../Models/Operations/HrisListJobsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\HrisListJobsResponse](../../Models/Operations/HrisListJobsResponse.md)**

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

<!-- UsageSnippet language="php" operationID="hris_get_job" method="get" path="/unified/hris/jobs/{id}" -->
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

$request = new Operations\HrisGetJobRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,code,title,description,status,created_at,updated_at',
);

$response = $sdk->hris->getJob(
    request: $request
);

if ($response->hrisJobResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\HrisGetJobRequest](../../Models/Operations/HrisGetJobRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\HrisGetJobResponse](../../Models/Operations/HrisGetJobResponse.md)**

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

List Work Locations

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_locations" method="get" path="/unified/hris/locations" -->
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

$request = new Operations\HrisListLocationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,phone_number,street_1,street_2,city,state,zip_code,country,location_type,created_at,updated_at',
    filter: new Operations\HrisListLocationsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listLocations(
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
| `$request`                                                                                 | [Operations\HrisListLocationsRequest](../../Models/Operations/HrisListLocationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListLocationsResponse](../../Models/Operations/HrisListLocationsResponse.md)**

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

Get Work Location

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_location" method="get" path="/unified/hris/locations/{id}" -->
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

$request = new Operations\HrisGetLocationRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,phone_number,street_1,street_2,city,state,zip_code,country,location_type,created_at,updated_at',
);

$response = $sdk->hris->getLocation(
    request: $request
);

if ($response->hrisLocationResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\HrisGetLocationRequest](../../Models/Operations/HrisGetLocationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\HrisGetLocationResponse](../../Models/Operations/HrisGetLocationResponse.md)**

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

## listPositions

List Positions

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_positions" method="get" path="/unified/hris/positions" -->
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

$request = new Operations\HrisListPositionsRequest(
    xAccountId: '<id>',
    filter: new Operations\HrisListPositionsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    status: Operations\Status::Open,
);

$responses = $sdk->hris->listPositions(
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
| `$request`                                                                                 | [Operations\HrisListPositionsRequest](../../Models/Operations/HrisListPositionsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListPositionsResponse](../../Models/Operations/HrisListPositionsResponse.md)**

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

## getPosition

Get Position

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_position" method="get" path="/unified/hris/positions/{id}" -->
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

$request = new Operations\HrisGetPositionRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getPosition(
    request: $request
);

if ($response->positionResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\HrisGetPositionRequest](../../Models/Operations/HrisGetPositionRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\HrisGetPositionResponse](../../Models/Operations/HrisGetPositionResponse.md)**

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

## listTimeEntries

List Time Entries

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_time_entries" method="get" path="/unified/hris/time_entries" -->
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

$request = new Operations\HrisListTimeEntriesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,start_time,end_time,hours_worked,break_duration,labor_type,location,status,created_at,updated_at',
    filter: new Operations\HrisListTimeEntriesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
        startTime: '2020-01-01T00:00:00.000Z',
        endTime: '2020-01-01T00:00:00.000Z',
    ),
);

$responses = $sdk->hris->listTimeEntries(
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
| `$request`                                                                                     | [Operations\HrisListTimeEntriesRequest](../../Models/Operations/HrisListTimeEntriesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisListTimeEntriesResponse](../../Models/Operations/HrisListTimeEntriesResponse.md)**

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

## getTimeEntries

Get Time Entry

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_time_entries" method="get" path="/unified/hris/time_entries/{id}" -->
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

$request = new Operations\HrisGetTimeEntriesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,start_time,end_time,hours_worked,break_duration,labor_type,location,status,created_at,updated_at',
);

$response = $sdk->hris->getTimeEntries(
    request: $request
);

if ($response->timeEntriesResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\HrisGetTimeEntriesRequest](../../Models/Operations/HrisGetTimeEntriesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\HrisGetTimeEntriesResponse](../../Models/Operations/HrisGetTimeEntriesResponse.md)**

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

## listTimeOffRequests

List time off requests

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_time_off_requests" method="get" path="/unified/hris/time_off" -->
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

$request = new Operations\HrisListTimeOffRequestsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,time_off_policy_id,remote_time_off_policy_id,reason,comment,duration,created_at,updated_at,policy',
    filter: null,
    expand: 'policy',
);

$responses = $sdk->hris->listTimeOffRequests(
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
| `$request`                                                                                             | [Operations\HrisListTimeOffRequestsRequest](../../Models/Operations/HrisListTimeOffRequestsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\HrisListTimeOffRequestsResponse](../../Models/Operations/HrisListTimeOffRequestsResponse.md)**

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

## getTimeOffRequest

Get time off request

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_time_off_request" method="get" path="/unified/hris/time_off/{id}" -->
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

$request = new Operations\HrisGetTimeOffRequestRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,time_off_policy_id,remote_time_off_policy_id,reason,comment,duration,created_at,updated_at,policy',
    expand: 'policy',
);

$response = $sdk->hris->getTimeOffRequest(
    request: $request
);

if ($response->timeOffResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\HrisGetTimeOffRequestRequest](../../Models/Operations/HrisGetTimeOffRequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\HrisGetTimeOffRequestResponse](../../Models/Operations/HrisGetTimeOffRequestResponse.md)**

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

## listShifts

List Shifts

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_shifts" method="get" path="/unified/hris/shifts" -->
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

$request = new Operations\HrisListShiftsRequest(
    xAccountId: '<id>',
    filter: new Operations\HrisListShiftsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listShifts(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\HrisListShiftsRequest](../../Models/Operations/HrisListShiftsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\HrisListShiftsResponse](../../Models/Operations/HrisListShiftsResponse.md)**

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

## getShift

Get Shift

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_shift" method="get" path="/unified/hris/shifts/{id}" -->
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

$request = new Operations\HrisGetShiftRequest(
    xAccountId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getShift(
    request: $request
);

if ($response->hrisShiftResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\HrisGetShiftRequest](../../Models/Operations/HrisGetShiftRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\HrisGetShiftResponse](../../Models/Operations/HrisGetShiftResponse.md)**

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

## ~~listTimeOffTypes~~

List time off types

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_time_off_types" method="get" path="/unified/hris/time_off_types" -->
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

$request = new Operations\HrisListTimeOffTypesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active',
    filter: new Operations\HrisListTimeOffTypesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listTimeOffTypes(
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
| `$request`                                                                                       | [Operations\HrisListTimeOffTypesRequest](../../Models/Operations/HrisListTimeOffTypesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\HrisListTimeOffTypesResponse](../../Models/Operations/HrisListTimeOffTypesResponse.md)**

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

## ~~getTimeOffType~~

Get time off type

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_time_off_type" method="get" path="/unified/hris/time_off_types/{id}" -->
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

$request = new Operations\HrisGetTimeOffTypeRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active',
);

$response = $sdk->hris->getTimeOffType(
    request: $request
);

if ($response->referenceResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\HrisGetTimeOffTypeRequest](../../Models/Operations/HrisGetTimeOffTypeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\HrisGetTimeOffTypeResponse](../../Models/Operations/HrisGetTimeOffTypeResponse.md)**

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

## listTimeOffPolicies

List Time Off Policies

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_time_off_policies" method="get" path="/unified/hris/time_off_policies" -->
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

$request = new Operations\HrisListTimeOffPoliciesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,duration_unit,reasons,updated_at,created_at',
    filter: new Operations\HrisListTimeOffPoliciesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listTimeOffPolicies(
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
| `$request`                                                                                             | [Operations\HrisListTimeOffPoliciesRequest](../../Models/Operations/HrisListTimeOffPoliciesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\HrisListTimeOffPoliciesResponse](../../Models/Operations/HrisListTimeOffPoliciesResponse.md)**

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

## getTimeOffPolicy

Get Time Off Policy

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_time_off_policy" method="get" path="/unified/hris/time_off_policies/{id}" -->
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

$request = new Operations\HrisGetTimeOffPolicyRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,duration_unit,reasons,updated_at,created_at',
);

$response = $sdk->hris->getTimeOffPolicy(
    request: $request
);

if ($response->timeOffPolicyResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\HrisGetTimeOffPolicyRequest](../../Models/Operations/HrisGetTimeOffPolicyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\HrisGetTimeOffPolicyResponse](../../Models/Operations/HrisGetTimeOffPolicyResponse.md)**

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

## listEmployeeTimeOffPolicies

List Assigned Time Off Policies

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_time_off_policies" method="get" path="/unified/hris/employees/{id}/time_off_policies" -->
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

$request = new Operations\HrisListEmployeeTimeOffPoliciesRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,duration_unit,reasons,updated_at,created_at',
    filter: new Operations\HrisListEmployeeTimeOffPoliciesQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listEmployeeTimeOffPolicies(
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
| `$request`                                                                                                             | [Operations\HrisListEmployeeTimeOffPoliciesRequest](../../Models/Operations/HrisListEmployeeTimeOffPoliciesRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeTimeOffPoliciesResponse](../../Models/Operations/HrisListEmployeeTimeOffPoliciesResponse.md)**

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

## listBenefits

List benefits

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_benefits" method="get" path="/unified/hris/benefits" -->
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

$request = new Operations\HrisListBenefitsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,benefit_type,provider,description,created_at,updated_at',
    filter: new Operations\HrisListBenefitsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listBenefits(
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
| `$request`                                                                               | [Operations\HrisListBenefitsRequest](../../Models/Operations/HrisListBenefitsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisListBenefitsResponse](../../Models/Operations/HrisListBenefitsResponse.md)**

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

## getBenefit

Get Benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_benefit" method="get" path="/unified/hris/benefits/{id}" -->
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

$request = new Operations\HrisGetBenefitRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,benefit_type,provider,description,created_at,updated_at',
);

$response = $sdk->hris->getBenefit(
    request: $request
);

if ($response->hrisBenefitResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\HrisGetBenefitRequest](../../Models/Operations/HrisGetBenefitRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\HrisGetBenefitResponse](../../Models/Operations/HrisGetBenefitResponse.md)**

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

## listEmployeeSkills

List Employee Skills

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_skills" method="get" path="/unified/hris/employees/{id}/skills" -->
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

$request = new Operations\HrisListEmployeeSkillsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,active,language,maximum_proficiency,minimum_proficiency',
    filter: new Operations\HrisListEmployeeSkillsQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
);

$responses = $sdk->hris->listEmployeeSkills(
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
| `$request`                                                                                           | [Operations\HrisListEmployeeSkillsRequest](../../Models/Operations/HrisListEmployeeSkillsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\HrisListEmployeeSkillsResponse](../../Models/Operations/HrisListEmployeeSkillsResponse.md)**

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

## createEmployeeSkill

Create Employee Skill

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_create_employee_skill" method="post" path="/unified/hris/employees/{id}/skills" -->
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

$entitySkillsCreateRequestDto = new Components\EntitySkillsCreateRequestDto(
    id: '16873-IT345',
    name: 'Information-Technology',
    maximumProficiency: new Components\EntitySkillsCreateRequestDtoMaximumProficiency(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Expert',
    ),
    minimumProficiency: null,
);

$response = $sdk->hris->createEmployeeSkill(
    xAccountId: '<id>',
    id: '<id>',
    entitySkillsCreateRequestDto: $entitySkillsCreateRequestDto

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
| `entitySkillsCreateRequestDto`                                                                     | [Components\EntitySkillsCreateRequestDto](../../Models/Components/EntitySkillsCreateRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\HrisCreateEmployeeSkillResponse](../../Models/Operations/HrisCreateEmployeeSkillResponse.md)**

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

## getEmployeeSkill

Get Employee Skill

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_skill" method="get" path="/unified/hris/employees/{id}/skills/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeeSkillRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,active,language,maximum_proficiency,minimum_proficiency',
);

$response = $sdk->hris->getEmployeeSkill(
    request: $request
);

if ($response->entitySkillResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\HrisGetEmployeeSkillRequest](../../Models/Operations/HrisGetEmployeeSkillRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\HrisGetEmployeeSkillResponse](../../Models/Operations/HrisGetEmployeeSkillResponse.md)**

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

## listEmployeeTasks

List Employee Tasks

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_employee_tasks" method="get" path="/unified/hris/employees/{id}/tasks" -->
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

$request = new Operations\HrisListEmployeeTasksRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,description,type,status,due_date,completion_date,assigned_by_employee_id,remote_assigned_by_employee_id,assigned_by_employee_name,link_to_task,extracted_links,next_task_id,remote_next_task_id,parent_process_name,comments,attachments,created_at,updated_at',
    filter: new Operations\HrisListEmployeeTasksQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'attachments',
);

$responses = $sdk->hris->listEmployeeTasks(
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
| `$request`                                                                                         | [Operations\HrisListEmployeeTasksRequest](../../Models/Operations/HrisListEmployeeTasksRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\HrisListEmployeeTasksResponse](../../Models/Operations/HrisListEmployeeTasksResponse.md)**

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

## getEmployeeTask

Get Employee Task

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_employee_task" method="get" path="/unified/hris/employees/{id}/tasks/{subResourceId}" -->
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

$request = new Operations\HrisGetEmployeeTaskRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,description,type,status,due_date,completion_date,assigned_by_employee_id,remote_assigned_by_employee_id,assigned_by_employee_name,link_to_task,extracted_links,next_task_id,remote_next_task_id,parent_process_name,comments,attachments,created_at,updated_at',
    expand: 'attachments',
);

$response = $sdk->hris->getEmployeeTask(
    request: $request
);

if ($response->taskResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\HrisGetEmployeeTaskRequest](../../Models/Operations/HrisGetEmployeeTaskRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisGetEmployeeTaskResponse](../../Models/Operations/HrisGetEmployeeTaskResponse.md)**

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

## updateEmployeeTask

Update Employee Task

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_update_employee_task" method="patch" path="/unified/hris/employees/{id}/tasks/{subResourceId}" -->
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

$updateTaskRequestDto = new Components\UpdateTaskRequestDto(
    comment: 'All required documents have been submitted',
    status: new Components\UpdateTaskRequestDtoStatus(
        value: Components\UpdateTaskRequestDtoValue::Open,
    ),
);

$response = $sdk->hris->updateEmployeeTask(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    updateTaskRequestDto: $updateTaskRequestDto

);

if ($response->updateResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `xAccountId`                                                                       | *string*                                                                           | :heavy_check_mark:                                                                 | The account identifier                                                             |
| `id`                                                                               | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `subResourceId`                                                                    | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `updateTaskRequestDto`                                                             | [Components\UpdateTaskRequestDto](../../Models/Components/UpdateTaskRequestDto.md) | :heavy_check_mark:                                                                 | N/A                                                                                |

### Response

**[?Operations\HrisUpdateEmployeeTaskResponse](../../Models/Operations/HrisUpdateEmployeeTaskResponse.md)**

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

## listTasks

List Tasks

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_list_tasks" method="get" path="/unified/hris/tasks" -->
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

$request = new Operations\HrisListTasksRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,description,type,status,due_date,completion_date,assigned_by_employee_id,remote_assigned_by_employee_id,assigned_by_employee_name,link_to_task,extracted_links,next_task_id,remote_next_task_id,parent_process_name,comments,attachments,created_at,updated_at',
    filter: new Operations\HrisListTasksQueryParamFilter(
        updatedAfter: Utils\Utils::parseDateTime('2020-01-01T00:00:00.000Z'),
    ),
    expand: 'attachments',
);

$responses = $sdk->hris->listTasks(
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
| `$request`                                                                         | [Operations\HrisListTasksRequest](../../Models/Operations/HrisListTasksRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\HrisListTasksResponse](../../Models/Operations/HrisListTasksResponse.md)**

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

## getTask

Get Task

### Example Usage

<!-- UsageSnippet language="php" operationID="hris_get_task" method="get" path="/unified/hris/tasks/{id}" -->
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

$request = new Operations\HrisGetTaskRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,description,type,status,due_date,completion_date,assigned_by_employee_id,remote_assigned_by_employee_id,assigned_by_employee_name,link_to_task,extracted_links,next_task_id,remote_next_task_id,parent_process_name,comments,attachments,created_at,updated_at',
    expand: 'attachments',
);

$response = $sdk->hris->getTask(
    request: $request
);

if ($response->taskResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\HrisGetTaskRequest](../../Models/Operations/HrisGetTaskRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\HrisGetTaskResponse](../../Models/Operations/HrisGetTaskResponse.md)**

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