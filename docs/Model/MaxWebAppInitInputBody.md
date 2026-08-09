# # MaxWebAppInitInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**auth_date** | **int** | Значение поля &#x60;authDate&#x60;. | [optional]
**bot_id** | **string** | Идентификатор бота MAX. |
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**hash** | **string** | Хэш или ревизия набора настроек. | [optional]
**payload** | **array<string,mixed>** | Полезная нагрузка события без фиксированной схемы. | [optional]
**phone** | **string** | Телефон в международном формате E.164. | [optional]
**start_param** | **string** | Стартовый параметр bot web app. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
