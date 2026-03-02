# Relaya\Sdk\AuthApi



All URIs are relative to https://api.relaya.ru/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authOauthProviderCallbackGet()**](AuthApi.md#authOauthProviderCallbackGet) | **GET** /auth/oauth/{provider}/callback | OAuth callback |
| [**authOauthTelegramCompletePost()**](AuthApi.md#authOauthTelegramCompletePost) | **POST** /auth/oauth/telegram/complete | OAuth Telegram complete |
| [**getAuthOauthProviderStart()**](AuthApi.md#getAuthOauthProviderStart) | **GET** /auth/oauth/{provider}/start | Start OAuth authorization |
| [**getAuthOauthProviders()**](AuthApi.md#getAuthOauthProviders) | **GET** /auth/oauth/providers | Get OAuth providers availability |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQr()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Get auth QR |
| [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationAuthQrStatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Get QR auth status |
| [**getProfilesProfileIdIntegrationsIntegrationToken()**](AuthApi.md#getProfilesProfileIdIntegrationsIntegrationToken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Get bot token |
| [**getUsersExists()**](AuthApi.md#getUsersExists) | **GET** /users/exists | Check if user exists |
| [**postAuthEmailVerifyConfirm()**](AuthApi.md#postAuthEmailVerifyConfirm) | **POST** /auth/email/verify/confirm | Confirm email verification |
| [**postAuthEmailVerifyRequest()**](AuthApi.md#postAuthEmailVerifyRequest) | **POST** /auth/email/verify/request | Request email verification code |
| [**postAuthOauthPendingCompleteEmail()**](AuthApi.md#postAuthOauthPendingCompleteEmail) | **POST** /auth/oauth/pending/complete-email | Complete OAuth with email |
| [**postAuthPhoneTelegramConfirm()**](AuthApi.md#postAuthPhoneTelegramConfirm) | **POST** /auth/phone/telegram/confirm | Confirm Telegram phone verification |
| [**postAuthPhoneTelegramStart()**](AuthApi.md#postAuthPhoneTelegramStart) | **POST** /auth/phone/telegram/start | Start Telegram phone verification |
| [**postAuthTokens()**](AuthApi.md#postAuthTokens) | **POST** /auth/tokens | Create authentication token |
| [**postProfilesProfileIdIntegrationsIntegrationAuth2fa()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Submit 2FA password |
| [**postProfilesProfileIdIntegrationsIntegrationAuthLogout()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthLogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Logout profile |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Confirm phone auth code |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Submit phone auth password |
| [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Start phone auth |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Poll authorization |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsStart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Start SMS authorization |
| [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify()**](AuthApi.md#postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Send authorization code |
| [**postUsers()**](AuthApi.md#postUsers) | **POST** /users | Register new user |
| [**profilesProfileIdIntegrationsIntegrationOauthCallbackGet()**](AuthApi.md#profilesProfileIdIntegrationsIntegrationOauthCallbackGet) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/callback | VK OAuth callback |
| [**putProfilesProfileIdIntegrationsIntegrationToken()**](AuthApi.md#putProfilesProfileIdIntegrationsIntegrationToken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Set bot token |


## `authOauthProviderCallbackGet()`

```php
authOauthProviderCallbackGet()
```

OAuth callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->authOauthProviderCallbackGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authOauthProviderCallbackGet: ', $e->getMessage(), PHP_EOL;
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

## `authOauthTelegramCompletePost()`

```php
authOauthTelegramCompletePost()
```

OAuth Telegram complete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->authOauthTelegramCompletePost();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authOauthTelegramCompletePost: ', $e->getMessage(), PHP_EOL;
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

## `getAuthOauthProviderStart()`

```php
getAuthOauthProviderStart($provider, $origin): \Relaya\Sdk\Model\OAuthStartOutputBody
```

Start OAuth authorization

Creates OAuth state and returns provider authorization URL for popup flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider = 'provider_example'; // string | OAuth provider: github, discord, yandex, telegram, vk
$origin = 'origin_example'; // string | Frontend origin for secure postMessage return target

try {
    $result = $apiInstance->getAuthOauthProviderStart($provider, $origin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthOauthProviderStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| OAuth provider: github, discord, yandex, telegram, vk | |
| **origin** | **string**| Frontend origin for secure postMessage return target | |

### Return type

[**\Relaya\Sdk\Model\OAuthStartOutputBody**](../Model/OAuthStartOutputBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthOauthProviders()`

```php
getAuthOauthProviders(): \Relaya\Sdk\Model\OAuthProvidersOutputBody
```

Get OAuth providers availability

Returns social auth global flag and per-provider availability.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAuthOauthProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthOauthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Relaya\Sdk\Model\OAuthProvidersOutputBody**](../Model/OAuthProvidersOutputBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationAuthQr()`

```php
getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id): mixed
```

Get auth QR

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$track_id = 'track_id_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationAuthQr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **track_id** | **string**|  | [optional] |

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

## `getProfilesProfileIdIntegrationsIntegrationAuthQrStatus()`

```php
getProfilesProfileIdIntegrationsIntegrationAuthQrStatus($profile_id, $integration, $track_id): \Relaya\Sdk\Model\QRStatusResponseBody
```

Get QR auth status

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram, whatsapp)
$track_id = 'track_id_example'; // string

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationAuthQrStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram, whatsapp) | |
| **track_id** | **string**|  | [optional] |

### Return type

[**\Relaya\Sdk\Model\QRStatusResponseBody**](../Model/QRStatusResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfilesProfileIdIntegrationsIntegrationToken()`

```php
getProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body): \Relaya\Sdk\Model\BotTokenResponseBody
```

Get bot token

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (maxbot, telegrambot, vk)
$bot_token_input_body = new \Relaya\Sdk\Model\BotTokenInputBody(); // \Relaya\Sdk\Model\BotTokenInputBody

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (maxbot, telegrambot, vk) | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\BotTokenResponseBody**](../Model/BotTokenResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersExists()`

```php
getUsersExists($email): \Relaya\Sdk\Model\UserExistsResponseBody
```

Check if user exists

Check if a user with the given email exists.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | Email address to check

try {
    $result = $apiInstance->getUsersExists($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getUsersExists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email address to check | |

### Return type

[**\Relaya\Sdk\Model\UserExistsResponseBody**](../Model/UserExistsResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthEmailVerifyConfirm()`

```php
postAuthEmailVerifyConfirm($email_verify_confirm_input_body): \Relaya\Sdk\Model\EmailVerifyConfirmResponseBody
```

Confirm email verification

Confirms email verification using challenge ID and code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_verify_confirm_input_body = new \Relaya\Sdk\Model\EmailVerifyConfirmInputBody(); // \Relaya\Sdk\Model\EmailVerifyConfirmInputBody

try {
    $result = $apiInstance->postAuthEmailVerifyConfirm($email_verify_confirm_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthEmailVerifyConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_verify_confirm_input_body** | [**\Relaya\Sdk\Model\EmailVerifyConfirmInputBody**](../Model/EmailVerifyConfirmInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\EmailVerifyConfirmResponseBody**](../Model/EmailVerifyConfirmResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthEmailVerifyRequest()`

```php
postAuthEmailVerifyRequest($email_verify_request_input_body): \Relaya\Sdk\Model\EmailVerifyRequestResponseBody
```

Request email verification code

Sends a verification code to the authenticated user's email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_verify_request_input_body = new \Relaya\Sdk\Model\EmailVerifyRequestInputBody(); // \Relaya\Sdk\Model\EmailVerifyRequestInputBody

try {
    $result = $apiInstance->postAuthEmailVerifyRequest($email_verify_request_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthEmailVerifyRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_verify_request_input_body** | [**\Relaya\Sdk\Model\EmailVerifyRequestInputBody**](../Model/EmailVerifyRequestInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\EmailVerifyRequestResponseBody**](../Model/EmailVerifyRequestResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthOauthPendingCompleteEmail()`

```php
postAuthOauthPendingCompleteEmail($o_auth_pending_complete_email_input_body): \Relaya\Sdk\Model\OAuthResolveOutputBody
```

Complete OAuth with email

Completes OAuth pending flow for providers that did not return an email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$o_auth_pending_complete_email_input_body = new \Relaya\Sdk\Model\OAuthPendingCompleteEmailInputBody(); // \Relaya\Sdk\Model\OAuthPendingCompleteEmailInputBody

try {
    $result = $apiInstance->postAuthOauthPendingCompleteEmail($o_auth_pending_complete_email_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthOauthPendingCompleteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **o_auth_pending_complete_email_input_body** | [**\Relaya\Sdk\Model\OAuthPendingCompleteEmailInputBody**](../Model/OAuthPendingCompleteEmailInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\OAuthResolveOutputBody**](../Model/OAuthResolveOutputBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthPhoneTelegramConfirm()`

```php
postAuthPhoneTelegramConfirm($telegram_phone_verify_confirm_input_body): \Relaya\Sdk\Model\TelegramPhoneVerifyConfirmResponseBody
```

Confirm Telegram phone verification

Confirms Telegram phone verification using challenge ID and code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telegram_phone_verify_confirm_input_body = new \Relaya\Sdk\Model\TelegramPhoneVerifyConfirmInputBody(); // \Relaya\Sdk\Model\TelegramPhoneVerifyConfirmInputBody

try {
    $result = $apiInstance->postAuthPhoneTelegramConfirm($telegram_phone_verify_confirm_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthPhoneTelegramConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **telegram_phone_verify_confirm_input_body** | [**\Relaya\Sdk\Model\TelegramPhoneVerifyConfirmInputBody**](../Model/TelegramPhoneVerifyConfirmInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\TelegramPhoneVerifyConfirmResponseBody**](../Model/TelegramPhoneVerifyConfirmResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthPhoneTelegramStart()`

```php
postAuthPhoneTelegramStart($telegram_phone_verify_start_input_body): \Relaya\Sdk\Model\TelegramPhoneVerifyStartResponseBody
```

Start Telegram phone verification

Starts phone verification flow and returns challenge metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$telegram_phone_verify_start_input_body = new \Relaya\Sdk\Model\TelegramPhoneVerifyStartInputBody(); // \Relaya\Sdk\Model\TelegramPhoneVerifyStartInputBody

try {
    $result = $apiInstance->postAuthPhoneTelegramStart($telegram_phone_verify_start_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthPhoneTelegramStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **telegram_phone_verify_start_input_body** | [**\Relaya\Sdk\Model\TelegramPhoneVerifyStartInputBody**](../Model/TelegramPhoneVerifyStartInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\TelegramPhoneVerifyStartResponseBody**](../Model/TelegramPhoneVerifyStartResponseBody.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAuthTokens()`

```php
postAuthTokens($auth_token_input_body): \Relaya\Sdk\Model\AuthTokenOutputBody
```

Create authentication token

Issue a JWT authentication token for a user given email/password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_token_input_body = new \Relaya\Sdk\Model\AuthTokenInputBody(); // \Relaya\Sdk\Model\AuthTokenInputBody

try {
    $result = $apiInstance->postAuthTokens($auth_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postAuthTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_token_input_body** | [**\Relaya\Sdk\Model\AuthTokenInputBody**](../Model/AuthTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\AuthTokenOutputBody**](../Model/AuthTokenOutputBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuth2fa()`

```php
postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body): mixed
```

Submit 2FA password

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$password2_fa_input_body = new \Relaya\Sdk\Model\Password2FAInputBody(); // \Relaya\Sdk\Model\Password2FAInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuth2fa($profile_id, $integration, $password2_fa_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuth2fa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **password2_fa_input_body** | [**\Relaya\Sdk\Model\Password2FAInputBody**](../Model/Password2FAInputBody.md)|  | |

### Return type

**mixed**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthLogout()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthLogout($profile_id, $integration): \Relaya\Sdk\Model\LogoutBody
```

Logout profile

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthLogout($profile_id, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |

### Return type

[**\Relaya\Sdk\Model\LogoutBody**](../Model/LogoutBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode($profile_id, $integration, $phone_auth_code_input_body): \Relaya\Sdk\Model\PhoneAuthCodeResponseBody
```

Confirm phone auth code

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_code_input_body = new \Relaya\Sdk\Model\PhoneAuthCodeInputBody(); // \Relaya\Sdk\Model\PhoneAuthCodeInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode($profile_id, $integration, $phone_auth_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_code_input_body** | [**\Relaya\Sdk\Model\PhoneAuthCodeInputBody**](../Model/PhoneAuthCodeInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthCodeResponseBody**](../Model/PhoneAuthCodeResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword($profile_id, $integration, $phone_auth_password_input_body): \Relaya\Sdk\Model\PhoneAuthPasswordResponseBody
```

Submit phone auth password

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_password_input_body = new \Relaya\Sdk\Model\PhoneAuthPasswordInputBody(); // \Relaya\Sdk\Model\PhoneAuthPasswordInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword($profile_id, $integration, $phone_auth_password_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_password_input_body** | [**\Relaya\Sdk\Model\PhoneAuthPasswordInputBody**](../Model/PhoneAuthPasswordInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthPasswordResponseBody**](../Model/PhoneAuthPasswordResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart($profile_id, $integration, $phone_auth_start_input_body): \Relaya\Sdk\Model\PhoneAuthStartResponseBody
```

Start phone auth

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (telegram)
$phone_auth_start_input_body = new \Relaya\Sdk\Model\PhoneAuthStartInputBody(); // \Relaya\Sdk\Model\PhoneAuthStartInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart($profile_id, $integration, $phone_auth_start_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (telegram) | |
| **phone_auth_start_input_body** | [**\Relaya\Sdk\Model\PhoneAuthStartInputBody**](../Model/PhoneAuthStartInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PhoneAuthStartResponseBody**](../Model/PhoneAuthStartResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll($profile_id, $integration, $poll_authorization_input_body): \Relaya\Sdk\Model\PollAuthorizationBody
```

Poll authorization

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$poll_authorization_input_body = new \Relaya\Sdk\Model\PollAuthorizationInputBody(); // \Relaya\Sdk\Model\PollAuthorizationInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll($profile_id, $integration, $poll_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **poll_authorization_input_body** | [**\Relaya\Sdk\Model\PollAuthorizationInputBody**](../Model/PollAuthorizationInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\PollAuthorizationBody**](../Model/PollAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsStart()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsStart($profile_id, $integration, $start_authorization_input_body): \Relaya\Sdk\Model\StartAuthorizationBody
```

Start SMS authorization

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$start_authorization_input_body = new \Relaya\Sdk\Model\StartAuthorizationInputBody(); // \Relaya\Sdk\Model\StartAuthorizationInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart($profile_id, $integration, $start_authorization_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **start_authorization_input_body** | [**\Relaya\Sdk\Model\StartAuthorizationInputBody**](../Model/StartAuthorizationInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\StartAuthorizationBody**](../Model/StartAuthorizationBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify()`

```php
postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify($profile_id, $integration, $send_authorization_code_input_body): \Relaya\Sdk\Model\SendAuthorizationCodeBody
```

Send authorization code

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string | Profile ID
$integration = 'integration_example'; // string | Integration type
$send_authorization_code_input_body = new \Relaya\Sdk\Model\SendAuthorizationCodeInputBody(); // \Relaya\Sdk\Model\SendAuthorizationCodeInputBody

try {
    $result = $apiInstance->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify($profile_id, $integration, $send_authorization_code_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**| Profile ID | |
| **integration** | **string**| Integration type | |
| **send_authorization_code_input_body** | [**\Relaya\Sdk\Model\SendAuthorizationCodeInputBody**](../Model/SendAuthorizationCodeInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\SendAuthorizationCodeBody**](../Model/SendAuthorizationCodeBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUsers()`

```php
postUsers($create_user_input_body): \Relaya\Sdk\Model\CreateUserResponseBody
```

Register new user

Create a new user account with email and password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_user_input_body = new \Relaya\Sdk\Model\CreateUserInputBody(); // \Relaya\Sdk\Model\CreateUserInputBody

try {
    $result = $apiInstance->postUsers($create_user_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->postUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_input_body** | [**\Relaya\Sdk\Model\CreateUserInputBody**](../Model/CreateUserInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\CreateUserResponseBody**](../Model/CreateUserResponseBody.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->profilesProfileIdIntegrationsIntegrationOauthCallbackGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->profilesProfileIdIntegrationsIntegrationOauthCallbackGet: ', $e->getMessage(), PHP_EOL;
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

## `putProfilesProfileIdIntegrationsIntegrationToken()`

```php
putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body): \Relaya\Sdk\Model\BotTokenSetResponseBody
```

Set bot token

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


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 'profile_id_example'; // string
$integration = 'integration_example'; // string | Integration type (maxbot, telegrambot, vk)
$bot_token_input_body = new \Relaya\Sdk\Model\BotTokenInputBody(); // \Relaya\Sdk\Model\BotTokenInputBody

try {
    $result = $apiInstance->putProfilesProfileIdIntegrationsIntegrationToken($profile_id, $integration, $bot_token_input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->putProfilesProfileIdIntegrationsIntegrationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **profile_id** | **string**|  | |
| **integration** | **string**| Integration type (maxbot, telegrambot, vk) | |
| **bot_token_input_body** | [**\Relaya\Sdk\Model\BotTokenInputBody**](../Model/BotTokenInputBody.md)|  | |

### Return type

[**\Relaya\Sdk\Model\BotTokenSetResponseBody**](../Model/BotTokenSetResponseBody.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
