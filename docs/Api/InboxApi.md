# Relaya\Sdk\InboxApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfilesProfileIdIntegrationsIntegrationInboxConversations()**](InboxApi.md#getProfilesProfileIdIntegrationsIntegrationInboxConversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | List inbox conversations |
| [**getProfilesProfileIdIntegrationsIntegrationInboxMessages()**](InboxApi.md#getProfilesProfileIdIntegrationsIntegrationInboxMessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | List inbox messages |
| [**getUsersMeInboxConversations()**](InboxApi.md#getUsersMeInboxConversations) | **GET** /users/me/inbox/conversations | List omnichannel inbox conversations |
| [**getUsersMeInboxMessages()**](InboxApi.md#getUsersMeInboxMessages) | **GET** /users/me/inbox/messages | List omnichannel inbox messages |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Inbox conversation action |
| [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Inbox conversation avatar |
| [**postProfilesProfileIdIntegrationsIntegrationInboxRead()**](InboxApi.md#postProfilesProfileIdIntegrationsIntegrationInboxRead) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Mark inbox read |
| [**postUsersMeInboxConversationsAction()**](InboxApi.md#postUsersMeInboxConversationsAction) | **POST** /users/me/inbox/conversations/action | Toggle omnichannel conversation action |
| [**postUsersMeInboxConversationsAvatar()**](InboxApi.md#postUsersMeInboxConversationsAvatar) | **POST** /users/me/inbox/conversations/avatar | Set omnichannel conversation avatar |
| [**postUsersMeInboxConversationsTitle()**](InboxApi.md#postUsersMeInboxConversationsTitle) | **POST** /users/me/inbox/conversations/title | Set omnichannel conversation title |
| [**postUsersMeInboxRead()**](InboxApi.md#postUsersMeInboxRead) | **POST** /users/me/inbox/read | Mark omnichannel conversation as read |
| [**postUsersMeInboxSend()**](InboxApi.md#postUsersMeInboxSend) | **POST** /users/me/inbox/send | Send omnichannel inbox message |


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


$apiInstance = new Relaya\Sdk\Api\InboxApi(
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
    echo 'Exception when calling InboxApi->getProfilesProfileIdIntegrationsIntegrationInboxConversations: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\InboxApi(
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
    echo 'Exception when calling InboxApi->getProfilesProfileIdIntegrationsIntegrationInboxMessages: ', $e->getMessage(), PHP_EOL;
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

## `getUsersMeInboxConversations()`

```php
getUsersMeInboxConversations($limit, $cursor, $q, $integration, $unread_only, $starred_only, $archived): \Relaya\Sdk\Model\UserInboxConversationsListResponseBody
```

List omnichannel inbox conversations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int
$cursor = 'cursor_example'; // string
$q = 'q_example'; // string
$integration = 'integration_example'; // string
$unread_only = false; // bool
$starred_only = false; // bool
$archived = 'exclude'; // string

try {
    $result = $apiInstance->getUsersMeInboxConversations($limit, $cursor, $q, $integration, $unread_only, $starred_only, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getUsersMeInboxConversations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |
| **q** | **string**|  | [optional] |
| **integration** | **string**|  | [optional] |
| **unread_only** | **bool**|  | [optional] [default to false] |
| **starred_only** | **bool**|  | [optional] [default to false] |
| **archived** | **string**|  | [optional] [default to &#39;exclude&#39;] |

### Return type

[**\Relaya\Sdk\Model\UserInboxConversationsListResponseBody**](../Model/UserInboxConversationsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersMeInboxMessages()`

```php
getUsersMeInboxMessages($conversation_id, $integration, $chat_id, $limit, $cursor): \Relaya\Sdk\Model\UserInboxMessagesListResponseBody
```

List omnichannel inbox messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversation_id = 56; // int
$integration = 'integration_example'; // string
$chat_id = 'chat_id_example'; // string
$limit = 50; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getUsersMeInboxMessages($conversation_id, $integration, $chat_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->getUsersMeInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **conversation_id** | **int**|  | [optional] |
| **integration** | **string**|  | [optional] |
| **chat_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\UserInboxMessagesListResponseBody**](../Model/UserInboxMessagesListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

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


$apiInstance = new Relaya\Sdk\Api\InboxApi(
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
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\InboxApi(
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
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\InboxApi(
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
    echo 'Exception when calling InboxApi->postProfilesProfileIdIntegrationsIntegrationInboxRead: ', $e->getMessage(), PHP_EOL;
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

## `postUsersMeInboxConversationsAction()`

```php
postUsersMeInboxConversationsAction($user_inbox_conversation_action_input_body): \Relaya\Sdk\Model\UserInboxConversationActionResponseBody
```

Toggle omnichannel conversation action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_inbox_conversation_action_input_body = new \Relaya\Sdk\Model\UserInboxConversationActionInputBody(); // \Relaya\Sdk\Model\UserInboxConversationActionInputBody

try {
    $result = $apiInstance->postUsersMeInboxConversationsAction($user_inbox_conversation_action_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postUsersMeInboxConversationsAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_inbox_conversation_action_input_body** | [**\Relaya\Sdk\Model\UserInboxConversationActionInputBody**](../Model/UserInboxConversationActionInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\UserInboxConversationActionResponseBody**](../Model/UserInboxConversationActionResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeInboxConversationsAvatar()`

```php
postUsersMeInboxConversationsAvatar($user_inbox_conversation_avatar_input_body): \Relaya\Sdk\Model\UserInboxConversationAvatarResponseBody
```

Set omnichannel conversation avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_inbox_conversation_avatar_input_body = new \Relaya\Sdk\Model\UserInboxConversationAvatarInputBody(); // \Relaya\Sdk\Model\UserInboxConversationAvatarInputBody

try {
    $result = $apiInstance->postUsersMeInboxConversationsAvatar($user_inbox_conversation_avatar_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postUsersMeInboxConversationsAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_inbox_conversation_avatar_input_body** | [**\Relaya\Sdk\Model\UserInboxConversationAvatarInputBody**](../Model/UserInboxConversationAvatarInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\UserInboxConversationAvatarResponseBody**](../Model/UserInboxConversationAvatarResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeInboxConversationsTitle()`

```php
postUsersMeInboxConversationsTitle($user_inbox_conversation_title_input_body): \Relaya\Sdk\Model\UserInboxConversationTitleResponseBody
```

Set omnichannel conversation title

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_inbox_conversation_title_input_body = new \Relaya\Sdk\Model\UserInboxConversationTitleInputBody(); // \Relaya\Sdk\Model\UserInboxConversationTitleInputBody

try {
    $result = $apiInstance->postUsersMeInboxConversationsTitle($user_inbox_conversation_title_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postUsersMeInboxConversationsTitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_inbox_conversation_title_input_body** | [**\Relaya\Sdk\Model\UserInboxConversationTitleInputBody**](../Model/UserInboxConversationTitleInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\UserInboxConversationTitleResponseBody**](../Model/UserInboxConversationTitleResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeInboxRead()`

```php
postUsersMeInboxRead($user_inbox_read_input_body): \Relaya\Sdk\Model\UserInboxReadResponseBody
```

Mark omnichannel conversation as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_inbox_read_input_body = new \Relaya\Sdk\Model\UserInboxReadInputBody(); // \Relaya\Sdk\Model\UserInboxReadInputBody

try {
    $result = $apiInstance->postUsersMeInboxRead($user_inbox_read_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postUsersMeInboxRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_inbox_read_input_body** | [**\Relaya\Sdk\Model\UserInboxReadInputBody**](../Model/UserInboxReadInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\UserInboxReadResponseBody**](../Model/UserInboxReadResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeInboxSend()`

```php
postUsersMeInboxSend($user_inbox_send_input_body): \Relaya\Sdk\Model\UserInboxSendResponseBody
```

Send omnichannel inbox message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\InboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_inbox_send_input_body = new \Relaya\Sdk\Model\UserInboxSendInputBody(); // \Relaya\Sdk\Model\UserInboxSendInputBody

try {
    $result = $apiInstance->postUsersMeInboxSend($user_inbox_send_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboxApi->postUsersMeInboxSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_inbox_send_input_body** | [**\Relaya\Sdk\Model\UserInboxSendInputBody**](../Model/UserInboxSendInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\UserInboxSendResponseBody**](../Model/UserInboxSendResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
