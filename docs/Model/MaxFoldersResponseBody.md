# # MaxFoldersResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**folder_sync** | **int** | Состояние синхронизации папок. | [optional]
**folders** | [**\Relaya\Sdk\Model\MaxFolder[]**](MaxFolder.md) | Список папок. | [optional]
**folders_order** | **string[]** | Порядок папок после пользовательской сортировки. | [optional]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
