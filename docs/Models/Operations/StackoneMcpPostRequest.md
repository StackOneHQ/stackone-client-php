# StackoneMcpPostRequest


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `xAccountId`                                                                 | *string*                                                                     | :heavy_check_mark:                                                           | Account secure id for the target provider account                            |
| `mcpSessionId`                                                               | *?string*                                                                    | :heavy_minus_sign:                                                           | Session id; omit for initialize, include for subsequent calls                |
| `jsonRpcMessageDto`                                                          | [Components\JsonRpcMessageDto](../../Models/Components/JsonRpcMessageDto.md) | :heavy_check_mark:                                                           | JSON-RPC 2.0 message                                                         |