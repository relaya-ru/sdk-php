# # DeleteMessageBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**deleted** | **bool** | Показывает, была ли сущность успешно удалена. |
**for_me** | **bool** | Показывает, нужно ли удалить сообщение только у текущего пользователя. | [optional]
**message_ids** | **string[]** | Список идентификаторов сообщений внутри интеграции. |
**result** | **mixed** |  | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
