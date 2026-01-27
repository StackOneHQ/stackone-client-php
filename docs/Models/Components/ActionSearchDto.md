# ActionSearchDto


## Fields

| Field                                      | Type                                       | Required                                   | Description                                | Example                                    |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `query`                                    | *string*                                   | :heavy_check_mark:                         | Search query for finding connector actions | send a message                             |
| `connector`                                | *?string*                                  | :heavy_minus_sign:                         | Filter by connector key                    | slack                                      |
| `topK`                                     | *?float*                                   | :heavy_minus_sign:                         | Number of results to return                |                                            |