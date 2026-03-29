# GuideStepMeta


## Fields

| Field                                                 | Type                                                  | Required                                              | Description                                           |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `title`                                               | *string*                                              | :heavy_check_mark:                                    | The title of the step                                 |
| `content`                                             | *string*                                              | :heavy_check_mark:                                    | The content of the step, includes markdown formatting |
| `list`                                                | array<*string*>                                       | :heavy_minus_sign:                                    | List items for the step                               |
| `displayScopes`                                       | *?bool*                                               | :heavy_minus_sign:                                    | When true, the step should display scopes             |
| `applicableScopes`                                    | array<*string*>                                       | :heavy_minus_sign:                                    | The scopes for which this step is applicable          |
| `image`                                               | [?Components\Image](../../Models/Components/Image.md) | :heavy_minus_sign:                                    | An image for the step                                 |