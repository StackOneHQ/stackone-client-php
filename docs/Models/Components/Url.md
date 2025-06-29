# Url

The request URL data


## Fields

| Field                               | Type                                | Required                            | Description                         | Example                             |
| ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- | ----------------------------------- |
| `url`                               | *?string*                           | :heavy_minus_sign:                  | The request URL                     | https://example.com/api/v1/resource |
| `hostname`                          | *?string*                           | :heavy_minus_sign:                  | The request URL hostname            | example.com                         |
| `path`                              | *?string*                           | :heavy_minus_sign:                  | The request path                    | /api/v1/resource                    |
| `queryParams`                       | array<string, *mixed*>              | :heavy_minus_sign:                  | The request query parameters        | {<br/>"page": 1,<br/>"limit": 10<br/>} |