# stackone/client-sdk

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>

<!-- Start Summary [summary] -->
## Summary

Accounting: The documentation for the StackOne Unified API - ACCOUNTING
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [stackone/client-sdk](#stackoneclient-sdk)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Pagination](#pagination)
  * [Retries](#retries)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "stackone/client-sdk"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### List Employees

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name                      | Type | Scheme     |
| ------------------------- | ---- | ---------- |
| `username`<br/>`password` | http | HTTP Basic |

You can set the security parameters through the `setSecurity` function on the `SDKBuilder` when initializing the SDK. For example:
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

$request = new Components\ConnectSessionCreate(
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Ticketing,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Iam,
        Components\Categories::Documents,
        Components\Categories::Ticketing,
        Components\Categories::Screening,
        Components\Categories::Messaging,
        Components\Categories::Accounting,
    ],
    originOwnerId: '<id>',
    originOwnerName: '<value>',
);

$response = $sdk->connectSessions->createConnectSession(
    request: $request
);

if ($response->connectSessionTokenAuthLink !== null) {
    // handle response
}
```

### Per-Operation Security Schemes

Some operations in this SDK require the security scheme to be specified at the request level. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Operations;

$sdk = client\StackOne::builder()->build();


$requestSecurity = new Operations\StackoneMcpGetSecurity(
    basic: new Components\SchemeBasic(
        username: '',
        password: '',
    ),
);

$response = $sdk->mcp->mcpGet(
    security: $requestSecurity,
    xAccountId: '<id>',
    mcpSessionId: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [accounting](docs/sdks/accounting/README.md)

* [listCompanies](docs/sdks/accounting/README.md#listcompanies) - List Companies
* [getCompany](docs/sdks/accounting/README.md#getcompany) - Get Company
* [listCompanyAccounts](docs/sdks/accounting/README.md#listcompanyaccounts) - List Accounts
* [getCompanyAccount](docs/sdks/accounting/README.md#getcompanyaccount) - Get Account
* [listCompanyTaxRates](docs/sdks/accounting/README.md#listcompanytaxrates) - List Tax Rates
* [getCompanyTaxRate](docs/sdks/accounting/README.md#getcompanytaxrate) - Get Tax Rate
* [batchCreateCompanyJournals](docs/sdks/accounting/README.md#batchcreatecompanyjournals) - Batch Create Journals
* [listCompanyJournals](docs/sdks/accounting/README.md#listcompanyjournals) - List Journals
* [createCompanyJournal](docs/sdks/accounting/README.md#createcompanyjournal) - Create Journal
* [getCompanyJournal](docs/sdks/accounting/README.md#getcompanyjournal) - Get Journal

### [accounts](docs/sdks/accounts/README.md)

* [listLinkedAccounts](docs/sdks/accounts/README.md#listlinkedaccounts) - List Accounts
* [getAccount](docs/sdks/accounts/README.md#getaccount) - Get Account
* [deleteAccount](docs/sdks/accounts/README.md#deleteaccount) - Delete Account
* [updateAccount](docs/sdks/accounts/README.md#updateaccount) - Update Account
* [getAccountMetaInfo](docs/sdks/accounts/README.md#getaccountmetainfo) - Get Account Meta Information

### [actions](docs/sdks/actions/README.md)

* [listActionsMeta](docs/sdks/actions/README.md#listactionsmeta) - List all actions metadata
* [rpcAction](docs/sdks/actions/README.md#rpcaction) - Make an RPC call to an action

### [ats](docs/sdks/ats/README.md)

* [listApplications](docs/sdks/ats/README.md#listapplications) - List Applications
* [createApplication](docs/sdks/ats/README.md#createapplication) - Create Application
* [getApplication](docs/sdks/ats/README.md#getapplication) - Get Application
* [updateApplication](docs/sdks/ats/README.md#updateapplication) - Update Application
* [listApplicationsOffers](docs/sdks/ats/README.md#listapplicationsoffers) - List Application Offers
* [moveApplication](docs/sdks/ats/README.md#moveapplication) - Move Application
* [rejectApplication](docs/sdks/ats/README.md#rejectapplication) - Reject Application
* [getApplicationOffer](docs/sdks/ats/README.md#getapplicationoffer) - Get Application Offer
* [listApplicationScorecards](docs/sdks/ats/README.md#listapplicationscorecards) - List Application Scorecards
* [getApplicationScorecard](docs/sdks/ats/README.md#getapplicationscorecard) - Get Application Scorecard
* [listApplicationChanges](docs/sdks/ats/README.md#listapplicationchanges) - List Application Changes
* [listApplicationNotes](docs/sdks/ats/README.md#listapplicationnotes) - List Application Notes
* [createApplicationNote](docs/sdks/ats/README.md#createapplicationnote) - Create Application Note
* [getApplicationNote](docs/sdks/ats/README.md#getapplicationnote) - Get Application Note
* [updateApplicationNote](docs/sdks/ats/README.md#updateapplicationnote) - Update Application Note
* [listApplicationsScheduledInterviews](docs/sdks/ats/README.md#listapplicationsscheduledinterviews) - List Applications scheduled interviews
* [getApplicationScheduledInterview](docs/sdks/ats/README.md#getapplicationscheduledinterview) - Get Applications scheduled interview
* [uploadApplicationDocument](docs/sdks/ats/README.md#uploadapplicationdocument) - Upload Application Document
* [downloadApplicationDocument](docs/sdks/ats/README.md#downloadapplicationdocument) - Download Application Document
* [listApplicationDocuments](docs/sdks/ats/README.md#listapplicationdocuments) - List Application Documents
* [getApplicationDocument](docs/sdks/ats/README.md#getapplicationdocument) - Get Application Document
* [listCandidates](docs/sdks/ats/README.md#listcandidates) - List Candidates
* [createCandidate](docs/sdks/ats/README.md#createcandidate) - Create Candidate
* [getCandidate](docs/sdks/ats/README.md#getcandidate) - Get Candidate
* [updateCandidate](docs/sdks/ats/README.md#updatecandidate) - Update Candidate
* [listCandidateNotes](docs/sdks/ats/README.md#listcandidatenotes) - List Candidate Notes
* [createCandidateNote](docs/sdks/ats/README.md#createcandidatenote) - Create Candidate Note
* [getCandidateNote](docs/sdks/ats/README.md#getcandidatenote) - Get Candidate Note
* [listApplicationCustomFieldDefinitions](docs/sdks/ats/README.md#listapplicationcustomfielddefinitions) - List Application Custom Field Definitions
* [getApplicationCustomFieldDefinition](docs/sdks/ats/README.md#getapplicationcustomfielddefinition) - Get Application Custom Field Definition
* [listCandidateCustomFieldDefinitions](docs/sdks/ats/README.md#listcandidatecustomfielddefinitions) - List Candidate Custom Field Definitions
* [getCandidateCustomFieldDefinition](docs/sdks/ats/README.md#getcandidatecustomfielddefinition) - Get Candidate Custom Field Definition
* [listJobCustomFieldDefinitions](docs/sdks/ats/README.md#listjobcustomfielddefinitions) - List Job Custom Field Definitions
* [getJobCustomFieldDefinition](docs/sdks/ats/README.md#getjobcustomfielddefinition) - Get Job Custom Field Definition
* [listDepartments](docs/sdks/ats/README.md#listdepartments) - List Departments
* [getDepartment](docs/sdks/ats/README.md#getdepartment) - Get Department
* [~~listInterviewStages~~](docs/sdks/ats/README.md#listinterviewstages) - List Interview Stages :warning: **Deprecated**
* [~~getInterviewStage~~](docs/sdks/ats/README.md#getinterviewstage) - Get Interview Stage :warning: **Deprecated**
* [listApplicationStages](docs/sdks/ats/README.md#listapplicationstages) - List Application Stages
* [getApplicationStage](docs/sdks/ats/README.md#getapplicationstage) - Get Application Stage
* [listInterviews](docs/sdks/ats/README.md#listinterviews) - List Interviews
* [getInterview](docs/sdks/ats/README.md#getinterview) - Get Interview
* [listJobs](docs/sdks/ats/README.md#listjobs) - List Jobs
* [createJob](docs/sdks/ats/README.md#createjob) - Create Job
* [listJobApplicationStages](docs/sdks/ats/README.md#listjobapplicationstages) - List Job Application Stages
* [getJob](docs/sdks/ats/README.md#getjob) - Get Job
* [updateJob](docs/sdks/ats/README.md#updatejob) - Update Job
* [getJobApplicationStage](docs/sdks/ats/README.md#getjobapplicationstage) - Get Job Application Stage
* [listLists](docs/sdks/ats/README.md#listlists) - Get all Lists
* [getList](docs/sdks/ats/README.md#getlist) - Get List
* [listLocations](docs/sdks/ats/README.md#listlocations) - List locations
* [getLocation](docs/sdks/ats/README.md#getlocation) - Get Location
* [listRejectedReasons](docs/sdks/ats/README.md#listrejectedreasons) - List Rejected Reasons
* [getRejectedReason](docs/sdks/ats/README.md#getrejectedreason) - Get Rejected Reason
* [listUsers](docs/sdks/ats/README.md#listusers) - List Users
* [getUser](docs/sdks/ats/README.md#getuser) - Get User
* [listJobPostings](docs/sdks/ats/README.md#listjobpostings) - List Job Postings
* [getJobPosting](docs/sdks/ats/README.md#getjobposting) - Get Job Posting
* [listOffers](docs/sdks/ats/README.md#listoffers) - List Offers
* [createOffer](docs/sdks/ats/README.md#createoffer) - Create Offer
* [getOffer](docs/sdks/ats/README.md#getoffer) - Get Offer
* [listAssessmentsPackages](docs/sdks/ats/README.md#listassessmentspackages) - List Assessments Packages
* [getAssessmentsPackage](docs/sdks/ats/README.md#getassessmentspackage) - Get Assessments Package
* [orderAssessmentsRequest](docs/sdks/ats/README.md#orderassessmentsrequest) - Order Assessments Request
* [updateAssessmentsResult](docs/sdks/ats/README.md#updateassessmentsresult) - Update Assessments Result
* [listBackgroundCheckPackages](docs/sdks/ats/README.md#listbackgroundcheckpackages) - List Background Check Packages
* [createBackgroundCheckPackage](docs/sdks/ats/README.md#createbackgroundcheckpackage) - Create Background Check Package
* [getBackgroundCheckPackage](docs/sdks/ats/README.md#getbackgroundcheckpackage) - Get Background Check Package
* [deleteBackgroundCheckPackage](docs/sdks/ats/README.md#deletebackgroundcheckpackage) - Delete Background Check Package
* [updateBackgroundCheckPackage](docs/sdks/ats/README.md#updatebackgroundcheckpackage) - Update Background Check Package
* [orderBackgroundCheckRequest](docs/sdks/ats/README.md#orderbackgroundcheckrequest) - Order Background Check Request
* [updateBackgroundCheckResult](docs/sdks/ats/README.md#updatebackgroundcheckresult) - Update Background Check Result
* [listApplicationDocumentCategories](docs/sdks/ats/README.md#listapplicationdocumentcategories) - List Application Document Categories
* [getApplicationDocumentCategory](docs/sdks/ats/README.md#getapplicationdocumentcategory) - Get Application Document Category

### [connectors](docs/sdks/connectors/README.md)

* [listConnectorsMeta](docs/sdks/connectors/README.md#listconnectorsmeta) - List Connector Meta Information
* [getConnectorMeta](docs/sdks/connectors/README.md#getconnectormeta) - Get Connector Meta Information

### [connectSessions](docs/sdks/connectsessions/README.md)

* [createConnectSession](docs/sdks/connectsessions/README.md#createconnectsession) - Create Connect Session
* [authenticateConnectSession](docs/sdks/connectsessions/README.md#authenticateconnectsession) - Authenticate Connect Session

### [crm](docs/sdks/crm/README.md)

* [listContacts](docs/sdks/crm/README.md#listcontacts) - List Contacts
* [createContact](docs/sdks/crm/README.md#createcontact) - Create Contact
* [getContact](docs/sdks/crm/README.md#getcontact) - Get Contact
* [updateContact](docs/sdks/crm/README.md#updatecontact) - Update Contact (early access)
* [listAccounts](docs/sdks/crm/README.md#listaccounts) - List Accounts
* [getAccount](docs/sdks/crm/README.md#getaccount) - Get Account
* [listLists](docs/sdks/crm/README.md#listlists) - Get all Lists
* [getList](docs/sdks/crm/README.md#getlist) - Get List
* [listContactCustomFieldDefinitions](docs/sdks/crm/README.md#listcontactcustomfielddefinitions) - List Contact Custom Field Definitions
* [getContactCustomFieldDefinition](docs/sdks/crm/README.md#getcontactcustomfielddefinition) - Get Contact Custom Field Definition

### [documents](docs/sdks/documents/README.md)

* [downloadFile](docs/sdks/documents/README.md#downloadfile) - Download File
* [uploadFile](docs/sdks/documents/README.md#uploadfile) - Upload File
* [listFiles](docs/sdks/documents/README.md#listfiles) - List Files
* [getFile](docs/sdks/documents/README.md#getfile) - Get File
* [listFolders](docs/sdks/documents/README.md#listfolders) - List Folders
* [getFolder](docs/sdks/documents/README.md#getfolder) - Get Folder
* [listDrives](docs/sdks/documents/README.md#listdrives) - List Drives
* [getDrive](docs/sdks/documents/README.md#getdrive) - Get Drive

### [hris](docs/sdks/hris/README.md)

* [listCompanies](docs/sdks/hris/README.md#listcompanies) - List Companies
* [getCompany](docs/sdks/hris/README.md#getcompany) - Get Company
* [listEmployeeCustomFieldDefinitions](docs/sdks/hris/README.md#listemployeecustomfielddefinitions) - List employee Custom Field Definitions
* [getEmployeeCustomFieldDefinition](docs/sdks/hris/README.md#getemployeecustomfielddefinition) - Get employee Custom Field Definition
* [listEmployees](docs/sdks/hris/README.md#listemployees) - List Employees
* [createEmployee](docs/sdks/hris/README.md#createemployee) - Create Employee
* [getEmployee](docs/sdks/hris/README.md#getemployee) - Get Employee
* [updateEmployee](docs/sdks/hris/README.md#updateemployee) - Update Employee
* [inviteEmployee](docs/sdks/hris/README.md#inviteemployee) - Invite Employee
* [listEmployeeTimeOffRequests](docs/sdks/hris/README.md#listemployeetimeoffrequests) - List Employee Time Off Requests
* [createEmployeeTimeOffRequest](docs/sdks/hris/README.md#createemployeetimeoffrequest) - Create Employee Time Off Request
* [getEmployeesTimeOffRequest](docs/sdks/hris/README.md#getemployeestimeoffrequest) - Get Employees Time Off Request
* [cancelEmployeeTimeOffRequest](docs/sdks/hris/README.md#cancelemployeetimeoffrequest) - Cancel Employee Time Off Request
* [updateEmployeeTimeOffRequest](docs/sdks/hris/README.md#updateemployeetimeoffrequest) - Update Employee Time Off Request
* [batchUploadEmployeeDocument](docs/sdks/hris/README.md#batchuploademployeedocument) - Batch Upload Employee Document
* [uploadEmployeeDocument](docs/sdks/hris/README.md#uploademployeedocument) - Upload Employee Document
* [downloadEmployeeDocument](docs/sdks/hris/README.md#downloademployeedocument) - Download Employee Document
* [listEmployeeDocuments](docs/sdks/hris/README.md#listemployeedocuments) - List Employee Documents
* [getEmployeeDocument](docs/sdks/hris/README.md#getemployeedocument) - Get Employee Document
* [listEmployeeCategories](docs/sdks/hris/README.md#listemployeecategories) - List Employee Document Categories
* [getEmployeeDocumentCategory](docs/sdks/hris/README.md#getemployeedocumentcategory) - Get Employee Document Category
* [listEmployeeWorkEligibility](docs/sdks/hris/README.md#listemployeeworkeligibility) - List Employee Work Eligibility
* [createEmployeeWorkEligibilityRequest](docs/sdks/hris/README.md#createemployeeworkeligibilityrequest) - Create Employee Work Eligibility Request
* [getEmployeesWorkEligibility](docs/sdks/hris/README.md#getemployeesworkeligibility) - Get Employees Work Eligibility
* [updateEmployeeWorkEligibilityRequest](docs/sdks/hris/README.md#updateemployeeworkeligibilityrequest) - Update Employee Work Eligibility Request
* [listEmployeeTimeOffBalances](docs/sdks/hris/README.md#listemployeetimeoffbalances) - List Employee Time Off Balances
* [getEmployeeTimeOffBalance](docs/sdks/hris/README.md#getemployeetimeoffbalance) - Get Employee Time Off Balance
* [listEmployments](docs/sdks/hris/README.md#listemployments) - List Employments
* [getEmployment](docs/sdks/hris/README.md#getemployment) - Get Employment
* [listEmployeeEmployments](docs/sdks/hris/README.md#listemployeeemployments) - List Employee Employments
* [createEmployeeEmployment](docs/sdks/hris/README.md#createemployeeemployment) - Create Employee Employment
* [getEmployeeEmployment](docs/sdks/hris/README.md#getemployeeemployment) - Get Employee Employment
* [updateEmployeeEmployment](docs/sdks/hris/README.md#updateemployeeemployment) - Update Employee Employment
* [listGroups](docs/sdks/hris/README.md#listgroups) - List Groups
* [listDepartmentGroups](docs/sdks/hris/README.md#listdepartmentgroups) - List Department Groups
* [listCostCenterGroups](docs/sdks/hris/README.md#listcostcentergroups) - List Cost Center Groups
* [listTeamGroups](docs/sdks/hris/README.md#listteamgroups) - List Team Groups
* [listDivisionGroups](docs/sdks/hris/README.md#listdivisiongroups) - List Division Groups
* [listCompaniesGroups](docs/sdks/hris/README.md#listcompaniesgroups) - List Companies Groups
* [getGroup](docs/sdks/hris/README.md#getgroup) - Get Group
* [getDepartmentGroup](docs/sdks/hris/README.md#getdepartmentgroup) - Get Department Group
* [getCostCenterGroup](docs/sdks/hris/README.md#getcostcentergroup) - Get Cost Center Group
* [getTeamGroup](docs/sdks/hris/README.md#getteamgroup) - Get Team Group
* [getDivisionGroup](docs/sdks/hris/README.md#getdivisiongroup) - Get Division Group
* [getCompanyGroup](docs/sdks/hris/README.md#getcompanygroup) - Get Company Group
* [listJobs](docs/sdks/hris/README.md#listjobs) - List Jobs
* [getJob](docs/sdks/hris/README.md#getjob) - Get Job
* [listLocations](docs/sdks/hris/README.md#listlocations) - List Work Locations
* [getLocation](docs/sdks/hris/README.md#getlocation) - Get Work Location
* [listPositions](docs/sdks/hris/README.md#listpositions) - List Positions
* [getPosition](docs/sdks/hris/README.md#getposition) - Get Position
* [listTimeEntries](docs/sdks/hris/README.md#listtimeentries) - List Time Entries
* [getTimeEntries](docs/sdks/hris/README.md#gettimeentries) - Get Time Entry
* [listTimeOffRequests](docs/sdks/hris/README.md#listtimeoffrequests) - List time off requests
* [getTimeOffRequest](docs/sdks/hris/README.md#gettimeoffrequest) - Get time off request
* [listShifts](docs/sdks/hris/README.md#listshifts) - List Shifts
* [getShift](docs/sdks/hris/README.md#getshift) - Get Shift
* [~~listTimeOffTypes~~](docs/sdks/hris/README.md#listtimeofftypes) - List time off types :warning: **Deprecated**
* [~~getTimeOffType~~](docs/sdks/hris/README.md#gettimeofftype) - Get time off type :warning: **Deprecated**
* [listTimeOffPolicies](docs/sdks/hris/README.md#listtimeoffpolicies) - List Time Off Policies
* [getTimeOffPolicy](docs/sdks/hris/README.md#gettimeoffpolicy) - Get Time Off Policy
* [listEmployeeTimeOffPolicies](docs/sdks/hris/README.md#listemployeetimeoffpolicies) - List Assigned Time Off Policies
* [listBenefits](docs/sdks/hris/README.md#listbenefits) - List benefits
* [getBenefit](docs/sdks/hris/README.md#getbenefit) - Get Benefit
* [listEmployeeSkills](docs/sdks/hris/README.md#listemployeeskills) - List Employee Skills
* [createEmployeeSkill](docs/sdks/hris/README.md#createemployeeskill) - Create Employee Skill
* [getEmployeeSkill](docs/sdks/hris/README.md#getemployeeskill) - Get Employee Skill
* [listEmployeeTasks](docs/sdks/hris/README.md#listemployeetasks) - List Employee Tasks
* [getEmployeeTask](docs/sdks/hris/README.md#getemployeetask) - Get Employee Task
* [updateEmployeeTask](docs/sdks/hris/README.md#updateemployeetask) - Update Employee Task
* [listTasks](docs/sdks/hris/README.md#listtasks) - List Tasks
* [getTask](docs/sdks/hris/README.md#gettask) - Get Task

### [iam](docs/sdks/iam/README.md)

* [listUsers](docs/sdks/iam/README.md#listusers) - List Users
* [getUser](docs/sdks/iam/README.md#getuser) - Get User
* [deleteUser](docs/sdks/iam/README.md#deleteuser) - Delete User
* [updateUser](docs/sdks/iam/README.md#updateuser) - Update User
* [listRoles](docs/sdks/iam/README.md#listroles) - List Roles
* [getRole](docs/sdks/iam/README.md#getrole) - Get Role
* [listGroups](docs/sdks/iam/README.md#listgroups) - List Groups
* [getGroup](docs/sdks/iam/README.md#getgroup) - Get Group
* [listPolicies](docs/sdks/iam/README.md#listpolicies) - List Policies
* [getPolicy](docs/sdks/iam/README.md#getpolicy) - Get Policy

### [lms](docs/sdks/lms/README.md)

* [listCourses](docs/sdks/lms/README.md#listcourses) - List Courses
* [getCourse](docs/sdks/lms/README.md#getcourse) - Get Course
* [listUserAssignments](docs/sdks/lms/README.md#listuserassignments) - List User Assignments
* [createUserAssignment](docs/sdks/lms/README.md#createuserassignment) - Create User Assignment
* [getUserAssignment](docs/sdks/lms/README.md#getuserassignment) - Get User Assignment
* [batchUpsertContent](docs/sdks/lms/README.md#batchupsertcontent) - Batch Upsert Content
* [listContent](docs/sdks/lms/README.md#listcontent) - List Content
* [upsertContent](docs/sdks/lms/README.md#upsertcontent) - Upsert Content
* [getContent](docs/sdks/lms/README.md#getcontent) - Get Content
* [updateContent](docs/sdks/lms/README.md#updatecontent) - Update Content
* [listUserCompletions](docs/sdks/lms/README.md#listusercompletions) - List User Completions
* [createUserCompletion](docs/sdks/lms/README.md#createusercompletion) - Create User Completion
* [getUserCompletion](docs/sdks/lms/README.md#getusercompletion) - Get User Completion
* [deleteUserCompletion](docs/sdks/lms/README.md#deleteusercompletion) - Delete User Completion
* [listCompletions](docs/sdks/lms/README.md#listcompletions) - List Completions
* [getCompletion](docs/sdks/lms/README.md#getcompletion) - Get Completion
* [getCategory](docs/sdks/lms/README.md#getcategory) - Get Category
* [listCategories](docs/sdks/lms/README.md#listcategories) - List Categories
* [listUsers](docs/sdks/lms/README.md#listusers) - List Users
* [getUser](docs/sdks/lms/README.md#getuser) - Get User
* [getSkill](docs/sdks/lms/README.md#getskill) - Get Skill
* [listSkills](docs/sdks/lms/README.md#listskills) - List Skills
* [listAssignments](docs/sdks/lms/README.md#listassignments) - List Assignments
* [getAssignment](docs/sdks/lms/README.md#getassignment) - Get Assignment

### [marketing](docs/sdks/marketing/README.md)

* [listEmailTemplates](docs/sdks/marketing/README.md#listemailtemplates) - List Email Templates
* [createEmailTemplate](docs/sdks/marketing/README.md#createemailtemplate) - Create Email Templates
* [getEmailTemplate](docs/sdks/marketing/README.md#getemailtemplate) - Get Email Templates
* [updateEmailTemplate](docs/sdks/marketing/README.md#updateemailtemplate) - Update Email Templates
* [listInAppTemplates](docs/sdks/marketing/README.md#listinapptemplates) - List In-App Templates
* [createInAppTemplate](docs/sdks/marketing/README.md#createinapptemplate) - Create In-App Template
* [getInAppTemplate](docs/sdks/marketing/README.md#getinapptemplate) - Get In-App Template
* [updateInAppTemplate](docs/sdks/marketing/README.md#updateinapptemplate) - Update In-App Template
* [listSmsTemplates](docs/sdks/marketing/README.md#listsmstemplates) - List SMS Templates
* [createSmsTemplate](docs/sdks/marketing/README.md#createsmstemplate) - Create SMS Template
* [getSmsTemplate](docs/sdks/marketing/README.md#getsmstemplate) - Get SMS Template
* [updateSmsTemplate](docs/sdks/marketing/README.md#updatesmstemplate) - Update SMS Template
* [~~listOmniChannelTemplates~~](docs/sdks/marketing/README.md#listomnichanneltemplates) - List Omni-Channel Templates :warning: **Deprecated**
* [~~createOmniChannelTemplate~~](docs/sdks/marketing/README.md#createomnichanneltemplate) - Create Omni-Channel Template :warning: **Deprecated**
* [~~getOmniChannelTemplate~~](docs/sdks/marketing/README.md#getomnichanneltemplate) - Get Omni-Channel Template :warning: **Deprecated**
* [~~updateOmniChannelTemplate~~](docs/sdks/marketing/README.md#updateomnichanneltemplate) - Update Omni-Channel Template :warning: **Deprecated**
* [listPushTemplates](docs/sdks/marketing/README.md#listpushtemplates) - List Push Templates
* [createPushTemplate](docs/sdks/marketing/README.md#createpushtemplate) - Create Push Template
* [getPushTemplate](docs/sdks/marketing/README.md#getpushtemplate) - Get Push Template
* [updatePushTemplate](docs/sdks/marketing/README.md#updatepushtemplate) - Update Push Template
* [listCampaigns](docs/sdks/marketing/README.md#listcampaigns) - List campaigns
* [getCampaign](docs/sdks/marketing/README.md#getcampaign) - Get campaign
* [listContentBlocks](docs/sdks/marketing/README.md#listcontentblocks) - List Content Blocks
* [createContentBlock](docs/sdks/marketing/README.md#createcontentblock) - Create Content Block
* [getContentBlock](docs/sdks/marketing/README.md#getcontentblock) - Get Content Blocks
* [updateContentBlock](docs/sdks/marketing/README.md#updatecontentblock) - Update Content Block

### [mcp](docs/sdks/mcp/README.md)

* [mcpGet](docs/sdks/mcp/README.md#mcpget) - Open MCP SSE stream
* [mcpPost](docs/sdks/mcp/README.md#mcppost) - Send MCP JSON-RPC message
* [mcpDelete](docs/sdks/mcp/README.md#mcpdelete) - Delete MCP session

### [messaging](docs/sdks/messaging/README.md)

* [listConversations](docs/sdks/messaging/README.md#listconversations) - List Conversations
* [createConversation](docs/sdks/messaging/README.md#createconversation) - Create Conversation
* [getConversation](docs/sdks/messaging/README.md#getconversation) - Get Conversation
* [downloadMessagingAttachment](docs/sdks/messaging/README.md#downloadmessagingattachment) - Download Attachment
* [listAttachments](docs/sdks/messaging/README.md#listattachments) - List Attachments
* [getAttachment](docs/sdks/messaging/README.md#getattachment) - Get Attachment
* [listUsers](docs/sdks/messaging/README.md#listusers) - List Users
* [getUser](docs/sdks/messaging/README.md#getuser) - Get User
* [listConversationMessages](docs/sdks/messaging/README.md#listconversationmessages) - List Conversation Messages
* [getMessage](docs/sdks/messaging/README.md#getmessage) - Get Message
* [sendMessage](docs/sdks/messaging/README.md#sendmessage) - Send Message

### [proxy](docs/sdks/proxy/README.md)

* [proxyRequest](docs/sdks/proxy/README.md#proxyrequest) - Proxy Request

### [requestLogs](docs/sdks/requestlogs/README.md)

* [listStepLogs](docs/sdks/requestlogs/README.md#liststeplogs) - List Step Logs
* [getLog](docs/sdks/requestlogs/README.md#getlog) - Get Log
* [listLogs](docs/sdks/requestlogs/README.md#listlogs) - List Logs
* [listPlatformLogs](docs/sdks/requestlogs/README.md#listplatformlogs) - List Platform Logs

### [screening](docs/sdks/screening/README.md)

* [listScreeningPackages](docs/sdks/screening/README.md#listscreeningpackages) - List Screening Packages
* [getScreeningPackage](docs/sdks/screening/README.md#getscreeningpackage) - Get Screening Package
* [webhookScreeningResult](docs/sdks/screening/README.md#webhookscreeningresult) - Webhook Screening Result
* [createScreeningOrder](docs/sdks/screening/README.md#createscreeningorder) - Create Screening Order


### [ticketing](docs/sdks/ticketing/README.md)

* [listTickets](docs/sdks/ticketing/README.md#listtickets) - List Tickets
* [createTicket](docs/sdks/ticketing/README.md#createticket) - Create Ticket
* [getTicket](docs/sdks/ticketing/README.md#getticket) - Get Ticket
* [updateTicket](docs/sdks/ticketing/README.md#updateticket) - Update Ticket
* [listUsers](docs/sdks/ticketing/README.md#listusers) - List Users
* [getUser](docs/sdks/ticketing/README.md#getuser) - Get User
* [listComments](docs/sdks/ticketing/README.md#listcomments) - List Comments
* [getComment](docs/sdks/ticketing/README.md#getcomment) - Get Comment
* [downloadTicketingAttachment](docs/sdks/ticketing/README.md#downloadticketingattachment) - Download Attachment
* [listAttachments](docs/sdks/ticketing/README.md#listattachments) - List Attachments
* [getAttachment](docs/sdks/ticketing/README.md#getattachment) - Get Attachment
* [listTicketTypes](docs/sdks/ticketing/README.md#listtickettypes) - List Ticket Types
* [getTicketType](docs/sdks/ticketing/README.md#gettickettype) - Get Ticket Type
* [listProjects](docs/sdks/ticketing/README.md#listprojects) - List Projects
* [getProject](docs/sdks/ticketing/README.md#getproject) - Get Project
* [listProjectComponents](docs/sdks/ticketing/README.md#listprojectcomponents) - List Project Components
* [getProjectComponent](docs/sdks/ticketing/README.md#getprojectcomponent) - Get Project Component
* [listProjectTicketTypes](docs/sdks/ticketing/README.md#listprojecttickettypes) - List Project Ticket Types
* [listTicketStatuses](docs/sdks/ticketing/README.md#listticketstatuses) - List Ticket Statuses

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Pagination [pagination] -->
## Pagination

Some of the endpoints in this SDK support pagination. To use pagination, you make your SDK calls as usual, but the
returned object will be a `Generator` instead of an individual response.

Working with generators is as simple as iterating over the responses in a `foreach` loop, and you can see an example below:
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

$request = new Operations\StackoneListActionsMetaRequest(
    groupBy: '["connector"]',
    filter: new Operations\StackoneListActionsMetaQueryParamFilter(
        connectors: 'connector1,connector2',
        accountIds: 'account1,account2',
        actionKey: 'action1',
    ),
    include: [
        Operations\StackoneListActionsMetaQueryParamInclude::OperationDetails,
    ],
);

$responses = $sdk->actions->listActionsMeta(
    request: $request
);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```
<!-- End Pagination [pagination] -->

<!-- Start Retries [retries] -->
## Retries

Some of the endpoints in this SDK support retries. If you use the SDK without any configuration, it will fall back to the default retry strategy provided by the API. However, the default retry strategy can be overridden on a per-operation basis, or across the entire SDK.

To change the default retry strategy for a single API call, simply provide an `Options` object built with a `RetryConfig` object to the call:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils\Retry;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Components\ConnectSessionCreate(
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Ticketing,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Iam,
        Components\Categories::Documents,
        Components\Categories::Ticketing,
        Components\Categories::Screening,
        Components\Categories::Messaging,
        Components\Categories::Accounting,
    ],
    originOwnerId: '<id>',
    originOwnerName: '<value>',
);

$response = $sdk->connectSessions->createConnectSession(
    request: $request,
    options: Utils\Options->builder()->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        ))->build()
);

if ($response->connectSessionTokenAuthLink !== null) {
    // handle response
}
```

If you'd like to override the default retry strategy for all operations that support retries, you can pass a `RetryConfig` object to the `SDKBuilder->setRetryConfig` function when initializing the SDK:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Utils\Retry;

$sdk = client\StackOne::builder()
    ->setRetryConfig(
        new Retry\RetryConfigBackoff(
            initialInterval: 1,
            maxInterval:     50,
            exponent:        1.1,
            maxElapsedTime:  100,
            retryConnectionErrors: false,
        )
  )
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Components\ConnectSessionCreate(
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Ticketing,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Iam,
        Components\Categories::Documents,
        Components\Categories::Ticketing,
        Components\Categories::Screening,
        Components\Categories::Messaging,
        Components\Categories::Accounting,
    ],
    originOwnerId: '<id>',
    originOwnerName: '<value>',
);

$response = $sdk->connectSessions->createConnectSession(
    request: $request
);

if ($response->connectSessionTokenAuthLink !== null) {
    // handle response
}
```
<!-- End Retries [retries] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `createConnectSession` method throws the following exceptions:

| Error Type                         | Status Code | Content Type     |
| ---------------------------------- | ----------- | ---------------- |
| Errors\BadRequestResponse          | 400         | application/json |
| Errors\UnauthorizedResponse        | 401         | application/json |
| Errors\ForbiddenResponse           | 403         | application/json |
| Errors\NotFoundResponse            | 404         | application/json |
| Errors\RequestTimedOutResponse     | 408         | application/json |
| Errors\ConflictResponse            | 409         | application/json |
| Errors\UnprocessableEntityResponse | 422         | application/json |
| Errors\TooManyRequestsResponse     | 429         | application/json |
| Errors\InternalServerErrorResponse | 500         | application/json |
| Errors\NotImplementedResponse      | 501         | application/json |
| Errors\BadGatewayResponse          | 502         | application/json |
| Errors\SDKException                | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;
use StackOne\client\Models\Errors;

$sdk = client\StackOne::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

try {
    $request = new Components\ConnectSessionCreate(
        categories: [
            Components\Categories::Ats,
            Components\Categories::Hris,
            Components\Categories::Ticketing,
            Components\Categories::Crm,
            Components\Categories::Iam,
            Components\Categories::Marketing,
            Components\Categories::Lms,
            Components\Categories::Iam,
            Components\Categories::Documents,
            Components\Categories::Ticketing,
            Components\Categories::Screening,
            Components\Categories::Messaging,
            Components\Categories::Accounting,
        ],
        originOwnerId: '<id>',
        originOwnerName: '<value>',
    );

    $response = $sdk->connectSessions->createConnectSession(
        request: $request
    );

    if ($response->connectSessionTokenAuthLink !== null) {
        // handle response
    }
} catch (Errors\BadRequestResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnauthorizedResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ForbiddenResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\NotFoundResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\RequestTimedOutResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ConflictResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnprocessableEntityResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\TooManyRequestsResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\InternalServerErrorResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\NotImplementedResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\BadGatewayResponseThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\SDKException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use StackOne\client;
use StackOne\client\Models\Components;

$sdk = client\StackOne::builder()
    ->setServerURL('https://api.stackone.com')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Components\ConnectSessionCreate(
    categories: [
        Components\Categories::Ats,
        Components\Categories::Hris,
        Components\Categories::Ticketing,
        Components\Categories::Crm,
        Components\Categories::Iam,
        Components\Categories::Marketing,
        Components\Categories::Lms,
        Components\Categories::Iam,
        Components\Categories::Documents,
        Components\Categories::Ticketing,
        Components\Categories::Screening,
        Components\Categories::Messaging,
        Components\Categories::Accounting,
    ],
    originOwnerId: '<id>',
    originOwnerName: '<value>',
);

$response = $sdk->connectSessions->createConnectSession(
    request: $request
);

if ($response->connectSessionTokenAuthLink !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
