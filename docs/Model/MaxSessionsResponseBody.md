# # MaxSessionsResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |
**sessions** | [**\Relaya\Sdk\Model\MaxSession[]**](MaxSession.md) | Список значений этого поля. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
