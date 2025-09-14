# JsonRpcMessageDto


## Fields

| Field                                                   | Type                                                    | Required                                                | Description                                             | Example                                                 |
| ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- | ------------------------------------------------------- |
| `jsonrpc`                                               | *string*                                                | :heavy_check_mark:                                      | JSON-RPC protocol version                               | 2.0                                                     |
| `method`                                                | *string*                                                | :heavy_check_mark:                                      | JSON-RPC method name                                    | initialize                                              |
| `params`                                                | [?Components\Params](../../Models/Components/Params.md) | :heavy_minus_sign:                                      | Method parameters (arbitrary JSON)                      |                                                         |
| `id`                                                    | [?Components\Id](../../Models/Components/Id.md)         | :heavy_minus_sign:                                      | Request id (arbitrary JSON scalar)                      |                                                         |