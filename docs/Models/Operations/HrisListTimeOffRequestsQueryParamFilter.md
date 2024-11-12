# HrisListTimeOffRequestsQueryParamFilter

HRIS Time Off filters


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `updatedAfter`                                                                | *?string*                                                                     | :heavy_minus_sign:                                                            | Use a string with a date to only select results updated after that given date | 2020-01-01T00:00:00.000Z                                                      |
| `type`                                                                        | array<*string*>                                                               | :heavy_minus_sign:                                                            | List of time off type ids to filter by.                                       |                                                                               |