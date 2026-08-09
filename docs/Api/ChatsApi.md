# Relaya\Sdk\ChatsApi

Чаты и папки.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId()**](ChatsApi.md#deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Удалить папку чатов (MAX) |
| [**getProfilesProfileIdIntegrationsIntegrationFolders()**](ChatsApi.md#getProfilesProfileIdIntegrationsIntegrationFolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | Получить папки чатов (MAX) |
| [**patchProfilesProfileIdIntegrationsIntegrationChatsUpdate()**](ChatsApi.md#patchProfilesProfileIdIntegrationsIntegrationChatsUpdate) | **PATCH** /profiles/{profileId}/integrations/{integration}/chats/update | Обновить MAX-чат |
| [**postProfilesProfileIdIntegrationsIntegrationChatsAdmin()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsAdmin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/admin | Изменить права администратора в Telegram |
| [**postProfilesProfileIdIntegrationsIntegrationChatsArchive()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsArchive) | **POST** /profiles/{profileId}/integrations/{integration}/chats/archive | Архивировать или вернуть Telegram-диалог |
| [**postProfilesProfileIdIntegrationsIntegrationChatsBan()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsBan) | **POST** /profiles/{profileId}/integrations/{integration}/chats/ban | Изменить ограничения участника в Telegram |
| [**postProfilesProfileIdIntegrationsIntegrationChatsByIds()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Получить чаты по ID (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/check | Проверить Telegram invite-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/delete | Удалить Telegram invite-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/edit | Изменить Telegram invite-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInviteExport()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInviteExport) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/export | Создать Telegram invite-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInviteImport()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInviteImport) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/import | Принять Telegram invite-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsInvites()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsInvites) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invites | Получить список Telegram invite-ссылок чата |
| [**postProfilesProfileIdIntegrationsIntegrationChatsJoin()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsJoin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/join | Вступить в чат или канал |
| [**postProfilesProfileIdIntegrationsIntegrationChatsLeave()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsLeave) | **POST** /profiles/{profileId}/integrations/{integration}/chats/leave | Покинуть чат или канал |
| [**postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo) | **POST** /profiles/{profileId}/integrations/{integration}/chats/link-info | Разрешить MAX-ссылку |
| [**postProfilesProfileIdIntegrationsIntegrationChatsList()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsList) | **POST** /profiles/{profileId}/integrations/{integration}/chats/list | Получить список чатов (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationChatsMembers()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsMembers) | **POST** /profiles/{profileId}/integrations/{integration}/chats/members | Получить участников MAX-чата |
| [**postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite) | **POST** /profiles/{profileId}/integrations/{integration}/chats/members/invite | Пригласить участников в MAX-канал |
| [**postProfilesProfileIdIntegrationsIntegrationChatsMute()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsMute) | **POST** /profiles/{profileId}/integrations/{integration}/chats/mute | Изменить mute-настройки Telegram-диалога |
| [**postProfilesProfileIdIntegrationsIntegrationChatsPin()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsPin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/pin | Закрепить или открепить Telegram-диалог |
| [**postProfilesProfileIdIntegrationsIntegrationChatsResolve()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsResolve) | **POST** /profiles/{profileId}/integrations/{integration}/chats/resolve | Найти чат по телефону или username |
| [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsSubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Изменить подписку на обновления чата (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationFolders()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationFolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Создать папку чатов (MAX) |
| [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder()**](ChatsApi.md#putProfilesProfileIdIntegrationsIntegrationFoldersOrder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Изменить порядок папок (MAX) |


## `deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId()`

```php
deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId($profile_id, $integration, $folder_id): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Удалить папку чатов (MAX)

Удаляет папку из MAX по ее идентификатору. Это действие удобно для собственных интерфейсов управления папками и массовой очистки структуры чатов.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$folder_id = 'folder_id_example'; // string | Идентификатор папки.

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId($profile_id, $integration, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **folder_id** | **string**| Идентификатор папки. | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationFolders()`

```php
getProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $folder_sync): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Получить папки чатов (MAX)

Возвращает папки чатов и связанное состояние сортировки в MAX. Обычно этот маршрут используют для экранов навигации и кастомных интерфейсов, которые повторяют структуру папок пользователя.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$folder_sync = 56; // int | Параметр `folderSync` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $folder_sync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->getProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **folder_sync** | **int**| Параметр &#x60;folderSync&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationChatsUpdate()`

```php
patchProfilesProfileIdIntegrationsIntegrationChatsUpdate($profile_id, $integration, $max_chat_update_input_body): \Relaya\Sdk\Model\MaxChatUpdateResponseBody
```

Обновить MAX-чат

Отправляет patch MAX opcode 55 для настроек и метаданных чата: название, описание, аватар, закрепленное сообщение, владельца, private link и options. Для редких полей можно передать дополнительные значения в `payload`.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_chat_update_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChatUpdateInputBody.json","changeOwnerId":1,"chatId":"chat:1234567890","description":"example","notifyPin":true,"options":{"key":"value"},"payload":{"key":"value"},"photoToken":"example","pinMessageId":"example","revokePrivateLink":true,"theme":"example","title":"Поддержка VIP"}; // \Relaya\Sdk\Model\MaxChatUpdateInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationChatsUpdate($profile_id, $integration, $max_chat_update_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->patchProfilesProfileIdIntegrationsIntegrationChatsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_chat_update_input_body** | [**\Relaya\Sdk\Model\MaxChatUpdateInputBody**](../Model/MaxChatUpdateInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChatUpdateResponseBody**](../Model/MaxChatUpdateResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsAdmin()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsAdmin($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить права администратора в Telegram

Меняет административные права участника в Telegram-группе или канале. Используйте маршрут для назначения админов, изменения ранга и точечной настройки доступов.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsAdmin($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsAdmin: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsArchive()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsArchive($profile_id, $integration, $request_body): array<string,mixed>
```

Архивировать или вернуть Telegram-диалог

Перекладывает диалог Telegram в архивную папку или возвращает его обратно. Используйте метод для ручной организации входящих и работы с очередями операторов.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsArchive($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsArchive: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsBan()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsBan($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить ограничения участника в Telegram

Обновляет ban- или restriction-права участника Telegram, включая запрет на отправку сообщений, медиа и полный кик из группы. Метод полезен для модерации и управления доступом.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsBan($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsBan: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsByIds()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsByIds($profile_id, $integration, $max_chats_by_ids_input_body): \Relaya\Sdk\Model\MaxChatsByIDsResponseBody
```

Получить чаты по ID (MAX)

Возвращает несколько чатов одним запросом по их ID. Это удобно после поиска, синхронизации или восстановления состояния интерфейса, когда список идентификаторов уже известен.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_chats_by_ids_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChatsByIDsInputBody.json","chatIds":["example"]}; // \Relaya\Sdk\Model\MaxChatsByIDsInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsByIds($profile_id, $integration, $max_chats_by_ids_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_chats_by_ids_input_body** | [**\Relaya\Sdk\Model\MaxChatsByIDsInputBody**](../Model/MaxChatsByIDsInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChatsByIDsResponseBody**](../Model/MaxChatsByIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck($profile_id, $integration, $request_body): array<string,mixed>
```

Проверить Telegram invite-ссылку

Проверяет invite-ссылку Telegram и возвращает сведения о целевом чате до фактического вступления. Метод удобен для предпросмотра приглашений и валидации ссылок в UI.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete($profile_id, $integration, $request_body): array<string,mixed>
```

Удалить Telegram invite-ссылку

Удаляет выбранную invite-ссылку Telegram. Подходит для отзыва ранее выданного доступа и наведения порядка в списке административных ссылок.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить Telegram invite-ссылку

Обновляет параметры существующей invite-ссылки Telegram. Метод используют, когда нужно продлить ссылку, изменить лимит или перевести ее в revoked-состояние.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsInviteExport()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInviteExport($profile_id, $integration, $request_body): array<string,mixed>
```

Создать Telegram invite-ссылку

Создает новую invite-ссылку Telegram с нужными ограничениями по сроку, количеству использований и заявкам на вступление. Удобно для выдачи контролируемого доступа к чату.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInviteExport($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInviteExport: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsInviteImport()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInviteImport($profile_id, $integration, $request_body): array<string,mixed>
```

Принять Telegram invite-ссылку

Импортирует invite-ссылку Telegram и выполняет вступление в приватный чат, группу или канал. Это отдельный маршрут, когда вступление должно идти именно через хеш приглашения.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInviteImport($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInviteImport: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsInvites()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsInvites($profile_id, $integration, $request_body): array<string,mixed>
```

Получить список Telegram invite-ссылок чата

Возвращает экспортированные invite-ссылки для выбранного чата Telegram. Подходит для административных экранов, где нужно видеть активные приглашения и их параметры.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsInvites($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsInvites: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsJoin()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsJoin($profile_id, $integration, $request_body): array<string,mixed>
```

Вступить в чат или канал

Для Telegram маршрут подключает текущий аккаунт к каналу, супергруппе или приватному чату через MTProto gateway. Для MAX отправляет opcode 57: обычно достаточно передать `link`, но можно передать и полный MAX payload.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsJoin($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsJoin: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsLeave()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsLeave($profile_id, $integration, $request_body): array<string,mixed>
```

Покинуть чат или канал

Для Telegram маршрут выводит текущий аккаунт из выбранного чата, группы или канала. Для MAX отправляет opcode 58 с `chatId` и покидает канал или групповой чат от имени текущего профиля.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsLeave($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsLeave: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo($profile_id, $integration, $max_link_info_input_body): \Relaya\Sdk\Model\MaxLinkInfoResponseBody
```

Разрешить MAX-ссылку

Проверяет MAX invite/deep link через opcode 89 и возвращает сведения о связанном чате или канале, если MAX вернул их в ответе.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_link_info_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxLinkInfoInputBody.json","link":"example"}; // \Relaya\Sdk\Model\MaxLinkInfoInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo($profile_id, $integration, $max_link_info_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_link_info_input_body** | [**\Relaya\Sdk\Model\MaxLinkInfoInputBody**](../Model/MaxLinkInfoInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxLinkInfoResponseBody**](../Model/MaxLinkInfoResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsList()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsList($profile_id, $integration, $max_chats_list_input_body): \Relaya\Sdk\Model\MaxChatsListResponseBody
```

Получить список чатов (MAX)

Возвращает список чатов MAX через тот же websocket-механизм, который использует web.max.ru. Без `marker` метод делает первичную синхронизацию MAX opcode 19 и возвращает первую пачку до 40 чатов; если в ответе есть `marker`, передайте его в следующем запросе, чтобы догрузить следующую пачку через opcode 53.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_chats_list_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChatsListInputBody.json","chatsCount":1,"chatsSync":1,"contactsSync":1,"draftsSync":1,"interactive":true,"marker":1,"presenceSync":1}; // \Relaya\Sdk\Model\MaxChatsListInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsList($profile_id, $integration, $max_chats_list_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_chats_list_input_body** | [**\Relaya\Sdk\Model\MaxChatsListInputBody**](../Model/MaxChatsListInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChatsListResponseBody**](../Model/MaxChatsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsMembers()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsMembers($profile_id, $integration, $max_chat_members_input_body): \Relaya\Sdk\Model\MaxChatMembersResponseBody
```

Получить участников MAX-чата

Возвращает участников, администраторов, заблокированных участников или заявки на вступление для MAX-чата через opcode 59. Используйте `type=MEMBER`, `ADMIN`, `BLOCKED_MEMBER` или `JOIN_REQUEST`; `marker` передавайте для пагинации, если MAX вернул его в предыдущем ответе.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_chat_members_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChatMembersInputBody.json","chatId":"chat:1234567890","count":3,"marker":1,"query":"example","type":"message.sent"}; // \Relaya\Sdk\Model\MaxChatMembersInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsMembers($profile_id, $integration, $max_chat_members_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_chat_members_input_body** | [**\Relaya\Sdk\Model\MaxChatMembersInputBody**](../Model/MaxChatMembersInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChatMembersResponseBody**](../Model/MaxChatMembersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite($profile_id, $integration, $max_channel_invite_input_body): \Relaya\Sdk\Model\MaxChannelInviteResponseBody
```

Пригласить участников в MAX-канал

Приглашает пользователей в MAX-канал или групповой чат по `userIds`; если передан телефон, сначала ищет MAX-пользователя и использует найденный `contactId`. Метод рассчитан на сценарии администрирования каналов от имени личного MAX-профиля.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_channel_invite_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChannelInviteInputBody.json","chatId":"chat:1234567890","phone":"+79991234567","showHistory":true,"userIds":[1]}; // \Relaya\Sdk\Model\MaxChannelInviteInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite($profile_id, $integration, $max_channel_invite_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_channel_invite_input_body** | [**\Relaya\Sdk\Model\MaxChannelInviteInputBody**](../Model/MaxChannelInviteInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChannelInviteResponseBody**](../Model/MaxChannelInviteResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsMute()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsMute($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить mute-настройки Telegram-диалога

Обновляет настройки уведомлений для диалога Telegram: можно отключить уведомления, задать срок mute и дополнительные параметры показа. Это полезно для тонкой настройки рабочих чатов.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsMute($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsMute: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsPin()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsPin($profile_id, $integration, $request_body): array<string,mixed>
```

Закрепить или открепить Telegram-диалог

Меняет состояние закрепления диалога в Telegram. Подходит для интерфейсов приоритизации диалогов и синхронизации пользовательского состояния между клиентами.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsPin($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsPin: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationChatsResolve()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsResolve($profile_id, $integration, $max_resolve_chat_by_phone_input_body): \Relaya\Sdk\Model\MaxResolveChatByPhoneResponseBody
```

Найти чат по телефону или username

Пытается определить чат или адресата по телефону либо username. Метод полезен в сценариях, где у вас есть только контактные данные, а `chatId` нужно получить автоматически.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_resolve_chat_by_phone_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxResolveChatByPhoneInputBody.json","phone":"+79991234567","refresh":true,"username":"example"}; // \Relaya\Sdk\Model\MaxResolveChatByPhoneInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsResolve($profile_id, $integration, $max_resolve_chat_by_phone_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_resolve_chat_by_phone_input_body** | [**\Relaya\Sdk\Model\MaxResolveChatByPhoneInputBody**](../Model/MaxResolveChatByPhoneInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxResolveChatByPhoneResponseBody**](../Model/MaxResolveChatByPhoneResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationChatsSubscription()`

```php
postProfilesProfileIdIntegrationsIntegrationChatsSubscription($profile_id, $integration, $max_chat_subscription_input_body): \Relaya\Sdk\Model\MaxChatSubscriptionResponseBody
```

Изменить подписку на обновления чата (MAX)

Подписывает или отписывает профиль от обновлений конкретного чата в MAX. Метод полезен для сценариев реального времени, когда нужно вручную управлять тем, какие чаты держать «под наблюдением».  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_chat_subscription_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxChatSubscriptionInputBody.json","chatId":"chat:1234567890","subscribe":true}; // \Relaya\Sdk\Model\MaxChatSubscriptionInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsSubscription($profile_id, $integration, $max_chat_subscription_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_chat_subscription_input_body** | [**\Relaya\Sdk\Model\MaxChatSubscriptionInputBody**](../Model/MaxChatSubscriptionInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxChatSubscriptionResponseBody**](../Model/MaxChatSubscriptionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationFolders()`

```php
postProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $max_create_folder_input_body): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Создать папку чатов (MAX)

Создает новую папку в MAX. Подходит для управляемой настройки структуры чатов через Релаю без ручного действия в клиенте MAX.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_create_folder_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxCreateFolderInputBody.json","folder":{"elements":[],"filterSubjects":{"key":"value"},"filters":[],"id":"example","include":[],"options":[],"sourceId":1,"title":"Поддержка VIP","updateTime":1,"widgets":[]}}; // \Relaya\Sdk\Model\MaxCreateFolderInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $max_create_folder_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_create_folder_input_body** | [**\Relaya\Sdk\Model\MaxCreateFolderInputBody**](../Model/MaxCreateFolderInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdIntegrationsIntegrationFoldersOrder()`

```php
putProfilesProfileIdIntegrationsIntegrationFoldersOrder($profile_id, $integration, $max_reorder_folders_input_body): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Изменить порядок папок (MAX)

Сохраняет новый порядок папок в MAX. Используйте метод, когда пользователь перетаскивает папки в интерфейсе Релая и это нужно отразить во внешней интеграции.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_reorder_folders_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxReorderFoldersInputBody.json","foldersOrder":["example"]}; // \Relaya\Sdk\Model\MaxReorderFoldersInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationFoldersOrder($profile_id, $integration, $max_reorder_folders_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->putProfilesProfileIdIntegrationsIntegrationFoldersOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_reorder_folders_input_body** | [**\Relaya\Sdk\Model\MaxReorderFoldersInputBody**](../Model/MaxReorderFoldersInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
