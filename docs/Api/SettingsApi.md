# Relaya\Sdk\SettingsApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProfilesProfileIdIntegrationsIntegrationSettings()**](SettingsApi.md#getProfilesProfileIdIntegrationsIntegrationSettings) | **GET** /profiles/{profileId}/integrations/{integration}/settings | Get settings |
| [**getProfilesProfileIdIntegrationsIntegrationSettingsUser()**](SettingsApi.md#getProfilesProfileIdIntegrationsIntegrationSettingsUser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Get MAX account settings |
| [**patchProfilesProfileIdIntegrationsIntegrationSettings()**](SettingsApi.md#patchProfilesProfileIdIntegrationsIntegrationSettings) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings | Update settings |
| [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser()**](SettingsApi.md#patchProfilesProfileIdIntegrationsIntegrationSettingsUser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Update MAX account settings |


## `getProfilesProfileIdIntegrationsIntegrationSettings()`

```php
getProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration): \Relaya\Sdk\Model\AccountSettings
```

Get settings

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


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getProfilesProfileIdIntegrationsIntegrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\AccountSettings**](../Model/AccountSettings.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Get MAX account settings

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


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationSettings()`

```php
patchProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration, $set_settings_input_body): \Relaya\Sdk\Model\SetSettingsBody
```

Update settings

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


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$set_settings_input_body = new \Relaya\Sdk\Model\SetSettingsInputBody(); // \Relaya\Sdk\Model\SetSettingsInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationSettings($profile_id, $integration, $set_settings_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->patchProfilesProfileIdIntegrationsIntegrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **set_settings_input_body** | [**\Relaya\Sdk\Model\SetSettingsInputBody**](../Model/SetSettingsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SetSettingsBody**](../Model/SetSettingsBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationSettingsUser()`

```php
patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body): \Relaya\Sdk\Model\MaxUserSettingsResponseBody
```

Update MAX account settings

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


$apiInstance = new Relaya\Sdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_set_user_settings_input_body = new \Relaya\Sdk\Model\MaxSetUserSettingsInputBody(); // \Relaya\Sdk\Model\MaxSetUserSettingsInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationSettingsUser($profile_id, $integration, $max_set_user_settings_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->patchProfilesProfileIdIntegrationsIntegrationSettingsUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_set_user_settings_input_body** | [**\Relaya\Sdk\Model\MaxSetUserSettingsInputBody**](../Model/MaxSetUserSettingsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxUserSettingsResponseBody**](../Model/MaxUserSettingsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
