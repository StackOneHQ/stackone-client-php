# ActionsRpcRequestDto


## Fields

| Field                                      | Type                                       | Required                                   | Description                                | Example                                    |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `action`                                   | *string*                                   | :heavy_check_mark:                         | The action to execute                      | create_employee                            |
| `path`                                     | array<string, *mixed*>                     | :heavy_minus_sign:                         | Path parameters for the action             | {<br/>"id": "123"<br/>}                    |
| `query`                                    | array<string, *mixed*>                     | :heavy_minus_sign:                         | Query parameters for the action            | {<br/>"param1": "value1",<br/>"param2": "value2"<br/>} |
| `headers`                                  | array<string, *mixed*>                     | :heavy_minus_sign:                         | Headers for the action                     | {<br/>"Content-Type": "application/json"<br/>} |
| `body`                                     | array<string, *mixed*>                     | :heavy_minus_sign:                         | Request body for the action                | {<br/>"data": "example"<br/>}              |