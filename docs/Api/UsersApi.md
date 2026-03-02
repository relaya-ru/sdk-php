# Relaya\Sdk\UsersApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUsersMe()**](UsersApi.md#getUsersMe) | **GET** /users/me | Get current user |
| [**getUsersMeDashboardSummary()**](UsersApi.md#getUsersMeDashboardSummary) | **GET** /users/me/dashboard-summary | Get dashboard summary |
| [**getUsersMeInboxConversations()**](UsersApi.md#getUsersMeInboxConversations) | **GET** /users/me/inbox/conversations | List omnichannel inbox conversations |
| [**getUsersMeInboxMessages()**](UsersApi.md#getUsersMeInboxMessages) | **GET** /users/me/inbox/messages | List omnichannel inbox messages |
| [**postUsersMeInboxConversationsAction()**](UsersApi.md#postUsersMeInboxConversationsAction) | **POST** /users/me/inbox/conversations/action | Toggle omnichannel conversation action |
| [**postUsersMeInboxConversationsAvatar()**](UsersApi.md#postUsersMeInboxConversationsAvatar) | **POST** /users/me/inbox/conversations/avatar | Set omnichannel conversation avatar |
| [**postUsersMeInboxConversationsTitle()**](UsersApi.md#postUsersMeInboxConversationsTitle) | **POST** /users/me/inbox/conversations/title | Set omnichannel conversation title |
| [**postUsersMeInboxRead()**](UsersApi.md#postUsersMeInboxRead) | **POST** /users/me/inbox/read | Mark omnichannel conversation as read |
| [**postUsersMeInboxSend()**](UsersApi.md#postUsersMeInboxSend) | **POST** /users/me/inbox/send | Send omnichannel inbox message |
| [**postUsersMePassword()**](UsersApi.md#postUsersMePassword) | **POST** /users/me/password | Change current user password |
| [**usersMeScenariosGet()**](UsersApi.md#usersMeScenariosGet) | **GET** /users/me/scenarios | List account scenarios |
| [**usersMeScenariosIdDelete()**](UsersApi.md#usersMeScenariosIdDelete) | **DELETE** /users/me/scenarios/{id} | Delete account scenario |
| [**usersMeScenariosPut()**](UsersApi.md#usersMeScenariosPut) | **PUT** /users/me/scenarios | Upsert account scenario |


## `getUsersMe()`

```php
getUsersMe(): \Relaya\Sdk\Model\UserMeResponseBody
```

Get current user

Returns information about the currently authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\UserMeResponseBody**](../Model/UserMeResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersMeDashboardSummary()`

```php
getUsersMeDashboardSummary(): \Relaya\Sdk\Model\UserDashboardSummaryResponseBody
```

Get dashboard summary

Returns KPI, setup state and 30-day message dynamics for the current account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMeDashboardSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMeDashboardSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\UserDashboardSummaryResponseBody**](../Model/UserDashboardSummaryResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->getUsersMeInboxConversations: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->getUsersMeInboxMessages: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersMeInboxConversationsAction: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersMeInboxConversationsAvatar: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersMeInboxConversationsTitle: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersMeInboxRead: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Relaya\Sdk\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersMeInboxSend: ', $e->getMessage(), PHP_EOL;
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

## `postUsersMePassword()`

```php
postUsersMePassword($change_password_input_body): \Relaya\Sdk\Model\ChangePasswordResponseBody
```

Change current user password

Changes the password for the currently authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$change_password_input_body = new \Relaya\Sdk\Model\ChangePasswordInputBody(); // \Relaya\Sdk\Model\ChangePasswordInputBody

try {
    $result = $apiInstance->postUsersMePassword($change_password_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersMePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **change_password_input_body** | [**\Relaya\Sdk\Model\ChangePasswordInputBody**](../Model/ChangePasswordInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ChangePasswordResponseBody**](../Model/ChangePasswordResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersMeScenariosGet()`

```php
usersMeScenariosGet()
```

List account scenarios

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->usersMeScenariosGet();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersMeScenariosGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersMeScenariosIdDelete()`

```php
usersMeScenariosIdDelete()
```

Delete account scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->usersMeScenariosIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersMeScenariosIdDelete: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersMeScenariosPut()`

```php
usersMeScenariosPut()
```

Upsert account scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->usersMeScenariosPut();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersMeScenariosPut: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
