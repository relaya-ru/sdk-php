# # TransactionItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | Сумма в копейках или минимальных единицах валюты. |
**balance_after** | **int** | Баланс после выполнения операции. |
**balance_before** | **int** | Баланс до выполнения операции. |
**created** | **\DateTime** | Время создания сущности в UTC. |
**description** | **string** | Подробное описание сущности или действия. | [optional]
**id** | **int** | Идентификатор сущности. |
**integration_type** | **string** | Тип интеграции профиля. | [optional]
**profile_id** | **int** | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | [optional]
**type** | **string** | Код типа сущности или действия. |
**user_id** | **int** | Идентификатор пользователя. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
