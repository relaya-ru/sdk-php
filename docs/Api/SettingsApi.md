# Relaya\Sdk\SettingsApi

Параметры интеграций и профилей.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfilesProfileIdIntegrationsIntegrationSettingsUser()**](SettingsApi.md#getProfilesProfileIdIntegrationsIntegrationSettingsUser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Получить настройки аккаунта (MAX) |
| [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser()**](SettingsApi.md#patchProfilesProfileIdIntegrationsIntegrationSettingsUser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Обновить настройки аккаунта (MAX) |


## `getProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Получить настройки аккаунта (MAX)

Возвращает пользовательские настройки аккаунта MAX, доступные через внешний API. Подходит для страницы настроек, предварительного заполнения формы и сравнения текущего состояния перед изменениями.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Обновить настройки аккаунта (MAX)

Сохраняет пользовательские настройки аккаунта MAX. Используйте метод для точечных изменений без полного ручного редактирования настроек в самом MAX.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_set_user_settings_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxSetUserSettingsInputBody.json","user":{"ALT_KEYBOARD":true,"AUDIO_TRANSCRIPTION_ENABLED":true,"CHATS_INVITE":"example","CHATS_PUSH_NOTIFICATION":"example","CHATS_PUSH_SOUND":"example","CONTENT_LEVEL_ACCESS":true,"DONT_DISTURB_UNTIL":1,"DOUBLE_TAP_REACTION_DISABLED":true,"FAMILY_PROTECTION":"example","HIDDEN":true,"INACTIVE_TTL":"example","INCOMING_CALL":"example","M_CALL_PUSH_NOTIFICATION":"example","PUSH_DETAILS":true,"PUSH_NEW_CONTACTS":true,"PUSH_SOUND":"example","SAFE_MODE":true,"SAFE_MODE_NO_PIN":true,"SEARCH_BY_PHONE":"example","SHOW_READ_MARK":true,"STICKERS_SUGGEST":"example","UNSAFE_FILES":true}}; // \Relaya\Sdk\Model\MaxSetUserSettingsInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->patchProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_set_user_settings_input_body** | [**\Relaya\Sdk\Model\MaxSetUserSettingsInputBody**](../Model/MaxSetUserSettingsInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
