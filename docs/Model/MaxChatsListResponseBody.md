# # MaxChatsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_marker** | **int** | Сырой MAX chatMarker из первичной синхронизации списка чатов. | [optional]
**chats** | **array<string,mixed>[]** | Список чатов. |
**chats_sync** | **int** | Состояние синхронизации чатов. | [optional]
**contacts_sync** | **int** | Состояние синхронизации контактов. | [optional]
**drafts_sync** | **int** | Состояние синхронизации черновиков. | [optional]
**marker** | **int** | Курсор MAX для следующей пачки списка чатов или результатов поиска. | [optional]
**presence_sync** | **int** | Состояние синхронизации статусов присутствия. | [optional]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |
**total** | **int** | Общее количество элементов без учета пагинации. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
