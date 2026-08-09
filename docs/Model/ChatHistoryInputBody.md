# # ChatHistoryInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**cursor** | **string** | Курсор пагинации для следующей страницы. |
**date** | **string** | Дата в формате &#x60;YYYY-MM-DD&#x60;. |
**limit** | **int** | Максимальное количество элементов в ответе. |
**mark_all** | **bool** | Показывает, нужно ли применить действие ко всем элементам. |
**message_ids** | **string[]** | Список идентификаторов сообщений внутри интеграции. |
**order** | **string** | Направление сортировки. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
