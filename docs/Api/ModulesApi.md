# Relaya\Sdk\ModulesApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountModules()**](ModulesApi.md#getAccountModules) | **GET** /account/modules | List account modules |
| [**getAccountModulesUsage()**](ModulesApi.md#getAccountModulesUsage) | **GET** /account/modules/usage | Get account module usage |
| [**putAccountModulesModuleCode()**](ModulesApi.md#putAccountModulesModuleCode) | **PUT** /account/modules/{moduleCode} | Update account module |


## `getAccountModules()`

```php
getAccountModules(): \Relaya\Sdk\Model\AccountModulesListResponseBody
```

List account modules

Returns module entitlements for the authenticated account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountModules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModulesApi->getAccountModules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\AccountModulesListResponseBody**](../Model/AccountModulesListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountModulesUsage()`

```php
getAccountModulesUsage($from, $to): \Relaya\Sdk\Model\AccountModulesUsageResponseBody
```

Get account module usage

Returns aggregated module usage by metric for a date range.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = 'from_example'; // string | Start date (YYYY-MM-DD or RFC3339)
$to = 'to_example'; // string | End date (YYYY-MM-DD or RFC3339)

try {
    $result = $apiInstance->getAccountModulesUsage($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModulesApi->getAccountModulesUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| Start date (YYYY-MM-DD or RFC3339) | [optional] |
| **to** | **string**| End date (YYYY-MM-DD or RFC3339) | [optional] |

### Return type

[**\Relaya\Sdk\Model\AccountModulesUsageResponseBody**](../Model/AccountModulesUsageResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAccountModulesModuleCode()`

```php
putAccountModulesModuleCode($module_code, $update_account_module_input_body, $idempotency_key): \Relaya\Sdk\Model\UpdateAccountModuleResponseBody
```

Update account module

Enable/disable module and update module plan settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$module_code = 'module_code_example'; // string | Module code
$update_account_module_input_body = new \Relaya\Sdk\Model\UpdateAccountModuleInputBody(); // \Relaya\Sdk\Model\UpdateAccountModuleInputBody
$idempotency_key = 'idempotency_key_example'; // string | Optional idempotency key

try {
    $result = $apiInstance->putAccountModulesModuleCode($module_code, $update_account_module_input_body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModulesApi->putAccountModulesModuleCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **module_code** | **string**| Module code | |
| **update_account_module_input_body** | [**\Relaya\Sdk\Model\UpdateAccountModuleInputBody**](../Model/UpdateAccountModuleInputBody.md)|  | |
| **idempotency_key** | **string**| Optional idempotency key | [optional] |

### Return type

[**\Relaya\Sdk\Model\UpdateAccountModuleResponseBody**](../Model/UpdateAccountModuleResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
