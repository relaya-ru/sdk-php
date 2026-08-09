# # ProfileResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**access_role** | **string** | Значение поля &#x60;accessRole&#x60;. | [optional]
**account_label** | **string** | Значение поля &#x60;accountLabel&#x60;. | [optional]
**account_phone** | **string** | Значение поля &#x60;accountPhone&#x60;. | [optional]
**applied_promotion** | [**\Relaya\Sdk\Model\AppliedPromotionSummary**](AppliedPromotionSummary.md) | Сведения о примененной акции или промокоде. | [optional]
**auto_renew** | **bool** | Показывает, включено ли автопродление. |
**balance_after** | **int** | Баланс после выполнения операции. | [optional]
**base_amount_cents** | **int** | Базовая сумма до скидок в копейках или минимальных единицах валюты. | [optional]
**can_manage** | **bool** | Признак &#x60;canManage&#x60; (true/false). |
**chats_active24h** | **int** | Значение поля &#x60;chatsActive24h&#x60;. | [optional]
**created** | **\DateTime** | Время создания сущности в UTC. |
**device_id** | **string** | Идентификатор устройства или runtime-сессии профиля. |
**discount_amount_cents** | **int** | Размер скидки в копейках или минимальных единицах валюты. | [optional]
**final_amount_cents** | **int** | Итоговая сумма к оплате в копейках или минимальных единицах валюты. | [optional]
**id** | **int** | Идентификатор сущности. | [optional]
**integration_type** | **string** | Тип интеграции профиля. |
**is_active** | **bool** | Показывает, активна ли сущность. |
**is_authorized** | **bool** | Показывает, завершена ли внешняя авторизация. |
**last_message_at** | **\DateTime** | Время в UTC. | [optional]
**name** | **string** | Человекочитаемое имя сущности. |
**overview** | [**\Relaya\Sdk\Model\ProfileOverviewBody**](ProfileOverviewBody.md) | Сводные данные по профилю или интеграции. | [optional]
**ownership** | **string** | Значение поля &#x60;ownership&#x60;. | [optional]
**paid_until** | **\DateTime** | Дата, до которой профиль или модуль оплачен. |
**plan_tier** | **string** | Уровень тарифа или плана. |
**price_cents** | **int** | Цена в копейках или минимальных единицах валюты. |
**profile_id** | **string** | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. |
**readiness** | [**\Relaya\Sdk\Model\ProfileReadinessBody**](ProfileReadinessBody.md) | Значение поля &#x60;readiness&#x60;. | [optional]
**shared** | **bool** | Признак &#x60;shared&#x60; (true/false). | [optional]
**webhook_path** | **string** | Путь API для управления входящим webhook интеграции профиля. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
