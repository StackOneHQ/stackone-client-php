# LmsListUserAssignmentsRequest


## Fields

| Field                                                                                                                                                                                                  | Type                                                                                                                                                                                                   | Required                                                                                                                                                                                               | Description                                                                                                                                                                                            | Example                                                                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `xAccountId`                                                                                                                                                                                           | *string*                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                     | The account identifier                                                                                                                                                                                 |                                                                                                                                                                                                        |
| `id`                                                                                                                                                                                                   | *string*                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                     | N/A                                                                                                                                                                                                    |                                                                                                                                                                                                        |
| `raw`                                                                                                                                                                                                  | *?bool*                                                                                                                                                                                                | :heavy_minus_sign:                                                                                                                                                                                     | Indicates that the raw request result is returned                                                                                                                                                      |                                                                                                                                                                                                        |
| `proxy`                                                                                                                                                                                                | array<string, *mixed*>                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                     | Query parameters that can be used to pass through parameters to the underlying provider request by surrounding them with 'proxy' key                                                                   |                                                                                                                                                                                                        |
| `fields`                                                                                                                                                                                               | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | The comma separated list of fields that will be returned in the response (if empty, all fields are returned)                                                                                           | id,remote_id,user_id,remote_user_id,course_id,remote_course_id,updated_at,created_at,due_date,status                                                                                                   |
| `filter`                                                                                                                                                                                               | [?Operations\LmsListUserAssignmentsQueryParamFilter](../../Models/Operations/LmsListUserAssignmentsQueryParamFilter.md)                                                                                | :heavy_minus_sign:                                                                                                                                                                                     | Filter parameters that allow greater customisation of the list response                                                                                                                                |                                                                                                                                                                                                        |
| ~~`page`~~                                                                                                                                                                                             | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | : warning: ** DEPRECATED **: This will be removed in a future release, please migrate away from it as soon as possible.<br/><br/>The page number of the results to fetch                               |                                                                                                                                                                                                        |
| `pageSize`                                                                                                                                                                                             | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | The number of results per page                                                                                                                                                                         |                                                                                                                                                                                                        |
| `next`                                                                                                                                                                                                 | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | The unified cursor                                                                                                                                                                                     |                                                                                                                                                                                                        |
| ~~`updatedAfter`~~                                                                                                                                                                                     | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | : warning: ** DEPRECATED **: This will be removed in a future release, please migrate away from it as soon as possible.<br/><br/>Use a string with a date to only select results updated after that given date | 2020-01-01T00:00:00.000Z                                                                                                                                                                               |
| `userId`                                                                                                                                                                                               | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | The user ID associated with this assignment                                                                                                                                                            | c28xyrc55866bvuv                                                                                                                                                                                       |
| `remoteUserId`                                                                                                                                                                                         | *?string*                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                     | Provider's unique identifier of the user related to the assignment                                                                                                                                     | e3cb75bf-aa84-466e-a6c1-b8322b257a48                                                                                                                                                                   |