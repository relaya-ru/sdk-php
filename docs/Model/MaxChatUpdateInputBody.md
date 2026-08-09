# # MaxChatUpdateInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**change_owner_id** | **int** | Идентификатор пользователя, которому нужно передать владение чатом. | [optional]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**description** | **string** | Подробное описание сущности или действия. | [optional]
**notify_pin** | **bool** | Показывает, нужно ли уведомить участников при закреплении сообщения. | [optional]
**options** | **array<string,mixed>** | Список опций или флагов. | [optional]
**payload** | **array<string,mixed>** | Полезная нагрузка события без фиксированной схемы. | [optional]
**photo_token** | **string** | Токен фотографии или вложения во внешней интеграции. | [optional]
**pin_message_id** | **string** | Идентификатор сообщения, которое нужно закрепить. | [optional]
**revoke_private_link** | **bool** | Показывает, нужно ли отозвать или пересоздать приватную ссылку приглашения. | [optional]
**theme** | **string** | Название или тема чата в payload MAX. | [optional]
**title** | **string** | Короткий заголовок или имя сущности. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
