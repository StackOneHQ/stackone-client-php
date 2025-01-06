# AtsCreateBackgroundCheckPackagesRequestDto


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 | Example                                                                     |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `name`                                                                      | *?string*                                                                   | :heavy_minus_sign:                                                          | Package name                                                                | Test 1                                                                      |
| `description`                                                               | *?string*                                                                   | :heavy_minus_sign:                                                          | Package description                                                         | Skills test to gauge a candidate's proficiency in job-specific skills       |
| `tests`                                                                     | array<[Components\CreatePackage](../../Models/Components/CreatePackage.md)> | :heavy_minus_sign:                                                          | Package tests                                                               |                                                                             |
| `passthrough`                                                               | array<string, *mixed*>                                                      | :heavy_minus_sign:                                                          | Value to pass through to the provider                                       | {<br/>"other_known_names": "John Doe"<br/>}                                 |