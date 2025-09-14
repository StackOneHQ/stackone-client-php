# LmsListContentQueryParamFilter

LMS Courses Filter


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   | Example                                                                       |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `updatedAfter`                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                 | :heavy_minus_sign:                                                            | Use a string with a date to only select results updated after that given date | 2020-01-01T00:00:00.000Z                                                      |
| `active`                                                                      | [bool\|string\|null](../../Models/Operations/QueryParamActive.md)             | :heavy_minus_sign:                                                            | Filter to allow filtering of only active content                              |                                                                               |