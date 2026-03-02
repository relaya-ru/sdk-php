# Relaya\Sdk\MessagesApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MessagesApi.md#deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Remove reaction |
| [**postProfilesProfileIdIntegrationsIntegrationMessages()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Send message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesDelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Delete message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesEdit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Edit message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesForward()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesForward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Forward message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesHistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Get chat history |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Send reaction |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesRead()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesRead) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Mark chat read |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesReply()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesReply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Reply message |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesTyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Send typing status |
| [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationMessagesUnread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Mark chat as unread |
| [**postProfilesProfileIdIntegrationsIntegrationVideosResolve()**](MessagesApi.md#postProfilesProfileIdIntegrationsIntegrationVideosResolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Resolve video links by video ID |
| [**profilesProfileIdIntegrationsIntegrationMessagesFilesPost()**](MessagesApi.md#profilesProfileIdIntegrationsIntegrationMessagesFilesPost) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Upload file |


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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessages: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesEdit: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesForward: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesHistory: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesReactions: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesRead: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesReply: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesTyping: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationMessagesUnread: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
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
    echo 'Exception when calling MessagesApi->postProfilesProfileIdIntegrationsIntegrationVideosResolve: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationMessagesFilesPost();
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->profilesProfileIdIntegrationsIntegrationMessagesFilesPost: ', $e->getMessage(), PHP_EOL;
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
