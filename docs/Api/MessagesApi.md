# Relaya\Sdk\MessagesApi

Отправка и история сообщений.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MessagesApi.md#deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Убрать реакцию с сообщения (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationFilesResolve()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationFilesResolve) | **POST** /profiles/{profileId}/integrations/{integration}/files/resolve | Получить ссылки на файл по ID или токену (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationMessages()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Отправить сообщение |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesDelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Удалить сообщение |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesDraft()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesDraft) | **POST** /profiles/{profileId}/integrations/{integration}/messages/draft | Получить черновик Telegram-диалога |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave) | **POST** /profiles/{profileId}/integrations/{integration}/messages/draft/save | Сохранить черновик Telegram-диалога |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesEdit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Изменить сообщение |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesFiles()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesFiles) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Загрузить файл для сообщения |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesForward()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesForward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Переслать сообщение |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesHistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Получить историю сообщений чата |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Поставить реакцию на сообщение (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesRead()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesRead) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Отметить чат как прочитанный (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReply()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Ответить на сообщение |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduled()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesScheduled) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled | Получить отложенные сообщения |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled/delete | Удалить отложенные сообщения |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled/send | Отправить отложенные сообщения сразу |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesSearch()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesSearch) | **POST** /profiles/{profileId}/integrations/{integration}/messages/search | Найти сообщения в Telegram |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesTranscription()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesTranscription) | **POST** /profiles/{profileId}/integrations/{integration}/messages/transcription | Расшифровать медиа MAX |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesTyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Отправить статус набора текста (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesUnread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Пометить чат как непрочитанный (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationPollsClose()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationPollsClose) | **POST** /profiles/{profileId}/integrations/{integration}/polls/close | Закрыть опрос MAX |
| [**postProfilesProfileIdIntegrationsIntegrationPollsUpdates()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationPollsUpdates) | **POST** /profiles/{profileId}/integrations/{integration}/polls/updates | Обновить состояние опроса MAX |
| [**postProfilesProfileIdIntegrationsIntegrationPollsVote()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationPollsVote) | **POST** /profiles/{profileId}/integrations/{integration}/polls/vote | Проголосовать в опросе MAX |
| [**postProfilesProfileIdIntegrationsIntegrationUploadsUrl()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationUploadsUrl) | **POST** /profiles/{profileId}/integrations/{integration}/uploads/url | Получить URL загрузки MAX |
| [**postProfilesProfileIdIntegrationsIntegrationVideosResolve()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationVideosResolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Получить ссылки на видео по ID (MAX) |


## `deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions()`

```php
deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $remove_reaction_huma_input_body): \Relaya\Sdk\Model\RemoveReactionBody
```

Убрать реакцию с сообщения (MAX)

Удаляет ранее поставленную реакцию с сообщения в MAX. Используйте маршрут, когда пользователь снял реакцию или интерфейс синхронизирует актуальное состояние переписки.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$remove_reaction_huma_input_body = {"$schema":"https://localhost:8485/v1/schemas/RemoveReactionHumaInputBody.json","chatId":"chat:1234567890","messageId":"987654321"}; // \Relaya\Sdk\Model\RemoveReactionHumaInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $remove_reaction_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **remove_reaction_huma_input_body** | [**\Relaya\Sdk\Model\RemoveReactionHumaInputBody**](../Model/RemoveReactionHumaInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\RemoveReactionBody**](../Model/RemoveReactionBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationFilesResolve()`

```php
postProfilesProfileIdIntegrationsIntegrationFilesResolve($profile_id, $integration, $max_file_resolve_input_body): \Relaya\Sdk\Model\MaxFileResolveResponseBody
```

Получить ссылки на файл по ID или токену (MAX)

Возвращает ссылки на файл по известному идентификатору или токену MAX. Подходит для повторной выдачи медиа, предпросмотра и отложенной обработки вложений.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_file_resolve_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxFileResolveInputBody.json","audioId":1,"chatId":"chat:1234567890","fileId":1,"messageId":"987654321","payload":{"key":"value"},"photoId":1,"photoToken":"example","token":"rlp_live_1234567890abcdef"}; // \Relaya\Sdk\Model\MaxFileResolveInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationFilesResolve($profile_id, $integration, $max_file_resolve_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationFilesResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_file_resolve_input_body** | [**\Relaya\Sdk\Model\MaxFileResolveInputBody**](../Model/MaxFileResolveInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxFileResolveResponseBody**](../Model/MaxFileResolveResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessages()`

```php
postProfilesProfileIdIntegrationsIntegrationMessages($profile_id, $integration, $send_message_input_body): \Relaya\Sdk\Model\MessageResponseBody
```

Отправить сообщение

Отправляет исходящее сообщение от имени выбранного профиля. Это основной маршрут для обычной переписки, ответов операторов и серверных сценариев с API-токеном профиля.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля. Обычно совпадает с типом профиля: max, maxbot, telegram, telegrambot, whatsapp, email или vk.
$send_message_input_body = {"$schema":"https://localhost:8485/v1/schemas/SendMessageInputBody.json","chatId":"chat:1234567890","clientId":"msg-client-001","mediaFilename":"example","mediaLink":"example","mediaType":"image","message":"Здравствуйте! Это тестовое сообщение Релая.","phone":"+79991234567","poll":{"anonymous":true,"answers":[],"canForward":true,"multiple":true,"quiz":true,"revote":true,"title":"Выберите вариант"},"scheduleAt":"2026-05-03T15:04:05Z","templateBodyParams":["example"],"templateLanguage":"ru","templateName":"example","title":"Файл Релая","typingTime":1500,"userId":"example"}; // \Relaya\Sdk\Model\SendMessageInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessages($profile_id, $integration, $send_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля. Обычно совпадает с типом профиля: max, maxbot, telegram, telegrambot, whatsapp, email или vk. | |
| **send_message_input_body** | [**\Relaya\Sdk\Model\SendMessageInputBody**](../Model/SendMessageInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesDelete()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesDelete($profile_id, $integration, $delete_message_input_body): \Relaya\Sdk\Model\DeleteMessageBody
```

Удалить сообщение

Удаляет сообщение в интеграции. Используйте метод для ручного удаления, отката ошибочной отправки и служебных сценариев модерации.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$delete_message_input_body = {"$schema":"https://localhost:8485/v1/schemas/DeleteMessageInputBody.json","chatId":"chat:1234567890","forMe":true,"messageIds":["example"]}; // \Relaya\Sdk\Model\DeleteMessageInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesDelete($profile_id, $integration, $delete_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **delete_message_input_body** | [**\Relaya\Sdk\Model\DeleteMessageInputBody**](../Model/DeleteMessageInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\DeleteMessageBody**](../Model/DeleteMessageBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesDraft()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesDraft($profile_id, $integration, $request_body): array<string,mixed>
```

Получить черновик Telegram-диалога

Возвращает состояние диалога Telegram вместе с черновиком, если он сохранен у текущего аккаунта. Подходит для экранов compose, где нужно восстановить набранный, но еще не отправленный текст.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesDraft($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave($profile_id, $integration, $request_body): array<string,mixed>
```

Сохранить черновик Telegram-диалога

Сохраняет черновик сообщения в диалоге Telegram. Используйте маршрут для автосохранения compose-формы и восстановления текста между устройствами.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesEdit()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesEdit($profile_id, $integration, $edit_message_input_body): \Relaya\Sdk\Model\MessageResponseBody
```

Изменить сообщение

Редактирует уже отправленное сообщение там, где интеграция это поддерживает. Метод нужен для исправлений, уточнений и синхронизации пользовательских действий из интерфейса Релая.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$edit_message_input_body = {"$schema":"https://localhost:8485/v1/schemas/EditMessageInputBody.json","chatId":"chat:1234567890","message":"Здравствуйте! Это тестовое сообщение Релая.","messageId":"987654321","scheduleAt":"2026-04-17T12:00:00Z"}; // \Relaya\Sdk\Model\EditMessageInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesEdit($profile_id, $integration, $edit_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **edit_message_input_body** | [**\Relaya\Sdk\Model\EditMessageInputBody**](../Model/EditMessageInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesFiles()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesFiles($profile_id, $integration)
```

Загрузить файл для сообщения

Принимает файл и отправляет его через профиль в выбранную интеграцию. Обычно этот маршрут используют из формы вложений перед финальной отправкой медиа или документа.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesFiles($profile_id, $integration);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesForward()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesForward($profile_id, $integration, $forward_message_input_body): \Relaya\Sdk\Model\MessageResponseBody
```

Переслать сообщение

Пересылает сообщение из одного чата в другой. Это удобно для служебной маршрутизации, эскалаций и ручной передачи переписки между каналами.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$forward_message_input_body = {"$schema":"https://localhost:8485/v1/schemas/ForwardMessageInputBody.json","chatId":"chat:1234567890","forwardChatId":"chat:9988776655","forwardMessageId":"123456789"}; // \Relaya\Sdk\Model\ForwardMessageInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesForward($profile_id, $integration, $forward_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesForward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **forward_message_input_body** | [**\Relaya\Sdk\Model\ForwardMessageInputBody**](../Model/ForwardMessageInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesHistory()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesHistory($profile_id, $integration, $chat_history_input_body, $limit, $cursor, $date, $order, $mark_all, $message_ids): array<string,mixed>
```

Получить историю сообщений чата

Возвращает историю конкретного чата через профиль и интеграцию. Подходит для ленты переписки, подгрузки более старых сообщений и фоновой синхронизации истории.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$chat_history_input_body = {"$schema":"https://localhost:8485/v1/schemas/ChatHistoryInputBody.json","chatId":"chat:1234567890","cursor":"eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9","date":"2026-04-17","limit":50,"markAll":true,"messageIds":["example"],"order":"desc"}; // \Relaya\Sdk\Model\ChatHistoryInputBody | Параметры JSON-запроса.
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.
$date = 2026-04-17; // string | Параметр `date` из `query`.
$order = desc; // string | Направление сортировки.
$mark_all = True; // bool | Параметр `markAll` из `query`.
$message_ids = 'message_ids_example'; // string | CSV-список идентификаторов сообщений.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesHistory($profile_id, $integration, $chat_history_input_body, $limit, $cursor, $date, $order, $mark_all, $message_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **chat_history_input_body** | [**\Relaya\Sdk\Model\ChatHistoryInputBody**](../Model/ChatHistoryInputBody.md)| Параметры JSON-запроса. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |
| **date** | **string**| Параметр &#x60;date&#x60; из &#x60;query&#x60;. | [optional] |
| **order** | **string**| Направление сортировки. | [optional] |
| **mark_all** | **bool**| Параметр &#x60;markAll&#x60; из &#x60;query&#x60;. | [optional] |
| **message_ids** | **string**| CSV-список идентификаторов сообщений. | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesReactions()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $send_reaction_huma_input_body): \Relaya\Sdk\Model\SendReactionBody
```

Поставить реакцию на сообщение (MAX)

Добавляет реакцию к сообщению в MAX. Метод полезен для интерфейсов, где нужно поддержать быстрые эмодзи-ответы и действия над перепиской без текстового сообщения.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$send_reaction_huma_input_body = {"$schema":"https://localhost:8485/v1/schemas/SendReactionHumaInputBody.json","chatId":"chat:1234567890","messageId":"987654321","reaction":{"id":"example","reactionType":"example"}}; // \Relaya\Sdk\Model\SendReactionHumaInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $send_reaction_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **send_reaction_huma_input_body** | [**\Relaya\Sdk\Model\SendReactionHumaInputBody**](../Model/SendReactionHumaInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SendReactionBody**](../Model/SendReactionBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesRead()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesRead($profile_id, $integration, $read_chat_huma_input_body): \Relaya\Sdk\Model\ReadChatBody
```

Отметить чат как прочитанный (MAX)

Передает в MAX отметку прочтения для чата или сообщения. Это удобно для синхронизации статуса прочтения между Релая и клиентом MAX.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$read_chat_huma_input_body = {"$schema":"https://localhost:8485/v1/schemas/ReadChatHumaInputBody.json","chatId":"chat:1234567890","mark":1,"messageId":"987654321","type":"message.sent"}; // \Relaya\Sdk\Model\ReadChatHumaInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesRead($profile_id, $integration, $read_chat_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **read_chat_huma_input_body** | [**\Relaya\Sdk\Model\ReadChatHumaInputBody**](../Model/ReadChatHumaInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ReadChatBody**](../Model/ReadChatBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesReply()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesReply($profile_id, $integration, $send_reply_message_input_body): \Relaya\Sdk\Model\MessageResponseBody
```

Ответить на сообщение

Отправляет ответ на конкретное сообщение в диалоге. Подходит для интерфейсов, где нужно явно сохранять контекст ответа внутри переписки.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$send_reply_message_input_body = {"$schema":"https://localhost:8485/v1/schemas/SendReplyMessageInputBody.json","chatId":"chat:1234567890","clientId":"example","message":"Здравствуйте! Это тестовое сообщение Релая.","messageId":"987654321"}; // \Relaya\Sdk\Model\SendReplyMessageInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesReply($profile_id, $integration, $send_reply_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesReply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **send_reply_message_input_body** | [**\Relaya\Sdk\Model\SendReplyMessageInputBody**](../Model/SendReplyMessageInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesScheduled()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesScheduled($profile_id, $integration, $request_body): array<string,mixed>
```

Получить отложенные сообщения

Возвращает сообщения, запланированные к отправке в поддерживаемой интеграции. Для Telegram запрос проксируется в MTProto, для MAX personal возвращаются локально сохраненные отложенные сообщения.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesScheduled($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesScheduled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete($profile_id, $integration, $request_body): array<string,mixed>
```

Удалить отложенные сообщения

Удаляет выбранные отложенные сообщения до их фактической отправки. Удобно для отмены очереди или корректировки запланированной коммуникации.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend($profile_id, $integration, $request_body): array<string,mixed>
```

Отправить отложенные сообщения сразу

Принудительно отправляет выбранные отложенные сообщения без ожидания их исходного времени. Метод подходит для ручного ускорения публикации и восстановления после изменения плана отправки.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesSearch()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesSearch($profile_id, $integration, $request_body): array<string,mixed>
```

Найти сообщения в Telegram

Выполняет поиск по сообщениям Telegram через MTProto: в конкретном чате или глобально по доступным диалогам. Метод подходит для поиска по тексту, фильтру типа медиа и постраничной навигации по результатам.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesSearch($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)| Параметры JSON-запроса. | |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesTranscription()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesTranscription($profile_id, $integration, $max_message_transcription_input_body): \Relaya\Sdk\Model\MaxMessageTranscriptionResponseBody
```

Расшифровать медиа MAX

Запрашивает нативную расшифровку голосового, аудио или видео сообщения MAX по `chatId`, `messageId` и `mediaId`. Успешный результат кешируется в raw-данных inbox сообщения.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_message_transcription_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxMessageTranscriptionInputBody.json","chatId":"chat:1234567890","mediaId":"example","messageId":"987654321"}; // \Relaya\Sdk\Model\MaxMessageTranscriptionInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesTranscription($profile_id, $integration, $max_message_transcription_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesTranscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_message_transcription_input_body** | [**\Relaya\Sdk\Model\MaxMessageTranscriptionInputBody**](../Model/MaxMessageTranscriptionInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxMessageTranscriptionResponseBody**](../Model/MaxMessageTranscriptionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesTyping()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesTyping($profile_id, $integration, $send_typing_input_body): \Relaya\Sdk\Model\SendTypingResponseBody
```

Отправить статус набора текста (MAX)

Отправляет в MAX индикатор набора текста, записи голосового, выбора файла и другие служебные статусы. Обычно его вызывают перед отправкой сообщения, чтобы собеседник видел естественную активность.  Важно: тип статуса задается полем `typingType`.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля. Endpoint поддерживается только для MAX, поэтому здесь должен быть max.
$send_typing_input_body = {"$schema":"https://localhost:8485/v1/schemas/SendTypingInputBody.json","chatId":"chat:1234567890","typingType":"text"}; // \Relaya\Sdk\Model\SendTypingInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesTyping($profile_id, $integration, $send_typing_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesTyping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля. Endpoint поддерживается только для MAX, поэтому здесь должен быть max. | |
| **send_typing_input_body** | [**\Relaya\Sdk\Model\SendTypingInputBody**](../Model/SendTypingInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SendTypingResponseBody**](../Model/SendTypingResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesUnread()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesUnread($profile_id, $integration, $read_chat_huma_input_body): \Relaya\Sdk\Model\ReadChatBody
```

Пометить чат как непрочитанный (MAX)

Возвращает чату статус непрочитанного в MAX. Обычно это нужно в операторских интерфейсах, где диалог сознательно откладывают на потом.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$read_chat_huma_input_body = {$schema=https://localhost:8485/v1/schemas/ReadChatHumaInputBody.json, chatId=chat:1234567890, mark=1, messageId=987654321, type=message.sent}; // \Relaya\Sdk\Model\ReadChatHumaInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesUnread($profile_id, $integration, $read_chat_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesUnread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **read_chat_huma_input_body** | [**\Relaya\Sdk\Model\ReadChatHumaInputBody**](../Model/ReadChatHumaInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ReadChatBody**](../Model/ReadChatBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationPollsClose()`

```php
postProfilesProfileIdIntegrationsIntegrationPollsClose($profile_id, $integration, $max_poll_close_input_body): \Relaya\Sdk\Model\MaxGenericActionResponseBody
```

Закрыть опрос MAX

Закрывает опрос MAX через редактирование сохраненного сообщения и установку флага closed в poll attachment. Требуется наличие raw-данных сообщения в inbox.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_poll_close_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxPollCloseInputBody.json","chatId":"chat:1234567890","messageId":"987654321"}; // \Relaya\Sdk\Model\MaxPollCloseInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationPollsClose($profile_id, $integration, $max_poll_close_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationPollsClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_poll_close_input_body** | [**\Relaya\Sdk\Model\MaxPollCloseInputBody**](../Model/MaxPollCloseInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxGenericActionResponseBody**](../Model/MaxGenericActionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationPollsUpdates()`

```php
postProfilesProfileIdIntegrationsIntegrationPollsUpdates($profile_id, $integration, $max_poll_update_input_body): \Relaya\Sdk\Model\MaxGenericActionResponseBody
```

Обновить состояние опроса MAX

Запрашивает актуальное состояние одного или нескольких опросов MAX. Метод полезен после голосования или при ручной синхронизации результатов в интерфейсе inbox.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_poll_update_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxPollUpdateInputBody.json","chatId":"chat:1234567890","polls":[{"key":"value"}]}; // \Relaya\Sdk\Model\MaxPollUpdateInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationPollsUpdates($profile_id, $integration, $max_poll_update_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationPollsUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_poll_update_input_body** | [**\Relaya\Sdk\Model\MaxPollUpdateInputBody**](../Model/MaxPollUpdateInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxGenericActionResponseBody**](../Model/MaxGenericActionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationPollsVote()`

```php
postProfilesProfileIdIntegrationsIntegrationPollsVote($profile_id, $integration, $max_poll_vote_input_body): \Relaya\Sdk\Model\MaxGenericActionResponseBody
```

Проголосовать в опросе MAX

Отправляет голос пользователя в опросе MAX. Передайте идентификатор чата, сообщения, опроса и список выбранных вариантов.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_poll_vote_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxPollVoteInputBody.json","answerIds":["example"],"chatId":"chat:1234567890","messageId":"987654321","pollId":"example"}; // \Relaya\Sdk\Model\MaxPollVoteInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationPollsVote($profile_id, $integration, $max_poll_vote_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationPollsVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_poll_vote_input_body** | [**\Relaya\Sdk\Model\MaxPollVoteInputBody**](../Model/MaxPollVoteInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxGenericActionResponseBody**](../Model/MaxGenericActionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationUploadsUrl()`

```php
postProfilesProfileIdIntegrationsIntegrationUploadsUrl($profile_id, $integration, $max_upload_url_input_body): \Relaya\Sdk\Model\MaxUploadURLResponseBody
```

Получить URL загрузки MAX

Запрашивает upload URL у MAX для фото, видео или файла. Для `type=photo` используется opcode 80, для `video` — 82, для `file` — 87. Полученный `url` используется клиентом для последующей загрузки бинарного содержимого напрямую в MAX storage.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_upload_url_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxUploadURLInputBody.json","count":3,"payload":{"key":"value"},"profile":true,"type":"message.sent"}; // \Relaya\Sdk\Model\MaxUploadURLInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationUploadsUrl($profile_id, $integration, $max_upload_url_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationUploadsUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_upload_url_input_body** | [**\Relaya\Sdk\Model\MaxUploadURLInputBody**](../Model/MaxUploadURLInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxUploadURLResponseBody**](../Model/MaxUploadURLResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationVideosResolve()`

```php
postProfilesProfileIdIntegrationsIntegrationVideosResolve($profile_id, $integration, $max_video_resolve_input_body): \Relaya\Sdk\Model\MaxVideoResolveResponseBody
```

Получить ссылки на видео по ID (MAX)

Возвращает ссылки и данные по видео, если у вас уже есть его ID. Метод полезен для предпросмотра, скачивания или повторного использования медиа без повторного поиска по истории.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_video_resolve_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxVideoResolveInputBody.json","chatId":"chat:1234567890","messageId":"987654321","videoId":1}; // \Relaya\Sdk\Model\MaxVideoResolveInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationVideosResolve($profile_id, $integration, $max_video_resolve_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationVideosResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_video_resolve_input_body** | [**\Relaya\Sdk\Model\MaxVideoResolveInputBody**](../Model/MaxVideoResolveInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxVideoResolveResponseBody**](../Model/MaxVideoResolveResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
