# Relaya\Sdk\AuthApi

Вход, OAuth, восстановление доступа.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQr()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Получить QR-код для авторизации |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQrStatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Получить статус QR-авторизации |
| [**getProfilesProfileIdIntegrationsIntegrationGroups()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationGroups) | **GET** /profiles/{profileId}/integrations/{integration}/groups | Получить группы VK |
| [**getProfilesProfileIdIntegrationsIntegrationOauthStart()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationOauthStart) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/start | Начать OAuth для VK |
| [**getProfilesProfileIdIntegrationsIntegrationSmtp()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationSmtp) | **GET** /profiles/{profileId}/integrations/{integration}/smtp | Получить SMTP-настройки профиля |
| [**getProfilesProfileIdIntegrationsIntegrationToken()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationToken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Получить токен бота |
| [**getProfilesProfileIdIntegrationsIntegrationWabaTemplates()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationWabaTemplates) | **GET** /profiles/{profileId}/integrations/{integration}/waba/templates | Шаблоны WABA |
| [**postProfilesProfileIdIntegrationsIntegrationAuth2fa()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Отправить пароль 2FA |
| [**postProfilesProfileIdIntegrationsIntegrationAuthLogout()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthLogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Выйти из интеграции |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Подтвердить код авторизации по телефону |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/confirm | Подтвердить вход по телефону |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Отправить пароль второго фактора по телефону |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Начать авторизацию по телефону |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Проверить статус SMS-авторизации (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Начать SMS-авторизацию (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Отправить код авторизации (MAX) |
| [**putProfilesProfileIdIntegrationsIntegrationGroup()**](AuthApi.md#putProfilesProfileIdIntegrationsIntegrationGroup) | **PUT** /profiles/{profileId}/integrations/{integration}/group | Сохранить группу VK |
| [**putProfilesProfileIdIntegrationsIntegrationSmtp()**](AuthApi.md#putProfilesProfileIdIntegrationsIntegrationSmtp) | **PUT** /profiles/{profileId}/integrations/{integration}/smtp | Сохранить SMTP-настройки профиля |
| [**putProfilesProfileIdIntegrationsIntegrationToken()**](AuthApi.md#putProfilesProfileIdIntegrationsIntegrationToken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Сохранить токен бота |


## `getProfilesProfileIdIntegrationsIntegrationAuthQr()`

```php
getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id): array<string,mixed>
```

Получить QR-код для авторизации

Возвращает QR-код или ссылку для входа во внешнюю интеграцию. Этот маршрут удобен, когда профиль нужно быстро авторизовать на другом устройстве без ручного ввода логина и пароля.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$track_id = 'track_id_example'; // string | Параметр `trackId` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationAuthQr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **track_id** | **string**| Параметр &#x60;trackId&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

**array<string,mixed>**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationAuthQrStatus()`

```php
getProfilesProfileIdIntegrationsIntegrationAuthQrStatus($profile_id, $integration, $track_id): \Relaya\Sdk\Model\QRStatusResponseBody
```

Получить статус QR-авторизации

Показывает, завершилась ли авторизация по QR и можно ли переходить к следующему шагу. Обычно этот метод вызывают в цикле опроса после получения QR-кода.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$track_id = 'track_id_example'; // string | Параметр `trackId` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **track_id** | **string**| Параметр &#x60;trackId&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\QRStatusResponseBody**](../Model/QRStatusResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationGroups()`

```php
getProfilesProfileIdIntegrationsIntegrationGroups($profile_id, $integration)
```

Получить группы VK

Возвращает группы VK, доступные текущему профилю. Обычно этот список нужен, чтобы выбрать сообщество для дальнейшей привязки или настройки вебхука.  Только VK.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $apiInstance->getProfilesProfileIdIntegrationsIntegrationGroups($profile_id, $integration);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationGroups: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationOauthStart()`

```php
getProfilesProfileIdIntegrationsIntegrationOauthStart($profile_id, $integration)
```

Начать OAuth для VK

Создает ссылку для OAuth-подключения VK к выбранному профилю. Метод нужен, когда пользователь инициирует подключение сообщества или группы VK из кабинета профиля.  Только VK.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $apiInstance->getProfilesProfileIdIntegrationsIntegrationOauthStart($profile_id, $integration);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationOauthStart: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationSmtp()`

```php
getProfilesProfileIdIntegrationsIntegrationSmtp($profile_id, $integration): \Relaya\Sdk\Model\EmailSMTPConfigResponseBody
```

Получить SMTP-настройки профиля

Возвращает SMTP-параметры, связанные с выбранным профилем. Этот маршрут нужен для настройки email-канала и проверки, что профиль уже готов к отправке писем.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSmtp($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationSmtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\EmailSMTPConfigResponseBody**](../Model/EmailSMTPConfigResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationToken()`

```php
getProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body): \Relaya\Sdk\Model\BotTokenResponseBody
```

Получить токен бота

Возвращает токен бота или связанные с ним признаки для выбранного профиля. Подходит для экранов настройки, где нужно показать, подключен ли бот и требуется ли повторная привязка.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$bot_token_input_body = {"$schema":"https://localhost:8485/v1/schemas/BotTokenInputBody.json","igUserID":"example","pageId":"example","phoneNumberId":"example","token":"rlp_live_1234567890abcdef","wabaBusinessId":"example"}; // \Relaya\Sdk\Model\BotTokenInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\BotTokenResponseBody**](../Model/BotTokenResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationWabaTemplates()`

```php
getProfilesProfileIdIntegrationsIntegrationWabaTemplates($profile_id, $integration): \Relaya\Sdk\Model\WABAMessageTemplatesResponseBody
```

Шаблоны WABA

Шаблоны WhatsApp Cloud API для интеграции `waba` / `whatsapp_cloud`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationWabaTemplates($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationWabaTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\WABAMessageTemplatesResponseBody**](../Model/WABAMessageTemplatesResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuth2fa()`

```php
postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body): array<string,mixed>
```

Отправить пароль 2FA

Передает пароль второго фактора в уже начатый сценарий авторизации. Нужен только тогда, когда внешний сервис запросил дополнительное подтверждение после основного входа.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$password2_fa_input_body = {"$schema":"https://localhost:8485/v1/schemas/Password2FAInputBody.json","password":"example","trackId":"example"}; // \Relaya\Sdk\Model\Password2FAInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuth2fa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **password2_fa_input_body** | [**\Relaya\Sdk\Model\Password2FAInputBody**](../Model/Password2FAInputBody.md)| Параметры JSON-запроса. | |

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

## `postProfilesProfileIdIntegrationsIntegrationAuthLogout()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthLogout($profile_id, $integration): \Relaya\Sdk\Model\LogoutBody
```

Выйти из интеграции

Завершает внешнюю авторизацию профиля. Используйте метод для перевхода, смены аккаунта или сброса проблемной сессии.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthLogout($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\LogoutBody**](../Model/LogoutBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode($profile_id, $integration, $phone_auth_code_input_body): \Relaya\Sdk\Model\PhoneAuthCodeResponseBody
```

Подтвердить код авторизации по телефону

Передает код, который пользователь получил в рамках входа по номеру телефона. Это основной шаг после старта сценария авторизации.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$phone_auth_code_input_body = {"$schema":"https://localhost:8485/v1/schemas/PhoneAuthCodeInputBody.json","code":"example","token":"rlp_live_1234567890abcdef","trackId":"example"}; // \Relaya\Sdk\Model\PhoneAuthCodeInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode($profile_id, $integration, $phone_auth_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **phone_auth_code_input_body** | [**\Relaya\Sdk\Model\PhoneAuthCodeInputBody**](../Model/PhoneAuthCodeInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthCodeResponseBody**](../Model/PhoneAuthCodeResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm($profile_id, $integration, $phone_auth_confirm_input_body): \Relaya\Sdk\Model\PhoneAuthConfirmResponseBody
```

Подтвердить вход по телефону

Завершает phone-login мессенджера (код из SMS) для интеграции профиля.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$phone_auth_confirm_input_body = {"$schema":"https://localhost:8485/v1/schemas/PhoneAuthConfirmInputBody.json","firstName":"example","lastName":"example","token":"rlp_live_1234567890abcdef"}; // \Relaya\Sdk\Model\PhoneAuthConfirmInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm($profile_id, $integration, $phone_auth_confirm_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **phone_auth_confirm_input_body** | [**\Relaya\Sdk\Model\PhoneAuthConfirmInputBody**](../Model/PhoneAuthConfirmInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthConfirmResponseBody**](../Model/PhoneAuthConfirmResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword($profile_id, $integration, $phone_auth_password_input_body): \Relaya\Sdk\Model\PhoneAuthPasswordResponseBody
```

Отправить пароль второго фактора по телефону

Передает пароль второго фактора для сценариев телефонной авторизации, где одного кода недостаточно. Обычно этот маршрут используют только при явном запросе со стороны внешнего сервиса.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$phone_auth_password_input_body = {"$schema":"https://localhost:8485/v1/schemas/PhoneAuthPasswordInputBody.json","password":"example","trackId":"example"}; // \Relaya\Sdk\Model\PhoneAuthPasswordInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword($profile_id, $integration, $phone_auth_password_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **phone_auth_password_input_body** | [**\Relaya\Sdk\Model\PhoneAuthPasswordInputBody**](../Model/PhoneAuthPasswordInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthPasswordResponseBody**](../Model/PhoneAuthPasswordResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart($profile_id, $integration, $phone_auth_start_input_body): \Relaya\Sdk\Model\PhoneAuthStartResponseBody
```

Начать авторизацию по телефону

Запускает вход через номер телефона и подготавливает профиль к следующему шагу авторизации. Обычно после этого пользователь получает код или дополнительный challenge.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$phone_auth_start_input_body = {"$schema":"https://localhost:8485/v1/schemas/PhoneAuthStartInputBody.json","phone":"+79991234567"}; // \Relaya\Sdk\Model\PhoneAuthStartInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart($profile_id, $integration, $phone_auth_start_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **phone_auth_start_input_body** | [**\Relaya\Sdk\Model\PhoneAuthStartInputBody**](../Model/PhoneAuthStartInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthStartResponseBody**](../Model/PhoneAuthStartResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll($profile_id, $integration, $poll_authorization_input_body): \Relaya\Sdk\Model\PollAuthorizationBody
```

Проверить статус SMS-авторизации (MAX)

Возвращает текущее состояние SMS-авторизации и помогает понять, завершился ли вход. Этот маршрут удобно вызывать из фронтенда, пока внешний сервис не подтвердит авторизацию окончательно.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$poll_authorization_input_body = {"$schema":"https://localhost:8485/v1/schemas/PollAuthorizationInputBody.json","trackId":"example"}; // \Relaya\Sdk\Model\PollAuthorizationInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll($profile_id, $integration, $poll_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **poll_authorization_input_body** | [**\Relaya\Sdk\Model\PollAuthorizationInputBody**](../Model/PollAuthorizationInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\PollAuthorizationBody**](../Model/PollAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsStart()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsStart($profile_id, $integration, $start_authorization_input_body): \Relaya\Sdk\Model\StartAuthorizationBody
```

Начать SMS-авторизацию (MAX)

Запускает вход в MAX по номеру телефона и подготавливает сессию для отправки кода подтверждения. Это первый шаг в цепочке `start -> verify -> poll`.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$start_authorization_input_body = {"$schema":"https://localhost:8485/v1/schemas/StartAuthorizationInputBody.json","phoneNumber":1}; // \Relaya\Sdk\Model\StartAuthorizationInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart($profile_id, $integration, $start_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **start_authorization_input_body** | [**\Relaya\Sdk\Model\StartAuthorizationInputBody**](../Model/StartAuthorizationInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\StartAuthorizationBody**](../Model/StartAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify($profile_id, $integration, $send_authorization_code_input_body): \Relaya\Sdk\Model\SendAuthorizationCodeBody
```

Отправить код авторизации (MAX)

Передает код подтверждения в MAX и продолжает процесс входа. После этого обычно остается короткий опрос статуса, пока профиль не перейдет в состояние `authorized`.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$send_authorization_code_input_body = {"$schema":"https://localhost:8485/v1/schemas/SendAuthorizationCodeInputBody.json","code":"example"}; // \Relaya\Sdk\Model\SendAuthorizationCodeInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify($profile_id, $integration, $send_authorization_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **send_authorization_code_input_body** | [**\Relaya\Sdk\Model\SendAuthorizationCodeInputBody**](../Model/SendAuthorizationCodeInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SendAuthorizationCodeBody**](../Model/SendAuthorizationCodeBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdIntegrationsIntegrationGroup()`

```php
putProfilesProfileIdIntegrationsIntegrationGroup($profile_id, $integration)
```

Сохранить группу VK

Привязывает выбранную группу VK к профилю. После этого профиль может работать от имени нужного сообщества и использовать VK-специфичные возможности.  Только VK.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $apiInstance->putProfilesProfileIdIntegrationsIntegrationGroup($profile_id, $integration);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->putProfilesProfileIdIntegrationsIntegrationGroup: ', $e->getMessage(), PHP_EOL;
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

## `putProfilesProfileIdIntegrationsIntegrationSmtp()`

```php
putProfilesProfileIdIntegrationsIntegrationSmtp($profile_id, $integration, $email_smtp_set_input_body): \Relaya\Sdk\Model\EmailSMTPSetResponseBody
```

Сохранить SMTP-настройки профиля

Сохраняет SMTP-параметры для email-профиля. Используйте метод после ввода логина, пароля, сервера и других настроек исходящей почты.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$email_smtp_set_input_body = {"$schema":"https://localhost:8485/v1/schemas/EmailSMTPSetInputBody.json","from":"2026-04-01","host":"example","password":"example","port":1,"username":"example"}; // \Relaya\Sdk\Model\EmailSMTPSetInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationSmtp($profile_id, $integration, $email_smtp_set_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->putProfilesProfileIdIntegrationsIntegrationSmtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **email_smtp_set_input_body** | [**\Relaya\Sdk\Model\EmailSMTPSetInputBody**](../Model/EmailSMTPSetInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\EmailSMTPSetResponseBody**](../Model/EmailSMTPSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdIntegrationsIntegrationToken()`

```php
putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body): \Relaya\Sdk\Model\BotTokenSetResponseBody
```

Сохранить токен бота

Сохраняет новый токен бота для профиля. Обычно метод вызывают при первичной настройке интеграции или при замене компрометированного токена.  Для MAX Bot Релая сразу валидирует token через MAX API и автоматически настраивает входящую webhook-подписку профиля на стороне MAX.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$bot_token_input_body = {$schema=https://localhost:8485/v1/schemas/BotTokenInputBody.json, igUserID=example, pageId=example, phoneNumberId=example, token=rlp_live_1234567890abcdef, wabaBusinessId=example}; // \Relaya\Sdk\Model\BotTokenInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->putProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\BotTokenSetResponseBody**](../Model/BotTokenSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
