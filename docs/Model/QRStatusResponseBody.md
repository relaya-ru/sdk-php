# # QRStatusResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**last_error** | **string** | Последняя зафиксированная ошибка. | [optional]
**listener_started** | **bool** | Показывает, запущен ли слушатель событий. | [optional]
**password_needed** | **bool** | Показывает, нужен ли пароль на следующем шаге. | [optional]
**payload** | **array<string,mixed>** | Полезная нагрузка события без фиксированной схемы. | [optional]
**state** | **string** | Текущее состояние процесса или сущности. | [optional]
**state_profile** | **string** | Текущее состояние интеграционного профиля. | [optional]
**status** | **string** | Текущий статус сущности. | [optional]
**track_id** | **string** | Идентификатор асинхронного процесса или шага авторизации. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
