# Relaya\Sdk\IntegrationsApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationSession()**](IntegrationsApi.md#deleteProfilesProfileIdIntegrationsIntegrationSession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Clear integration session |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQr()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Get auth QR |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQrStatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Get QR auth status |
| [**getProfilesProfileIdIntegrationsIntegrationInboxConversations()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationInboxConversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | List inbox conversations |
| [**getProfilesProfileIdIntegrationsIntegrationInboxMessages()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationInboxMessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | List inbox messages |
| [**getProfilesProfileIdIntegrationsIntegrationOverview()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationOverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Get profile overview |
| [**getProfilesProfileIdIntegrationsIntegrationSession()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationSession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Get integration session |
| [**getProfilesProfileIdIntegrationsIntegrationSessionChats()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationSessionChats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Get integration chats |
| [**getProfilesProfileIdIntegrationsIntegrationStatus()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationStatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Get profile status |
| [**getProfilesProfileIdIntegrationsIntegrationToken()**](IntegrationsApi.md#getProfilesProfileIdIntegrationsIntegrationToken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Get bot token |
| [**postProfilesProfileIdIntegrationsIntegrationAuth2fa()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationAuth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Submit 2FA password |
| [**postProfilesProfileIdIntegrationsIntegrationAuthLogout()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationAuthLogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Logout profile |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Confirm phone auth code |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Submit phone auth password |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Start phone auth |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Inbox conversation action |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Inbox conversation avatar |
| [**postProfilesProfileIdIntegrationsIntegrationInboxRead()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationInboxRead) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Mark inbox read |
| [**postProfilesProfileIdIntegrationsIntegrationMessages()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Send message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesDelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Delete message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesEdit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Edit message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesForward()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesForward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Forward message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesHistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Get chat history |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReply()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Reply message |
| [**postProfilesProfileIdIntegrationsIntegrationSessionEvents()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionEvents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Get integration events |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStart()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Start integration session |
| [**postProfilesProfileIdIntegrationsIntegrationSessionStop()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationSessionStop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Stop integration session |
| [**postProfilesProfileIdIntegrationsIntegrationSync()**](IntegrationsApi.md#postProfilesProfileIdIntegrationsIntegrationSync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Sync integration profile |
| [**profilesProfileIdIntegrationsIntegrationMessagesFilesPost()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationMessagesFilesPost) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Upload file |
| [**profilesProfileIdIntegrationsIntegrationWebhooksCheckPost()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksCheckPost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/check | Check webhook endpoint |
| [**profilesProfileIdIntegrationsIntegrationWebhooksDlqGet()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksDlqGet) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/dlq | List webhook DLQ |
| [**profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/dlq/redrive | Redrive webhook DLQ |
| [**profilesProfileIdIntegrationsIntegrationWebhooksGet()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksGet) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks | List webhooks |
| [**profilesProfileIdIntegrationsIntegrationWebhooksIdDelete()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksIdDelete) | **DELETE** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Delete webhook |
| [**profilesProfileIdIntegrationsIntegrationWebhooksIdGet()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksIdGet) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Get webhook |
| [**profilesProfileIdIntegrationsIntegrationWebhooksIdPatch()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksIdPatch) | **PATCH** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Update webhook |
| [**profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/{id}/test | Test webhook |
| [**profilesProfileIdIntegrationsIntegrationWebhooksPost()**](IntegrationsApi.md#profilesProfileIdIntegrationsIntegrationWebhooksPost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks | Create webhook |
| [**putProfilesProfileIdIntegrationsIntegrationSession()**](IntegrationsApi.md#putProfilesProfileIdIntegrationsIntegrationSession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Set integration session |
| [**putProfilesProfileIdIntegrationsIntegrationToken()**](IntegrationsApi.md#putProfilesProfileIdIntegrationsIntegrationToken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Set bot token |


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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->deleteProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationAuthQr()`

```php
getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id): mixed
```

Get auth QR

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$track_id = 'track_id_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationAuthQr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **track_id** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Get QR auth status

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram, whatsapp)
$track_id = 'track_id_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram, whatsapp) | |
| **track_id** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\QRStatusResponseBody**](../Model/QRStatusResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationInboxConversations()`

```php
getProfilesProfileIdIntegrationsIntegrationInboxConversations($profile_id, $integration, $limit, $cursor): \Relaya\Sdk\Model\InboxConversationsListResponseBody
```

List inbox conversations

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (max, maxbot, telegrambot, telegram, vk)
$limit = 50; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationInboxConversations($profile_id, $integration, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (max, maxbot, telegrambot, telegram, vk) | |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\InboxConversationsListResponseBody**](../Model/InboxConversationsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

List inbox messages

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (max, maxbot, telegrambot, telegram, vk)
$chat_id = 'chat_id_example'; // string
$limit = 50; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationInboxMessages($profile_id, $integration, $chat_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (max, maxbot, telegrambot, telegram, vk) | |
| **chat_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\InboxMessagesListResponseBody**](../Model/InboxMessagesListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationOverview()`

```php
getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration): mixed
```

Get profile overview

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

**mixed**

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationSessionChats: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationStatus()`

```php
getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration): \Relaya\Sdk\Model\StateProfileBody
```

Get profile status

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\StateProfileBody**](../Model/StateProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Get bot token

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (maxbot, telegrambot, vk)
$bot_token_input_body = new \Relaya\Sdk\Model\BotTokenInputBody(); // \Relaya\Sdk\Model\BotTokenInputBody

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (maxbot, telegrambot, vk) | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\BotTokenResponseBody**](../Model/BotTokenResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuth2fa()`

```php
postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body): mixed
```

Submit 2FA password

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$password2_fa_input_body = new \Relaya\Sdk\Model\Password2FAInputBody(); // \Relaya\Sdk\Model\Password2FAInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationAuth2fa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **password2_fa_input_body** | [**\Relaya\Sdk\Model\Password2FAInputBody**](../Model/Password2FAInputBody.md)|  | |

### Return type

**mixed**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Logout profile

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthLogout($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationAuthLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\LogoutBody**](../Model/LogoutBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Confirm phone auth code

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_code_input_body = new \Relaya\Sdk\Model\PhoneAuthCodeInputBody(); // \Relaya\Sdk\Model\PhoneAuthCodeInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode($profile_id, $integration, $phone_auth_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_code_input_body** | [**\Relaya\Sdk\Model\PhoneAuthCodeInputBody**](../Model/PhoneAuthCodeInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthCodeResponseBody**](../Model/PhoneAuthCodeResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Submit phone auth password

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_password_input_body = new \Relaya\Sdk\Model\PhoneAuthPasswordInputBody(); // \Relaya\Sdk\Model\PhoneAuthPasswordInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword($profile_id, $integration, $phone_auth_password_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_password_input_body** | [**\Relaya\Sdk\Model\PhoneAuthPasswordInputBody**](../Model/PhoneAuthPasswordInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthPasswordResponseBody**](../Model/PhoneAuthPasswordResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Start phone auth

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_start_input_body = new \Relaya\Sdk\Model\PhoneAuthStartInputBody(); // \Relaya\Sdk\Model\PhoneAuthStartInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart($profile_id, $integration, $phone_auth_start_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_start_input_body** | [**\Relaya\Sdk\Model\PhoneAuthStartInputBody**](../Model/PhoneAuthStartInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthStartResponseBody**](../Model/PhoneAuthStartResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction()`

```php
postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction($profile_id, $integration, $conversation_action_input_body): \Relaya\Sdk\Model\ConversationActionResponseBody
```

Inbox conversation action

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$conversation_action_input_body = new \Relaya\Sdk\Model\ConversationActionInputBody(); // \Relaya\Sdk\Model\ConversationActionInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction($profile_id, $integration, $conversation_action_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **conversation_action_input_body** | [**\Relaya\Sdk\Model\ConversationActionInputBody**](../Model/ConversationActionInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ConversationActionResponseBody**](../Model/ConversationActionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Inbox conversation avatar

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$conversation_avatar_input_body = new \Relaya\Sdk\Model\ConversationAvatarInputBody(); // \Relaya\Sdk\Model\ConversationAvatarInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar($profile_id, $integration, $conversation_avatar_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **conversation_avatar_input_body** | [**\Relaya\Sdk\Model\ConversationAvatarInputBody**](../Model/ConversationAvatarInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ConversationAvatarResponseBody**](../Model/ConversationAvatarResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Mark inbox read

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$inbox_read_input_body = new \Relaya\Sdk\Model\InboxReadInputBody(); // \Relaya\Sdk\Model\InboxReadInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationInboxRead($profile_id, $integration, $inbox_read_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationInboxRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **inbox_read_input_body** | [**\Relaya\Sdk\Model\InboxReadInputBody**](../Model/InboxReadInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\InboxReadResponseBody**](../Model/InboxReadResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Send message

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_message_input_body = new \Relaya\Sdk\Model\SendMessageInputBody(); // \Relaya\Sdk\Model\SendMessageInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessages($profile_id, $integration, $send_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_message_input_body** | [**\Relaya\Sdk\Model\SendMessageInputBody**](../Model/SendMessageInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Delete message

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$delete_message_input_body = new \Relaya\Sdk\Model\DeleteMessageInputBody(); // \Relaya\Sdk\Model\DeleteMessageInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesDelete($profile_id, $integration, $delete_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessagesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **delete_message_input_body** | [**\Relaya\Sdk\Model\DeleteMessageInputBody**](../Model/DeleteMessageInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\DeleteMessageBody**](../Model/DeleteMessageBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Edit message

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$edit_message_input_body = new \Relaya\Sdk\Model\EditMessageInputBody(); // \Relaya\Sdk\Model\EditMessageInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesEdit($profile_id, $integration, $edit_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessagesEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **edit_message_input_body** | [**\Relaya\Sdk\Model\EditMessageInputBody**](../Model/EditMessageInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesForward()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesForward($profile_id, $integration, $forward_message_input_body): \Relaya\Sdk\Model\MessageResponseBody
```

Forward message

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$forward_message_input_body = new \Relaya\Sdk\Model\ForwardMessageInputBody(); // \Relaya\Sdk\Model\ForwardMessageInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesForward($profile_id, $integration, $forward_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessagesForward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **forward_message_input_body** | [**\Relaya\Sdk\Model\ForwardMessageInputBody**](../Model/ForwardMessageInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationMessagesHistory()`

```php
postProfilesProfileIdIntegrationsIntegrationMessagesHistory($profile_id, $integration, $chat_history_input_body, $limit, $cursor, $date, $order, $mark_all, $message_ids): mixed
```

Get chat history

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$chat_history_input_body = new \Relaya\Sdk\Model\ChatHistoryInputBody(); // \Relaya\Sdk\Model\ChatHistoryInputBody
$limit = 56; // int
$cursor = 'cursor_example'; // string
$date = 'date_example'; // string
$order = 'order_example'; // string
$mark_all = True; // bool
$message_ids = 'message_ids_example'; // string

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesHistory($profile_id, $integration, $chat_history_input_body, $limit, $cursor, $date, $order, $mark_all, $message_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessagesHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **chat_history_input_body** | [**\Relaya\Sdk\Model\ChatHistoryInputBody**](../Model/ChatHistoryInputBody.md)|  | |
| **limit** | **int**|  | [optional] |
| **cursor** | **string**|  | [optional] |
| **date** | **string**|  | [optional] |
| **order** | **string**|  | [optional] |
| **mark_all** | **bool**|  | [optional] |
| **message_ids** | **string**|  | [optional] |

### Return type

**mixed**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Reply message

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_reply_message_input_body = new \Relaya\Sdk\Model\SendReplyMessageInputBody(); // \Relaya\Sdk\Model\SendReplyMessageInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesReply($profile_id, $integration, $send_reply_message_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationMessagesReply: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_reply_message_input_body** | [**\Relaya\Sdk\Model\SendReplyMessageInputBody**](../Model/SendReplyMessageInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MessageResponseBody**](../Model/MessageResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationSessionEvents: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationSessionStart: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationSessionStop: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->postProfilesProfileIdIntegrationsIntegrationSync: ', $e->getMessage(), PHP_EOL;
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

## `profilesProfileIdIntegrationsIntegrationMessagesFilesPost()`

```php
profilesProfileIdIntegrationsIntegrationMessagesFilesPost()
```

Upload file

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationMessagesFilesPost();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationMessagesFilesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksCheckPost()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksCheckPost()
```

Check webhook endpoint

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksCheckPost();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksDlqGet()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksDlqGet()
```

List webhook DLQ

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksDlqGet();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksDlqGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost()
```

Redrive webhook DLQ

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksGet()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksGet()
```

List webhooks

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksGet();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksIdDelete()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksIdDelete()
```

Delete webhook

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksIdGet()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksIdGet()
```

Get webhook

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksIdGet();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksIdPatch()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksIdPatch()
```

Update webhook

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksIdPatch();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost()
```

Test webhook

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationWebhooksPost()`

```php
profilesProfileIdIntegrationsIntegrationWebhooksPost()
```

Create webhook

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationWebhooksPost();
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->profilesProfileIdIntegrationsIntegrationWebhooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
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
    echo 'Exception when calling IntegrationsApi->putProfilesProfileIdIntegrationsIntegrationSession: ', $e->getMessage(), PHP_EOL;
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

## `putProfilesProfileIdIntegrationsIntegrationToken()`

```php
putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body): \Relaya\Sdk\Model\BotTokenSetResponseBody
```

Set bot token

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


$apiInstance = new Relaya\Sdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (maxbot, telegrambot, vk)
$bot_token_input_body = new \Relaya\Sdk\Model\BotTokenInputBody(); // \Relaya\Sdk\Model\BotTokenInputBody

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->putProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (maxbot, telegrambot, vk) | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\BotTokenSetResponseBody**](../Model/BotTokenSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
