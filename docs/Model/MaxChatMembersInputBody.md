# # MaxChatMembersInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. |
**count** | **int** | Количество элементов или событий. | [optional]
**marker** | **int** | Курсор MAX для следующей пачки списка чатов или результатов поиска. | [optional]
**query** | **string** | Поисковая строка, которая была использована для фильтрации. | [optional]
**type** | **string** | Код типа сущности или действия. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
