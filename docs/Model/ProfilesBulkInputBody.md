# # ProfilesBulkInputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**action** | **string** | Код действия, которое нужно выполнить. |
**count** | **int** | Количество элементов или событий. | [optional]
**integration_type** | **string** | Тип интеграции профиля. | [optional]
**match** | [**\Relaya\Sdk\Model\ProfilesBulkMatchFilter**](ProfilesBulkMatchFilter.md) | Значение поля &#x60;match&#x60;. | [optional]
**name** | **string** | Человекочитаемое имя сущности. | [optional]
**plan_tier** | **string** | Уровень тарифа или плана. | [optional]
**profile_ids** | **string[]** | Список профилей, к которым относится токен или операция. | [optional]
**promo_code** | **string** | Промокод, который применяется к оплате или тарифу. | [optional]
**unique_names** | **bool** | Признак &#x60;uniqueNames&#x60; (true/false). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
