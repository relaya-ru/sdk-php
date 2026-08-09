# # ErrorModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**detail** | **string** | Подробности ошибки или текущего состояния. | [optional]
**errors** | [**\Relaya\Sdk\Model\ErrorDetail[]**](ErrorDetail.md) | Список значений этого поля. | [optional]
**instance** | **string** | URI или идентификатор конкретного экземпляра ошибки. | [optional]
**status** | **int** | Текущий статус сущности. | [optional]
**title** | **string** | Короткий заголовок или имя сущности. | [optional]
**type** | **string** | Код типа сущности или действия. | [optional] [default to 'about:blank']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
