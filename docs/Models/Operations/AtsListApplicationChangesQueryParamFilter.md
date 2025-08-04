# AtsListApplicationChangesQueryParamFilter

Filter parameters for application changes (supports created_after and change_type)


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `createdAfter`                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                 | :heavy_minus_sign:                                                            | Use a string with a date to only select results created after that given date | 2020-01-01T00:00:00.000Z                                                      |
| `changeType`                                                                  | [?Operations\ChangeType](../../Models/Operations/ChangeType.md)               | :heavy_minus_sign:                                                            | Filter by the type of change that occurred to the application                 |                                                                               |