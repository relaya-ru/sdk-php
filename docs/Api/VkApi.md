# Relaya\Sdk\VkApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**profilesProfileIdIntegrationsIntegrationOauthCallbackGet()**](VkApi.md#profilesProfileIdIntegrationsIntegrationOauthCallbackGet) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/callback | VK OAuth callback |


## `profilesProfileIdIntegrationsIntegrationOauthCallbackGet()`

```php
profilesProfileIdIntegrationsIntegrationOauthCallbackGet()
```

VK OAuth callback

OAuth callback endpoint for VK ID authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\VkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationOauthCallbackGet();
} catch (Exception $e) {
    echo 'Exception when calling VkApi->profilesProfileIdIntegrationsIntegrationOauthCallbackGet: ', $e->getMessage(), PHP_EOL;
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
