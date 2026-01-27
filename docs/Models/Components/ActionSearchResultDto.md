# ActionSearchResultDto


## Fields

| Field                                                | Type                                                 | Required                                             | Description                                          |
| ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- | ---------------------------------------------------- |
| `actionName`                                         | *string*                                             | :heavy_check_mark:                                   | Unique action identifier                             |
| `connectorKey`                                       | *string*                                             | :heavy_check_mark:                                   | Connector key                                        |
| `similarityScore`                                    | *float*                                              | :heavy_check_mark:                                   | Cosine similarity score (0-1)                        |
| `label`                                              | *string*                                             | :heavy_check_mark:                                   | Human-readable action label                          |
| `description`                                        | *string*                                             | :heavy_check_mark:                                   | Action description                                   |
| `projectId`                                          | *string*                                             | :heavy_check_mark:                                   | Project ID of the action (global for shared actions) |