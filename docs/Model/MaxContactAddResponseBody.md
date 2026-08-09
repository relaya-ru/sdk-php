# # MaxContactAddResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**contact** | [**\Relaya\Sdk\Model\MaxContact**](MaxContact.md) | Карточка контакта, если внешняя интеграция вернула ее в ответе. | [optional]
**contact_id** | **int** | Идентификатор записи или внешнего ресурса. |
**display_name** | **string** | Отображаемое имя сущности в интерфейсе. | [optional]
**phone** | **string** | Телефон в международном формате E.164. | [optional]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
