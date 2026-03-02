# Relaya\Sdk\BillingApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billingProviderWebhookPost()**](BillingApi.md#billingProviderWebhookPost) | **POST** /billing/provider/webhook | Billing provider webhook |
| [**getBillingTopups()**](BillingApi.md#getBillingTopups) | **GET** /billing/topups | List top-up intents |
| [**getBillingTopupsTopupId()**](BillingApi.md#getBillingTopupsTopupId) | **GET** /billing/topups/{topupId} | Get top-up status |
| [**getBillingTransactions()**](BillingApi.md#getBillingTransactions) | **GET** /billing/transactions | List transactions |
| [**postBillingTopups()**](BillingApi.md#postBillingTopups) | **POST** /billing/topups | Create top-up intent |
| [**postBillingTopupsTopupIdRefresh()**](BillingApi.md#postBillingTopupsTopupIdRefresh) | **POST** /billing/topups/{topupId}/refresh | Refresh top-up status from provider |


## `billingProviderWebhookPost()`

```php
billingProviderWebhookPost()
```

Billing provider webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->billingProviderWebhookPost();
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingProviderWebhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTopups()`

```php
getBillingTopups($limit, $cursor): \Relaya\Sdk\Model\TopUpsListResponseBody
```

List top-up intents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getBillingTopups($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\TopUpsListResponseBody**](../Model/TopUpsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTopupsTopupId()`

```php
getBillingTopupsTopupId($topup_id): \Relaya\Sdk\Model\TopUpStatusResponseBody
```

Get top-up status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string | Top-up ID

try {
    $result = $apiInstance->getBillingTopupsTopupId($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTopupsTopupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**| Top-up ID | |

### Return type

[**\Relaya\Sdk\Model\TopUpStatusResponseBody**](../Model/TopUpStatusResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTransactions()`

```php
getBillingTransactions($limit, $cursor): \Relaya\Sdk\Model\TransactionsListResponseBody
```

List transactions

Returns a history of balance transactions (top-ups, purchases, renewals).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getBillingTransactions($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\TransactionsListResponseBody**](../Model/TransactionsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBillingTopups()`

```php
postBillingTopups($top_up_input_body, $idempotency_key): \Relaya\Sdk\Model\TopUpResponseBody
```

Create top-up intent

Creates a payment intent for balance top-up.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top_up_input_body = new \Relaya\Sdk\Model\TopUpInputBody(); // \Relaya\Sdk\Model\TopUpInputBody
$idempotency_key = 'idempotency_key_example'; // string | Optional idempotency key for safe retries

try {
    $result = $apiInstance->postBillingTopups($top_up_input_body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postBillingTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top_up_input_body** | [**\Relaya\Sdk\Model\TopUpInputBody**](../Model/TopUpInputBody.md)|  | |
| **idempotency_key** | **string**| Optional idempotency key for safe retries | [optional] |

### Return type

[**\Relaya\Sdk\Model\TopUpResponseBody**](../Model/TopUpResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBillingTopupsTopupIdRefresh()`

```php
postBillingTopupsTopupIdRefresh($topup_id): \Relaya\Sdk\Model\TopUpStatusResponseBody
```

Refresh top-up status from provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 'topup_id_example'; // string | Top-up ID

try {
    $result = $apiInstance->postBillingTopupsTopupIdRefresh($topup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postBillingTopupsTopupIdRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **topup_id** | **string**| Top-up ID | |

### Return type

[**\Relaya\Sdk\Model\TopUpStatusResponseBody**](../Model/TopUpStatusResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
