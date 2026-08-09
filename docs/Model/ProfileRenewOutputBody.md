# # ProfileRenewOutputBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**applied_promotion** | [**\Relaya\Sdk\Model\AppliedPromotionSummary**](AppliedPromotionSummary.md) | Сведения о примененной акции или промокоде. | [optional]
**auto_renew** | **bool** | Показывает, включено ли автопродление. |
**balance_after** | **int** | Баланс после выполнения операции. | [optional]
**base_amount_cents** | **int** | Базовая сумма до скидок в копейках или минимальных единицах валюты. | [optional]
**discount_amount_cents** | **int** | Размер скидки в копейках или минимальных единицах валюты. | [optional]
**final_amount_cents** | **int** | Итоговая сумма к оплате в копейках или минимальных единицах валюты. | [optional]
**is_active** | **bool** | Показывает, активна ли сущность. |
**paid_until** | **\DateTime** | Дата, до которой профиль или модуль оплачен. |
**price_cents** | **int** | Цена в копейках или минимальных единицах валюты. |
**profile_id** | **string** | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
