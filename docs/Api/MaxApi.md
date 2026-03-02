# Relaya\Sdk\MaxApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId()**](MaxApi.md#deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Delete MAX folder |
| [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MaxApi.md#deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Remove reaction |
| [**getProfilesProfileIdIntegrationsIntegrationContacts()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationContacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | List contacts |
| [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationContactsBlocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | List blocked contacts |
| [**getProfilesProfileIdIntegrationsIntegrationDevices()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationDevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | List active MAX devices |
| [**getProfilesProfileIdIntegrationsIntegrationFolders()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationFolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | List MAX folders |
| [**getProfilesProfileIdIntegrationsIntegrationSessions()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationSessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | List active MAX sessions/devices |
| [**getProfilesProfileIdIntegrationsIntegrationSettings()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationSettings) | **GET** /profiles/{profileId}/integrations/{integration}/settings | Get settings |
| [**getProfilesProfileIdIntegrationsIntegrationSettingsUser()**](MaxApi.md#getProfilesProfileIdIntegrationsIntegrationSettingsUser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Get MAX account settings |
| [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile()**](MaxApi.md#patchProfilesProfileIdIntegrationsIntegrationAccountProfile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Update MAX profile name/description |
| [**patchProfilesProfileIdIntegrationsIntegrationSettings()**](MaxApi.md#patchProfilesProfileIdIntegrationsIntegrationSettings) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings | Update settings |
| [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser()**](MaxApi.md#patchProfilesProfileIdIntegrationsIntegrationSettingsUser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Update MAX account settings |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Poll authorization |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Start SMS authorization |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Send authorization code |
| [**postProfilesProfileIdIntegrationsIntegrationChatsByIds()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationChatsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Get chats by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationChatsSubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Subscribe/unsubscribe chat updates |
| [**postProfilesProfileIdIntegrationsIntegrationContactsByIds()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationContactsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Get contacts by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationContactsLastOnline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Get contacts last online by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationContactsSearch()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationContactsSearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Search contact by phone |
| [**postProfilesProfileIdIntegrationsIntegrationFolders()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationFolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Create MAX folder |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Send reaction |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesRead()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesRead) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Mark chat read |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesTyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Send typing status |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesUnread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Mark chat as unread |
| [**postProfilesProfileIdIntegrationsIntegrationReboot()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationReboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Reboot profile |
| [**postProfilesProfileIdIntegrationsIntegrationVideosResolve()**](MaxApi.md#postProfilesProfileIdIntegrationsIntegrationVideosResolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Resolve video links by video ID |
| [**profilesProfileIdIntegrationsIntegrationAvatarPost()**](MaxApi.md#profilesProfileIdIntegrationsIntegrationAvatarPost) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Set profile picture |
| [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder()**](MaxApi.md#putProfilesProfileIdIntegrationsIntegrationFoldersOrder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Reorder MAX folders |


## `deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId()`

```php
deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId($profile_id, $integration, $folder_id): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Delete MAX folder

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$folder_id = 'folder_id_example'; // string | Folder ID

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId($profile_id, $integration, $folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **folder_id** | **string**| Folder ID | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions()`

```php
deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $remove_reaction_huma_input_body): \Relaya\Sdk\Model\RemoveReactionBody
```

Remove reaction

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$remove_reaction_huma_input_body = new \Relaya\Sdk\Model\RemoveReactionHumaInputBody(); // \Relaya\Sdk\Model\RemoveReactionHumaInputBody

try {
    $result = $apiInstance->deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $remove_reaction_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **remove_reaction_huma_input_body** | [**\Relaya\Sdk\Model\RemoveReactionHumaInputBody**](../Model/RemoveReactionHumaInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\RemoveReactionBody**](../Model/RemoveReactionBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationContacts()`

```php
getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor): \Relaya\Sdk\Model\ContactsListHumaBody
```

List contacts

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type
$limit = 200; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type | |
| **limit** | **int**|  | [optional] [default to 200] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\ContactsListHumaBody**](../Model/ContactsListHumaBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

List blocked contacts

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$status = 'status_example'; // string | Contact status filter (default BLOCKED)
$count = 56; // int | Page size (default 100)
$from = 56; // int | Offset (default 0)

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContactsBlocked($profile_id, $integration, $status, $count, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationContactsBlocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **status** | **string**| Contact status filter (default BLOCKED) | [optional] |
| **count** | **int**| Page size (default 100) | [optional] |
| **from** | **int**| Offset (default 0) | [optional] |

### Return type

[**\Relaya\Sdk\Model\MaxBlockedContactsResponseBody**](../Model/MaxBlockedContactsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
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
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationDevices: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationFolders()`

```php
getProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $folder_sync): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

List MAX folders

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$folder_sync = 56; // int | Folder sync cursor (default 0)

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $folder_sync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **folder_sync** | **int**| Folder sync cursor (default 0) | [optional] |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
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
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationSessions: ', $e->getMessage(), PHP_EOL;
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

## `getProfilesProfileIdIntegrationsIntegrationSettings()`

```php
getProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration): \Relaya\Sdk\Model\AccountSettings
```

Get settings

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\AccountSettings**](../Model/AccountSettings.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Get MAX account settings

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->getProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationAccountProfile()`

```php
patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body): \Relaya\Sdk\Model\MaxSetProfileResponseBody
```

Update MAX profile name/description

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_set_profile_input_body = new \Relaya\Sdk\Model\MaxSetProfileInputBody(); // \Relaya\Sdk\Model\MaxSetProfileInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->patchProfilesProfileIdIntegrationsIntegrationAccountProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_set_profile_input_body** | [**\Relaya\Sdk\Model\MaxSetProfileInputBody**](../Model/MaxSetProfileInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxSetProfileResponseBody**](../Model/MaxSetProfileResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationSettings()`

```php
patchProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration, $set_settings_input_body): \Relaya\Sdk\Model\SetSettingsBody
```

Update settings

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$set_settings_input_body = new \Relaya\Sdk\Model\SetSettingsInputBody(); // \Relaya\Sdk\Model\SetSettingsInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration, $set_settings_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->patchProfilesProfileIdIntegrationsIntegrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **set_settings_input_body** | [**\Relaya\Sdk\Model\SetSettingsInputBody**](../Model/SetSettingsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SetSettingsBody**](../Model/SetSettingsBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Update MAX account settings

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_set_user_settings_input_body = new \Relaya\Sdk\Model\MaxSetUserSettingsInputBody(); // \Relaya\Sdk\Model\MaxSetUserSettingsInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->patchProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_set_user_settings_input_body** | [**\Relaya\Sdk\Model\MaxSetUserSettingsInputBody**](../Model/MaxSetUserSettingsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Poll authorization

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$poll_authorization_input_body = new \Relaya\Sdk\Model\PollAuthorizationInputBody(); // \Relaya\Sdk\Model\PollAuthorizationInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll($profile_id, $integration, $poll_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **poll_authorization_input_body** | [**\Relaya\Sdk\Model\PollAuthorizationInputBody**](../Model/PollAuthorizationInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PollAuthorizationBody**](../Model/PollAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Start SMS authorization

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$start_authorization_input_body = new \Relaya\Sdk\Model\StartAuthorizationInputBody(); // \Relaya\Sdk\Model\StartAuthorizationInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart($profile_id, $integration, $start_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **start_authorization_input_body** | [**\Relaya\Sdk\Model\StartAuthorizationInputBody**](../Model/StartAuthorizationInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\StartAuthorizationBody**](../Model/StartAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Send authorization code

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_authorization_code_input_body = new \Relaya\Sdk\Model\SendAuthorizationCodeInputBody(); // \Relaya\Sdk\Model\SendAuthorizationCodeInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify($profile_id, $integration, $send_authorization_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_authorization_code_input_body** | [**\Relaya\Sdk\Model\SendAuthorizationCodeInputBody**](../Model/SendAuthorizationCodeInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SendAuthorizationCodeBody**](../Model/SendAuthorizationCodeBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Get chats by IDs

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_chats_by_ids_input_body = new \Relaya\Sdk\Model\MaxChatsByIDsInputBody(); // \Relaya\Sdk\Model\MaxChatsByIDsInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsByIds($profile_id, $integration, $max_chats_by_ids_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationChatsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_chats_by_ids_input_body** | [**\Relaya\Sdk\Model\MaxChatsByIDsInputBody**](../Model/MaxChatsByIDsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxChatsByIDsResponseBody**](../Model/MaxChatsByIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Subscribe/unsubscribe chat updates

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_chat_subscription_input_body = new \Relaya\Sdk\Model\MaxChatSubscriptionInputBody(); // \Relaya\Sdk\Model\MaxChatSubscriptionInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationChatsSubscription($profile_id, $integration, $max_chat_subscription_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationChatsSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_chat_subscription_input_body** | [**\Relaya\Sdk\Model\MaxChatSubscriptionInputBody**](../Model/MaxChatSubscriptionInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxChatSubscriptionResponseBody**](../Model/MaxChatSubscriptionResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Get contacts by IDs

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_contacts_by_ids_input_body = new \Relaya\Sdk\Model\MaxContactsByIDsInputBody(); // \Relaya\Sdk\Model\MaxContactsByIDsInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsByIds($profile_id, $integration, $max_contacts_by_ids_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationContactsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_contacts_by_ids_input_body** | [**\Relaya\Sdk\Model\MaxContactsByIDsInputBody**](../Model/MaxContactsByIDsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsByIDsResponseBody**](../Model/MaxContactsByIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Get contacts last online by IDs

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_contacts_last_online_input_body = new \Relaya\Sdk\Model\MaxContactsLastOnlineInputBody(); // \Relaya\Sdk\Model\MaxContactsLastOnlineInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline($profile_id, $integration, $max_contacts_last_online_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_contacts_last_online_input_body** | [**\Relaya\Sdk\Model\MaxContactsLastOnlineInputBody**](../Model/MaxContactsLastOnlineInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsLastOnlineResponseBody**](../Model/MaxContactsLastOnlineResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Search contact by phone

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Filter by integration type
$search_contact_input_body = new \Relaya\Sdk\Model\SearchContactInputBody(); // \Relaya\Sdk\Model\SearchContactInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsSearch($profile_id, $integration, $search_contact_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationContactsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Filter by integration type | |
| **search_contact_input_body** | [**\Relaya\Sdk\Model\SearchContactInputBody**](../Model/SearchContactInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SearchContactResponseBody**](../Model/SearchContactResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Create MAX folder

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_create_folder_input_body = new \Relaya\Sdk\Model\MaxCreateFolderInputBody(); // \Relaya\Sdk\Model\MaxCreateFolderInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationFolders($profile_id, $integration, $max_create_folder_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_create_folder_input_body** | [**\Relaya\Sdk\Model\MaxCreateFolderInputBody**](../Model/MaxCreateFolderInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Send reaction

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_reaction_huma_input_body = new \Relaya\Sdk\Model\SendReactionHumaInputBody(); // \Relaya\Sdk\Model\SendReactionHumaInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesReactions($profile_id, $integration, $send_reaction_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_reaction_huma_input_body** | [**\Relaya\Sdk\Model\SendReactionHumaInputBody**](../Model/SendReactionHumaInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SendReactionBody**](../Model/SendReactionBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Mark chat read

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$read_chat_huma_input_body = new \Relaya\Sdk\Model\ReadChatHumaInputBody(); // \Relaya\Sdk\Model\ReadChatHumaInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesRead($profile_id, $integration, $read_chat_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationMessagesRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **read_chat_huma_input_body** | [**\Relaya\Sdk\Model\ReadChatHumaInputBody**](../Model/ReadChatHumaInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ReadChatBody**](../Model/ReadChatBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Send typing status

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_typing_input_body = new \Relaya\Sdk\Model\SendTypingInputBody(); // \Relaya\Sdk\Model\SendTypingInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesTyping($profile_id, $integration, $send_typing_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationMessagesTyping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_typing_input_body** | [**\Relaya\Sdk\Model\SendTypingInputBody**](../Model/SendTypingInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SendTypingResponseBody**](../Model/SendTypingResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

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

Mark chat as unread

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$read_chat_huma_input_body = new \Relaya\Sdk\Model\ReadChatHumaInputBody(); // \Relaya\Sdk\Model\ReadChatHumaInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationMessagesUnread($profile_id, $integration, $read_chat_huma_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationMessagesUnread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **read_chat_huma_input_body** | [**\Relaya\Sdk\Model\ReadChatHumaInputBody**](../Model/ReadChatHumaInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ReadChatBody**](../Model/ReadChatBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationReboot()`

```php
postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration): \Relaya\Sdk\Model\RebootProfileBody
```

Reboot profile

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationReboot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\RebootProfileBody**](../Model/RebootProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationVideosResolve()`

```php
postProfilesProfileIdIntegrationsIntegrationVideosResolve($profile_id, $integration, $max_video_resolve_input_body): \Relaya\Sdk\Model\MaxVideoResolveResponseBody
```

Resolve video links by video ID

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_video_resolve_input_body = new \Relaya\Sdk\Model\MaxVideoResolveInputBody(); // \Relaya\Sdk\Model\MaxVideoResolveInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationVideosResolve($profile_id, $integration, $max_video_resolve_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->postProfilesProfileIdIntegrationsIntegrationVideosResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_video_resolve_input_body** | [**\Relaya\Sdk\Model\MaxVideoResolveInputBody**](../Model/MaxVideoResolveInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxVideoResolveResponseBody**](../Model/MaxVideoResolveResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationAvatarPost()`

```php
profilesProfileIdIntegrationsIntegrationAvatarPost()
```

Set profile picture

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationAvatarPost();
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->profilesProfileIdIntegrationsIntegrationAvatarPost: ', $e->getMessage(), PHP_EOL;
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

## `putProfilesProfileIdIntegrationsIntegrationFoldersOrder()`

```php
putProfilesProfileIdIntegrationsIntegrationFoldersOrder($profile_id, $integration, $max_reorder_folders_input_body): \Relaya\Sdk\Model\MaxFoldersResponseBody
```

Reorder MAX folders

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


$apiInstance = new Relaya\Sdk\Api\MaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_reorder_folders_input_body = new \Relaya\Sdk\Model\MaxReorderFoldersInputBody(); // \Relaya\Sdk\Model\MaxReorderFoldersInputBody

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationFoldersOrder($profile_id, $integration, $max_reorder_folders_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaxApi->putProfilesProfileIdIntegrationsIntegrationFoldersOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_reorder_folders_input_body** | [**\Relaya\Sdk\Model\MaxReorderFoldersInputBody**](../Model/MaxReorderFoldersInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxFoldersResponseBody**](../Model/MaxFoldersResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
