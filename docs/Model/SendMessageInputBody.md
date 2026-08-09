# # SendMessageInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор чата в интеграции. Для MAX можно передавать plain numeric ID или значение вида chat:1234567890. | [optional]
**client_id** | **string** | Клиентский идентификатор для идемпотентной отправки и безопасных повторов запроса. | [optional]
**media_filename** | **string** | Значение поля &#x60;mediaFilename&#x60;. | [optional]
**media_link** | **string** | Значение поля &#x60;mediaLink&#x60;. | [optional]
**media_type** | **string** | Значение поля &#x60;mediaType&#x60;. | [optional]
**message** | **string** | Текст исходящего сообщения. Для MAX можно отправить poll-only сообщение без текста. | [optional]
**phone** | **string** | Телефон получателя в формате E.164. Для некоторых интеграций работает только если контакт уже известен профилю. | [optional]
**poll** | [**\Relaya\Sdk\Model\Poll**](Poll.md) | Опрос MAX. Поддерживается только интеграцией max. | [optional]
**schedule_at** | **\DateTime** | Время отложенной отправки MAX в RFC3339. Поддерживается только интеграцией max. | [optional]
**template_body_params** | **string[]** | Список значений этого поля. | [optional]
**template_language** | **string** | Значение поля &#x60;templateLanguage&#x60;. | [optional]
**template_name** | **string** | Значение поля &#x60;templateName&#x60;. | [optional]
**title** | **string** | Заголовок сообщения или вложения, если его поддерживает интеграция. | [optional]
**typing_time** | **int** | Опциональная имитация набора текста перед отправкой сообщения в миллисекундах. Допустимый диапазон: 1000-20000. | [optional]
**user_id** | **string** | Идентификатор пользователя. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
