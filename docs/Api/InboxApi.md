# Relaya\Sdk\InboxApi

Диалоги и действия оператора.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfilesProfileIdIntegrationsIntegrationInboxConversations()**](InboxApi.md#getProfilesProfileIdIntegrationsIntegrationInboxConversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | Получить диалоги inbox профиля |
| [**getProfilesProfileIdIntegrationsIntegrationInboxMessages()**](InboxApi.md#getProfilesProfileIdIntegrationsIntegrationInboxMessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | Получить сообщения inbox профиля |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Изменить состояние диалога inbox |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Обновить аватар диалога inbox |
| [**postProfilesProfileIdIntegrationsIntegrationInboxRead()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxRead) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Отметить диалог inbox как прочитанный |


## `getProfilesProfileIdIntegrationsIntegrationInboxConversations()`

```php
getProfilesProfileIdIntegrationsIntegrationInboxConversations($profile_id, $integration, $limit, $cursor): \Relaya\Sdk\Model\InboxConversationsListResponseBody
```

Получить диалоги inbox профиля

Возвращает диалоги единого inbox в разрезе конкретного профиля и интеграции. Этот маршрут удобен, когда нужно показать оператору только одну линию общения, а не все профили сразу.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationInboxConversations($profile_id, $integration, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getProfilesProfileIdIntegrationsIntegrationInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 50] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\InboxConversationsListResponseBody**](../Model/InboxConversationsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationInboxMessages()`

```php
getProfilesProfileIdIntegrationsIntegrationInboxMessages($profile_id, $integration, $chat_id, $limit, $cursor): \Relaya\Sdk\Model\InboxMessagesListResponseBody
```

Получить сообщения inbox профиля

Возвращает сообщения из единого inbox для выбранного диалога, профиля и интеграции. Подходит для ленты переписки и подгрузки истории внутри операторского интерфейса.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$chat_id = chat:1234567890; // string | Параметр `chatId` из `query`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationInboxMessages($profile_id, $integration, $chat_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getProfilesProfileIdIntegrationsIntegrationInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **chat_id** | **string**| Параметр &#x60;chatId&#x60; из &#x60;query&#x60;. | [optional] |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 50] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\InboxMessagesListResponseBody**](../Model/InboxMessagesListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction()`

```php
postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction($profile_id, $integration, $conversation_action_input_body): \Relaya\Sdk\Model\ConversationActionResponseBody
```

Изменить состояние диалога inbox

Выполняет действие над диалогом inbox: например архивирование или изменение флага. Подходит для операторских интерфейсов с быстрыми действиями по карточке диалога.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$conversation_action_input_body = {"$schema":"https://localhost:8485/v1/schemas/ConversationActionInputBody.json","action":"archive","chatId":"chat:1234567890"}; // \Relaya\Sdk\Model\ConversationActionInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction($profile_id, $integration, $conversation_action_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **conversation_action_input_body** | [**\Relaya\Sdk\Model\ConversationActionInputBody**](../Model/ConversationActionInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ConversationActionResponseBody**](../Model/ConversationActionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar()`

```php
postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar($profile_id, $integration, $conversation_avatar_input_body): \Relaya\Sdk\Model\ConversationAvatarResponseBody
```

Обновить аватар диалога inbox

Сохраняет новый аватар для диалога в едином inbox. Обычно этот маршрут используют в CRM-подобных интерфейсах, где оператору важно вручную оформить карточку диалога.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$conversation_avatar_input_body = {"$schema":"https://localhost:8485/v1/schemas/ConversationAvatarInputBody.json","avatarUrl":"https://cdn.example.com/avatar.png","chatId":"chat:1234567890"}; // \Relaya\Sdk\Model\ConversationAvatarInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar($profile_id, $integration, $conversation_avatar_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **conversation_avatar_input_body** | [**\Relaya\Sdk\Model\ConversationAvatarInputBody**](../Model/ConversationAvatarInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ConversationAvatarResponseBody**](../Model/ConversationAvatarResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationInboxRead()`

```php
postProfilesProfileIdIntegrationsIntegrationInboxRead($profile_id, $integration, $inbox_read_input_body): \Relaya\Sdk\Model\InboxReadResponseBody
```

Отметить диалог inbox как прочитанный

Помечает диалог в едином inbox прочитанным. Обычно это делают после открытия переписки или после ручного подтверждения, что оператор обработал диалог.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$inbox_read_input_body = {"$schema":"https://localhost:8485/v1/schemas/InboxReadInputBody.json","chatId":"chat:1234567890"}; // \Relaya\Sdk\Model\InboxReadInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxRead($profile_id, $integration, $inbox_read_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **inbox_read_input_body** | [**\Relaya\Sdk\Model\InboxReadInputBody**](../Model/InboxReadInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\InboxReadResponseBody**](../Model/InboxReadResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
