# LmsListUserAssignmentsQueryParamFilter

LMS Assignment Filter


## Fields

| Field                                                                           | Type                                                                            | Required                                                                        | Description                                                                     | Example                                                                         |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `updatedAfter`                                                                  | *?string*                                                                       | :heavy_minus_sign:                                                              | Use a string with a date to only select results updated after that given date   | 2020-01-01T00:00:00.000Z                                                        |
| `completed`                                                                     | *?bool*                                                                         | :heavy_minus_sign:                                                              | Filter to select assignment by completed status                                 |                                                                                 |
| `learningObjectType`                                                            | [?Operations\LearningObjectType](../../Models/Operations/LearningObjectType.md) | :heavy_minus_sign:                                                              | Filter to select assignment by learning object type.                            |                                                                                 |