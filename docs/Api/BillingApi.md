# Relaya\Sdk\BillingApi

Баланс и платежи.

All URIs are relative to https://localhost:8485/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBillingCompanyLookup()**](BillingApi.md#getBillingCompanyLookup) | **GET** /billing/company-lookup | Подсказки по организации |
| [**getBillingInvoice()**](BillingApi.md#getBillingInvoice) | **GET** /billing/invoices/{invoiceId} | Карточка счёта |
| [**getBillingInvoices()**](BillingApi.md#getBillingInvoices) | **GET** /billing/invoices | Список счетов |
| [**getBillingInvoicesInvoiceIdAct()**](BillingApi.md#getBillingInvoicesInvoiceIdAct) | **GET** /billing/invoices/{invoiceId}/act | Скачать акт по счёту |
| [**getBillingLegalProfile()**](BillingApi.md#getBillingLegalProfile) | **GET** /billing/legal-profile | Юридический профиль |
| [**getBillingTopups()**](BillingApi.md#getBillingTopups) | **GET** /billing/topups | Пополнения |
| [**getBillingTopupsTopupId()**](BillingApi.md#getBillingTopupsTopupId) | **GET** /billing/topups/{topupId} | Статус пополнения |
| [**getBillingTransactions()**](BillingApi.md#getBillingTransactions) | **GET** /billing/transactions | Транзакции |
| [**postBillingInvoiceRefresh()**](BillingApi.md#postBillingInvoiceRefresh) | **POST** /billing/invoices/{invoiceId}/refresh | Обновить статус счёта |
| [**postBillingInvoices()**](BillingApi.md#postBillingInvoices) | **POST** /billing/invoices | Выставить счёт |
| [**postBillingTopups()**](BillingApi.md#postBillingTopups) | **POST** /billing/topups | Создать пополнение |
| [**postBillingTopupsTopupIdRefresh()**](BillingApi.md#postBillingTopupsTopupIdRefresh) | **POST** /billing/topups/{topupId}/refresh | Обновить статус пополнения |
| [**putBillingLegalProfile()**](BillingApi.md#putBillingLegalProfile) | **PUT** /billing/legal-profile | Сохранить юридический профиль |


## `getBillingCompanyLookup()`

```php
getBillingCompanyLookup($q, $limit): \Relaya\Sdk\Model\CompanyLookupOutputBody
```

Подсказки по организации

Поиск компании по ИНН или названию (DaData/внешний справочник) для автозаполнения реквизитов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | ИНН или название
$limit = 50; // int | Максимальное количество элементов в ответе.

try {
    $result = $apiInstance->getBillingCompanyLookup($q, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingCompanyLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| ИНН или название | |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 8] |

### Return type

[**\Relaya\Sdk\Model\CompanyLookupOutputBody**](../Model/CompanyLookupOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingInvoice()`

```php
getBillingInvoice($invoice_id): \Relaya\Sdk\Model\BillingInvoiceItem
```

Карточка счёта

Детали одного счёта: статус, сумма, позиции, ссылки на документы.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Параметр `invoiceId` из `path`.

try {
    $result = $apiInstance->getBillingInvoice($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Параметр &#x60;invoiceId&#x60; из &#x60;path&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\BillingInvoiceItem**](../Model/BillingInvoiceItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingInvoices()`

```php
getBillingInvoices($limit, $cursor): \Relaya\Sdk\Model\ListBillingInvoicesOutputBody
```

Список счетов

Счета на оплату, выставленные аккаунту (статус, сумма, PDF/акт при наличии).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

try {
    $result = $apiInstance->getBillingInvoices($limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 20] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\ListBillingInvoicesOutputBody**](../Model/ListBillingInvoicesOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingInvoicesInvoiceIdAct()`

```php
getBillingInvoicesInvoiceIdAct($invoice_id)
```

Скачать акт по счёту

PDF акта выполненных работ / закрывающего документа для оплаченного счёта.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Параметр `invoiceId` из `path`.

try {
    $apiInstance->getBillingInvoicesInvoiceIdAct($invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingInvoicesInvoiceIdAct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Параметр &#x60;invoiceId&#x60; из &#x60;path&#x60;. | |

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

## `getBillingLegalProfile()`

```php
getBillingLegalProfile(): \Relaya\Sdk\Model\LegalProfileBody
```

Юридический профиль

Реквизиты организации для счетов (ИНН, КПП, адрес, банк).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBillingLegalProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingLegalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\LegalProfileBody**](../Model/LegalProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingTopups()`

```php
getBillingTopups($limit, $cursor): \Relaya\Sdk\Model\TopUpsListResponseBody
```

Пополнения

История пополнений.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

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
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 20] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\TopUpsListResponseBody**](../Model/TopUpsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

Статус пополнения

Состояние одного пополнения.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 6f9619ff-8b86-d011-b42d-00cf4fc964ff; // string | Идентификатор пополнения баланса.

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
| **topup_id** | **string**| Идентификатор пополнения баланса. | |

### Return type

[**\Relaya\Sdk\Model\TopUpStatusResponseBody**](../Model/TopUpStatusResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

Транзакции

Движения баланса.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Максимальное количество элементов в ответе.
$cursor = eyJjcmVhdGVkQXQiOiIyMDI2LTA0LTE3VDEyOjAwOjAwWiJ9; // string | Курсор пагинации из предыдущего ответа.

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
| **limit** | **int**| Максимальное количество элементов в ответе. | [optional] [default to 20] |
| **cursor** | **string**| Курсор пагинации из предыдущего ответа. | [optional] |

### Return type

[**\Relaya\Sdk\Model\TransactionsListResponseBody**](../Model/TransactionsListResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBillingInvoiceRefresh()`

```php
postBillingInvoiceRefresh($invoice_id): \Relaya\Sdk\Model\RefreshBillingInvoiceOutputBody
```

Обновить статус счёта

Запрашивает актуальный статус у платёжного провайдера / бухгалтерии.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = 'invoice_id_example'; // string | Параметр `invoiceId` из `path`.

try {
    $result = $apiInstance->postBillingInvoiceRefresh($invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postBillingInvoiceRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_id** | **string**| Параметр &#x60;invoiceId&#x60; из &#x60;path&#x60;. | |

### Return type

[**\Relaya\Sdk\Model\RefreshBillingInvoiceOutputBody**](../Model/RefreshBillingInvoiceOutputBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBillingInvoices()`

```php
postBillingInvoices($create_billing_invoice_input_body, $idempotency_key): \Relaya\Sdk\Model\BillingInvoiceItem
```

Выставить счёт

Создаёт счёт на пополнение или услугу и возвращает ссылку/реквизиты оплаты.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_billing_invoice_input_body = {"$schema":"https://localhost:8485/v1/schemas/CreateBillingInvoiceInputBody.json","amountCents":49900,"comment":"example","itemName":"example"}; // \Relaya\Sdk\Model\CreateBillingInvoiceInputBody | Параметры JSON-запроса.
$idempotency_key = 'idempotency_key_example'; // string | Параметр `Idempotency-Key` из `header`.

try {
    $result = $apiInstance->postBillingInvoices($create_billing_invoice_input_body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->postBillingInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_billing_invoice_input_body** | [**\Relaya\Sdk\Model\CreateBillingInvoiceInputBody**](../Model/CreateBillingInvoiceInputBody.md)| Параметры JSON-запроса. | |
| **idempotency_key** | **string**| Параметр &#x60;Idempotency-Key&#x60; из &#x60;header&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\BillingInvoiceItem**](../Model/BillingInvoiceItem.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBillingTopups()`

```php
postBillingTopups($top_up_input_body, $idempotency_key): \Relaya\Sdk\Model\TopUpResponseBody
```

Создать пополнение

Создаёт платёж и URL оплаты.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top_up_input_body = {"$schema":"https://localhost:8485/v1/schemas/TopUpInputBody.json","amountCents":49900,"promoCode":"example"}; // \Relaya\Sdk\Model\TopUpInputBody | Параметры JSON-запроса.
$idempotency_key = 'idempotency_key_example'; // string | Параметр `Idempotency-Key` из `header`.

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
| **top_up_input_body** | [**\Relaya\Sdk\Model\TopUpInputBody**](../Model/TopUpInputBody.md)| Параметры JSON-запроса. | |
| **idempotency_key** | **string**| Параметр &#x60;Idempotency-Key&#x60; из &#x60;header&#x60;. | [optional] |

### Return type

[**\Relaya\Sdk\Model\TopUpResponseBody**](../Model/TopUpResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

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

Обновить статус пополнения

Запрос статуса у платёжного провайдера.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topup_id = 6f9619ff-8b86-d011-b42d-00cf4fc964ff; // string | Идентификатор пополнения баланса.

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
| **topup_id** | **string**| Идентификатор пополнения баланса. | |

### Return type

[**\Relaya\Sdk\Model\TopUpStatusResponseBody**](../Model/TopUpStatusResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBillingLegalProfile()`

```php
putBillingLegalProfile($legal_profile_body): \Relaya\Sdk\Model\LegalProfileBody
```

Сохранить юридический профиль

Создаёт или обновляет реквизиты организации для выставления счетов.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$legal_profile_body = {"$schema":"https://localhost:8485/v1/schemas/LegalProfileBody.json","contactPhone":"example","docsEmail":"example","inn":"example","kpp":"example","legalAddress":"example","legalName":"example"}; // \Relaya\Sdk\Model\LegalProfileBody | Параметры JSON-запроса.

try {
    $result = $apiInstance->putBillingLegalProfile($legal_profile_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->putBillingLegalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **legal_profile_body** | [**\Relaya\Sdk\Model\LegalProfileBody**](../Model/LegalProfileBody.md)| Параметры JSON-запроса. | |

### Return type

[**\Relaya\Sdk\Model\LegalProfileBody**](../Model/LegalProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
