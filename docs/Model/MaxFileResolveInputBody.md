# # MaxFileResolveInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**audio_id** | **int** | Идентификатор записи или внешнего ресурса. | [optional]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. | [optional]
**file_id** | **int** | Идентификатор записи или внешнего ресурса. | [optional]
**message_id** | **string** | Идентификатор сообщения внутри интеграции. | [optional]
**payload** | **array<string,mixed>** | Полезная нагрузка события без фиксированной схемы. | [optional]
**photo_id** | **int** | Идентификатор фотографии или медиа-объекта. | [optional]
**photo_token** | **string** | Токен фотографии или вложения во внешней интеграции. | [optional]
**token** | **string** | Токен авторизации, приглашения или API-доступа. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
