# # ProfilesBulkOutputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**action** | **string** | Код действия, которое нужно выполнить. |
**balance_after** | **int** | Баланс после выполнения операции. | [optional]
**failed** | **int** | Значение поля &#x60;failed&#x60;. |
**items** | [**\Relaya\Sdk\Model\ProfilesBulkItemResult[]**](ProfilesBulkItemResult.md) | Список элементов текущего ответа. |
**matched** | **int** | Значение поля &#x60;matched&#x60;. | [optional]
**ok** | **int** | Значение поля &#x60;ok&#x60;. |
**requested** | **int** | Значение поля &#x60;requested&#x60;. |
**truncated** | **bool** | Признак &#x60;truncated&#x60; (true/false). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
