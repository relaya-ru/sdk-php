# Relaya\Sdk\ChatsApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId()**](ChatsApi.md#deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Delete MAX folder |
| [**getProfilesProfileIdIntegrationsIntegrationFolders()**](ChatsApi.md#getProfilesProfileIdIntegrationsIntegrationFolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | List MAX folders |
| [**postProfilesProfileIdIntegrationsIntegrationChatsByIds()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Get chats by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationChatsSubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Subscribe/unsubscribe chat updates |
| [**postProfilesProfileIdIntegrationsIntegrationFolders()**](ChatsApi.md#postProfilesProfileIdIntegrationsIntegrationFolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Create MAX folder |
| [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder()**](ChatsApi.md#putProfilesProfileIdIntegrationsIntegrationFoldersOrder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Reorder MAX folders |


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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->getProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsByIds: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationChatsSubscription: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->postProfilesProfileIdIntegrationsIntegrationFolders: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\ChatsApi(
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
    echo 'Exception when calling ChatsApi->putProfilesProfileIdIntegrationsIntegrationFoldersOrder: ', $e->getMessage(), PHP_EOL;
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
