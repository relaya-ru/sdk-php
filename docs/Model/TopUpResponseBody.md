# # TopUpResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**amount_cents** | **int** | Сумма в копейках или минимальных единицах валюты. |
**applied_promotion** | [**\Relaya\Sdk\Model\AppliedPromotionSummary**](AppliedPromotionSummary.md) | Сведения о примененной акции или промокоде. | [optional]
**base_amount_cents** | **int** | Базовая сумма до скидок в копейках или минимальных единицах валюты. | [optional]
**bonus_amount_cents** | **int** | Сумма бонуса в копейках или минимальных единицах валюты. | [optional]
**currency** | **string** | Код валюты в формате ISO 4217. |
**discount_amount_cents** | **int** | Размер скидки в копейках или минимальных единицах валюты. | [optional]
**expires_at** | **\DateTime** | Время, после которого значение или процесс перестает быть актуальным. | [optional]
**final_amount_cents** | **int** | Итоговая сумма к оплате в копейках или минимальных единицах валюты. | [optional]
**payment_url** | **string** | Ссылка на страницу оплаты у провайдера. | [optional]
**status** | **string** | Текущий статус сущности. |
**topup_id** | **string** | Идентификатор записи или внешнего ресурса. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
