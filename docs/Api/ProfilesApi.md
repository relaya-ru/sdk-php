# Relaya\Sdk\ProfilesApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProfilesProfileId()**](ProfilesApi.md#deleteProfilesProfileId) | **DELETE** /profiles/{profileId} | Delete profile |
| [**getProfiles()**](ProfilesApi.md#getProfiles) | **GET** /profiles | List profiles |
| [**getProfilesProfileId()**](ProfilesApi.md#getProfilesProfileId) | **GET** /profiles/{profileId} | Get profile |
| [**getProfilesProfileIdActions()**](ProfilesApi.md#getProfilesProfileIdActions) | **GET** /profiles/{profileId}/actions | Get profile actions |
| [**getProfilesProfileIdIntegrationsIntegrationContacts()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationContacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | List contacts |
| [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationContactsBlocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | List blocked contacts |
| [**getProfilesProfileIdIntegrationsIntegrationOverview()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationOverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Get profile overview |
| [**getProfilesProfileIdIntegrationsIntegrationStatus()**](ProfilesApi.md#getProfilesProfileIdIntegrationsIntegrationStatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Get profile status |
| [**patchProfilesProfileId()**](ProfilesApi.md#patchProfilesProfileId) | **PATCH** /profiles/{profileId} | Update profile |
| [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile()**](ProfilesApi.md#patchProfilesProfileIdIntegrationsIntegrationAccountProfile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Update MAX profile name/description |
| [**postProfiles()**](ProfilesApi.md#postProfiles) | **POST** /profiles | Create profile |
| [**postProfilesProfileIdIntegrationsIntegrationContactsByIds()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsByIds) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Get contacts by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsLastOnline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Get contacts last online by IDs |
| [**postProfilesProfileIdIntegrationsIntegrationContactsSearch()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationContactsSearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Search contact by phone |
| [**postProfilesProfileIdIntegrationsIntegrationReboot()**](ProfilesApi.md#postProfilesProfileIdIntegrationsIntegrationReboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Reboot profile |
| [**postProfilesProfileIdRenew()**](ProfilesApi.md#postProfilesProfileIdRenew) | **POST** /profiles/{profileId}/renew | Renew profile |
| [**profilesProfileIdIntegrationsIntegrationAvatarPost()**](ProfilesApi.md#profilesProfileIdIntegrationsIntegrationAvatarPost) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Set profile picture |
| [**putProfilesProfileIdAutoRenew()**](ProfilesApi.md#putProfilesProfileIdAutoRenew) | **PUT** /profiles/{profileId}/auto-renew | Update auto-renew |


## `deleteProfilesProfileId()`

```php
deleteProfilesProfileId($profile_id)
```

Delete profile

Permanently deletes a profile and all its associated data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $apiInstance->deleteProfilesProfileId($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->deleteProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |

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

## `getProfiles()`

```php
getProfiles($limit, $cursor, $q, $integration): \Relaya\Sdk\Model\ProfilesListResponseBody
```

List profiles

Returns a paginated list of profiles belonging to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of items to return
$cursor = 'cursor_example'; // string | Pagination cursor
$q = 'q_example'; // string | Search query
$integration = 'integration_example'; // string | Filter by integration type

try {
    $result = $apiInstance->getProfiles($limit, $cursor, $q, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to return | [optional] [default to 50] |
| **cursor** | **string**| Pagination cursor | [optional] |
| **q** | **string**| Search query | [optional] |
| **integration** | **string**| Filter by integration type | [optional] |

### Return type

[**\Relaya\Sdk\Model\ProfilesListResponseBody**](../Model/ProfilesListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileId()`

```php
getProfilesProfileId($profile_id): \Relaya\Sdk\Model\ProfileResponse
```

Get profile

Returns detailed information about a specific profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->getProfilesProfileId($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdActions()`

```php
getProfilesProfileIdActions($profile_id, $limit, $cursor): \Relaya\Sdk\Model\ProfileActionsListResponseBody
```

Get profile actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$limit = 50; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdActions($profile_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\ProfileActionsListResponseBody**](../Model/ProfileActionsListResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationContacts()`

```php
getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor): \Relaya\Sdk\Model\ContactsListHumaBody
```

List contacts

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type
$limit = 200; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContacts($profile_id, $integration, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type | |
| **limit** | **int**|  | [optional] [default to 200] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\ContactsListHumaBody**](../Model/ContactsListHumaBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationContactsBlocked()`

```php
getProfilesProfileIdIntegrationsIntegrationContactsBlocked($profile_id, $integration, $status, $count, $from): \Relaya\Sdk\Model\MaxBlockedContactsResponseBody
```

List blocked contacts

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$status = 'status_example'; // string | Contact status filter (default BLOCKED)
$count = 56; // int | Page size (default 100)
$from = 56; // int | Offset (default 0)

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationContactsBlocked($profile_id, $integration, $status, $count, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationContactsBlocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **status** | **string**| Contact status filter (default BLOCKED) | [optional] |
| **count** | **int**| Page size (default 100) | [optional] |
| **from** | **int**| Offset (default 0) | [optional] |

### Return type

[**\Relaya\Sdk\Model\MaxBlockedContactsResponseBody**](../Model/MaxBlockedContactsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationOverview()`

```php
getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration): mixed
```

Get profile overview

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationOverview($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationOverview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

**mixed**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationStatus()`

```php
getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration): \Relaya\Sdk\Model\StateProfileBody
```

Get profile status

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationStatus($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->getProfilesProfileIdIntegrationsIntegrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\StateProfileBody**](../Model/StateProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileId()`

```php
patchProfilesProfileId($profile_id, $update_profile_input_body): \Relaya\Sdk\Model\ProfileResponse
```

Update profile

Updates the name or settings of an existing profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$update_profile_input_body = new \Relaya\Sdk\Model\UpdateProfileInputBody(); // \Relaya\Sdk\Model\UpdateProfileInputBody

try {
    $result = $apiInstance->patchProfilesProfileId($profile_id, $update_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->patchProfilesProfileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **update_profile_input_body** | [**\Relaya\Sdk\Model\UpdateProfileInputBody**](../Model/UpdateProfileInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfilesProfileIdIntegrationsIntegrationAccountProfile()`

```php
patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body): \Relaya\Sdk\Model\MaxSetProfileResponseBody
```

Update MAX profile name/description

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_set_profile_input_body = new \Relaya\Sdk\Model\MaxSetProfileInputBody(); // \Relaya\Sdk\Model\MaxSetProfileInputBody

try {
    $result = $apiInstance->patchProfilesProfileIdIntegrationsIntegrationAccountProfile($profile_id, $integration, $max_set_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->patchProfilesProfileIdIntegrationsIntegrationAccountProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_set_profile_input_body** | [**\Relaya\Sdk\Model\MaxSetProfileInputBody**](../Model/MaxSetProfileInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxSetProfileResponseBody**](../Model/MaxSetProfileResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfiles()`

```php
postProfiles($create_profile_input_body): \Relaya\Sdk\Model\ProfileResponse
```

Create profile

Create a new integration profile for the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_profile_input_body = new \Relaya\Sdk\Model\CreateProfileInputBody(); // \Relaya\Sdk\Model\CreateProfileInputBody

try {
    $result = $apiInstance->postProfiles($create_profile_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_profile_input_body** | [**\Relaya\Sdk\Model\CreateProfileInputBody**](../Model/CreateProfileInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ProfileResponse**](../Model/ProfileResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsByIds()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsByIds($profile_id, $integration, $max_contacts_by_ids_input_body): \Relaya\Sdk\Model\MaxContactsByIDsResponseBody
```

Get contacts by IDs

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_contacts_by_ids_input_body = new \Relaya\Sdk\Model\MaxContactsByIDsInputBody(); // \Relaya\Sdk\Model\MaxContactsByIDsInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsByIds($profile_id, $integration, $max_contacts_by_ids_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_contacts_by_ids_input_body** | [**\Relaya\Sdk\Model\MaxContactsByIDsInputBody**](../Model/MaxContactsByIDsInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsByIDsResponseBody**](../Model/MaxContactsByIDsResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsLastOnline()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsLastOnline($profile_id, $integration, $max_contacts_last_online_input_body): \Relaya\Sdk\Model\MaxContactsLastOnlineResponseBody
```

Get contacts last online by IDs

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$max_contacts_last_online_input_body = new \Relaya\Sdk\Model\MaxContactsLastOnlineInputBody(); // \Relaya\Sdk\Model\MaxContactsLastOnlineInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline($profile_id, $integration, $max_contacts_last_online_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsLastOnline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **max_contacts_last_online_input_body** | [**\Relaya\Sdk\Model\MaxContactsLastOnlineInputBody**](../Model/MaxContactsLastOnlineInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\MaxContactsLastOnlineResponseBody**](../Model/MaxContactsLastOnlineResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationContactsSearch()`

```php
postProfilesProfileIdIntegrationsIntegrationContactsSearch($profile_id, $integration, $search_contact_input_body): \Relaya\Sdk\Model\SearchContactResponseBody
```

Search contact by phone

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Filter by integration type
$search_contact_input_body = new \Relaya\Sdk\Model\SearchContactInputBody(); // \Relaya\Sdk\Model\SearchContactInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationContactsSearch($profile_id, $integration, $search_contact_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationContactsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Filter by integration type | |
| **search_contact_input_body** | [**\Relaya\Sdk\Model\SearchContactInputBody**](../Model/SearchContactInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SearchContactResponseBody**](../Model/SearchContactResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationReboot()`

```php
postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration): \Relaya\Sdk\Model\RebootProfileBody
```

Reboot profile

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationReboot($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdIntegrationsIntegrationReboot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\RebootProfileBody**](../Model/RebootProfileBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdRenew()`

```php
postProfilesProfileIdRenew($profile_id): \Relaya\Sdk\Model\ProfileRenewOutputBody
```

Renew profile

Manually renew a profile subscription for one month using user balance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID

try {
    $result = $apiInstance->postProfilesProfileIdRenew($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->postProfilesProfileIdRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |

### Return type

[**\Relaya\Sdk\Model\ProfileRenewOutputBody**](../Model/ProfileRenewOutputBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `profilesProfileIdIntegrationsIntegrationAvatarPost()`

```php
profilesProfileIdIntegrationsIntegrationAvatarPost()
```

Set profile picture

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


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationAvatarPost();
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesProfileIdIntegrationsIntegrationAvatarPost: ', $e->getMessage(), PHP_EOL;
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

## `putProfilesProfileIdAutoRenew()`

```php
putProfilesProfileIdAutoRenew($profile_id, $update_profile_auto_renew_input_body): \Relaya\Sdk\Model\ProfileRenewOutputBody
```

Update auto-renew

Enable or disable automatic subscription renewal for a profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$update_profile_auto_renew_input_body = new \Relaya\Sdk\Model\UpdateProfileAutoRenewInputBody(); // \Relaya\Sdk\Model\UpdateProfileAutoRenewInputBody

try {
    $result = $apiInstance->putProfilesProfileIdAutoRenew($profile_id, $update_profile_auto_renew_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->putProfilesProfileIdAutoRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **update_profile_auto_renew_input_body** | [**\Relaya\Sdk\Model\UpdateProfileAutoRenewInputBody**](../Model/UpdateProfileAutoRenewInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\ProfileRenewOutputBody**](../Model/ProfileRenewOutputBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
