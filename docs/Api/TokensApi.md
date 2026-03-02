# Relaya\Sdk\TokensApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteUsersMeApiTokensId()**](TokensApi.md#deleteUsersMeApiTokensId) | **DELETE** /users/me/api-tokens/{id} | Revoke API token |
| [**getUsersMeApiScopes()**](TokensApi.md#getUsersMeApiScopes) | **GET** /users/me/api-scopes | List available API scopes |
| [**getUsersMeApiTokens()**](TokensApi.md#getUsersMeApiTokens) | **GET** /users/me/api-tokens | List API tokens |
| [**postUsersMeApiTokens()**](TokensApi.md#postUsersMeApiTokens) | **POST** /users/me/api-tokens | Create API token |
| [**postUsersMeApiTokensIdRotate()**](TokensApi.md#postUsersMeApiTokensIdRotate) | **POST** /users/me/api-tokens/{id}/rotate | Rotate API token |


## `deleteUsersMeApiTokensId()`

```php
deleteUsersMeApiTokensId($id)
```

Revoke API token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier

try {
    $apiInstance->deleteUsersMeApiTokensId($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteUsersMeApiTokensId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier | |

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

## `getUsersMeApiScopes()`

```php
getUsersMeApiScopes(): \Relaya\Sdk\Model\ApiScopesListResponseBody
```

List available API scopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMeApiScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getUsersMeApiScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\ApiScopesListResponseBody**](../Model/ApiScopesListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersMeApiTokens()`

```php
getUsersMeApiTokens(): \Relaya\Sdk\Model\ApiTokensListResponseBody
```

List API tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMeApiTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getUsersMeApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\ApiTokensListResponseBody**](../Model/ApiTokensListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeApiTokens()`

```php
postUsersMeApiTokens($create_api_token_input_body): \Relaya\Sdk\Model\ApiTokenItem
```

Create API token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_api_token_input_body = new \Relaya\Sdk\Model\CreateApiTokenInputBody(); // \Relaya\Sdk\Model\CreateApiTokenInputBody

try {
    $result = $apiInstance->postUsersMeApiTokens($create_api_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postUsersMeApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_api_token_input_body** | [**\Relaya\Sdk\Model\CreateApiTokenInputBody**](../Model/CreateApiTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ApiTokenItem**](../Model/ApiTokenItem.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsersMeApiTokensIdRotate()`

```php
postUsersMeApiTokensIdRotate($id)
```

Rotate API token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier

try {
    $apiInstance->postUsersMeApiTokensIdRotate($id);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postUsersMeApiTokensIdRotate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier | |

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
