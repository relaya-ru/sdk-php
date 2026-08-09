# # MaxMessageTranscriptionResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**media_id** | **string** | Идентификатор записи или внешнего ресурса. |
**message_id** | **string** | Идентификатор сообщения внутри интеграции. |
**result** | **mixed** |  | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. | [optional]
**status** | **string** | Текущий статус сущности. |
**transcription** | **string** | Значение поля &#x60;transcription&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
