# # ProfileOverviewBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**auth_state** | **string** | Текущее состояние шага авторизации. | [optional]
**avatar** | **string** | Данные аватара или ссылка на изображение. | [optional]
**bot** | **array<string,mixed>** | Объект с вложенными полями ответа или запроса. | [optional]
**chat_id** | **string** | Идентификатор адресата в интеграции. Для MAX Bot используйте &#x60;user:1234567890&#x60; для личного диалога или &#x60;chat:1234567890&#x60; для чата. | [optional]
**from** | **string** | Начало временного диапазона. | [optional]
**has_group** | **bool** | Показывает, привязана ли группа VK. | [optional]
**has_ig_user_id** | **bool** | Идентификатор записи или внешнего ресурса. | [optional]
**has_page_id** | **bool** | Идентификатор записи или внешнего ресурса. | [optional]
**has_password** | **bool** | Показывает, сохранен ли пароль в настройках. | [optional]
**has_phone_number_id** | **bool** | Идентификатор записи или внешнего ресурса. | [optional]
**has_secret** | **bool** | Показывает, сохранен ли секретный ключ. | [optional]
**has_session** | **bool** | Показывает, есть ли активная сессия. | [optional]
**has_token** | **bool** | Показывает, сохранен ли токен. | [optional]
**has_vk_o_auth_token** | **bool** | Показывает, сохранен ли OAuth-токен VK. | [optional]
**has_waba_business_id** | **bool** | Идентификатор записи или внешнего ресурса. | [optional]
**has_webhook** | **bool** | Показывает, настроен ли хотя бы один webhook. | [optional]
**history_sync_progress** | **int** | Прогресс синхронизации истории. | [optional]
**host** | **string** | Хост внешнего сервиса или SMTP-сервера. | [optional]
**listener_started** | **bool** | Показывает, запущен ли слушатель событий. | [optional]
**phone** | **string** | Телефон в международном формате E.164. | [optional]
**port** | **int** | Сетевой порт сервиса. | [optional]
**profile** | **mixed** |  | [optional]
**sender** | **string** | Данные отправителя. | [optional]
**session** | **string** | Состояние или payload активной сессии. | [optional]
**state_profile** | **string** | Текущее состояние интеграционного профиля. |
**suspended_until** | **int** | Время, до которого действует приостановка. | [optional]
**transport** | **string** | Транспорт или канал доставки. | [optional]
**user** | **array<string,mixed>** | Данные пользователя или учетной записи. | [optional]
**username** | **string** | Имя пользователя или логин во внешнем сервисе. | [optional]
**vk_group_id** | **string** | Идентификатор записи или внешнего ресурса. | [optional]
**webhook_connected** | **bool** | Показывает, подтверждена ли входящая webhook-подписка интеграции. | [optional]
**webhook_path** | **string** | Путь API для управления входящим webhook интеграции профиля. | [optional]
**webhook_url** | **string** | Публичный URL, на который внешний провайдер отправляет входящие события профиля. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
