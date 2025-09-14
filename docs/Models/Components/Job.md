# Job

The job of employee


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `id`                                                              | *?string*                                                         | :heavy_minus_sign:                                                | Unique identifier                                                 | 8187e5da-dc77-475e-9949-af0f1fa4e4e3                              |
| `remoteId`                                                        | *?string*                                                         | :heavy_minus_sign:                                                | Provider's unique identifier                                      | 8187e5da-dc77-475e-9949-af0f1fa4e4e3                              |
| `title`                                                           | *?string*                                                         | :heavy_minus_sign:                                                | Title of the job                                                  | Software Engineer                                                 |
| `description`                                                     | [?Components\Description](../../Models/Components/Description.md) | :heavy_minus_sign:                                                | The employee job description                                      |                                                                   |
| `ownerId`                                                         | *?string*                                                         | :heavy_minus_sign:                                                | The owner_id of the job                                           | 5356                                                              |
| `parentId`                                                        | *?string*                                                         | :heavy_minus_sign:                                                | The parent_id of the job                                          | 7577                                                              |