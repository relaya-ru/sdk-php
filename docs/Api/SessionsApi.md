# Relaya\Sdk\SessionsApi

Сессии и устройства.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#deleteProfilesProfileIdIntegrationsIntegrationSession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Очистить текущую сессию |
| [**getProfilesProfileIdIntegrationsIntegrationDevices()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationDevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | Получить активные устройства (MAX) |
| [**getProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Получить данные текущей сессии |
| [**getProfilesProfileIdIntegrationsIntegrationSessionChats()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSessionChats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Получить чаты текущей сессии |
| [**getProfilesProfileIdIntegrationsIntegrationSessions()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | Получить активные сессии (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationSessionEvents()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionEvents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Получить события текущей сессии |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStart()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Запустить интеграционную сессию |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStop()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Остановить интеграционную сессию |
| [**postProfilesProfileIdIntegrationsIntegrationSessionsClose()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionsClose) | **POST** /profiles/{profileId}/integrations/{integration}/sessions/close | Завершить остальные MAX-сессии |
| [**postProfilesProfileIdIntegrationsIntegrationSync()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Синхронизировать профиль с интеграцией |
| [**putProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#putProfilesProfileIdIntegrationsIntegrationSession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Сохранить данные текущей сессии |


## `deleteProfilesProfileIdIntegrationsIntegrationSession()`

```php
deleteProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\SessionClearResponseBody
```

Очистить текущую сессию

Удаляет сохраненное состояние интеграционной сессии. Обычно это делают, когда профиль нужно переавторизовать с нуля или сбросить поврежденный процесс.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$offset = 'offset_example'; // string | Параметр `offset` из `query`.

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->deleteProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] |
| **offset** | **string**| Параметр &#x60;offset&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\SessionClearResponseBody**](../Model/SessionClearResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationDevices()`

```php
getProfilesProfileIdIntegrationsIntegrationDevices($profile_id, $integration): \Relaya\Sdk\Model\MaxSessionsResponseBody
```

Получить активные устройства (MAX)

Возвращает список устройств, которые MAX считает активными для этого профиля. По сути это более прикладное представление тех же сессий для интерфейсов безопасности.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationDevices($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\MaxSessionsResponseBody**](../Model/MaxSessionsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSession()`

```php
getProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\SessionGetResponseBody
```

Получить данные текущей сессии

Возвращает данные активной интеграционной сессии. Метод удобен для отладки, резервного копирования состояния и диагностики нестабильных подключений.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$offset = 'offset_example'; // string | Параметр `offset` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] |
| **offset** | **string**| Параметр &#x60;offset&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\SessionGetResponseBody**](../Model/SessionGetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSessionChats()`

```php
getProfilesProfileIdIntegrationsIntegrationSessionChats($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\SessionChatsResponseBody
```

Получить чаты текущей сессии

Возвращает список чатов, которые видит активная интеграционная сессия. Подходит для диагностики, исследования данных и проверки, что сессия действительно подключена к нужному аккаунту.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$offset = 'offset_example'; // string | Параметр `offset` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSessionChats($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationSessionChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] |
| **offset** | **string**| Параметр &#x60;offset&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\SessionChatsResponseBody**](../Model/SessionChatsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSessions()`

```php
getProfilesProfileIdIntegrationsIntegrationSessions($profile_id, $integration): \Relaya\Sdk\Model\MaxSessionsResponseBody
```

Получить активные сессии (MAX)

Возвращает активные сессии и устройства MAX, связанные с текущим профилем. Полезно для экрана безопасности и диагностики, когда нужно понять, где еще открыт аккаунт.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSessions($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\MaxSessionsResponseBody**](../Model/MaxSessionsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSessionEvents()`

```php
postProfilesProfileIdIntegrationsIntegrationSessionEvents($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\SessionEventsResponseBody
```

Получить события текущей сессии

Возвращает события или ленту изменений, которые видит активная сессия. Удобно для отладки, разбора проблем с синхронизацией и ручного анализа входящего потока.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$limit = 50; // int | Максимальное количество элементов в ответе.
$offset = 'offset_example'; // string | Параметр `offset` из `query`.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSessionEvents($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSessionEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] |
| **offset** | **string**| Параметр &#x60;offset&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\SessionEventsResponseBody**](../Model/SessionEventsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSessionStart()`

```php
postProfilesProfileIdIntegrationsIntegrationSessionStart($profile_id, $integration, $session_start_input_body): \Relaya\Sdk\Model\SessionStartResponseBody
```

Запустить интеграционную сессию

Запускает сессию профиля и переводит интеграцию в активное состояние. Это полезно для профилей, которые должны начать обмен данными без повторного входа.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$session_start_input_body = {"$schema":"https://localhost:8485/v1/schemas/SessionStartInputBody.json","phone":"+79991234567"}; // \Relaya\Sdk\Model\SessionStartInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSessionStart($profile_id, $integration, $session_start_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSessionStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **session_start_input_body** | [**\Relaya\Sdk\Model\SessionStartInputBody**](../Model/SessionStartInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SessionStartResponseBody**](../Model/SessionStartResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSessionStop()`

```php
postProfilesProfileIdIntegrationsIntegrationSessionStop($profile_id, $integration, $session_action_input_body): \Relaya\Sdk\Model\SessionStopResponseBody
```

Остановить интеграционную сессию

Останавливает сессию профиля. Метод полезен для технических работ, ручной диагностики и аккуратного завершения соединения с внешним сервисом.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$session_action_input_body = {"$schema":"https://localhost:8485/v1/schemas/SessionActionInputBody.json","session":"example"}; // \Relaya\Sdk\Model\SessionActionInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSessionStop($profile_id, $integration, $session_action_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSessionStop: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **session_action_input_body** | [**\Relaya\Sdk\Model\SessionActionInputBody**](../Model/SessionActionInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SessionStopResponseBody**](../Model/SessionStopResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSessionsClose()`

```php
postProfilesProfileIdIntegrationsIntegrationSessionsClose($profile_id, $integration): \Relaya\Sdk\Model\MaxCloseSessionsResponseBody
```

Завершить остальные MAX-сессии

Закрывает другие активные сессии MAX через opcode 97. Если MAX возвращает обновленный token, Релая сохраняет его в состоянии профиля, чтобы текущая сессия продолжила работать.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSessionsClose($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSessionsClose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\MaxCloseSessionsResponseBody**](../Model/MaxCloseSessionsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSync()`

```php
postProfilesProfileIdIntegrationsIntegrationSync($profile_id, $integration, $sync_profile_input_body): \Relaya\Sdk\Model\SyncProfileResponseBody
```

Синхронизировать профиль с интеграцией

Запускает синхронизацию профиля с внешним сервисом. Метод полезен, когда нужно вручную подтянуть свежие данные после изменений на стороне интеграции.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$sync_profile_input_body = {"$schema":"https://localhost:8485/v1/schemas/SyncProfileInputBody.json","chatsCount":1,"chatsSync":1,"contactsSync":1,"draftsSync":1,"interactive":true,"presenceSync":1,"storeInbox":true,"token":"rlp_live_1234567890abcdef"}; // \Relaya\Sdk\Model\SyncProfileInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSync($profile_id, $integration, $sync_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **sync_profile_input_body** | [**\Relaya\Sdk\Model\SyncProfileInputBody**](../Model/SyncProfileInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SyncProfileResponseBody**](../Model/SyncProfileResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdIntegrationsIntegrationSession()`

```php
putProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $session_data_input_body): \Relaya\Sdk\Model\SessionSetResponseBody
```

Сохранить данные текущей сессии

Сохраняет данные интеграционной сессии вручную. Подходит для восстановлений, миграций и редких служебных сценариев, когда состояние нужно записать напрямую.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$session_data_input_body = {"$schema":"https://localhost:8485/v1/schemas/SessionDataInputBody.json","data":"example","session":"example"}; // \Relaya\Sdk\Model\SessionDataInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $session_data_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->putProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **session_data_input_body** | [**\Relaya\Sdk\Model\SessionDataInputBody**](../Model/SessionDataInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SessionSetResponseBody**](../Model/SessionSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
