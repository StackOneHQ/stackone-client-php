# ProxyRequestBody


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `url`                                                   | *?string*                                               | :heavy_minus_sign:                                      | The base url of the request                             | https://api.sample-integration.com/v1                   |
| `method`                                                | [?Components\Method](../../Models/Components/Method.md) | :heavy_minus_sign:                                      | The method of the request                               |                                                         |
| `path`                                                  | *?string*                                               | :heavy_minus_sign:                                      | The path of the request including any query parameters  | /employees/directory                                    |
| `headers`                                               | array<string, *mixed*>                                  | :heavy_minus_sign:                                      | The headers to send in the request                      | {<br/>"Content-Type": "application/json"<br/>}          |
| `body`                                                  | array<string, *mixed*>                                  | :heavy_minus_sign:                                      | The body of the request                                 |                                                         |