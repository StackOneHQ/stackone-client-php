# GuideSectionMeta


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `title`                                                                     | *string*                                                                    | :heavy_check_mark:                                                          | The title of the section                                                    |
| `content`                                                                   | *string*                                                                    | :heavy_check_mark:                                                          | The content of the section, includes markdown formatting                    |
| `list`                                                                      | array<*string*>                                                             | :heavy_minus_sign:                                                          | List items for the section                                                  |
| `steps`                                                                     | array<[Components\GuideStepMeta](../../Models/Components/GuideStepMeta.md)> | :heavy_minus_sign:                                                          | Nested steps within the section                                             |