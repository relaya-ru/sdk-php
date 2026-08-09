# # MaxChannelInviteResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat** | **array<string,mixed>** | Объект с вложенными полями ответа или запроса. | [optional]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**phone** | **string** | Телефон в международном формате E.164. | [optional]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |
**show_history** | **bool** | Показывает новым участникам историю сообщений после приглашения. |
**user_ids** | **int[]** | Список идентификаторов пользователей. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
