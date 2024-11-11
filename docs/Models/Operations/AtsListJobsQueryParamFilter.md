# AtsListJobsQueryParamFilter

ATS Jobs filters


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `updatedAfter`                                                                | *?string*                                                                     | :heavy_minus_sign:                                                            | Use a string with a date to only select results updated after that given date | 2020-01-01T00:00:00.000Z                                                      |
| `status`                                                                      | [?Operations\Status](../../Models/Operations/Status.md)                       | :heavy_minus_sign:                                                            | The status of the job                                                         |                                                                               |