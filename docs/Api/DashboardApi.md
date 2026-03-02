# Relaya\Sdk\DashboardApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUsersMeDashboardSummary()**](DashboardApi.md#getUsersMeDashboardSummary) | **GET** /users/me/dashboard-summary | Get dashboard summary |


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


$apiInstance = new Relaya\Sdk\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsersMeDashboardSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->getUsersMeDashboardSummary: ', $e->getMessage(), PHP_EOL;
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
