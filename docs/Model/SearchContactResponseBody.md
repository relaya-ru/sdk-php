# # SearchContactResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**cached** | **bool** | Показывает, использовались ли локально сохраненные данные. | [optional]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. | [optional]
**contact** | **mixed** |  | [optional]
**contact_id** | **int** | Идентификатор записи или внешнего ресурса. | [optional]
**display_name** | **string** | Отображаемое имя сущности в интерфейсе. | [optional]
**exists** | **bool** | Показывает, существует ли адресат во внешнем сервисе. |
**found** | **bool** | Показывает, удалось ли найти совпадение. |
**integration** | **string** | Код интеграции профиля. |
**lookup_by** | **string** | Способ поиска адресата или сущности. | [optional]
**message** | **string** | Текст сообщения или человекочитаемое описание результата. | [optional]
**phone** | **string** | Телефон в международном формате E.164. | [optional]
**reachable** | **bool** | Показывает, можно ли написать адресату сразу после поиска. | [optional]
**supported** | **bool** | Показывает, поддерживается ли этот режим текущей интеграцией. |
**user_id** | **string** | Идентификатор пользователя. | [optional]
**username** | **string** | Имя пользователя или логин во внешнем сервисе. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
