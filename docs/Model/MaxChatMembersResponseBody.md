# # MaxChatMembersResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**marker** | **int** | Курсор MAX для следующей пачки списка чатов или результатов поиска. | [optional]
**members** | **array<string,mixed>[]** | Список участников чата или канала. |
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |
**total** | **int** | Общее количество элементов без учета пагинации. |
**type** | **string** | Код типа сущности или действия. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
