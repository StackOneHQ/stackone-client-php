# AssessmentResult


## Fields

| Field                                                                                         | Type                                                                                          | Required                                                                                      | Description                                                                                   | Example                                                                                       |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `id`                                                                                          | *?string*                                                                                     | :heavy_minus_sign:                                                                            | Unique identifier                                                                             | 8187e5da-dc77-475e-9949-af0f1fa4e4e3                                                          |
| `remoteId`                                                                                    | *?string*                                                                                     | :heavy_minus_sign:                                                                            | Provider's unique identifier                                                                  | 8187e5da-dc77-475e-9949-af0f1fa4e4e3                                                          |
| `candidate`                                                                                   | [?Components\AssessmentResultCandidate](../../Models/Components/AssessmentResultCandidate.md) | :heavy_minus_sign:                                                                            | N/A                                                                                           |                                                                                               |
| `score`                                                                                       | [?Components\AssessmentResultScore](../../Models/Components/AssessmentResultScore.md)         | :heavy_minus_sign:                                                                            | N/A                                                                                           |                                                                                               |
| `startDate`                                                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                 | :heavy_minus_sign:                                                                            | The start date of the candidate test                                                          | 2021-01-01T01:01:01.000Z                                                                      |
| `submissionDate`                                                                              | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                 | :heavy_minus_sign:                                                                            | The submission date of the candidate test                                                     | 2021-01-01T01:01:01.000Z                                                                      |
| `summary`                                                                                     | *?string*                                                                                     | :heavy_minus_sign:                                                                            | The summary about the result of the test                                                      | Test is passed                                                                                |
| `result`                                                                                      | [?Components\AssessmentResultResult](../../Models/Components/AssessmentResultResult.md)       | :heavy_minus_sign:                                                                            | N/A                                                                                           |                                                                                               |
| `resultUrl`                                                                                   | *?string*                                                                                     | :heavy_minus_sign:                                                                            | The test`s result url                                                                         | https://exmaple.com/result?id=xyz                                                             |
| `attachments`                                                                                 | array<[Components\Attachment](../../Models/Components/Attachment.md)>                         | :heavy_minus_sign:                                                                            | N/A                                                                                           |                                                                                               |