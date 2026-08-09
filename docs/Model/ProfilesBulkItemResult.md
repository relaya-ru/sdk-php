# # ProfilesBulkItemResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**balance_after** | **int** | Баланс после выполнения операции. | [optional]
**error** | [**\Relaya\Sdk\Model\ProfilesBulkItemError**](ProfilesBulkItemError.md) | Сведения об ошибке, если операция завершилась неуспешно. | [optional]
**index** | **int** | Значение поля &#x60;index&#x60;. |
**ok** | **bool** | Признак &#x60;ok&#x60; (true/false). |
**paid_until** | **\DateTime** | Дата, до которой профиль или модуль оплачен. | [optional]
**price_cents** | **int** | Цена в копейках или минимальных единицах валюты. | [optional]
**profile** | [**\Relaya\Sdk\Model\ProfileResponse**](ProfileResponse.md) | Карточка профиля. | [optional]
**profile_id** | **string** | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
