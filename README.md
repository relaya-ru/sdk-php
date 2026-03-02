# Relaya PHP SDK

API for Relaya integrations and management


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

Install from Packagist:

```bash
composer require relaya/sdk-php
```

For local development in this repository:

```bash
composer install
```
### Laravel

The package supports Laravel auto-discovery.

Publish configuration (optional):

```bash
php artisan vendor:publish --tag=relaya-sdk-config
```

Then configure `.env`, for example:

```dotenv
RELAYA_API_TOKEN=your_token
RELAYA_API_BASE_URL=https://api.relaya.ru/v1
```

### Quick Start (Facade)

```php
<?php

use Relaya\RelayaApi;

RelayaApi::configure(accessToken: 'YOUR_ACCESS_TOKEN');
$result = RelayaApi::AccountApi()->getAccountModules();
print_r($result);
```

Alias:

```php
<?php

use Relaya\Api;

$result = Api::AccountApi()->getAccountModules();
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/relaya-sdk-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: BearerAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Relaya\Sdk\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountModules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountModules: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.relaya.ru/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccountModules**](docs/Api/AccountApi.md#getaccountmodules) | **GET** /account/modules | List account modules
*AccountApi* | [**getAccountModulesUsage**](docs/Api/AccountApi.md#getaccountmodulesusage) | **GET** /account/modules/usage | Get account module usage
*AccountApi* | [**putAccountModulesModuleCode**](docs/Api/AccountApi.md#putaccountmodulesmodulecode) | **PUT** /account/modules/{moduleCode} | Update account module
*AuthApi* | [**authOauthProviderCallbackGet**](docs/Api/AuthApi.md#authoauthprovidercallbackget) | **GET** /auth/oauth/{provider}/callback | OAuth callback
*AuthApi* | [**authOauthTelegramCompletePost**](docs/Api/AuthApi.md#authoauthtelegramcompletepost) | **POST** /auth/oauth/telegram/complete | OAuth Telegram complete
*AuthApi* | [**getAuthOauthProviderStart**](docs/Api/AuthApi.md#getauthoauthproviderstart) | **GET** /auth/oauth/{provider}/start | Start OAuth authorization
*AuthApi* | [**getAuthOauthProviders**](docs/Api/AuthApi.md#getauthoauthproviders) | **GET** /auth/oauth/providers | Get OAuth providers availability
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQr**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationauthqr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Get auth QR
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationauthqrstatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Get QR auth status
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationtoken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Get bot token
*AuthApi* | [**getUsersExists**](docs/Api/AuthApi.md#getusersexists) | **GET** /users/exists | Check if user exists
*AuthApi* | [**postAuthEmailVerifyConfirm**](docs/Api/AuthApi.md#postauthemailverifyconfirm) | **POST** /auth/email/verify/confirm | Confirm email verification
*AuthApi* | [**postAuthEmailVerifyRequest**](docs/Api/AuthApi.md#postauthemailverifyrequest) | **POST** /auth/email/verify/request | Request email verification code
*AuthApi* | [**postAuthOauthPendingCompleteEmail**](docs/Api/AuthApi.md#postauthoauthpendingcompleteemail) | **POST** /auth/oauth/pending/complete-email | Complete OAuth with email
*AuthApi* | [**postAuthPhoneTelegramConfirm**](docs/Api/AuthApi.md#postauthphonetelegramconfirm) | **POST** /auth/phone/telegram/confirm | Confirm Telegram phone verification
*AuthApi* | [**postAuthPhoneTelegramStart**](docs/Api/AuthApi.md#postauthphonetelegramstart) | **POST** /auth/phone/telegram/start | Start Telegram phone verification
*AuthApi* | [**postAuthTokens**](docs/Api/AuthApi.md#postauthtokens) | **POST** /auth/tokens | Create authentication token
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuth2fa**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Submit 2FA password
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthLogout**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthlogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Logout profile
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonecode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Confirm phone auth code
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonepassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Submit phone auth password
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonestart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Start phone auth
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmspoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Poll authorization
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmsstart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Start SMS authorization
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmsverify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Send authorization code
*AuthApi* | [**postUsers**](docs/Api/AuthApi.md#postusers) | **POST** /users | Register new user
*AuthApi* | [**profilesProfileIdIntegrationsIntegrationOauthCallbackGet**](docs/Api/AuthApi.md#profilesprofileidintegrationsintegrationoauthcallbackget) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/callback | VK OAuth callback
*AuthApi* | [**putProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/AuthApi.md#putprofilesprofileidintegrationsintegrationtoken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Set bot token
*BillingApi* | [**billingProviderWebhookPost**](docs/Api/BillingApi.md#billingproviderwebhookpost) | **POST** /billing/provider/webhook | Billing provider webhook
*BillingApi* | [**getBillingTopups**](docs/Api/BillingApi.md#getbillingtopups) | **GET** /billing/topups | List top-up intents
*BillingApi* | [**getBillingTopupsTopupId**](docs/Api/BillingApi.md#getbillingtopupstopupid) | **GET** /billing/topups/{topupId} | Get top-up status
*BillingApi* | [**getBillingTransactions**](docs/Api/BillingApi.md#getbillingtransactions) | **GET** /billing/transactions | List transactions
*BillingApi* | [**postBillingTopups**](docs/Api/BillingApi.md#postbillingtopups) | **POST** /billing/topups | Create top-up intent
*BillingApi* | [**postBillingTopupsTopupIdRefresh**](docs/Api/BillingApi.md#postbillingtopupstopupidrefresh) | **POST** /billing/topups/{topupId}/refresh | Refresh top-up status from provider
*ChatsApi* | [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId**](docs/Api/ChatsApi.md#deleteprofilesprofileidintegrationsintegrationfoldersfolderid) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Delete MAX folder
*ChatsApi* | [**getProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/ChatsApi.md#getprofilesprofileidintegrationsintegrationfolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | List MAX folders
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsByIds**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Get chats by IDs
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatssubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Subscribe/unsubscribe chat updates
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationfolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Create MAX folder
*ChatsApi* | [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder**](docs/Api/ChatsApi.md#putprofilesprofileidintegrationsintegrationfoldersorder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Reorder MAX folders
*DashboardApi* | [**getUsersMeDashboardSummary**](docs/Api/DashboardApi.md#getusersmedashboardsummary) | **GET** /users/me/dashboard-summary | Get dashboard summary
*InboxApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxConversations**](docs/Api/InboxApi.md#getprofilesprofileidintegrationsintegrationinboxconversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | List inbox conversations
*InboxApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxMessages**](docs/Api/InboxApi.md#getprofilesprofileidintegrationsintegrationinboxmessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | List inbox messages
*InboxApi* | [**getUsersMeInboxConversations**](docs/Api/InboxApi.md#getusersmeinboxconversations) | **GET** /users/me/inbox/conversations | List omnichannel inbox conversations
*InboxApi* | [**getUsersMeInboxMessages**](docs/Api/InboxApi.md#getusersmeinboxmessages) | **GET** /users/me/inbox/messages | List omnichannel inbox messages
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsaction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Inbox conversation action
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsavatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Inbox conversation avatar
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxRead**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxread) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Mark inbox read
*InboxApi* | [**postUsersMeInboxConversationsAction**](docs/Api/InboxApi.md#postusersmeinboxconversationsaction) | **POST** /users/me/inbox/conversations/action | Toggle omnichannel conversation action
*InboxApi* | [**postUsersMeInboxConversationsAvatar**](docs/Api/InboxApi.md#postusersmeinboxconversationsavatar) | **POST** /users/me/inbox/conversations/avatar | Set omnichannel conversation avatar
*InboxApi* | [**postUsersMeInboxConversationsTitle**](docs/Api/InboxApi.md#postusersmeinboxconversationstitle) | **POST** /users/me/inbox/conversations/title | Set omnichannel conversation title
*InboxApi* | [**postUsersMeInboxRead**](docs/Api/InboxApi.md#postusersmeinboxread) | **POST** /users/me/inbox/read | Mark omnichannel conversation as read
*InboxApi* | [**postUsersMeInboxSend**](docs/Api/InboxApi.md#postusersmeinboxsend) | **POST** /users/me/inbox/send | Send omnichannel inbox message
*IntegrationsApi* | [**deleteProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/IntegrationsApi.md#deleteprofilesprofileidintegrationsintegrationsession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Clear integration session
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQr**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationauthqr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Get auth QR
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationauthqrstatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Get QR auth status
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxConversations**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationinboxconversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | List inbox conversations
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxMessages**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationinboxmessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | List inbox messages
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationOverview**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationoverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Get profile overview
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationsession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Get integration session
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationSessionChats**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationsessionchats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Get integration chats
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationStatus**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationstatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Get profile status
*IntegrationsApi* | [**getProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/IntegrationsApi.md#getprofilesprofileidintegrationsintegrationtoken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Get bot token
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationAuth2fa**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationauth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Submit 2FA password
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthLogout**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationauthlogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Logout profile
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationauthphonecode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Confirm phone auth code
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationauthphonepassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Submit phone auth password
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationauthphonestart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Start phone auth
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsaction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Inbox conversation action
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsavatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Inbox conversation avatar
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxRead**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationinboxread) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Mark inbox read
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessages**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Send message
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessagesdelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Delete message
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessagesedit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Edit message
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesForward**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessagesforward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Forward message
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessageshistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Get chat history
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReply**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationmessagesreply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Reply message
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionEvents**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationsessionevents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Get integration events
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStart**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationsessionstart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Start integration session
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStop**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationsessionstop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Stop integration session
*IntegrationsApi* | [**postProfilesProfileIdIntegrationsIntegrationSync**](docs/Api/IntegrationsApi.md#postprofilesprofileidintegrationsintegrationsync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Sync integration profile
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationMessagesFilesPost**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationmessagesfilespost) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Upload file
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksCheckPost**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhookscheckpost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/check | Check webhook endpoint
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksDlqGet**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksdlqget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/dlq | List webhook DLQ
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksdlqredrivepost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/dlq/redrive | Redrive webhook DLQ
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksGet**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks | List webhooks
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdDelete**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksiddelete) | **DELETE** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Delete webhook
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdGet**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksidget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Get webhook
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdPatch**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksidpatch) | **PATCH** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Update webhook
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhooksidtestpost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/{id}/test | Test webhook
*IntegrationsApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksPost**](docs/Api/IntegrationsApi.md#profilesprofileidintegrationsintegrationwebhookspost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks | Create webhook
*IntegrationsApi* | [**putProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/IntegrationsApi.md#putprofilesprofileidintegrationsintegrationsession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Set integration session
*IntegrationsApi* | [**putProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/IntegrationsApi.md#putprofilesprofileidintegrationsintegrationtoken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Set bot token
*MaxApi* | [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId**](docs/Api/MaxApi.md#deleteprofilesprofileidintegrationsintegrationfoldersfolderid) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Delete MAX folder
*MaxApi* | [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MaxApi.md#deleteprofilesprofileidintegrationsintegrationmessagesreactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Remove reaction
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationContacts**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationcontacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | List contacts
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationcontactsblocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | List blocked contacts
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationDevices**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationdevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | List active MAX devices
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationfolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | List MAX folders
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationSessions**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationsessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | List active MAX sessions/devices
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationSettings**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationsettings) | **GET** /profiles/{profileId}/integrations/{integration}/settings | Get settings
*MaxApi* | [**getProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/MaxApi.md#getprofilesprofileidintegrationsintegrationsettingsuser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Get MAX account settings
*MaxApi* | [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile**](docs/Api/MaxApi.md#patchprofilesprofileidintegrationsintegrationaccountprofile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Update MAX profile name/description
*MaxApi* | [**patchProfilesProfileIdIntegrationsIntegrationSettings**](docs/Api/MaxApi.md#patchprofilesprofileidintegrationsintegrationsettings) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings | Update settings
*MaxApi* | [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/MaxApi.md#patchprofilesprofileidintegrationsintegrationsettingsuser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Update MAX account settings
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationauthsmspoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Poll authorization
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationauthsmsstart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Start SMS authorization
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationauthsmsverify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Send authorization code
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsByIds**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationchatsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Get chats by IDs
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationchatssubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Subscribe/unsubscribe chat updates
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsByIds**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationcontactsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Get contacts by IDs
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationcontactslastonline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Get contacts last online by IDs
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsSearch**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationcontactssearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Search contact by phone
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationfolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Create MAX folder
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationmessagesreactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Send reaction
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesRead**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationmessagesread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Mark chat read
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationmessagestyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Send typing status
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationmessagesunread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Mark chat as unread
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationReboot**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationreboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Reboot profile
*MaxApi* | [**postProfilesProfileIdIntegrationsIntegrationVideosResolve**](docs/Api/MaxApi.md#postprofilesprofileidintegrationsintegrationvideosresolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Resolve video links by video ID
*MaxApi* | [**profilesProfileIdIntegrationsIntegrationAvatarPost**](docs/Api/MaxApi.md#profilesprofileidintegrationsintegrationavatarpost) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Set profile picture
*MaxApi* | [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder**](docs/Api/MaxApi.md#putprofilesprofileidintegrationsintegrationfoldersorder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Reorder MAX folders
*MessagesApi* | [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MessagesApi.md#deleteprofilesprofileidintegrationsintegrationmessagesreactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Remove reaction
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessages**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Send message
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesdelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Delete message
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesedit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Edit message
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesForward**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesforward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Forward message
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessageshistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Get chat history
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesreactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Send reaction
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesRead**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Mark chat read
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReply**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesreply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Reply message
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagestyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Send typing status
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesunread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Mark chat as unread
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationVideosResolve**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationvideosresolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Resolve video links by video ID
*MessagesApi* | [**profilesProfileIdIntegrationsIntegrationMessagesFilesPost**](docs/Api/MessagesApi.md#profilesprofileidintegrationsintegrationmessagesfilespost) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Upload file
*ModulesApi* | [**getAccountModules**](docs/Api/ModulesApi.md#getaccountmodules) | **GET** /account/modules | List account modules
*ModulesApi* | [**getAccountModulesUsage**](docs/Api/ModulesApi.md#getaccountmodulesusage) | **GET** /account/modules/usage | Get account module usage
*ModulesApi* | [**putAccountModulesModuleCode**](docs/Api/ModulesApi.md#putaccountmodulesmodulecode) | **PUT** /account/modules/{moduleCode} | Update account module
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notifications | List notifications
*NotificationsApi* | [**getNotificationsUnread**](docs/Api/NotificationsApi.md#getnotificationsunread) | **GET** /notifications/unread | Get unread count
*NotificationsApi* | [**postNotificationsMarkAll**](docs/Api/NotificationsApi.md#postnotificationsmarkall) | **POST** /notifications/mark-all | Mark all as read
*NotificationsApi* | [**postNotificationsMarkRead**](docs/Api/NotificationsApi.md#postnotificationsmarkread) | **POST** /notifications/mark-read | Mark as read
*ProfilesApi* | [**deleteProfilesProfileId**](docs/Api/ProfilesApi.md#deleteprofilesprofileid) | **DELETE** /profiles/{profileId} | Delete profile
*ProfilesApi* | [**getProfiles**](docs/Api/ProfilesApi.md#getprofiles) | **GET** /profiles | List profiles
*ProfilesApi* | [**getProfilesProfileId**](docs/Api/ProfilesApi.md#getprofilesprofileid) | **GET** /profiles/{profileId} | Get profile
*ProfilesApi* | [**getProfilesProfileIdActions**](docs/Api/ProfilesApi.md#getprofilesprofileidactions) | **GET** /profiles/{profileId}/actions | Get profile actions
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationContacts**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationcontacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | List contacts
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationcontactsblocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | List blocked contacts
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationOverview**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationoverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Get profile overview
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationStatus**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationstatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Get profile status
*ProfilesApi* | [**patchProfilesProfileId**](docs/Api/ProfilesApi.md#patchprofilesprofileid) | **PATCH** /profiles/{profileId} | Update profile
*ProfilesApi* | [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile**](docs/Api/ProfilesApi.md#patchprofilesprofileidintegrationsintegrationaccountprofile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Update MAX profile name/description
*ProfilesApi* | [**postProfiles**](docs/Api/ProfilesApi.md#postprofiles) | **POST** /profiles | Create profile
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsByIds**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Get contacts by IDs
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactslastonline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Get contacts last online by IDs
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsSearch**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactssearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Search contact by phone
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationReboot**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationreboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Reboot profile
*ProfilesApi* | [**postProfilesProfileIdRenew**](docs/Api/ProfilesApi.md#postprofilesprofileidrenew) | **POST** /profiles/{profileId}/renew | Renew profile
*ProfilesApi* | [**profilesProfileIdIntegrationsIntegrationAvatarPost**](docs/Api/ProfilesApi.md#profilesprofileidintegrationsintegrationavatarpost) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Set profile picture
*ProfilesApi* | [**putProfilesProfileIdAutoRenew**](docs/Api/ProfilesApi.md#putprofilesprofileidautorenew) | **PUT** /profiles/{profileId}/auto-renew | Update auto-renew
*ScenariosApi* | [**usersMeScenariosGet**](docs/Api/ScenariosApi.md#usersmescenariosget) | **GET** /users/me/scenarios | List account scenarios
*ScenariosApi* | [**usersMeScenariosIdDelete**](docs/Api/ScenariosApi.md#usersmescenariosiddelete) | **DELETE** /users/me/scenarios/{id} | Delete account scenario
*ScenariosApi* | [**usersMeScenariosPut**](docs/Api/ScenariosApi.md#usersmescenariosput) | **PUT** /users/me/scenarios | Upsert account scenario
*SessionsApi* | [**deleteProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#deleteprofilesprofileidintegrationsintegrationsession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Clear integration session
*SessionsApi* | [**deleteUsersMeSessionsSessionId**](docs/Api/SessionsApi.md#deleteusersmesessionssessionid) | **DELETE** /users/me/sessions/{sessionId} | Revoke session
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationDevices**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationdevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | List active MAX devices
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Get integration session
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSessionChats**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsessionchats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Get integration chats
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSessions**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | List active MAX sessions/devices
*SessionsApi* | [**getUsersMeSessions**](docs/Api/SessionsApi.md#getusersmesessions) | **GET** /users/me/sessions | List user sessions
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionEvents**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionevents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Get integration events
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStart**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionstart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Start integration session
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStop**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionstop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Stop integration session
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSync**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Sync integration profile
*SessionsApi* | [**postUsersMeSessionsRevokeAll**](docs/Api/SessionsApi.md#postusersmesessionsrevokeall) | **POST** /users/me/sessions/revoke-all | Revoke all sessions
*SessionsApi* | [**postUsersMeSessionsRevokeOthers**](docs/Api/SessionsApi.md#postusersmesessionsrevokeothers) | **POST** /users/me/sessions/revoke-others | Revoke other sessions
*SessionsApi* | [**putProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#putprofilesprofileidintegrationsintegrationsession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Set integration session
*SettingsApi* | [**getProfilesProfileIdIntegrationsIntegrationSettings**](docs/Api/SettingsApi.md#getprofilesprofileidintegrationsintegrationsettings) | **GET** /profiles/{profileId}/integrations/{integration}/settings | Get settings
*SettingsApi* | [**getProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/SettingsApi.md#getprofilesprofileidintegrationsintegrationsettingsuser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Get MAX account settings
*SettingsApi* | [**patchProfilesProfileIdIntegrationsIntegrationSettings**](docs/Api/SettingsApi.md#patchprofilesprofileidintegrationsintegrationsettings) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings | Update settings
*SettingsApi* | [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/SettingsApi.md#patchprofilesprofileidintegrationsintegrationsettingsuser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Update MAX account settings
*SystemApi* | [**docsGet**](docs/Api/SystemApi.md#docsget) | **GET** /docs | API reference
*SystemApi* | [**getStatus**](docs/Api/SystemApi.md#getstatus) | **GET** /status | Service status
*TokensApi* | [**deleteUsersMeApiTokensId**](docs/Api/TokensApi.md#deleteusersmeapitokensid) | **DELETE** /users/me/api-tokens/{id} | Revoke API token
*TokensApi* | [**getUsersMeApiScopes**](docs/Api/TokensApi.md#getusersmeapiscopes) | **GET** /users/me/api-scopes | List available API scopes
*TokensApi* | [**getUsersMeApiTokens**](docs/Api/TokensApi.md#getusersmeapitokens) | **GET** /users/me/api-tokens | List API tokens
*TokensApi* | [**postUsersMeApiTokens**](docs/Api/TokensApi.md#postusersmeapitokens) | **POST** /users/me/api-tokens | Create API token
*TokensApi* | [**postUsersMeApiTokensIdRotate**](docs/Api/TokensApi.md#postusersmeapitokensidrotate) | **POST** /users/me/api-tokens/{id}/rotate | Rotate API token
*UsersApi* | [**getUsersMe**](docs/Api/UsersApi.md#getusersme) | **GET** /users/me | Get current user
*UsersApi* | [**getUsersMeDashboardSummary**](docs/Api/UsersApi.md#getusersmedashboardsummary) | **GET** /users/me/dashboard-summary | Get dashboard summary
*UsersApi* | [**getUsersMeInboxConversations**](docs/Api/UsersApi.md#getusersmeinboxconversations) | **GET** /users/me/inbox/conversations | List omnichannel inbox conversations
*UsersApi* | [**getUsersMeInboxMessages**](docs/Api/UsersApi.md#getusersmeinboxmessages) | **GET** /users/me/inbox/messages | List omnichannel inbox messages
*UsersApi* | [**postUsersMeInboxConversationsAction**](docs/Api/UsersApi.md#postusersmeinboxconversationsaction) | **POST** /users/me/inbox/conversations/action | Toggle omnichannel conversation action
*UsersApi* | [**postUsersMeInboxConversationsAvatar**](docs/Api/UsersApi.md#postusersmeinboxconversationsavatar) | **POST** /users/me/inbox/conversations/avatar | Set omnichannel conversation avatar
*UsersApi* | [**postUsersMeInboxConversationsTitle**](docs/Api/UsersApi.md#postusersmeinboxconversationstitle) | **POST** /users/me/inbox/conversations/title | Set omnichannel conversation title
*UsersApi* | [**postUsersMeInboxRead**](docs/Api/UsersApi.md#postusersmeinboxread) | **POST** /users/me/inbox/read | Mark omnichannel conversation as read
*UsersApi* | [**postUsersMeInboxSend**](docs/Api/UsersApi.md#postusersmeinboxsend) | **POST** /users/me/inbox/send | Send omnichannel inbox message
*UsersApi* | [**postUsersMePassword**](docs/Api/UsersApi.md#postusersmepassword) | **POST** /users/me/password | Change current user password
*UsersApi* | [**usersMeScenariosGet**](docs/Api/UsersApi.md#usersmescenariosget) | **GET** /users/me/scenarios | List account scenarios
*UsersApi* | [**usersMeScenariosIdDelete**](docs/Api/UsersApi.md#usersmescenariosiddelete) | **DELETE** /users/me/scenarios/{id} | Delete account scenario
*UsersApi* | [**usersMeScenariosPut**](docs/Api/UsersApi.md#usersmescenariosput) | **PUT** /users/me/scenarios | Upsert account scenario
*VkApi* | [**profilesProfileIdIntegrationsIntegrationOauthCallbackGet**](docs/Api/VkApi.md#profilesprofileidintegrationsintegrationoauthcallbackget) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/callback | VK OAuth callback
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksCheckPost**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhookscheckpost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/check | Check webhook endpoint
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksDlqGet**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksdlqget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/dlq | List webhook DLQ
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksDlqRedrivePost**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksdlqredrivepost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/dlq/redrive | Redrive webhook DLQ
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksGet**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks | List webhooks
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdDelete**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksiddelete) | **DELETE** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Delete webhook
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdGet**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksidget) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Get webhook
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdPatch**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksidpatch) | **PATCH** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Update webhook
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksIdTestPost**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhooksidtestpost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/{id}/test | Test webhook
*WebhooksApi* | [**profilesProfileIdIntegrationsIntegrationWebhooksPost**](docs/Api/WebhooksApi.md#profilesprofileidintegrationsintegrationwebhookspost) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks | Create webhook

## Models

- [AccountModuleItem](docs/Model/AccountModuleItem.md)
- [AccountModuleUsageItem](docs/Model/AccountModuleUsageItem.md)
- [AccountModulesListResponseBody](docs/Model/AccountModulesListResponseBody.md)
- [AccountModulesUsageResponseBody](docs/Model/AccountModulesUsageResponseBody.md)
- [AccountSettings](docs/Model/AccountSettings.md)
- [ApiScopeInfo](docs/Model/ApiScopeInfo.md)
- [ApiScopesListResponseBody](docs/Model/ApiScopesListResponseBody.md)
- [ApiTokenItem](docs/Model/ApiTokenItem.md)
- [ApiTokensListResponseBody](docs/Model/ApiTokensListResponseBody.md)
- [AuthTokenInputBody](docs/Model/AuthTokenInputBody.md)
- [AuthTokenOutputBody](docs/Model/AuthTokenOutputBody.md)
- [AuthorizationResultData](docs/Model/AuthorizationResultData.md)
- [BackupPayload](docs/Model/BackupPayload.md)
- [BackupProfile](docs/Model/BackupProfile.md)
- [BackupProfileAuth](docs/Model/BackupProfileAuth.md)
- [BackupUser](docs/Model/BackupUser.md)
- [BackupWebhook](docs/Model/BackupWebhook.md)
- [BotTokenInputBody](docs/Model/BotTokenInputBody.md)
- [BotTokenResponseBody](docs/Model/BotTokenResponseBody.md)
- [BotTokenSetResponseBody](docs/Model/BotTokenSetResponseBody.md)
- [ChangePasswordInputBody](docs/Model/ChangePasswordInputBody.md)
- [ChangePasswordResponseBody](docs/Model/ChangePasswordResponseBody.md)
- [ChatHistoryInputBody](docs/Model/ChatHistoryInputBody.md)
- [ContactsListHumaBody](docs/Model/ContactsListHumaBody.md)
- [ConversationActionInputBody](docs/Model/ConversationActionInputBody.md)
- [ConversationActionResponseBody](docs/Model/ConversationActionResponseBody.md)
- [ConversationAvatarInputBody](docs/Model/ConversationAvatarInputBody.md)
- [ConversationAvatarMeta](docs/Model/ConversationAvatarMeta.md)
- [ConversationAvatarResponseBody](docs/Model/ConversationAvatarResponseBody.md)
- [ConversationMeta](docs/Model/ConversationMeta.md)
- [CreateApiTokenInputBody](docs/Model/CreateApiTokenInputBody.md)
- [CreateProfileInputBody](docs/Model/CreateProfileInputBody.md)
- [CreateUserInputBody](docs/Model/CreateUserInputBody.md)
- [CreateUserResponseBody](docs/Model/CreateUserResponseBody.md)
- [DashboardKPI](docs/Model/DashboardKPI.md)
- [DashboardMessagePoint](docs/Model/DashboardMessagePoint.md)
- [DashboardMessages30d](docs/Model/DashboardMessages30d.md)
- [DashboardSetup](docs/Model/DashboardSetup.md)
- [DeleteMessageBody](docs/Model/DeleteMessageBody.md)
- [DeleteMessageInputBody](docs/Model/DeleteMessageInputBody.md)
- [EditMessageInputBody](docs/Model/EditMessageInputBody.md)
- [EmailVerifyConfirmInputBody](docs/Model/EmailVerifyConfirmInputBody.md)
- [EmailVerifyConfirmResponseBody](docs/Model/EmailVerifyConfirmResponseBody.md)
- [EmailVerifyRequestInputBody](docs/Model/EmailVerifyRequestInputBody.md)
- [EmailVerifyRequestResponseBody](docs/Model/EmailVerifyRequestResponseBody.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [ForwardMessageInputBody](docs/Model/ForwardMessageInputBody.md)
- [InboxConversationItem](docs/Model/InboxConversationItem.md)
- [InboxConversationsListResponseBody](docs/Model/InboxConversationsListResponseBody.md)
- [InboxMessageItem](docs/Model/InboxMessageItem.md)
- [InboxMessagesListResponseBody](docs/Model/InboxMessagesListResponseBody.md)
- [InboxReadInputBody](docs/Model/InboxReadInputBody.md)
- [InboxReadResponseBody](docs/Model/InboxReadResponseBody.md)
- [LogoutBody](docs/Model/LogoutBody.md)
- [MarkReadInputBody](docs/Model/MarkReadInputBody.md)
- [MaxBlockedContactsResponseBody](docs/Model/MaxBlockedContactsResponseBody.md)
- [MaxChatSubscriptionInputBody](docs/Model/MaxChatSubscriptionInputBody.md)
- [MaxChatSubscriptionResponseBody](docs/Model/MaxChatSubscriptionResponseBody.md)
- [MaxChatsByIDsInputBody](docs/Model/MaxChatsByIDsInputBody.md)
- [MaxChatsByIDsResponseBody](docs/Model/MaxChatsByIDsResponseBody.md)
- [MaxContact](docs/Model/MaxContact.md)
- [MaxContactName](docs/Model/MaxContactName.md)
- [MaxContactsByIDsInputBody](docs/Model/MaxContactsByIDsInputBody.md)
- [MaxContactsByIDsResponseBody](docs/Model/MaxContactsByIDsResponseBody.md)
- [MaxContactsLastOnlineInputBody](docs/Model/MaxContactsLastOnlineInputBody.md)
- [MaxContactsLastOnlineResponseBody](docs/Model/MaxContactsLastOnlineResponseBody.md)
- [MaxCreateFolderInputBody](docs/Model/MaxCreateFolderInputBody.md)
- [MaxFolder](docs/Model/MaxFolder.md)
- [MaxFoldersResponseBody](docs/Model/MaxFoldersResponseBody.md)
- [MaxProfile](docs/Model/MaxProfile.md)
- [MaxReorderFoldersInputBody](docs/Model/MaxReorderFoldersInputBody.md)
- [MaxSession](docs/Model/MaxSession.md)
- [MaxSessionsResponseBody](docs/Model/MaxSessionsResponseBody.md)
- [MaxSetProfileInputBody](docs/Model/MaxSetProfileInputBody.md)
- [MaxSetProfileResponseBody](docs/Model/MaxSetProfileResponseBody.md)
- [MaxSetUserSettingsInputBody](docs/Model/MaxSetUserSettingsInputBody.md)
- [MaxUserSettingsPatch](docs/Model/MaxUserSettingsPatch.md)
- [MaxUserSettingsResponseBody](docs/Model/MaxUserSettingsResponseBody.md)
- [MaxUserSettingsState](docs/Model/MaxUserSettingsState.md)
- [MaxVideoResolveInputBody](docs/Model/MaxVideoResolveInputBody.md)
- [MaxVideoResolveResponseBody](docs/Model/MaxVideoResolveResponseBody.md)
- [MaxWSCallInputBody](docs/Model/MaxWSCallInputBody.md)
- [MaxWSCallResponseBody](docs/Model/MaxWSCallResponseBody.md)
- [MessageResponseBody](docs/Model/MessageResponseBody.md)
- [NotificationItem](docs/Model/NotificationItem.md)
- [NotificationsListResponseBody](docs/Model/NotificationsListResponseBody.md)
- [OAuthPendingCompleteEmailInputBody](docs/Model/OAuthPendingCompleteEmailInputBody.md)
- [OAuthProviderInfo](docs/Model/OAuthProviderInfo.md)
- [OAuthProvidersOutputBody](docs/Model/OAuthProvidersOutputBody.md)
- [OAuthResolveOutputBody](docs/Model/OAuthResolveOutputBody.md)
- [OAuthStartOutputBody](docs/Model/OAuthStartOutputBody.md)
- [Password2FAInputBody](docs/Model/Password2FAInputBody.md)
- [PhoneAuthCodeInputBody](docs/Model/PhoneAuthCodeInputBody.md)
- [PhoneAuthCodeResponseBody](docs/Model/PhoneAuthCodeResponseBody.md)
- [PhoneAuthPasswordInputBody](docs/Model/PhoneAuthPasswordInputBody.md)
- [PhoneAuthPasswordResponseBody](docs/Model/PhoneAuthPasswordResponseBody.md)
- [PhoneAuthStartInputBody](docs/Model/PhoneAuthStartInputBody.md)
- [PhoneAuthStartResponseBody](docs/Model/PhoneAuthStartResponseBody.md)
- [PollAuthorizationBody](docs/Model/PollAuthorizationBody.md)
- [PollAuthorizationInputBody](docs/Model/PollAuthorizationInputBody.md)
- [ProfileActionItem](docs/Model/ProfileActionItem.md)
- [ProfileActionsListResponseBody](docs/Model/ProfileActionsListResponseBody.md)
- [ProfileRenewOutputBody](docs/Model/ProfileRenewOutputBody.md)
- [ProfileResponse](docs/Model/ProfileResponse.md)
- [ProfilesListResponseBody](docs/Model/ProfilesListResponseBody.md)
- [QRStatusResponseBody](docs/Model/QRStatusResponseBody.md)
- [ReactionRef](docs/Model/ReactionRef.md)
- [ReactionStruct](docs/Model/ReactionStruct.md)
- [ReadChatBody](docs/Model/ReadChatBody.md)
- [ReadChatHumaInputBody](docs/Model/ReadChatHumaInputBody.md)
- [RebootProfileBody](docs/Model/RebootProfileBody.md)
- [RemoveReactionBody](docs/Model/RemoveReactionBody.md)
- [RemoveReactionHumaInputBody](docs/Model/RemoveReactionHumaInputBody.md)
- [RestoreDataInputBody](docs/Model/RestoreDataInputBody.md)
- [SearchContactInputBody](docs/Model/SearchContactInputBody.md)
- [SearchContactResponseBody](docs/Model/SearchContactResponseBody.md)
- [SendAuthorizationCodeBody](docs/Model/SendAuthorizationCodeBody.md)
- [SendAuthorizationCodeInputBody](docs/Model/SendAuthorizationCodeInputBody.md)
- [SendMessageInputBody](docs/Model/SendMessageInputBody.md)
- [SendReactionBody](docs/Model/SendReactionBody.md)
- [SendReactionHumaInputBody](docs/Model/SendReactionHumaInputBody.md)
- [SendReplyMessageInputBody](docs/Model/SendReplyMessageInputBody.md)
- [SendTypingInputBody](docs/Model/SendTypingInputBody.md)
- [SendTypingResponseBody](docs/Model/SendTypingResponseBody.md)
- [SessionActionInputBody](docs/Model/SessionActionInputBody.md)
- [SessionChatsResponseBody](docs/Model/SessionChatsResponseBody.md)
- [SessionClearResponseBody](docs/Model/SessionClearResponseBody.md)
- [SessionDataInputBody](docs/Model/SessionDataInputBody.md)
- [SessionEventsResponseBody](docs/Model/SessionEventsResponseBody.md)
- [SessionGetResponseBody](docs/Model/SessionGetResponseBody.md)
- [SessionItem](docs/Model/SessionItem.md)
- [SessionSetResponseBody](docs/Model/SessionSetResponseBody.md)
- [SessionStartInputBody](docs/Model/SessionStartInputBody.md)
- [SessionStartResponseBody](docs/Model/SessionStartResponseBody.md)
- [SessionStopResponseBody](docs/Model/SessionStopResponseBody.md)
- [SessionsListResponseBody](docs/Model/SessionsListResponseBody.md)
- [SetSettingsBody](docs/Model/SetSettingsBody.md)
- [SetSettingsInputBody](docs/Model/SetSettingsInputBody.md)
- [StartAuthorizationBody](docs/Model/StartAuthorizationBody.md)
- [StartAuthorizationInputBody](docs/Model/StartAuthorizationInputBody.md)
- [StateProfileBody](docs/Model/StateProfileBody.md)
- [StatusResponseBody](docs/Model/StatusResponseBody.md)
- [SyncProfileInputBody](docs/Model/SyncProfileInputBody.md)
- [SyncProfileResponseBody](docs/Model/SyncProfileResponseBody.md)
- [TelegramPhoneVerifyConfirmInputBody](docs/Model/TelegramPhoneVerifyConfirmInputBody.md)
- [TelegramPhoneVerifyConfirmResponseBody](docs/Model/TelegramPhoneVerifyConfirmResponseBody.md)
- [TelegramPhoneVerifyStartInputBody](docs/Model/TelegramPhoneVerifyStartInputBody.md)
- [TelegramPhoneVerifyStartResponseBody](docs/Model/TelegramPhoneVerifyStartResponseBody.md)
- [TopUpInputBody](docs/Model/TopUpInputBody.md)
- [TopUpResponseBody](docs/Model/TopUpResponseBody.md)
- [TopUpStatusResponseBody](docs/Model/TopUpStatusResponseBody.md)
- [TopUpStatusResponseItem](docs/Model/TopUpStatusResponseItem.md)
- [TopUpsListResponseBody](docs/Model/TopUpsListResponseBody.md)
- [TransactionItem](docs/Model/TransactionItem.md)
- [TransactionsListResponseBody](docs/Model/TransactionsListResponseBody.md)
- [UnreadCountResponseBody](docs/Model/UnreadCountResponseBody.md)
- [UpdateAccountModuleInputBody](docs/Model/UpdateAccountModuleInputBody.md)
- [UpdateAccountModuleResponseBody](docs/Model/UpdateAccountModuleResponseBody.md)
- [UpdateProfileAutoRenewInputBody](docs/Model/UpdateProfileAutoRenewInputBody.md)
- [UpdateProfileInputBody](docs/Model/UpdateProfileInputBody.md)
- [UserDashboardSummaryResponseBody](docs/Model/UserDashboardSummaryResponseBody.md)
- [UserExistsResponseBody](docs/Model/UserExistsResponseBody.md)
- [UserInboxAvailableProfile](docs/Model/UserInboxAvailableProfile.md)
- [UserInboxConversationActionInputBody](docs/Model/UserInboxConversationActionInputBody.md)
- [UserInboxConversationActionResponseBody](docs/Model/UserInboxConversationActionResponseBody.md)
- [UserInboxConversationAvatarInputBody](docs/Model/UserInboxConversationAvatarInputBody.md)
- [UserInboxConversationAvatarResponseBody](docs/Model/UserInboxConversationAvatarResponseBody.md)
- [UserInboxConversationItem](docs/Model/UserInboxConversationItem.md)
- [UserInboxConversationMeta](docs/Model/UserInboxConversationMeta.md)
- [UserInboxConversationTitleInputBody](docs/Model/UserInboxConversationTitleInputBody.md)
- [UserInboxConversationTitleResponseBody](docs/Model/UserInboxConversationTitleResponseBody.md)
- [UserInboxConversationsListResponseBody](docs/Model/UserInboxConversationsListResponseBody.md)
- [UserInboxMessageItem](docs/Model/UserInboxMessageItem.md)
- [UserInboxMessagesListResponseBody](docs/Model/UserInboxMessagesListResponseBody.md)
- [UserInboxReadInputBody](docs/Model/UserInboxReadInputBody.md)
- [UserInboxReadResponseBody](docs/Model/UserInboxReadResponseBody.md)
- [UserInboxSendInputBody](docs/Model/UserInboxSendInputBody.md)
- [UserInboxSendResponseBody](docs/Model/UserInboxSendResponseBody.md)
- [UserMeResponseBody](docs/Model/UserMeResponseBody.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Profile-Token
- **Location**: HTTP header


### BearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `(devel)`
    - Generator version: `7.20.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
