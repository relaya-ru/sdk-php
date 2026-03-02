# Relaya\Sdk\NotificationsApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNotifications()**](NotificationsApi.md#getNotifications) | **GET** /notifications | List notifications |
| [**getNotificationsUnread()**](NotificationsApi.md#getNotificationsUnread) | **GET** /notifications/unread | Get unread count |
| [**postNotificationsMarkAll()**](NotificationsApi.md#postNotificationsMarkAll) | **POST** /notifications/mark-all | Mark all as read |
| [**postNotificationsMarkRead()**](NotificationsApi.md#postNotificationsMarkRead) | **POST** /notifications/mark-read | Mark as read |


## `getNotifications()`

```php
getNotifications($limit, $cursor, $status, $type, $channel, $read): \Relaya\Sdk\Model\NotificationsListResponseBody
```

List notifications

Returns a list of notifications for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of items to return
$cursor = 'cursor_example'; // string | Pagination cursor
$status = 'status_example'; // string | Filter by status/severity
$type = 'type_example'; // string | Filter by notification type
$channel = 'channel_example'; // string | Filter by channel/source
$read = 'read_example'; // string | Filter by read status: true/false

try {
    $result = $apiInstance->getNotifications($limit, $cursor, $status, $type, $channel, $read);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to return | [optional] [default to 50] |
| **cursor** | **string**| Pagination cursor | [optional] |
| **status** | **string**| Filter by status/severity | [optional] |
| **type** | **string**| Filter by notification type | [optional] |
| **channel** | **string**| Filter by channel/source | [optional] |
| **read** | **string**| Filter by read status: true/false | [optional] |

### Return type

[**\Relaya\Sdk\Model\NotificationsListResponseBody**](../Model/NotificationsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationsUnread()`

```php
getNotificationsUnread(): \Relaya\Sdk\Model\UnreadCountResponseBody
```

Get unread count

Returns the number of unread notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNotificationsUnread();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationsUnread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\UnreadCountResponseBody**](../Model/UnreadCountResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postNotificationsMarkAll()`

```php
postNotificationsMarkAll()
```

Mark all as read

Marks all user notifications as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postNotificationsMarkAll();
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->postNotificationsMarkAll: ', $e->getMessage(), PHP_EOL;
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

## `postNotificationsMarkRead()`

```php
postNotificationsMarkRead($mark_read_input_body)
```

Mark as read

Marks specified notifications as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mark_read_input_body = new \Relaya\Sdk\Model\MarkReadInputBody(); // \Relaya\Sdk\Model\MarkReadInputBody

try {
    $apiInstance->postNotificationsMarkRead($mark_read_input_body);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->postNotificationsMarkRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mark_read_input_body** | [**\Relaya\Sdk\Model\MarkReadInputBody**](../Model/MarkReadInputBody.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
