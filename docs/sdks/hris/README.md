# Hris
(*hris*)

## Overview

### Available Operations

* [listCompanies](#listcompanies) - List Companies
* [getCompany](#getcompany) - Get Company
* [listEmployeeCustomFieldDefinitions](#listemployeecustomfielddefinitions) - List employee Custom Field Definitions
* [getEmployeeCustomFieldDefinition](#getemployeecustomfielddefinition) - Get employee Custom Field Definition
* [listEmployees](#listemployees) - List Employees
* [createEmployee](#createemployee) - Creates an employee
* [getEmployee](#getemployee) - Get Employee
* [updateEmployee](#updateemployee) - Updates an employee
* [listEmployeeTimeOffRequests](#listemployeetimeoffrequests) - List Employee Time Off Requests
* [createEmployeeTimeOffRequest](#createemployeetimeoffrequest) - Create Employee Time Off Request
* [getEmployeesTimeOffRequest](#getemployeestimeoffrequest) - Get Employees Time Off Request
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
* [listEmployments](#listemployments) - List Employments
* [getEmployment](#getemployment) - Get Employment
* [listEmployeeEmployments](#listemployeeemployments) - List Employee Employments
* [createEmployeeEmployment](#createemployeeemployment) - Create Employee Employment
* [getEmployeeEmployment](#getemployeeemployment) - Get Employee Employment
* [updateEmployeeEmployment](#updateemployeeemployment) - Update Employee Employment
* [listLocations](#listlocations) - List locations
* [getLocation](#getlocation) - Get Location
* [listTimeOffRequests](#listtimeoffrequests) - List time off requests
* [createTimeOffRequest](#createtimeoffrequest) - Creates a time off request
* [getTimeOffRequest](#gettimeoffrequest) - Get time off request
* [updateTimeOffRequest](#updatetimeoffrequest) - Update time off request
* [listTimeOffTypes](#listtimeofftypes) - List time off types
* [getTimeOffType](#gettimeofftype) - Get time off type
* [listBenefits](#listbenefits) - List benefits
* [getBenefit](#getbenefit) - Get Benefit
* [listGroups](#listgroups) - List Groups
* [listDepartmentGroups](#listdepartmentgroups) - List Department Groups
* [listCostCenterGroups](#listcostcentergroups) - List Cost Center Groups
* [getGroup](#getgroup) - Get Group
* [getDepartmentGroup](#getdepartmentgroup) - Get Department Group
* [getCostCenterGroup](#getcostcentergroup) - Get Cost Center Group
* [listJobs](#listjobs) - List Jobs
* [getJob](#getjob) - Get Job

## listCompanies

List Companies

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

$request = new Operations\HrisListCompaniesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,full_name,display_name,created_at,updated_at',
    filter: new Operations\Filter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listCompanies(
    request: $request
);

if ($response->companiesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\HrisListCompaniesRequest](../../Models/Operations/HrisListCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListCompaniesResponse](../../Models/Operations/HrisListCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCompany

Get Company

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeCustomFieldDefinitions

List employee Custom Field Definitions

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

$request = new Operations\HrisListEmployeeCustomFieldDefinitionsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\QueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listEmployeeCustomFieldDefinitions(
    request: $request
);

if ($response->customFieldDefinitionsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                            | Type                                                                                                                                 | Required                                                                                                                             | Description                                                                                                                          |
| ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                           | [Operations\HrisListEmployeeCustomFieldDefinitionsRequest](../../Models/Operations/HrisListEmployeeCustomFieldDefinitionsRequest.md) | :heavy_check_mark:                                                                                                                   | The request object to use for the request.                                                                                           |

### Response

**[?Operations\HrisListEmployeeCustomFieldDefinitionsResponse](../../Models/Operations/HrisListEmployeeCustomFieldDefinitionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeeCustomFieldDefinition

Get employee Custom Field Definition

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

$request = new Operations\HrisGetEmployeeCustomFieldDefinitionRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,description,type,options',
    filter: new Operations\HrisGetEmployeeCustomFieldDefinitionQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployees

List Employees

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

$request = new Operations\HrisListEmployeesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,display_name,gender,ethnicity,date_of_birth,birthday,marital_status,avatar_url,avatar,personal_email,personal_phone_number,work_email,work_phone_number,job_id,remote_job_id,job_title,job_description,department_id,remote_department_id,department,cost_centers,benefits,company,manager_id,remote_manager_id,hire_date,start_date,tenure,work_anniversary,employment_type,employment_contract_type,employment_status,termination_date,company_name,preferred_language,citizenships,home_location,work_location,employments,custom_fields,documents,created_at,updated_at,employee_number,national_identity_number',
    filter: new Operations\HrisListEmployeesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    expand: 'company,employments,work_location,home_location,groups',
    include: 'avatar_url,avatar,custom_fields,job_description,benefits',
);

$response = $sdk->hris->listEmployees(
    request: $request
);

if ($response->employeesPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\HrisListEmployeesRequest](../../Models/Operations/HrisListEmployeesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListEmployeesResponse](../../Models/Operations/HrisListEmployeesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createEmployee

Creates an employee

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

$hrisCreateEmployeeRequestDto = new Components\HrisCreateEmployeeRequestDto(
    firstName: 'Issac',
    lastName: 'Newton',
    name: 'Issac Newton',
    displayName: 'Sir Issac Newton',
    avatarUrl: 'https://example.com/avatar.png',
    personalEmail: 'isaac.newton@example.com',
    personalPhoneNumber: '+1234567890',
    workEmail: 'newton@example.com',
    workPhoneNumber: '+1234567890',
    jobId: 'R-6789',
    jobTitle: 'Physicist',
    departmentId: '3093',
    department: 'Physics',
    managerId: '67890',
    gender: new Components\HrisCreateEmployeeRequestDtoGender(),
    preferredLanguage: new Components\HrisCreateEmployeeRequestDtoPreferredLanguage(
        value: Components\HrisCreateEmployeeRequestDtoPreferredLanguageValue::Eng,
    ),
    ethnicity: new Components\HrisCreateEmployeeRequestDtoEthnicity(),
    dateOfBirth: Utils\Utils::parseDateTime('1990-01-01T00:00.000Z'),
    birthday: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    maritalStatus: new Components\HrisCreateEmployeeRequestDtoMaritalStatus(),
    avatar: new Components\HrisCreateEmployeeRequestDtoAvatar(),
    hireDate: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    startDate: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    tenure: 2,
    workAnniversary: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    employmentType: new Components\HrisCreateEmployeeRequestDtoEmploymentType(
        value: Components\HrisCreateEmployeeRequestDtoEmploymentTypeValue::Permanent,
        sourceValue: 'Permanent',
    ),
    employmentContractType: new Components\HrisCreateEmployeeRequestDtoEmploymentContractType(),
    employmentStatus: new Components\HrisCreateEmployeeRequestDtoEmploymentStatus(),
    terminationDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    companyName: 'Example Corp',
    citizenships: [
        new Components\CountryCodeEnum(
            value: Components\Value::Us,
        ),
    ],
    employments: [
        new Components\CreateEmploymentApiModel(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            employeeId: '1687-3',
            jobTitle: 'Software Engineer',
            payRate: '40.00',
            payPeriod: new Components\CreateEmploymentApiModelPayPeriod(
                value: Components\CreateEmploymentApiModelValue::Hour,
                sourceValue: 'Hour',
            ),
            payFrequency: new Components\CreateEmploymentApiModelPayFrequency(
                value: Components\CreateEmploymentApiModelPayFrequencyValue::Hourly,
                sourceValue: 'Hourly',
            ),
            payCurrency: 'USD',
            effectiveDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
            employmentType: new Components\CreateEmploymentApiModelEmploymentType(
                value: Components\CreateEmploymentApiModelEmploymentTypeValue::Permanent,
                sourceValue: 'Permanent',
            ),
            employmentContractType: new Components\CreateEmploymentApiModelEmploymentContractType(),
            timeWorked: 'P0Y0M0DT8H0M0S',
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
    nationalIdentityNumber: new Components\HrisCreateEmployeeRequestDtoNationalIdentityNumber(
        value: '123456789',
        type: new Components\HrisCreateEmployeeRequestDtoType(
            value: Components\HrisCreateEmployeeRequestDtoNationalIdentityNumberValue::Ssn,
        ),
        country: new Components\HrisCreateEmployeeRequestDtoCountry(
            value: Components\HrisCreateEmployeeRequestDtoNationalIdentityNumberCountryValue::Us,
        ),
    ),
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
    workLocation: new Components\HrisCreateEmployeeRequestDtoWorkLocation(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Woolsthorpe Manor',
        phoneNumber: '+44 1476 860 364',
        street1: 'Water Lane',
        street2: 'Woolsthorpe by Colsterworth',
        city: 'Grantham',
        zipCode: 'NG33 5NR',
        country: new Components\HrisCreateEmployeeRequestDtoWorkLocationCountry(
            value: Components\HrisCreateEmployeeRequestDtoWorkLocationValue::Us,
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        state: new Components\HrisCreateEmployeeRequestDtoState(),
    ),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployee

Get Employee

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

$request = new Operations\HrisGetEmployeeRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,first_name,last_name,name,display_name,gender,ethnicity,date_of_birth,birthday,marital_status,avatar_url,avatar,personal_email,personal_phone_number,work_email,work_phone_number,job_id,remote_job_id,job_title,job_description,department_id,remote_department_id,department,cost_centers,benefits,company,manager_id,remote_manager_id,hire_date,start_date,tenure,work_anniversary,employment_type,employment_contract_type,employment_status,termination_date,company_name,preferred_language,citizenships,home_location,work_location,employments,custom_fields,documents,created_at,updated_at,employee_number,national_identity_number',
    expand: 'company,employments,work_location,home_location,groups',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateEmployee

Updates an employee

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

$hrisCreateEmployeeRequestDto = new Components\HrisCreateEmployeeRequestDto(
    firstName: 'Issac',
    lastName: 'Newton',
    name: 'Issac Newton',
    displayName: 'Sir Issac Newton',
    avatarUrl: 'https://example.com/avatar.png',
    personalEmail: 'isaac.newton@example.com',
    personalPhoneNumber: '+1234567890',
    workEmail: 'newton@example.com',
    workPhoneNumber: '+1234567890',
    jobId: 'R-6789',
    jobTitle: 'Physicist',
    departmentId: '3093',
    department: 'Physics',
    managerId: '67890',
    gender: new Components\HrisCreateEmployeeRequestDtoGender(),
    preferredLanguage: new Components\HrisCreateEmployeeRequestDtoPreferredLanguage(
        value: Components\HrisCreateEmployeeRequestDtoPreferredLanguageValue::Eng,
    ),
    ethnicity: new Components\HrisCreateEmployeeRequestDtoEthnicity(),
    dateOfBirth: Utils\Utils::parseDateTime('1990-01-01T00:00.000Z'),
    birthday: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    maritalStatus: new Components\HrisCreateEmployeeRequestDtoMaritalStatus(),
    avatar: new Components\HrisCreateEmployeeRequestDtoAvatar(),
    hireDate: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    startDate: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    tenure: 2,
    workAnniversary: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    employmentType: new Components\HrisCreateEmployeeRequestDtoEmploymentType(
        value: Components\HrisCreateEmployeeRequestDtoEmploymentTypeValue::Permanent,
        sourceValue: 'Permanent',
    ),
    employmentContractType: new Components\HrisCreateEmployeeRequestDtoEmploymentContractType(),
    employmentStatus: new Components\HrisCreateEmployeeRequestDtoEmploymentStatus(),
    terminationDate: Utils\Utils::parseDateTime('2021-01-01T00:00:00Z'),
    companyName: 'Example Corp',
    citizenships: [
        new Components\CountryCodeEnum(
            value: Components\Value::Us,
        ),
    ],
    employments: [
        new Components\CreateEmploymentApiModel(
            id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
            unifiedCustomFields: [
                'my_project_custom_field_1' => 'REF-1236',
                'my_project_custom_field_2' => 'some other value',
            ],
            employeeId: '1687-3',
            jobTitle: 'Software Engineer',
            payRate: '40.00',
            payPeriod: new Components\CreateEmploymentApiModelPayPeriod(
                value: Components\CreateEmploymentApiModelValue::Hour,
                sourceValue: 'Hour',
            ),
            payFrequency: new Components\CreateEmploymentApiModelPayFrequency(
                value: Components\CreateEmploymentApiModelPayFrequencyValue::Hourly,
                sourceValue: 'Hourly',
            ),
            payCurrency: 'USD',
            effectiveDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
            employmentType: new Components\CreateEmploymentApiModelEmploymentType(
                value: Components\CreateEmploymentApiModelEmploymentTypeValue::Permanent,
                sourceValue: 'Permanent',
            ),
            employmentContractType: new Components\CreateEmploymentApiModelEmploymentContractType(),
            timeWorked: 'P0Y0M0DT8H0M0S',
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
    nationalIdentityNumber: new Components\HrisCreateEmployeeRequestDtoNationalIdentityNumber(
        value: '123456789',
        type: new Components\HrisCreateEmployeeRequestDtoType(
            value: Components\HrisCreateEmployeeRequestDtoNationalIdentityNumberValue::Ssn,
        ),
        country: new Components\HrisCreateEmployeeRequestDtoCountry(
            value: Components\HrisCreateEmployeeRequestDtoNationalIdentityNumberCountryValue::Us,
        ),
    ),
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
    workLocation: new Components\HrisCreateEmployeeRequestDtoWorkLocation(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'Woolsthorpe Manor',
        phoneNumber: '+44 1476 860 364',
        street1: 'Water Lane',
        street2: 'Woolsthorpe by Colsterworth',
        city: 'Grantham',
        zipCode: 'NG33 5NR',
        country: new Components\HrisCreateEmployeeRequestDtoWorkLocationCountry(
            value: Components\HrisCreateEmployeeRequestDtoWorkLocationValue::Us,
        ),
        passthrough: [
            'other_known_names' => 'John Doe',
        ],
        state: new Components\HrisCreateEmployeeRequestDtoState(),
    ),
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

$response = $sdk->hris->updateEmployee(
    xAccountId: '<id>',
    id: '<id>',
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
| `id`                                                                                               | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `hrisCreateEmployeeRequestDto`                                                                     | [Components\HrisCreateEmployeeRequestDto](../../Models/Components/HrisCreateEmployeeRequestDto.md) | :heavy_check_mark:                                                                                 | N/A                                                                                                |

### Response

**[?Operations\HrisUpdateEmployeeResponse](../../Models/Operations/HrisUpdateEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeTimeOffRequests

List Employee Time Off Requests

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

$request = new Operations\HrisListEmployeeTimeOffRequestsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,duration,created_at,updated_at',
    filter: new Operations\HrisListEmployeeTimeOffRequestsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listEmployeeTimeOffRequests(
    request: $request
);

if ($response->timeOffPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\HrisListEmployeeTimeOffRequestsRequest](../../Models/Operations/HrisListEmployeeTimeOffRequestsRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeTimeOffRequestsResponse](../../Models/Operations/HrisListEmployeeTimeOffRequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createEmployeeTimeOffRequest

Create Employee Time Off Request

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

$hrisCreateTimeOffRequestDto = new Components\HrisCreateTimeOffRequestDto(
    employeeId: '1687-3',
    approverId: '1687-4',
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    endDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    startHalfDay: true,
    endHalfDay: true,
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeesTimeOffRequest

Get Employees Time Off Request

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

$request = new Operations\HrisGetEmployeesTimeOffRequestRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,duration,created_at,updated_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## batchUploadEmployeeDocument

Batch Upload Employee Document

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

$hrisBatchDocumentUploadRequestDto = new Components\HrisBatchDocumentUploadRequestDto(
    items: [
        new Components\HrisDocumentsUploadRequestDto(
            name: 'weather-forecast',
            fileFormat: new Components\FileFormat(
                value: Components\HrisDocumentsUploadRequestDtoValue::Pdf,
                sourceValue: 'abc',
            ),
            content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
            categoryId: '6530',
            path: '/path/to/file',
            category: new Components\HrisDocumentsUploadRequestDtoCategory(
                value: Components\HrisDocumentsUploadRequestDtoCategoryValue::Academic,
                sourceValue: '550e8400-e29b-41d4-a716-446655440000',
            ),
            confidential: new Components\Confidential(
                value: Components\HrisDocumentsUploadRequestDtoConfidentialValue::True,
                sourceValue: 'public',
            ),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## uploadEmployeeDocument

Upload Employee Document

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

$hrisDocumentsUploadRequestDto = new Components\HrisDocumentsUploadRequestDto(
    name: 'weather-forecast',
    fileFormat: new Components\FileFormat(
        value: Components\HrisDocumentsUploadRequestDtoValue::Pdf,
        sourceValue: 'abc',
    ),
    content: 'VGhpcyBpc24ndCByZWFsbHkgYSBzYW1wbGUgZmlsZSwgYnV0IG5vIG9uZSB3aWxsIGV2ZXIga25vdyE',
    categoryId: '6530',
    path: '/path/to/file',
    category: new Components\HrisDocumentsUploadRequestDtoCategory(
        value: Components\HrisDocumentsUploadRequestDtoCategoryValue::UnmappedValue,
        sourceValue: '550e8400-e29b-41d4-a716-446655440000',
    ),
    confidential: new Components\Confidential(
        value: Components\HrisDocumentsUploadRequestDtoConfidentialValue::True,
        sourceValue: 'public',
    ),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## downloadEmployeeDocument

Download Employee Document

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



$response = $sdk->hris->downloadEmployeeDocument(
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

**[?Operations\HrisDownloadEmployeeDocumentResponse](../../Models/Operations/HrisDownloadEmployeeDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeDocuments

List Employee Documents

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

$request = new Operations\HrisListEmployeeDocumentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,path,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
    filter: new Operations\HrisListEmployeeDocumentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listEmployeeDocuments(
    request: $request
);

if ($response->hrisDocumentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\HrisListEmployeeDocumentsRequest](../../Models/Operations/HrisListEmployeeDocumentsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\HrisListEmployeeDocumentsResponse](../../Models/Operations/HrisListEmployeeDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeeDocument

Get Employee Document

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

$request = new Operations\HrisGetEmployeeDocumentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,name,path,type,category,category_id,remote_category_id,contents,created_at,updated_at,remote_url,file_format',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeCategories

List Employee Document Categories

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

$request = new Operations\HrisListEmployeeCategoriesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active',
    filter: new Operations\HrisListEmployeeCategoriesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listEmployeeCategories(
    request: $request
);

if ($response->referencePaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\HrisListEmployeeCategoriesRequest](../../Models/Operations/HrisListEmployeeCategoriesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\HrisListEmployeeCategoriesResponse](../../Models/Operations/HrisListEmployeeCategoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeeDocumentCategory

Get Employee Document Category

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeWorkEligibility

List Employee Work Eligibility

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

$request = new Operations\HrisListEmployeeWorkEligibilityRequest(
    id: '<id>',
    xAccountId: '<id>',
    fields: 'id,remote_id,type,sub_type,document,valid_from,valid_to,issued_by,number',
    filter: new Operations\HrisListEmployeeWorkEligibilityQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listEmployeeWorkEligibility(
    request: $request
);

if ($response->workEligibilityPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\HrisListEmployeeWorkEligibilityRequest](../../Models/Operations/HrisListEmployeeWorkEligibilityRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\HrisListEmployeeWorkEligibilityResponse](../../Models/Operations/HrisListEmployeeWorkEligibilityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createEmployeeWorkEligibilityRequest

Create Employee Work Eligibility Request

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

$hrisCreateWorkEligibilityRequestDto = new Components\HrisCreateWorkEligibilityRequestDto(
    document: new Components\HrisCreateWorkEligibilityRequestDtoDocument(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'My Document',
        path: '/path/to/file',
        category: new Components\HrisCreateWorkEligibilityRequestDtoCategory(),
        categoryId: '6530',
        createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-01-02T01:01:01.000Z'),
        remoteUrl: 'https://example.com/file.pdf',
        fileFormat: new Components\HrisCreateWorkEligibilityRequestDtoFileFormat(
            value: Components\HrisCreateWorkEligibilityRequestDtoDocumentValue::Pdf,
            sourceValue: 'abc',
        ),
    ),
    issuedBy: new Components\HrisCreateWorkEligibilityRequestDtoIssuedBy(
        value: Components\HrisCreateWorkEligibilityRequestDtoValue::Us,
    ),
    number: '1234567890',
    subType: 'H1B',
    type: new Components\HrisCreateWorkEligibilityRequestDtoType(),
    validFrom: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    validTo: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeesWorkEligibility

Get Employees Work Eligibility

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

$request = new Operations\HrisGetEmployeesWorkEligibilityRequest(
    id: '<id>',
    subResourceId: '<id>',
    xAccountId: '<id>',
    fields: 'id,remote_id,type,sub_type,document,valid_from,valid_to,issued_by,number',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateEmployeeWorkEligibilityRequest

Update Employee Work Eligibility Request

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

$hrisCreateWorkEligibilityRequestDto = new Components\HrisCreateWorkEligibilityRequestDto(
    document: new Components\HrisCreateWorkEligibilityRequestDtoDocument(
        id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        remoteId: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
        name: 'My Document',
        path: '/path/to/file',
        category: new Components\HrisCreateWorkEligibilityRequestDtoCategory(),
        categoryId: '6530',
        createdAt: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-01-02T01:01:01.000Z'),
        remoteUrl: 'https://example.com/file.pdf',
        fileFormat: new Components\HrisCreateWorkEligibilityRequestDtoFileFormat(
            value: Components\HrisCreateWorkEligibilityRequestDtoDocumentValue::Pdf,
            sourceValue: 'abc',
        ),
    ),
    issuedBy: new Components\HrisCreateWorkEligibilityRequestDtoIssuedBy(
        value: Components\HrisCreateWorkEligibilityRequestDtoValue::Us,
    ),
    number: '1234567890',
    subType: 'H1B',
    type: new Components\HrisCreateWorkEligibilityRequestDtoType(),
    validFrom: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
    validTo: Utils\Utils::parseDateTime('2021-01-01T00:00.000Z'),
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployments

List Employments

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

$request = new Operations\HrisListEmploymentsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,employment_type,employment_contract_type,time_worked,created_at,updated_at',
    filter: new Operations\HrisListEmploymentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    expand: 'groups',
);

$response = $sdk->hris->listEmployments(
    request: $request
);

if ($response->employmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\HrisListEmploymentsRequest](../../Models/Operations/HrisListEmploymentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\HrisListEmploymentsResponse](../../Models/Operations/HrisListEmploymentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployment

Get Employment

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

$request = new Operations\HrisGetEmploymentRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,employment_type,employment_contract_type,time_worked,created_at,updated_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEmployeeEmployments

List Employee Employments

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

$request = new Operations\HrisListEmployeeEmploymentsRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,employment_type,employment_contract_type,time_worked,created_at,updated_at',
    filter: new Operations\HrisListEmployeeEmploymentsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
    expand: 'groups',
);

$response = $sdk->hris->listEmployeeEmployments(
    request: $request
);

if ($response->employmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\HrisListEmployeeEmploymentsRequest](../../Models/Operations/HrisListEmployeeEmploymentsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\HrisListEmployeeEmploymentsResponse](../../Models/Operations/HrisListEmployeeEmploymentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createEmployeeEmployment

Create Employee Employment

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

$hrisCreateEmploymentRequestDto = new Components\HrisCreateEmploymentRequestDto(
    id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    employeeId: '1687-3',
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
    employmentType: new Components\HrisCreateEmploymentRequestDtoEmploymentType(
        value: Components\HrisCreateEmploymentRequestDtoEmploymentTypeValue::Permanent,
        sourceValue: 'Permanent',
    ),
    employmentContractType: new Components\HrisCreateEmploymentRequestDtoEmploymentContractType(),
    timeWorked: 'P0Y0M0DT8H0M0S',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createEmployeeEmployment(
    xAccountId: '<id>',
    id: '<id>',
    hrisCreateEmploymentRequestDto: $hrisCreateEmploymentRequestDto

);

if ($response->employmentResult !== null) {
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getEmployeeEmployment

Get Employee Employment

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

$request = new Operations\HrisGetEmployeeEmploymentRequest(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,job_title,pay_rate,pay_period,pay_frequency,pay_currency,effective_date,employment_type,employment_contract_type,time_worked,created_at,updated_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateEmployeeEmployment

Update Employee Employment

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

$hrisCreateEmploymentRequestDto = new Components\HrisCreateEmploymentRequestDto(
    id: '8187e5da-dc77-475e-9949-af0f1fa4e4e3',
    unifiedCustomFields: [
        'my_project_custom_field_1' => 'REF-1236',
        'my_project_custom_field_2' => 'some other value',
    ],
    employeeId: '1687-3',
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
    employmentType: new Components\HrisCreateEmploymentRequestDtoEmploymentType(
        value: Components\HrisCreateEmploymentRequestDtoEmploymentTypeValue::Permanent,
        sourceValue: 'Permanent',
    ),
    employmentContractType: new Components\HrisCreateEmploymentRequestDtoEmploymentContractType(),
    timeWorked: 'P0Y0M0DT8H0M0S',
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateEmployeeEmployment(
    xAccountId: '<id>',
    id: '<id>',
    subResourceId: '<id>',
    hrisCreateEmploymentRequestDto: $hrisCreateEmploymentRequestDto

);

if ($response->employmentResult !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | The account identifier                                                                                 |
| `id`                                                                                                   | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `subResourceId`                                                                                        | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `hrisCreateEmploymentRequestDto`                                                                       | [Components\HrisCreateEmploymentRequestDto](../../Models/Components/HrisCreateEmploymentRequestDto.md) | :heavy_check_mark:                                                                                     | N/A                                                                                                    |

### Response

**[?Operations\HrisUpdateEmployeeEmploymentResponse](../../Models/Operations/HrisUpdateEmployeeEmploymentResponse.md)**

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

$request = new Operations\HrisListLocationsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,name,phone_number,street_1,street_2,city,state,zip_code,country,location_type,created_at,updated_at',
    filter: new Operations\HrisListLocationsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listLocations(
    request: $request
);

if ($response->hrisLocationsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\HrisListLocationsRequest](../../Models/Operations/HrisListLocationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\HrisListLocationsResponse](../../Models/Operations/HrisListLocationsResponse.md)**

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTimeOffRequests

List time off requests

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

$request = new Operations\HrisListTimeOffRequestsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,duration,created_at,updated_at',
    filter: new Operations\HrisListTimeOffRequestsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listTimeOffRequests(
    request: $request
);

if ($response->timeOffPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\HrisListTimeOffRequestsRequest](../../Models/Operations/HrisListTimeOffRequestsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\HrisListTimeOffRequestsResponse](../../Models/Operations/HrisListTimeOffRequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createTimeOffRequest

Creates a time off request

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

$hrisCreateTimeOffRequestDto = new Components\HrisCreateTimeOffRequestDto(
    employeeId: '1687-3',
    approverId: '1687-4',
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    endDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    startHalfDay: true,
    endHalfDay: true,
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->createTimeOffRequest(
    xAccountId: '<id>',
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
| `hrisCreateTimeOffRequestDto`                                                                    | [Components\HrisCreateTimeOffRequestDto](../../Models/Components/HrisCreateTimeOffRequestDto.md) | :heavy_check_mark:                                                                               | N/A                                                                                              |

### Response

**[?Operations\HrisCreateTimeOffRequestResponse](../../Models/Operations/HrisCreateTimeOffRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTimeOffRequest

Get time off request

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

$request = new Operations\HrisGetTimeOffRequestRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,employee_id,remote_employee_id,approver_id,remote_approver_id,status,type,start_date,end_date,start_half_day,end_half_day,duration,created_at,updated_at',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateTimeOffRequest

Update time off request

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

$hrisCreateTimeOffRequestDto = new Components\HrisCreateTimeOffRequestDto(
    employeeId: '1687-3',
    approverId: '1687-4',
    startDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    endDate: Utils\Utils::parseDateTime('2021-01-01T01:01:01.000Z'),
    startHalfDay: true,
    endHalfDay: true,
    passthrough: [
        'other_known_names' => 'John Doe',
    ],
);

$response = $sdk->hris->updateTimeOffRequest(
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

**[?Operations\HrisUpdateTimeOffRequestResponse](../../Models/Operations/HrisUpdateTimeOffRequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTimeOffTypes

List time off types

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

$request = new Operations\HrisListTimeOffTypesRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,active',
    filter: new Operations\HrisListTimeOffTypesQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listTimeOffTypes(
    request: $request
);

if ($response->referencePaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\HrisListTimeOffTypesRequest](../../Models/Operations/HrisListTimeOffTypesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\HrisListTimeOffTypesResponse](../../Models/Operations/HrisListTimeOffTypesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getTimeOffType

Get time off type

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listBenefits

List benefits

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

$request = new Operations\HrisListBenefitsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,benefit_type,provider,description,created_at,updated_at',
    filter: new Operations\HrisListBenefitsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listBenefits(
    request: $request
);

if ($response->hrisBenefitsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\HrisListBenefitsRequest](../../Models/Operations/HrisListBenefitsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\HrisListBenefitsResponse](../../Models/Operations/HrisListBenefitsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getBenefit

Get Benefit

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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGroups

List Groups

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

$request = new Operations\HrisListGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
    filter: new Operations\HrisListGroupsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listGroups(
    request: $request
);

if ($response->hrisGroupsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\HrisListGroupsRequest](../../Models/Operations/HrisListGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\HrisListGroupsResponse](../../Models/Operations/HrisListGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDepartmentGroups

List Department Groups

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

$request = new Operations\HrisListDepartmentGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name',
    filter: new Operations\HrisListDepartmentGroupsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listDepartmentGroups(
    request: $request
);

if ($response->hrisDepartmentsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\HrisListDepartmentGroupsRequest](../../Models/Operations/HrisListDepartmentGroupsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\HrisListDepartmentGroupsResponse](../../Models/Operations/HrisListDepartmentGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCostCenterGroups

List Cost Center Groups

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

$request = new Operations\HrisListCostCenterGroupsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
    filter: new Operations\HrisListCostCenterGroupsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listCostCenterGroups(
    request: $request
);

if ($response->hrisCostCenterPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\HrisListCostCenterGroupsRequest](../../Models/Operations/HrisListCostCenterGroupsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\HrisListCostCenterGroupsResponse](../../Models/Operations/HrisListCostCenterGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGroup

Get Group

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

$request = new Operations\HrisGetGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDepartmentGroup

Get Department Group

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

$request = new Operations\HrisGetDepartmentGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name',
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCostCenterGroup

Get Cost Center Group

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

$request = new Operations\HrisGetCostCenterGroupRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
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

$request = new Operations\HrisListJobsRequest(
    xAccountId: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
    filter: new Operations\HrisListJobsQueryParamFilter(
        updatedAfter: '2020-01-01T00:00:00.000Z',
    ),
);

$response = $sdk->hris->listJobs(
    request: $request
);

if ($response->jobsPaginated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\HrisListJobsRequest](../../Models/Operations/HrisListJobsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\HrisListJobsResponse](../../Models/Operations/HrisListJobsResponse.md)**

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

$request = new Operations\HrisGetJobRequest(
    xAccountId: '<id>',
    id: '<id>',
    fields: 'id,remote_id,name,type,parent_ids,remote_parent_ids,owner_ids,remote_owner_ids',
);

$response = $sdk->hris->getJob(
    request: $request
);

if ($response->jobResult !== null) {
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

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |