# Relaya\Sdk\ProfilesApi

Профили интеграций.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileId()**](ProfilesApi.md#deleteProfilesProfileId) | **DELETE** /profiles/{profileId} | Удалить профиль |
| [**deleteProfilesProfileIdAuthShare()**](ProfilesApi.md#deleteProfilesProfileIdAuthShare) | **DELETE** /profiles/{profileId}/auth-share | Отозвать ссылку |
| [**deleteProfilesProfileIdScenariosScenarioId()**](ProfilesApi.md#deleteProfilesProfileIdScenariosScenarioId) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId} | Удалить сценарий профиля |
| [**deleteProfilesProfileIdScenariosScenarioIdPresence()**](ProfilesApi.md#deleteProfilesProfileIdScenariosScenarioIdPresence) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId}/presence | Выйти из редактора |
| [**deleteProfilesProfileIdScenariosScenarioIdWebhookSecret()**](ProfilesApi.md#deleteProfilesProfileIdScenariosScenarioIdWebhookSecret) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId}/webhook-secret | Отозвать public webhook secret |
| [**deleteProfilesViewsViewId()**](ProfilesApi.md#deleteProfilesViewsViewId) | **DELETE** /profiles/views/{viewId} | Удалить вид списка профилей |
| [**getProfiles()**](ProfilesApi.md#getProfiles) | **GET** /profiles | Получить список профилей |
| [**getProfilesIds()**](ProfilesApi.md#getProfilesIds) | **GET** /profiles/ids | Список profileId по фильтрам |
| [**getProfilesProfileId()**](ProfilesApi.md#getProfilesProfileId) | **GET** /profiles/{profileId} | Получить профиль |
| [**getProfilesProfileIdActions()**](ProfilesApi.md#getProfilesProfileIdActions) | **GET** /profiles/{profileId}/actions | Получить журнал действий профиля |
| [**getProfilesProfileIdIntegrationsIntegrationContacts()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationContacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | Получить контакты профиля (MAX) |
| [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationContactsBlocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | Получить заблокированные контакты (MAX) |
| [**getProfilesProfileIdIntegrationsIntegrationOverview()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationOverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Получить обзор профиля |
| [**getProfilesProfileIdIntegrationsIntegrationStatus()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationStatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Получить статус профиля |
| [**getProfilesProfileIdQuotas()**](ProfilesApi.md#getProfilesProfileIdQuotas) | **GET** /profiles/{profileId}/quotas | Квоты профиля |
| [**getProfilesProfileIdScenarios()**](ProfilesApi.md#getProfilesProfileIdScenarios) | **GET** /profiles/{profileId}/scenarios | Получить сценарии профиля |
| [**getProfilesProfileIdScenariosScenarioIdAnalytics()**](ProfilesApi.md#getProfilesProfileIdScenariosScenarioIdAnalytics) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/analytics | Аналитика воронки сценария |
| [**getProfilesProfileIdScenariosScenarioIdPresence()**](ProfilesApi.md#getProfilesProfileIdScenariosScenarioIdPresence) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/presence | Кто в редакторе |
| [**getProfilesProfileIdScenariosScenarioIdRuns()**](ProfilesApi.md#getProfilesProfileIdScenariosScenarioIdRuns) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/runs | Список запусков сценария |
| [**getProfilesProfileIdScenariosScenarioIdRunsTraceId()**](ProfilesApi.md#getProfilesProfileIdScenariosScenarioIdRunsTraceId) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/runs/{traceId} | Детали запуска сценария |
| [**getProfilesViews()**](ProfilesApi.md#getProfilesViews) | **GET** /profiles/views | Сохранённые виды списка профилей |
| [**patchProfilesProfileId()**](ProfilesApi.md#patchProfilesProfileId) | **PATCH** /profiles/{profileId} | Обновить профиль |
| [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile()**](ProfilesApi.md#patchProfilesProfileIdIntegrationsIntegrationAccountProfile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Обновить имя и описание профиля в MAX |
| [**postProfiles()**](ProfilesApi.md#postProfiles) | **POST** /profiles | Создать профиль |
| [**postProfilesBulk()**](ProfilesApi.md#postProfilesBulk) | **POST** /profiles/bulk | Массовые действия над профилями |
| [**postProfilesProfileIdAuthShare()**](ProfilesApi.md#postProfilesProfileIdAuthShare) | **POST** /profiles/{profileId}/auth-share | Ссылка на авторизацию |
| [**postProfilesProfileIdIntegrationsIntegrationAvatar()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationAvatar) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Обновить аватар профиля (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit) | **POST** /profiles/{profileId}/integrations/{integration}/bots/web-app/init | Инициализировать MAX bot web app |
| [**postProfilesProfileIdIntegrationsIntegrationCallsByPeer()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationCallsByPeer) | **POST** /profiles/{profileId}/integrations/{integration}/calls/by-peer | Получить group call Telegram по чату |
| [**postProfilesProfileIdIntegrationsIntegrationCallsGet()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationCallsGet) | **POST** /profiles/{profileId}/integrations/{integration}/calls/get | Получить состояние Telegram group call |
| [**postProfilesProfileIdIntegrationsIntegrationCallsJoin()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationCallsJoin) | **POST** /profiles/{profileId}/integrations/{integration}/calls/join | Присоединиться к Telegram group call |
| [**postProfilesProfileIdIntegrationsIntegrationCallsLeave()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationCallsLeave) | **POST** /profiles/{profileId}/integrations/{integration}/calls/leave | Покинуть Telegram group call |
| [**postProfilesProfileIdIntegrationsIntegrationContactsAdd()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsAdd) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/add | Добавить контакт в MAX |
| [**postProfilesProfileIdIntegrationsIntegrationContactsByIds()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Получить контакты по ID (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationContactsCheck()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsCheck) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/check | Проверить, существует ли контакт |
| [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsLastOnline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Получить время последней активности контактов (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationContactsSearch()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsSearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Найти контакт по телефону или username |
| [**postProfilesProfileIdIntegrationsIntegrationForumsToggle()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationForumsToggle) | **POST** /profiles/{profileId}/integrations/{integration}/forums/toggle | Изменить режим форума в Telegram |
| [**postProfilesProfileIdIntegrationsIntegrationReboot()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationReboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Перезапустить профиль (MAX) |
| [**postProfilesProfileIdIntegrationsIntegrationStories()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationStories) | **POST** /profiles/{profileId}/integrations/{integration}/stories | Получить активные Telegram stories |
| [**postProfilesProfileIdIntegrationsIntegrationStoriesPeer()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationStoriesPeer) | **POST** /profiles/{profileId}/integrations/{integration}/stories/peer | Получить stories конкретного Telegram peer |
| [**postProfilesProfileIdIntegrationsIntegrationStoriesReaction()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationStoriesReaction) | **POST** /profiles/{profileId}/integrations/{integration}/stories/reaction | Поставить реакцию на Telegram story |
| [**postProfilesProfileIdIntegrationsIntegrationStoriesRead()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationStoriesRead) | **POST** /profiles/{profileId}/integrations/{integration}/stories/read | Отметить Telegram stories как просмотренные |
| [**postProfilesProfileIdIntegrationsIntegrationStoriesSend()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationStoriesSend) | **POST** /profiles/{profileId}/integrations/{integration}/stories/send | Опубликовать Telegram story |
| [**postProfilesProfileIdIntegrationsIntegrationTopics()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationTopics) | **POST** /profiles/{profileId}/integrations/{integration}/topics | Получить список Telegram forum topics |
| [**postProfilesProfileIdIntegrationsIntegrationTopicsCreate()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationTopicsCreate) | **POST** /profiles/{profileId}/integrations/{integration}/topics/create | Создать Telegram forum topic |
| [**postProfilesProfileIdIntegrationsIntegrationTopicsDelete()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationTopicsDelete) | **POST** /profiles/{profileId}/integrations/{integration}/topics/delete | Удалить историю Telegram forum topic |
| [**postProfilesProfileIdIntegrationsIntegrationTopicsEdit()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationTopicsEdit) | **POST** /profiles/{profileId}/integrations/{integration}/topics/edit | Изменить Telegram forum topic |
| [**postProfilesProfileIdIntegrationsIntegrationTopicsReorder()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationTopicsReorder) | **POST** /profiles/{profileId}/integrations/{integration}/topics/reorder | Переупорядочить закрепленные Telegram forum topics |
| [**postProfilesProfileIdRenew()**](ProfilesApi.md#postProfilesProfileIdRenew) | **POST** /profiles/{profileId}/renew | Продлить профиль |
| [**postProfilesProfileIdScenariosAiDraft()**](ProfilesApi.md#postProfilesProfileIdScenariosAiDraft) | **POST** /profiles/{profileId}/scenarios/ai-draft | AI-черновик сценария |
| [**postProfilesProfileIdScenariosScenarioIdPublish()**](ProfilesApi.md#postProfilesProfileIdScenariosScenarioIdPublish) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/publish | Опубликовать черновик сценария |
| [**postProfilesProfileIdScenariosScenarioIdRollback()**](ProfilesApi.md#postProfilesProfileIdScenariosScenarioIdRollback) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/rollback | Откатить черновик к published |
| [**postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents()**](ProfilesApi.md#postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/runs/{traceId}/events | Возобновить ожидающий сценарий |
| [**postProfilesProfileIdScenariosScenarioIdWebhook()**](ProfilesApi.md#postProfilesProfileIdScenariosScenarioIdWebhook) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/webhook | Запустить сценарий вебхуком |
| [**postProfilesProfileIdScenariosScenarioIdWebhookSecret()**](ProfilesApi.md#postProfilesProfileIdScenariosScenarioIdWebhookSecret) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/webhook-secret | Выпустить public webhook secret |
| [**postProfilesProfileIdScenariosSimulate()**](ProfilesApi.md#postProfilesProfileIdScenariosSimulate) | **POST** /profiles/{profileId}/scenarios/simulate | Симулировать сценарий |
| [**postProfilesViews()**](ProfilesApi.md#postProfilesViews) | **POST** /profiles/views | Создать вид списка профилей |
| [**putProfilesProfileIdAutoRenew()**](ProfilesApi.md#putProfilesProfileIdAutoRenew) | **PUT** /profiles/{profileId}/auto-renew | Обновить автопродление профиля |
| [**putProfilesProfileIdScenarios()**](ProfilesApi.md#putProfilesProfileIdScenarios) | **PUT** /profiles/{profileId}/scenarios | Создать или обновить сценарий профиля |
| [**putProfilesProfileIdScenariosScenarioIdPresence()**](ProfilesApi.md#putProfilesProfileIdScenariosScenarioIdPresence) | **PUT** /profiles/{profileId}/scenarios/{scenarioId}/presence | Присутствие в редакторе |


## `deleteProfilesProfileId()`

```php
deleteProfilesProfileId($profile_id)
```

Удалить профиль

Скрывает профиль из публичных и runtime API и очищает auth/session. 14 дней поддержка может вернуть карточку профиля (сессию мессенджера нужно подключить заново; история inbox при удалении обычно очищается). После 14 дней — окончательное удаление.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $apiInstance->deleteProfilesProfileId($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

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

## `deleteProfilesProfileIdAuthShare()`

```php
deleteProfilesProfileIdAuthShare($profile_id): \Relaya\Sdk\Model\DeleteProfilesProfileIdAuthShareResponse
```

Отозвать ссылку

Инвалидирует токен.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $result = $apiInstance->deleteProfilesProfileIdAuthShare($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileIdAuthShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

### Return type

[**\Relaya\Sdk\Model\DeleteProfilesProfileIdAuthShareResponse**](../Model/DeleteProfilesProfileIdAuthShareResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfilesProfileIdScenariosScenarioId()`

```php
deleteProfilesProfileIdScenariosScenarioId($profile_id, $scenario_id)
```

Удалить сценарий профиля

Удаляет сценарий по идентификатору в контексте профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->deleteProfilesProfileIdScenariosScenarioId($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileIdScenariosScenarioId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `deleteProfilesProfileIdScenariosScenarioIdPresence()`

```php
deleteProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id)
```

Выйти из редактора

Убрать себя из списка.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->deleteProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileIdScenariosScenarioIdPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `deleteProfilesProfileIdScenariosScenarioIdWebhookSecret()`

```php
deleteProfilesProfileIdScenariosScenarioIdWebhookSecret($profile_id, $scenario_id)
```

Отозвать public webhook secret

Удаляет secret — публичный hook перестаёт работать.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->deleteProfilesProfileIdScenariosScenarioIdWebhookSecret($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileIdScenariosScenarioIdWebhookSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `deleteProfilesViewsViewId()`

```php
deleteProfilesViewsViewId($view_id): \Relaya\Sdk\Model\ProfileListViewDeleteResponseBody
```

Удалить вид списка профилей

Удаляет сохранённый view по id. Недоступные чужие views возвращают 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = 56; // int | Параметр `viewId` из `path`.

try {
    $result = $apiInstance->deleteProfilesViewsViewId($view_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesViewsViewId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **view_id** | **int**| Параметр &#x60;viewId&#x60; из &#x60;path&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\ProfileListViewDeleteResponseBody**](../Model/ProfileListViewDeleteResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfiles()`

```php
getProfiles($limit, $cursor, $q, $integration, $integrations, $connection, $subscription, $readiness, $ownership, $can_manage, $activity, $expiring_within_days, $sort, $order, $view, $include): \Relaya\Sdk\Model\ProfilesListResponseBody
```

Получить список профилей

Возвращает профили текущего аккаунта и их основные параметры. Обычно этот список нужен как главная точка входа в работу с интеграциями Релая.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.
$q = 'q_example'; // string | Поисковая строка для фильтрации списка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$integrations = 'integrations_example'; // string | Параметр `integrations` из `query`.
$connection = 'all'; // string | Параметр `connection` из `query`.
$subscription = 'all'; // string | Параметр `subscription` из `query`.
$readiness = 'all'; // string | Параметр `readiness` из `query`.
$ownership = 'all'; // string | Параметр `ownership` из `query`.
$can_manage = 'all'; // string | Параметр `canManage` из `query`.
$activity = 'all'; // string | Параметр `activity` из `query`.
$expiring_within_days = 56; // int | Параметр `expiringWithinDays` из `query`.
$sort = 'created'; // string | Параметр `sort` из `query`.
$order = desc; // string | Направление сортировки.
$view = 'compact'; // string | Параметр `view` из `query`.
$include = 'include_example'; // string | Параметр `include` из `query`.

try {
    $result = $apiInstance->getProfiles($limit, $cursor, $q, $integration, $integrations, $connection, $subscription, $readiness, $ownership, $can_manage, $activity, $expiring_within_days, $sort, $order, $view, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 50] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |
| **q** | **string**| Поисковая строка для фильтрации списка. | [optional] |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | [optional] |
| **integrations** | **string**| Параметр &#x60;integrations&#x60; из &#x60;query&#x60;. | [optional] |
| **connection** | **string**| Параметр &#x60;connection&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **subscription** | **string**| Параметр &#x60;subscription&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **readiness** | **string**| Параметр &#x60;readiness&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **ownership** | **string**| Параметр &#x60;ownership&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **can_manage** | **string**| Параметр &#x60;canManage&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **activity** | **string**| Параметр &#x60;activity&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **expiring_within_days** | **int**| Параметр &#x60;expiringWithinDays&#x60; из &#x60;query&#x60;. | [optional] |
| **sort** | **string**| Параметр &#x60;sort&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;created&#39;] |
| **order** | **string**| Направление сортировки. | [optional] [default to &#39;desc&#39;] |
| **view** | **string**| Параметр &#x60;view&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;compact&#39;] |
| **include** | **string**| Параметр &#x60;include&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\ProfilesListResponseBody**](../Model/ProfilesListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesIds()`

```php
getProfilesIds($limit, $q, $integration, $integrations, $connection, $subscription, $readiness, $ownership, $can_manage, $activity, $expiring_within_days, $sort, $order, $bulkable): \Relaya\Sdk\Model\ProfilesIDsResponseBody
```

Список profileId по фильтрам

Возвращает только external profile id, совпадающие с текущими фильтрами списка (без cursor payload).  Нужен для select-all-matching и последующего bulk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Максимальное количество элементов в ответе.
$q = 'q_example'; // string | Поисковая строка для фильтрации списка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$integrations = 'integrations_example'; // string | Параметр `integrations` из `query`.
$connection = 'all'; // string | Параметр `connection` из `query`.
$subscription = 'all'; // string | Параметр `subscription` из `query`.
$readiness = 'all'; // string | Параметр `readiness` из `query`.
$ownership = 'all'; // string | Параметр `ownership` из `query`.
$can_manage = 'all'; // string | Параметр `canManage` из `query`.
$activity = 'all'; // string | Параметр `activity` из `query`.
$expiring_within_days = 56; // int | Параметр `expiringWithinDays` из `query`.
$sort = 'created'; // string | Параметр `sort` из `query`.
$order = desc; // string | Направление сортировки.
$bulkable = True; // bool | Параметр `bulkable` из `query`.

try {
    $result = $apiInstance->getProfilesIds($limit, $q, $integration, $integrations, $connection, $subscription, $readiness, $ownership, $can_manage, $activity, $expiring_within_days, $sort, $order, $bulkable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 50] |
| **q** | **string**| Поисковая строка для фильтрации списка. | [optional] |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | [optional] |
| **integrations** | **string**| Параметр &#x60;integrations&#x60; из &#x60;query&#x60;. | [optional] |
| **connection** | **string**| Параметр &#x60;connection&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **subscription** | **string**| Параметр &#x60;subscription&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **readiness** | **string**| Параметр &#x60;readiness&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **ownership** | **string**| Параметр &#x60;ownership&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **can_manage** | **string**| Параметр &#x60;canManage&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **activity** | **string**| Параметр &#x60;activity&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;all&#39;] |
| **expiring_within_days** | **int**| Параметр &#x60;expiringWithinDays&#x60; из &#x60;query&#x60;. | [optional] |
| **sort** | **string**| Параметр &#x60;sort&#x60; из &#x60;query&#x60;. | [optional] [default to &#39;created&#39;] |
| **order** | **string**| Направление сортировки. | [optional] [default to &#39;desc&#39;] |
| **bulkable** | **bool**| Параметр &#x60;bulkable&#x60; из &#x60;query&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\ProfilesIDsResponseBody**](../Model/ProfilesIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileId()`

```php
getProfilesProfileId($profile_id): \Relaya\Sdk\Model\ProfileResponse
```

Получить профиль

Возвращает одну карточку профиля по `profileId`. Подходит для экрана профиля, фона синхронизации и любых точечных проверок его состояния.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $result = $apiInstance->getProfilesProfileId($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdActions()`

```php
getProfilesProfileIdActions($profile_id, $limit, $cursor): \Relaya\Sdk\Model\ProfileActionsListResponseBody
```

Получить журнал действий профиля

Возвращает историю важных действий и событий по профилю. Метод полезен для аудита, поддержки и поиска причин, почему профиль перешел в текущее состояние.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

try {
    $result = $apiInstance->getProfilesProfileIdActions($profile_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 50] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\ProfileActionsListResponseBody**](../Model/ProfileActionsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationContacts()`

```php
getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor): \Relaya\Sdk\Model\ContactsListHumaBody
```

Получить контакты профиля (MAX)

Возвращает список контактов, которые доступны профилю в MAX. Метод удобен для адресной книги, локального поиска и ручной проверки, кого профиль уже видит во внешнем сервисе.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
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
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 200] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\ContactsListHumaBody**](../Model/ContactsListHumaBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationContactsBlocked()`

```php
getProfilesProfileIdIntegrationsIntegrationContactsBlocked($profile_id, $integration, $status, $count, $from): \Relaya\Sdk\Model\MaxBlockedContactsResponseBody
```

Получить заблокированные контакты (MAX)

Возвращает контакты, которые помечены как заблокированные в MAX. Обычно это нужно для модерации, диагностики проблем с доставкой и служебных экранов поддержки.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$status = active; // string | Фильтр по статусу сущности.
$count = 3; // int | Параметр `count` из `query`.
$from = 2026-04-01; // int | Начало диапазона. Используйте дату `YYYY-MM-DD` или RFC3339, если это указано в описании метода.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContactsBlocked($profile_id, $integration, $status, $count, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationContactsBlocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **status** | **string**| Фильтр по статусу сущности. | [optional] |
| **count** | **int**| Параметр &#x60;count&#x60; из &#x60;query&#x60;. | [optional] |
| **from** | **int**| Начало диапазона. Используйте дату &#x60;YYYY-MM-DD&#x60; или RFC3339, если это указано в описании метода. | [optional] |

### Return type

[**\Relaya\Sdk\Model\MaxBlockedContactsResponseBody**](../Model/MaxBlockedContactsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationOverview()`

```php
getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\ProfileOverviewBody
```

Получить обзор профиля

Возвращает сводную информацию о профиле в выбранной интеграции. Это хороший маршрут для стартового экрана профиля, где нужны ключевые данные без лишних деталей.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
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
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationOverview: ', $e->getMessage(), PHP_EOL;
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

[**\Relaya\Sdk\Model\ProfileOverviewBody**](../Model/ProfileOverviewBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationStatus()`

```php
getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\StateProfileBody
```

Получить статус профиля

Показывает, в каком состоянии сейчас находится профиль во внешней интеграции: авторизован ли он, запущен ли процесс профиля и нет ли очевидных проблем со связью. Удобно для диагностики и автообновления интерфейса.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
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
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationStatus: ', $e->getMessage(), PHP_EOL;
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

[**\Relaya\Sdk\Model\StateProfileBody**](../Model/StateProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdQuotas()`

```php
getProfilesProfileIdQuotas($profile_id): \Relaya\Sdk\Model\QuotasListResponseBody
```

Квоты профиля

Лимиты и расход: сообщения, файлы, вебхуки, чаты, контакты.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $result = $apiInstance->getProfilesProfileIdQuotas($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdQuotas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

### Return type

[**\Relaya\Sdk\Model\QuotasListResponseBody**](../Model/QuotasListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdScenarios()`

```php
getProfilesProfileIdScenarios($profile_id)
```

Получить сценарии профиля

Возвращает сценарии аккаунта в контексте выбранного профиля. Используется конструктором ботов в панели.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $apiInstance->getProfilesProfileIdScenarios($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdScenarios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

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

## `getProfilesProfileIdScenariosScenarioIdAnalytics()`

```php
getProfilesProfileIdScenariosScenarioIdAnalytics($profile_id, $scenario_id)
```

Аналитика воронки сценария

Агрегирует запуски за N дней: статусы runs и funnel по узлам (total/passed/failed/errors, avg duration).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->getProfilesProfileIdScenariosScenarioIdAnalytics($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdScenariosScenarioIdAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `getProfilesProfileIdScenariosScenarioIdPresence()`

```php
getProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id)
```

Кто в редакторе

Участники совместного редактирования.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->getProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdScenariosScenarioIdPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `getProfilesProfileIdScenariosScenarioIdRuns()`

```php
getProfilesProfileIdScenariosScenarioIdRuns($profile_id, $scenario_id)
```

Список запусков сценария

Возвращает историю запусков (execution traces) сценария: статус, время старта, число шагов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->getProfilesProfileIdScenariosScenarioIdRuns($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdScenariosScenarioIdRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `getProfilesProfileIdScenariosScenarioIdRunsTraceId()`

```php
getProfilesProfileIdScenariosScenarioIdRunsTraceId($profile_id, $scenario_id, $trace_id)
```

Детали запуска сценария

Возвращает полный trace запуска: шаги узлов, ошибки, длительности. Источник истины — БД.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.
$trace_id = 'trace_id_example'; // string | Идентификатор трассы или запуска сценария.

try {
    $apiInstance->getProfilesProfileIdScenariosScenarioIdRunsTraceId($profile_id, $scenario_id, $trace_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdScenariosScenarioIdRunsTraceId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |
| **trace_id** | **string**| Идентификатор трассы или запуска сценария. | |

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

## `getProfilesViews()`

```php
getProfilesViews(): \Relaya\Sdk\Model\ProfileListViewsResponseBody
```

Сохранённые виды списка профилей

Возвращает именованные filter/sort presets пользователя для экрана профилей.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProfilesViews();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\ProfileListViewsResponseBody**](../Model/ProfileListViewsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileId()`

```php
patchProfilesProfileId($profile_id, $update_profile_input_body): \Relaya\Sdk\Model\ProfileResponse
```

Обновить профиль

Меняет редактируемые поля профиля Релая. Используйте метод для изменения имени и других управляемых параметров профиля на стороне платформы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$update_profile_input_body = {"$schema":"https://localhost:8485/v1/schemas/UpdateProfileInputBody.json","name":"Основной профиль"}; // \Relaya\Sdk\Model\UpdateProfileInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->patchProfilesProfileId($profile_id, $update_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->patchProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **update_profile_input_body** | [**\Relaya\Sdk\Model\UpdateProfileInputBody**](../Model/UpdateProfileInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationAccountProfile()`

```php
patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body): \Relaya\Sdk\Model\MaxSetProfileResponseBody
```

Обновить имя и описание профиля в MAX

Меняет публичные данные профиля на стороне MAX. Подходит для случаев, когда нужно синхронизировать отображаемое имя или описание с тем, что видят собеседники.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_set_profile_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxSetProfileInputBody.json","description":"example","firstName":"example","lastName":"example"}; // \Relaya\Sdk\Model\MaxSetProfileInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->patchProfilesProfileIdIntegrationsIntegrationAccountProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_set_profile_input_body** | [**\Relaya\Sdk\Model\MaxSetProfileInputBody**](../Model/MaxSetProfileInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxSetProfileResponseBody**](../Model/MaxSetProfileResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfiles()`

```php
postProfiles($create_profile_input_body): \Relaya\Sdk\Model\ProfileResponse
```

Создать профиль

Создает новый профиль интеграции и возвращает его карточку. После этого профиль можно авторизовать, настраивать и использовать в сообщениях, inbox и вебхуках.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_profile_input_body = {"$schema":"https://localhost:8485/v1/schemas/CreateProfileInputBody.json","integrationType":"max","name":"Основной профиль","planTier":"pro","promoCode":"example"}; // \Relaya\Sdk\Model\CreateProfileInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfiles($create_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_profile_input_body** | [**\Relaya\Sdk\Model\CreateProfileInputBody**](../Model/CreateProfileInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesBulk()`

```php
postProfilesBulk($profiles_bulk_input_body): \Relaya\Sdk\Model\ProfilesBulkOutputBody
```

Массовые действия над профилями

Выполняет bulk-операции (pause, resume, delete, assign team) по списку profileId или filter fingerprint.  Используется панелью для select-all-matching и массового управления флотом профилей.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profiles_bulk_input_body = {"$schema":"https://localhost:8485/v1/schemas/ProfilesBulkInputBody.json","action":"archive","count":3,"integrationType":"max","match":{"activity":"all","canManage":"all","connection":"all","expiringWithinDays":1,"integrations":[],"limit":50,"ownership":"all","q":"example","readiness":"all","subscription":"all"},"name":"Основной профиль","planTier":"pro","profileIds":["example"],"promoCode":"example","uniqueNames":true}; // \Relaya\Sdk\Model\ProfilesBulkInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesBulk($profiles_bulk_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profiles_bulk_input_body** | [**\Relaya\Sdk\Model\ProfilesBulkInputBody**](../Model/ProfilesBulkInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfilesBulkOutputBody**](../Model/ProfilesBulkOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdAuthShare()`

```php
postProfilesProfileIdAuthShare($profile_id, $create_auth_share_body): \Relaya\Sdk\Model\CreateAuthShareResponse
```

Ссылка на авторизацию

Временный токен для QR/2FA другому оператору.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$create_auth_share_body = {"$schema":"https://localhost:8485/v1/schemas/CreateAuthShareBody.json","ttlMinutes":1}; // \Relaya\Sdk\Model\CreateAuthShareBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdAuthShare($profile_id, $create_auth_share_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdAuthShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **create_auth_share_body** | [**\Relaya\Sdk\Model\CreateAuthShareBody**](../Model/CreateAuthShareBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\CreateAuthShareResponse**](../Model/CreateAuthShareResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAvatar()`

```php
postProfilesProfileIdIntegrationsIntegrationAvatar($profile_id, $integration)
```

Обновить аватар профиля (MAX)

Сохраняет новый аватар профиля в MAX. Обычно этот маршрут используют из настроек профиля или для синхронизации внешнего брендинга.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.

try {
    $apiInstance->postProfilesProfileIdIntegrationsIntegrationAvatar($profile_id, $integration);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationAvatar: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit()`

```php
postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit($profile_id, $integration, $max_web_app_init_input_body): \Relaya\Sdk\Model\MaxWebAppInitResponseBody
```

Инициализировать MAX bot web app

Открывает bot web app от имени личного MAX-профиля через opcode 160 и возвращает init data или полный сырой ответ MAX. Передайте `botId`, `chatId` и, если нужен deep-link сценарий, `startParam`. Дополнительно: `requestContact()` — поддерживаются поля `phone`, `authDate` и `hash`.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_web_app_init_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxWebAppInitInputBody.json","authDate":1,"botId":"example","chatId":"chat:1234567890","hash":"example","payload":{"key":"value"},"phone":"+79991234567","startParam":"example"}; // \Relaya\Sdk\Model\MaxWebAppInitInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit($profile_id, $integration, $max_web_app_init_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_web_app_init_input_body** | [**\Relaya\Sdk\Model\MaxWebAppInitInputBody**](../Model/MaxWebAppInitInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxWebAppInitResponseBody**](../Model/MaxWebAppInitResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationCallsByPeer()`

```php
postProfilesProfileIdIntegrationsIntegrationCallsByPeer($profile_id, $integration, $request_body): array<string,mixed>
```

Получить group call Telegram по чату

Находит активный group call или livestream по указанному чату Telegram и возвращает его состояние вместе с участниками. Метод полезен для администрирования звонков и live-комнат.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {"key":"value"}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationCallsByPeer($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationCallsByPeer: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationCallsGet()`

```php
postProfilesProfileIdIntegrationsIntegrationCallsGet($profile_id, $integration, $request_body): array<string,mixed>
```

Получить состояние Telegram group call

Возвращает состояние group call Telegram по `callId` и `accessHash` или через peer, если звонок связан с чатом. Подходит для периодического опроса состояния и участников звонка.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationCallsGet($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationCallsGet: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationCallsJoin()`

```php
postProfilesProfileIdIntegrationsIntegrationCallsJoin($profile_id, $integration, $request_body): array<string,mixed>
```

Присоединиться к Telegram group call

Подключает текущий аккаунт к Telegram group call или livestream через MTProto. Для WebRTC-сценариев маршрут принимает параметры подключения и peer, от имени которого нужно войти.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationCallsJoin($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationCallsJoin: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationCallsLeave()`

```php
postProfilesProfileIdIntegrationsIntegrationCallsLeave($profile_id, $integration, $request_body): array<string,mixed>
```

Покинуть Telegram group call

Отключает текущий аккаунт от Telegram group call или livestream. Используйте маршрут для корректного выхода из звонка и освобождения server-side состояния участника.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationCallsLeave($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationCallsLeave: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationContactsAdd()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsAdd($profile_id, $integration, $max_contact_add_input_body): \Relaya\Sdk\Model\MaxContactAddResponseBody
```

Добавить контакт в MAX

Добавляет пользователя в контакты текущего MAX-профиля по `contactId` или предварительно ищет его по телефону. Метод полезен перед приглашением в канал или группу, когда внешний сценарий начинает с номера телефона.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_contact_add_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxContactAddInputBody.json","contactId":1,"phone":"+79991234567"}; // \Relaya\Sdk\Model\MaxContactAddInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsAdd($profile_id, $integration, $max_contact_add_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_contact_add_input_body** | [**\Relaya\Sdk\Model\MaxContactAddInputBody**](../Model/MaxContactAddInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxContactAddResponseBody**](../Model/MaxContactAddResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsByIds()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsByIds($profile_id, $integration, $max_contacts_by_ids_input_body): \Relaya\Sdk\Model\MaxContactsByIDsResponseBody
```

Получить контакты по ID (MAX)

Возвращает карточки контактов одним запросом по набору ID. Удобно, когда идентификаторы уже известны и нужно быстро подтянуть имена, телефоны и другие сведения.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_contacts_by_ids_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxContactsByIDsInputBody.json","contactIds":[1]}; // \Relaya\Sdk\Model\MaxContactsByIDsInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsByIds($profile_id, $integration, $max_contacts_by_ids_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_contacts_by_ids_input_body** | [**\Relaya\Sdk\Model\MaxContactsByIDsInputBody**](../Model/MaxContactsByIDsInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsByIDsResponseBody**](../Model/MaxContactsByIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsCheck()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsCheck($profile_id, $integration, $contact_check_input_body): \Relaya\Sdk\Model\ContactCheckResponseBody
```

Проверить, существует ли контакт

Проверяет адресата по телефону или username и сообщает, найден ли он в интеграции. Это удобный маршрут для предварительной валидации перед отправкой сообщения или созданием диалога.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$contact_check_input_body = {"$schema":"https://localhost:8485/v1/schemas/ContactCheckInputBody.json","phone":"+79991234567","refresh":true,"username":"example"}; // \Relaya\Sdk\Model\ContactCheckInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsCheck($profile_id, $integration, $contact_check_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **contact_check_input_body** | [**\Relaya\Sdk\Model\ContactCheckInputBody**](../Model/ContactCheckInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ContactCheckResponseBody**](../Model/ContactCheckResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsLastOnline()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsLastOnline($profile_id, $integration, $max_contacts_last_online_input_body): \Relaya\Sdk\Model\MaxContactsLastOnlineResponseBody
```

Получить время последней активности контактов (MAX)

Возвращает last online для выбранных контактов. Обычно этот метод используют в интерфейсах операторов, карточках контактов и служебных скриптах анализа активности.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$max_contacts_last_online_input_body = {"$schema":"https://localhost:8485/v1/schemas/MaxContactsLastOnlineInputBody.json","contactIds":[1]}; // \Relaya\Sdk\Model\MaxContactsLastOnlineInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline($profile_id, $integration, $max_contacts_last_online_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **max_contacts_last_online_input_body** | [**\Relaya\Sdk\Model\MaxContactsLastOnlineInputBody**](../Model/MaxContactsLastOnlineInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsLastOnlineResponseBody**](../Model/MaxContactsLastOnlineResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsSearch()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsSearch($profile_id, $integration, $search_contact_input_body): \Relaya\Sdk\Model\SearchContactResponseBody
```

Найти контакт по телефону или username

Ищет адресата по телефону или username и возвращает краткую сводку по найденному контакту. Полезно, когда у вас еще нет `chatId`, но нужно понять, можно ли сразу писать человеку.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$search_contact_input_body = {"$schema":"https://localhost:8485/v1/schemas/SearchContactInputBody.json","phone":"+79991234567","refresh":true,"username":"example"}; // \Relaya\Sdk\Model\SearchContactInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsSearch($profile_id, $integration, $search_contact_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **integration** | **string**| Код интеграции профиля: например &#x60;max&#x60;, &#x60;vk&#x60;, &#x60;telegram&#x60;, &#x60;telegrambot&#x60;, &#x60;maxbot&#x60;, &#x60;whatsapp&#x60; или &#x60;email&#x60;. | |
| **search_contact_input_body** | [**\Relaya\Sdk\Model\SearchContactInputBody**](../Model/SearchContactInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\SearchContactResponseBody**](../Model/SearchContactResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationForumsToggle()`

```php
postProfilesProfileIdIntegrationsIntegrationForumsToggle($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить режим форума в Telegram

Включает или отключает форумный режим в Telegram-супергруппе, а также поддерживает переключение режима просмотра `view as messages`. Подходит для администрирования тематических чатов.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationForumsToggle($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationForumsToggle: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationReboot()`

```php
postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration, $limit, $offset): \Relaya\Sdk\Model\RebootProfileBody
```

Перезапустить профиль (MAX)

Перезапускает процесс выбранного MAX-профиля. Обычно это делают после зависшей сессии, проблем с авторизацией или нестабильного соединения.  Только MAX (`integration=max`).  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
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
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationReboot: ', $e->getMessage(), PHP_EOL;
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

[**\Relaya\Sdk\Model\RebootProfileBody**](../Model/RebootProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationStories()`

```php
postProfilesProfileIdIntegrationsIntegrationStories($profile_id, $integration, $request_body): array<string,mixed>
```

Получить активные Telegram stories

Возвращает активные stories Telegram по доступным peers, включая пагинацию и скрытую ленту. Это полезно для клиентских витрин историй и мониторинга сторис-активности.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationStories($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationStories: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationStoriesPeer()`

```php
postProfilesProfileIdIntegrationsIntegrationStoriesPeer($profile_id, $integration, $request_body): array<string,mixed>
```

Получить stories конкретного Telegram peer

Возвращает stories конкретного пользователя, канала или чата Telegram. Подходит для детального просмотра сторис выбранного peer без загрузки общей ленты.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationStoriesPeer($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationStoriesPeer: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationStoriesReaction()`

```php
postProfilesProfileIdIntegrationsIntegrationStoriesReaction($profile_id, $integration, $request_body): array<string,mixed>
```

Поставить реакцию на Telegram story

Добавляет или очищает реакцию на story в Telegram. Подходит для UI со сторис-реакциями и серверной синхронизации пользовательских действий.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationStoriesReaction($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationStoriesReaction: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationStoriesRead()`

```php
postProfilesProfileIdIntegrationsIntegrationStoriesRead($profile_id, $integration, $request_body): array<string,mixed>
```

Отметить Telegram stories как просмотренные

Помечает stories выбранного Telegram peer просмотренными до указанного `maxId`. Это позволяет синхронизировать состояние просмотра между Релая и клиентом Telegram.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationStoriesRead($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationStoriesRead: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationStoriesSend()`

```php
postProfilesProfileIdIntegrationsIntegrationStoriesSend($profile_id, $integration, $request_body): array<string,mixed>
```

Опубликовать Telegram story

Публикует новую story в Telegram от имени текущего аккаунта или канала. Маршрут нужен для отложенных публикаций, редакторских инструментов и интеграций с медиапотоком.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationStoriesSend($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationStoriesSend: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationTopics()`

```php
postProfilesProfileIdIntegrationsIntegrationTopics($profile_id, $integration, $request_body): array<string,mixed>
```

Получить список Telegram forum topics

Возвращает topics выбранного Telegram-форума с их статусом, счетчиками непрочитанного и черновиками. Используйте метод для экранов навигации по темам и операторских списков.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationTopics($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationTopics: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationTopicsCreate()`

```php
postProfilesProfileIdIntegrationsIntegrationTopicsCreate($profile_id, $integration, $request_body): array<string,mixed>
```

Создать Telegram forum topic

Создает новую тему в Telegram-форуме. Маршрут нужен для административных интерфейсов и систем, которые программно раскладывают переписку по темам.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationTopicsCreate($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationTopicsCreate: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationTopicsDelete()`

```php
postProfilesProfileIdIntegrationsIntegrationTopicsDelete($profile_id, $integration, $request_body): array<string,mixed>
```

Удалить историю Telegram forum topic

Удаляет историю сообщений внутри выбранной темы Telegram-форума. Используйте маршрут для очистки тестовых тем или служебной модерации содержимого.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationTopicsDelete($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationTopicsDelete: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationTopicsEdit()`

```php
postProfilesProfileIdIntegrationsIntegrationTopicsEdit($profile_id, $integration, $request_body): array<string,mixed>
```

Изменить Telegram forum topic

Обновляет заголовок, иконку и состояние темы Telegram-форума. Метод подходит для закрытия, скрытия и переименования тем без ручной работы в клиенте Telegram.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationTopicsEdit($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationTopicsEdit: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdIntegrationsIntegrationTopicsReorder()`

```php
postProfilesProfileIdIntegrationsIntegrationTopicsReorder($profile_id, $integration, $request_body): array<string,mixed>
```

Переупорядочить закрепленные Telegram forum topics

Меняет порядок закрепленных тем Telegram-форума. Подходит для интерфейсов, где важен контролируемый порядок тем для операторов или конечных пользователей.  JWT пользователя или API-токен профиля.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$request_body = {key=value}; // array<string,mixed> | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationTopicsReorder($profile_id, $integration, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationTopicsReorder: ', $e->getMessage(), PHP_EOL;
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

## `postProfilesProfileIdRenew()`

```php
postProfilesProfileIdRenew($profile_id, $renew_profile_input_body): \Relaya\Sdk\Model\ProfileRenewOutputBody
```

Продлить профиль

Сразу продлевает оплаченный период профиля вручную. Подходит для явного продления из кабинета без ожидания фонового автосписания.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$renew_profile_input_body = {"$schema":"https://localhost:8485/v1/schemas/RenewProfileInputBody.json","promoCode":"example"}; // \Relaya\Sdk\Model\RenewProfileInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesProfileIdRenew($profile_id, $renew_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **renew_profile_input_body** | [**\Relaya\Sdk\Model\RenewProfileInputBody**](../Model/RenewProfileInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfileRenewOutputBody**](../Model/ProfileRenewOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdScenariosAiDraft()`

```php
postProfilesProfileIdScenariosAiDraft($profile_id)
```

AI-черновик сценария

Генерирует или улучшает граф сценария по текстовому описанию (JSON nodes/edges). При недоступности AI — детерминированный fallback.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $apiInstance->postProfilesProfileIdScenariosAiDraft($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosAiDraft: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

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

## `postProfilesProfileIdScenariosScenarioIdPublish()`

```php
postProfilesProfileIdScenariosScenarioIdPublish($profile_id, $scenario_id)
```

Опубликовать черновик сценария

Копирует definition_json (draft) в published_definition_json. Runtime enabled-сценариев исполняет published-граф.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->postProfilesProfileIdScenariosScenarioIdPublish($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosScenarioIdPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `postProfilesProfileIdScenariosScenarioIdRollback()`

```php
postProfilesProfileIdScenariosScenarioIdRollback($profile_id, $scenario_id)
```

Откатить черновик к published

Восстанавливает definition_json из последней published-версии (one-click rollback).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->postProfilesProfileIdScenariosScenarioIdRollback($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosScenarioIdRollback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents()`

```php
postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents($profile_id, $scenario_id, $trace_id)
```

Возобновить ожидающий сценарий

Снимает pending wait (waitId или traceId) и продолжает граф. Используется для action.wait_event после внешнего события.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.
$trace_id = 'trace_id_example'; // string | Идентификатор трассы или запуска сценария.

try {
    $apiInstance->postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents($profile_id, $scenario_id, $trace_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |
| **trace_id** | **string**| Идентификатор трассы или запуска сценария. | |

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

## `postProfilesProfileIdScenariosScenarioIdWebhook()`

```php
postProfilesProfileIdScenariosScenarioIdWebhook($profile_id, $scenario_id)
```

Запустить сценарий вебхуком

Синтетический inbound (text/chatId/vars) для trigger.webhook и внешних систем. Требует Bearer и активный модуль.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->postProfilesProfileIdScenariosScenarioIdWebhook($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosScenarioIdWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `postProfilesProfileIdScenariosScenarioIdWebhookSecret()`

```php
postProfilesProfileIdScenariosScenarioIdWebhookSecret($profile_id, $scenario_id)
```

Выпустить public webhook secret

Генерирует secret для POST /v1/public/scenarios/hook/{secret} без JWT. Храните secret как credential.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->postProfilesProfileIdScenariosScenarioIdWebhookSecret($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosScenarioIdWebhookSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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

## `postProfilesProfileIdScenariosSimulate()`

```php
postProfilesProfileIdScenariosSimulate($profile_id)
```

Симулировать сценарий

Сухой прогон графа (nodes/edges + текст) тем же interpreter, без отправок, meters и durable waits. Для вкладки «Проверка» в панели.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $apiInstance->postProfilesProfileIdScenariosSimulate($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdScenariosSimulate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

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

## `postProfilesViews()`

```php
postProfilesViews($profile_list_view_create_input_body): \Relaya\Sdk\Model\ProfileListViewBody
```

Создать вид списка профилей

Сохраняет текущий filter/sort fingerprint как именованный view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_list_view_create_input_body = {"$schema":"https://localhost:8485/v1/schemas/ProfileListViewCreateInputBody.json","isTeam":true,"name":"Основной профиль"}; // \Relaya\Sdk\Model\ProfileListViewCreateInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->postProfilesViews($profile_list_view_create_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_list_view_create_input_body** | [**\Relaya\Sdk\Model\ProfileListViewCreateInputBody**](../Model/ProfileListViewCreateInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfileListViewBody**](../Model/ProfileListViewBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdAutoRenew()`

```php
putProfilesProfileIdAutoRenew($profile_id, $update_profile_auto_renew_input_body): \Relaya\Sdk\Model\ProfileRenewOutputBody
```

Обновить автопродление профиля

Включает или отключает автопродление для выбранного профиля. Обычно этот метод используют в биллинговых настройках или при ручном управлении продлением.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$update_profile_auto_renew_input_body = {"$schema":"https://localhost:8485/v1/schemas/UpdateProfileAutoRenewInputBody.json","autoRenew":true}; // \Relaya\Sdk\Model\UpdateProfileAutoRenewInputBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putProfilesProfileIdAutoRenew($profile_id, $update_profile_auto_renew_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileIdAutoRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **update_profile_auto_renew_input_body** | [**\Relaya\Sdk\Model\UpdateProfileAutoRenewInputBody**](../Model/UpdateProfileAutoRenewInputBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\ProfileRenewOutputBody**](../Model/ProfileRenewOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdScenarios()`

```php
putProfilesProfileIdScenarios($profile_id)
```

Создать или обновить сценарий профиля

Сохраняет граф сценария (nodes/edges). Включение (enabled=true) требует активный модуль Сценарии и учитывает лимит enabled_scenarios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.

try {
    $apiInstance->putProfilesProfileIdScenarios($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileIdScenarios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |

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

## `putProfilesProfileIdScenariosScenarioIdPresence()`

```php
putProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id)
```

Присутствие в редакторе

Heartbeat.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$scenario_id = 'scenario_id_example'; // string | Идентификатор сценария.

try {
    $apiInstance->putProfilesProfileIdScenariosScenarioIdPresence($profile_id, $scenario_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileIdScenariosScenarioIdPresence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка. | |
| **scenario_id** | **string**| Идентификатор сценария. | |

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
