# Relaya\Sdk\SessionsApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#deleteProfilesProfileIdIntegrationsIntegrationSession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Clear integration session |
| [**deleteUsersMeSessionsSessionId()**](SessionsApi.md#deleteUsersMeSessionsSessionId) | **DELETE** /users/me/sessions/{sessionId} | Revoke session |
| [**getProfilesProfileIdIntegrationsIntegrationDevices()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationDevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | List active MAX devices |
| [**getProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Get integration session |
| [**getProfilesProfileIdIntegrationsIntegrationSessionChats()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSessionChats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Get integration chats |
| [**getProfilesProfileIdIntegrationsIntegrationSessions()**](SessionsApi.md#getProfilesProfileIdIntegrationsIntegrationSessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | List active MAX sessions/devices |
| [**getUsersMeSessions()**](SessionsApi.md#getUsersMeSessions) | **GET** /users/me/sessions | List user sessions |
| [**postProfilesProfileIdIntegrationsIntegrationSessionEvents()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionEvents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Get integration events |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStart()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Start integration session |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStop()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Stop integration session |
| [**postProfilesProfileIdIntegrationsIntegrationSync()**](SessionsApi.md#postProfilesProfileIdIntegrationsIntegrationSync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Sync integration profile |
| [**postUsersMeSessionsRevokeAll()**](SessionsApi.md#postUsersMeSessionsRevokeAll) | **POST** /users/me/sessions/revoke-all | Revoke all sessions |
| [**postUsersMeSessionsRevokeOthers()**](SessionsApi.md#postUsersMeSessionsRevokeOthers) | **POST** /users/me/sessions/revoke-others | Revoke other sessions |
| [**putProfilesProfileIdIntegrationsIntegrationSession()**](SessionsApi.md#putProfilesProfileIdIntegrationsIntegrationSession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Set integration session |


## `deleteProfilesProfileIdIntegrationsIntegrationSession()`

```php
deleteProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration): \Relaya\Sdk\Model\SessionClearResponseBody
```

Clear integration session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->deleteProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\SessionClearResponseBody**](../Model/SessionClearResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUsersMeSessionsSessionId()`

```php
deleteUsersMeSessionsSessionId($session_id)
```

Revoke session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | Session ID

try {
    $apiInstance->deleteUsersMeSessionsSessionId($session_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->deleteUsersMeSessionsSessionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| Session ID | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationDevices()`

```php
getProfilesProfileIdIntegrationsIntegrationDevices($profile_id, $integration): \Relaya\Sdk\Model\MaxSessionsResponseBody
```

List active MAX devices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

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
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\MaxSessionsResponseBody**](../Model/MaxSessionsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSession()`

```php
getProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration): \Relaya\Sdk\Model\SessionGetResponseBody
```

Get integration session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\SessionGetResponseBody**](../Model/SessionGetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSessionChats()`

```php
getProfilesProfileIdIntegrationsIntegrationSessionChats($profile_id, $integration): \Relaya\Sdk\Model\SessionChatsResponseBody
```

Get integration chats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSessionChats($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getProfilesProfileIdIntegrationsIntegrationSessionChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\SessionChatsResponseBody**](../Model/SessionChatsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

List active MAX sessions/devices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

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
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\MaxSessionsResponseBody**](../Model/MaxSessionsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersMeSessions()`

```php
getUsersMeSessions(): \Relaya\Sdk\Model\SessionsListResponseBody
```

List user sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMeSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->getUsersMeSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\SessionsListResponseBody**](../Model/SessionsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSessionEvents()`

```php
postProfilesProfileIdIntegrationsIntegrationSessionEvents($profile_id, $integration): \Relaya\Sdk\Model\SessionEventsResponseBody
```

Get integration events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationSessionEvents($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postProfilesProfileIdIntegrationsIntegrationSessionEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\SessionEventsResponseBody**](../Model/SessionEventsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Start integration session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram, whatsapp)
$session_start_input_body = new \Relaya\Sdk\Model\SessionStartInputBody(); // \Relaya\Sdk\Model\SessionStartInputBody

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
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram, whatsapp) | |
| **session_start_input_body** | [**\Relaya\Sdk\Model\SessionStartInputBody**](../Model/SessionStartInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SessionStartResponseBody**](../Model/SessionStartResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Stop integration session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram, whatsapp)
$session_action_input_body = new \Relaya\Sdk\Model\SessionActionInputBody(); // \Relaya\Sdk\Model\SessionActionInputBody

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
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram, whatsapp) | |
| **session_action_input_body** | [**\Relaya\Sdk\Model\SessionActionInputBody**](../Model/SessionActionInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SessionStopResponseBody**](../Model/SessionStopResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationSync()`

```php
postProfilesProfileIdIntegrationsIntegrationSync($profile_id, $integration, $sync_profile_input_body): \Relaya\Sdk\Model\SyncProfileResponseBody
```

Sync integration profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type
$sync_profile_input_body = new \Relaya\Sdk\Model\SyncProfileInputBody(); // \Relaya\Sdk\Model\SyncProfileInputBody

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
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type | |
| **sync_profile_input_body** | [**\Relaya\Sdk\Model\SyncProfileInputBody**](../Model/SyncProfileInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SyncProfileResponseBody**](../Model/SyncProfileResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeSessionsRevokeAll()`

```php
postUsersMeSessionsRevokeAll()
```

Revoke all sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postUsersMeSessionsRevokeAll();
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postUsersMeSessionsRevokeAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeSessionsRevokeOthers()`

```php
postUsersMeSessionsRevokeOthers()
```

Revoke other sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postUsersMeSessionsRevokeOthers();
} catch (Exception $e) {
    echo 'Exception when calling SessionsApi->postUsersMeSessionsRevokeOthers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProfilesProfileIdIntegrationsIntegrationSession()`

```php
putProfilesProfileIdIntegrationsIntegrationSession($profile_id, $integration, $session_data_input_body): \Relaya\Sdk\Model\SessionSetResponseBody
```

Set integration session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');

// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\SessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram, whatsapp)
$session_data_input_body = new \Relaya\Sdk\Model\SessionDataInputBody(); // \Relaya\Sdk\Model\SessionDataInputBody

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
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram, whatsapp) | |
| **session_data_input_body** | [**\Relaya\Sdk\Model\SessionDataInputBody**](../Model/SessionDataInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SessionSetResponseBody**](../Model/SessionSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
