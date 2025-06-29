# RequestTimedOutResponse


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `statusCode`                                                  | *float*                                                       | :heavy_check_mark:                                            | HTTP status code                                              | 408                                                           |
| `message`                                                     | *string*                                                      | :heavy_check_mark:                                            | Error message                                                 | Request timed out                                             |
| `timestamp`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | Timestamp when the error occurred                             | 2023-05-30T00:00:00.000Z                                      |