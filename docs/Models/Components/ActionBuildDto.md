# ActionBuildDto


## Fields

| Field                                                           | Type                                                            | Required                                                        | Description                                                     | Example                                                         |
| --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- | --------------------------------------------------------------- |
| `connectorKey`                                                  | *?string*                                                       | :heavy_minus_sign:                                              | Specific connector key to rebuild embeddings for                | slack                                                           |
| `forceRefresh`                                                  | *?bool*                                                         | :heavy_minus_sign:                                              | Force refresh - clear all existing embeddings before rebuilding |                                                                 |