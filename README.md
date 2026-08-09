# Релая PHP SDK

Public customer API for Relaya SDKs.
Authenticated with a profile API token (`X-Profile-Token`).
Staff Admin API is intentionally excluded from this contract.
Scopes: profiles:read|write, inbox:read|write, webhooks:manage, billing:read|write.
Профили, сообщения, инбокс, модули, вебхуки и биллинг.


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



// Configure API key authorization: ApiKeyAuth
$config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKey('X-Profile-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Relaya\Sdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Profile-Token', 'Bearer');


$apiInstance = new Relaya\Sdk\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 7fa3c1d942be; // string | Идентификатор профиля Релая. Для новых профилей это 12-символьная hex-строка.
$integration = max; // string | Код интеграции профиля: например `max`, `vk`, `telegram`, `telegrambot`, `maxbot`, `whatsapp` или `email`.
$track_id = 'track_id_example'; // string | Параметр `trackId` из `query`.

try {
    $result = $apiInstance->getProfilesProfileIdIntegrationsIntegrationAuthQr($profile_id, $integration, $track_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getProfilesProfileIdIntegrationsIntegrationAuthQr: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://localhost:8485/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQr**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationauthqr) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr | Получить QR-код для авторизации
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationAuthQrStatus**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationauthqrstatus) | **GET** /profiles/{profileId}/integrations/{integration}/auth/qr/status | Получить статус QR-авторизации
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationGroups**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationgroups) | **GET** /profiles/{profileId}/integrations/{integration}/groups | Получить группы VK
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationOauthStart**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationoauthstart) | **GET** /profiles/{profileId}/integrations/{integration}/oauth/start | Начать OAuth для VK
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationSmtp**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationsmtp) | **GET** /profiles/{profileId}/integrations/{integration}/smtp | Получить SMTP-настройки профиля
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationtoken) | **GET** /profiles/{profileId}/integrations/{integration}/token | Получить токен бота
*AuthApi* | [**getProfilesProfileIdIntegrationsIntegrationWabaTemplates**](docs/Api/AuthApi.md#getprofilesprofileidintegrationsintegrationwabatemplates) | **GET** /profiles/{profileId}/integrations/{integration}/waba/templates | Шаблоны WABA
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuth2fa**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauth2fa) | **POST** /profiles/{profileId}/integrations/{integration}/auth/2fa | Отправить пароль 2FA
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthLogout**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthlogout) | **POST** /profiles/{profileId}/integrations/{integration}/auth/logout | Выйти из интеграции
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneCode**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonecode) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/code | Подтвердить код авторизации по телефону
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneConfirm**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphoneconfirm) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/confirm | Подтвердить вход по телефону
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhonePassword**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonepassword) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/password | Отправить пароль второго фактора по телефону
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthPhoneStart**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthphonestart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/phone/start | Начать авторизацию по телефону
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsPoll**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmspoll) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/poll | Проверить статус SMS-авторизации (MAX)
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsStart**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmsstart) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/start | Начать SMS-авторизацию (MAX)
*AuthApi* | [**postProfilesProfileIdIntegrationsIntegrationAuthSmsVerify**](docs/Api/AuthApi.md#postprofilesprofileidintegrationsintegrationauthsmsverify) | **POST** /profiles/{profileId}/integrations/{integration}/auth/sms/verify | Отправить код авторизации (MAX)
*AuthApi* | [**putProfilesProfileIdIntegrationsIntegrationGroup**](docs/Api/AuthApi.md#putprofilesprofileidintegrationsintegrationgroup) | **PUT** /profiles/{profileId}/integrations/{integration}/group | Сохранить группу VK
*AuthApi* | [**putProfilesProfileIdIntegrationsIntegrationSmtp**](docs/Api/AuthApi.md#putprofilesprofileidintegrationsintegrationsmtp) | **PUT** /profiles/{profileId}/integrations/{integration}/smtp | Сохранить SMTP-настройки профиля
*AuthApi* | [**putProfilesProfileIdIntegrationsIntegrationToken**](docs/Api/AuthApi.md#putprofilesprofileidintegrationsintegrationtoken) | **PUT** /profiles/{profileId}/integrations/{integration}/token | Сохранить токен бота
*BillingApi* | [**getBillingCompanyLookup**](docs/Api/BillingApi.md#getbillingcompanylookup) | **GET** /billing/company-lookup | Подсказки по организации
*BillingApi* | [**getBillingInvoice**](docs/Api/BillingApi.md#getbillinginvoice) | **GET** /billing/invoices/{invoiceId} | Карточка счёта
*BillingApi* | [**getBillingInvoices**](docs/Api/BillingApi.md#getbillinginvoices) | **GET** /billing/invoices | Список счетов
*BillingApi* | [**getBillingInvoicesInvoiceIdAct**](docs/Api/BillingApi.md#getbillinginvoicesinvoiceidact) | **GET** /billing/invoices/{invoiceId}/act | Скачать акт по счёту
*BillingApi* | [**getBillingLegalProfile**](docs/Api/BillingApi.md#getbillinglegalprofile) | **GET** /billing/legal-profile | Юридический профиль
*BillingApi* | [**getBillingTopups**](docs/Api/BillingApi.md#getbillingtopups) | **GET** /billing/topups | Пополнения
*BillingApi* | [**getBillingTopupsTopupId**](docs/Api/BillingApi.md#getbillingtopupstopupid) | **GET** /billing/topups/{topupId} | Статус пополнения
*BillingApi* | [**getBillingTransactions**](docs/Api/BillingApi.md#getbillingtransactions) | **GET** /billing/transactions | Транзакции
*BillingApi* | [**postBillingInvoiceRefresh**](docs/Api/BillingApi.md#postbillinginvoicerefresh) | **POST** /billing/invoices/{invoiceId}/refresh | Обновить статус счёта
*BillingApi* | [**postBillingInvoices**](docs/Api/BillingApi.md#postbillinginvoices) | **POST** /billing/invoices | Выставить счёт
*BillingApi* | [**postBillingTopups**](docs/Api/BillingApi.md#postbillingtopups) | **POST** /billing/topups | Создать пополнение
*BillingApi* | [**postBillingTopupsTopupIdRefresh**](docs/Api/BillingApi.md#postbillingtopupstopupidrefresh) | **POST** /billing/topups/{topupId}/refresh | Обновить статус пополнения
*BillingApi* | [**putBillingLegalProfile**](docs/Api/BillingApi.md#putbillinglegalprofile) | **PUT** /billing/legal-profile | Сохранить юридический профиль
*ChatsApi* | [**deleteProfilesProfileIdIntegrationsIntegrationFoldersFolderId**](docs/Api/ChatsApi.md#deleteprofilesprofileidintegrationsintegrationfoldersfolderid) | **DELETE** /profiles/{profileId}/integrations/{integration}/folders/{folderId} | Удалить папку чатов (MAX)
*ChatsApi* | [**getProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/ChatsApi.md#getprofilesprofileidintegrationsintegrationfolders) | **GET** /profiles/{profileId}/integrations/{integration}/folders | Получить папки чатов (MAX)
*ChatsApi* | [**patchProfilesProfileIdIntegrationsIntegrationChatsUpdate**](docs/Api/ChatsApi.md#patchprofilesprofileidintegrationsintegrationchatsupdate) | **PATCH** /profiles/{profileId}/integrations/{integration}/chats/update | Обновить MAX-чат
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsAdmin**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsadmin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/admin | Изменить права администратора в Telegram
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsArchive**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsarchive) | **POST** /profiles/{profileId}/integrations/{integration}/chats/archive | Архивировать или вернуть Telegram-диалог
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsBan**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsban) | **POST** /profiles/{profileId}/integrations/{integration}/chats/ban | Изменить ограничения участника в Telegram
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsByIds**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/chats/by-ids | Получить чаты по ID (MAX)
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInviteCheck**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinvitecheck) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/check | Проверить Telegram invite-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInviteDelete**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinvitedelete) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/delete | Удалить Telegram invite-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInviteEdit**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinviteedit) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/edit | Изменить Telegram invite-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInviteExport**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinviteexport) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/export | Создать Telegram invite-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInviteImport**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinviteimport) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invite/import | Принять Telegram invite-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsInvites**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsinvites) | **POST** /profiles/{profileId}/integrations/{integration}/chats/invites | Получить список Telegram invite-ссылок чата
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsJoin**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsjoin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/join | Вступить в чат или канал
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsLeave**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsleave) | **POST** /profiles/{profileId}/integrations/{integration}/chats/leave | Покинуть чат или канал
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsLinkInfo**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatslinkinfo) | **POST** /profiles/{profileId}/integrations/{integration}/chats/link-info | Разрешить MAX-ссылку
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsList**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatslist) | **POST** /profiles/{profileId}/integrations/{integration}/chats/list | Получить список чатов (MAX)
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsMembers**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsmembers) | **POST** /profiles/{profileId}/integrations/{integration}/chats/members | Получить участников MAX-чата
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsMembersInvite**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsmembersinvite) | **POST** /profiles/{profileId}/integrations/{integration}/chats/members/invite | Пригласить участников в MAX-канал
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsMute**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsmute) | **POST** /profiles/{profileId}/integrations/{integration}/chats/mute | Изменить mute-настройки Telegram-диалога
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsPin**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatspin) | **POST** /profiles/{profileId}/integrations/{integration}/chats/pin | Закрепить или открепить Telegram-диалог
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsResolve**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatsresolve) | **POST** /profiles/{profileId}/integrations/{integration}/chats/resolve | Найти чат по телефону или username
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationChatsSubscription**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationchatssubscription) | **POST** /profiles/{profileId}/integrations/{integration}/chats/subscription | Изменить подписку на обновления чата (MAX)
*ChatsApi* | [**postProfilesProfileIdIntegrationsIntegrationFolders**](docs/Api/ChatsApi.md#postprofilesprofileidintegrationsintegrationfolders) | **POST** /profiles/{profileId}/integrations/{integration}/folders | Создать папку чатов (MAX)
*ChatsApi* | [**putProfilesProfileIdIntegrationsIntegrationFoldersOrder**](docs/Api/ChatsApi.md#putprofilesprofileidintegrationsintegrationfoldersorder) | **PUT** /profiles/{profileId}/integrations/{integration}/folders/order | Изменить порядок папок (MAX)
*InboxApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxConversations**](docs/Api/InboxApi.md#getprofilesprofileidintegrationsintegrationinboxconversations) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/conversations | Получить диалоги inbox профиля
*InboxApi* | [**getProfilesProfileIdIntegrationsIntegrationInboxMessages**](docs/Api/InboxApi.md#getprofilesprofileidintegrationsintegrationinboxmessages) | **GET** /profiles/{profileId}/integrations/{integration}/inbox/messages | Получить сообщения inbox профиля
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAction**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsaction) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/action | Изменить состояние диалога inbox
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxConversationsAvatar**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxconversationsavatar) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/conversations/avatar | Обновить аватар диалога inbox
*InboxApi* | [**postProfilesProfileIdIntegrationsIntegrationInboxRead**](docs/Api/InboxApi.md#postprofilesprofileidintegrationsintegrationinboxread) | **POST** /profiles/{profileId}/integrations/{integration}/inbox/read | Отметить диалог inbox как прочитанный
*MessagesApi* | [**deleteProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MessagesApi.md#deleteprofilesprofileidintegrationsintegrationmessagesreactions) | **DELETE** /profiles/{profileId}/integrations/{integration}/messages/reactions | Убрать реакцию с сообщения (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationFilesResolve**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationfilesresolve) | **POST** /profiles/{profileId}/integrations/{integration}/files/resolve | Получить ссылки на файл по ID или токену (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessages**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessages) | **POST** /profiles/{profileId}/integrations/{integration}/messages | Отправить сообщение
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesDelete**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesdelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/delete | Удалить сообщение
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesDraft**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesdraft) | **POST** /profiles/{profileId}/integrations/{integration}/messages/draft | Получить черновик Telegram-диалога
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesDraftSave**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesdraftsave) | **POST** /profiles/{profileId}/integrations/{integration}/messages/draft/save | Сохранить черновик Telegram-диалога
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesEdit**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesedit) | **POST** /profiles/{profileId}/integrations/{integration}/messages/edit | Изменить сообщение
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesFiles**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesfiles) | **POST** /profiles/{profileId}/integrations/{integration}/messages/files | Загрузить файл для сообщения
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesForward**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesforward) | **POST** /profiles/{profileId}/integrations/{integration}/messages/forward | Переслать сообщение
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesHistory**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessageshistory) | **POST** /profiles/{profileId}/integrations/{integration}/messages/history | Получить историю сообщений чата
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReactions**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesreactions) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reactions | Поставить реакцию на сообщение (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesRead**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/read | Отметить чат как прочитанный (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesReply**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesreply) | **POST** /profiles/{profileId}/integrations/{integration}/messages/reply | Ответить на сообщение
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduled**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesscheduled) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled | Получить отложенные сообщения
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduledDelete**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesscheduleddelete) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled/delete | Удалить отложенные сообщения
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesScheduledSend**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesscheduledsend) | **POST** /profiles/{profileId}/integrations/{integration}/messages/scheduled/send | Отправить отложенные сообщения сразу
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesSearch**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagessearch) | **POST** /profiles/{profileId}/integrations/{integration}/messages/search | Найти сообщения в Telegram
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesTranscription**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagestranscription) | **POST** /profiles/{profileId}/integrations/{integration}/messages/transcription | Расшифровать медиа MAX
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesTyping**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagestyping) | **POST** /profiles/{profileId}/integrations/{integration}/messages/typing | Отправить статус набора текста (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationMessagesUnread**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationmessagesunread) | **POST** /profiles/{profileId}/integrations/{integration}/messages/unread | Пометить чат как непрочитанный (MAX)
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationPollsClose**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationpollsclose) | **POST** /profiles/{profileId}/integrations/{integration}/polls/close | Закрыть опрос MAX
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationPollsUpdates**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationpollsupdates) | **POST** /profiles/{profileId}/integrations/{integration}/polls/updates | Обновить состояние опроса MAX
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationPollsVote**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationpollsvote) | **POST** /profiles/{profileId}/integrations/{integration}/polls/vote | Проголосовать в опросе MAX
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationUploadsUrl**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationuploadsurl) | **POST** /profiles/{profileId}/integrations/{integration}/uploads/url | Получить URL загрузки MAX
*MessagesApi* | [**postProfilesProfileIdIntegrationsIntegrationVideosResolve**](docs/Api/MessagesApi.md#postprofilesprofileidintegrationsintegrationvideosresolve) | **POST** /profiles/{profileId}/integrations/{integration}/videos/resolve | Получить ссылки на видео по ID (MAX)
*ProfilesApi* | [**deleteProfilesProfileId**](docs/Api/ProfilesApi.md#deleteprofilesprofileid) | **DELETE** /profiles/{profileId} | Удалить профиль
*ProfilesApi* | [**deleteProfilesProfileIdAuthShare**](docs/Api/ProfilesApi.md#deleteprofilesprofileidauthshare) | **DELETE** /profiles/{profileId}/auth-share | Отозвать ссылку
*ProfilesApi* | [**deleteProfilesProfileIdScenariosScenarioId**](docs/Api/ProfilesApi.md#deleteprofilesprofileidscenariosscenarioid) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId} | Удалить сценарий профиля
*ProfilesApi* | [**deleteProfilesProfileIdScenariosScenarioIdPresence**](docs/Api/ProfilesApi.md#deleteprofilesprofileidscenariosscenarioidpresence) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId}/presence | Выйти из редактора
*ProfilesApi* | [**deleteProfilesProfileIdScenariosScenarioIdWebhookSecret**](docs/Api/ProfilesApi.md#deleteprofilesprofileidscenariosscenarioidwebhooksecret) | **DELETE** /profiles/{profileId}/scenarios/{scenarioId}/webhook-secret | Отозвать public webhook secret
*ProfilesApi* | [**deleteProfilesViewsViewId**](docs/Api/ProfilesApi.md#deleteprofilesviewsviewid) | **DELETE** /profiles/views/{viewId} | Удалить вид списка профилей
*ProfilesApi* | [**getProfiles**](docs/Api/ProfilesApi.md#getprofiles) | **GET** /profiles | Получить список профилей
*ProfilesApi* | [**getProfilesIds**](docs/Api/ProfilesApi.md#getprofilesids) | **GET** /profiles/ids | Список profileId по фильтрам
*ProfilesApi* | [**getProfilesProfileId**](docs/Api/ProfilesApi.md#getprofilesprofileid) | **GET** /profiles/{profileId} | Получить профиль
*ProfilesApi* | [**getProfilesProfileIdActions**](docs/Api/ProfilesApi.md#getprofilesprofileidactions) | **GET** /profiles/{profileId}/actions | Получить журнал действий профиля
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationContacts**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationcontacts) | **GET** /profiles/{profileId}/integrations/{integration}/contacts | Получить контакты профиля (MAX)
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationContactsBlocked**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationcontactsblocked) | **GET** /profiles/{profileId}/integrations/{integration}/contacts/blocked | Получить заблокированные контакты (MAX)
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationOverview**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationoverview) | **GET** /profiles/{profileId}/integrations/{integration}/overview | Получить обзор профиля
*ProfilesApi* | [**getProfilesProfileIdIntegrationsIntegrationStatus**](docs/Api/ProfilesApi.md#getprofilesprofileidintegrationsintegrationstatus) | **GET** /profiles/{profileId}/integrations/{integration}/status | Получить статус профиля
*ProfilesApi* | [**getProfilesProfileIdQuotas**](docs/Api/ProfilesApi.md#getprofilesprofileidquotas) | **GET** /profiles/{profileId}/quotas | Квоты профиля
*ProfilesApi* | [**getProfilesProfileIdScenarios**](docs/Api/ProfilesApi.md#getprofilesprofileidscenarios) | **GET** /profiles/{profileId}/scenarios | Получить сценарии профиля
*ProfilesApi* | [**getProfilesProfileIdScenariosScenarioIdAnalytics**](docs/Api/ProfilesApi.md#getprofilesprofileidscenariosscenarioidanalytics) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/analytics | Аналитика воронки сценария
*ProfilesApi* | [**getProfilesProfileIdScenariosScenarioIdPresence**](docs/Api/ProfilesApi.md#getprofilesprofileidscenariosscenarioidpresence) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/presence | Кто в редакторе
*ProfilesApi* | [**getProfilesProfileIdScenariosScenarioIdRuns**](docs/Api/ProfilesApi.md#getprofilesprofileidscenariosscenarioidruns) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/runs | Список запусков сценария
*ProfilesApi* | [**getProfilesProfileIdScenariosScenarioIdRunsTraceId**](docs/Api/ProfilesApi.md#getprofilesprofileidscenariosscenarioidrunstraceid) | **GET** /profiles/{profileId}/scenarios/{scenarioId}/runs/{traceId} | Детали запуска сценария
*ProfilesApi* | [**getProfilesViews**](docs/Api/ProfilesApi.md#getprofilesviews) | **GET** /profiles/views | Сохранённые виды списка профилей
*ProfilesApi* | [**patchProfilesProfileId**](docs/Api/ProfilesApi.md#patchprofilesprofileid) | **PATCH** /profiles/{profileId} | Обновить профиль
*ProfilesApi* | [**patchProfilesProfileIdIntegrationsIntegrationAccountProfile**](docs/Api/ProfilesApi.md#patchprofilesprofileidintegrationsintegrationaccountprofile) | **PATCH** /profiles/{profileId}/integrations/{integration}/account/profile | Обновить имя и описание профиля в MAX
*ProfilesApi* | [**postProfiles**](docs/Api/ProfilesApi.md#postprofiles) | **POST** /profiles | Создать профиль
*ProfilesApi* | [**postProfilesBulk**](docs/Api/ProfilesApi.md#postprofilesbulk) | **POST** /profiles/bulk | Массовые действия над профилями
*ProfilesApi* | [**postProfilesProfileIdAuthShare**](docs/Api/ProfilesApi.md#postprofilesprofileidauthshare) | **POST** /profiles/{profileId}/auth-share | Ссылка на авторизацию
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationAvatar**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationavatar) | **POST** /profiles/{profileId}/integrations/{integration}/avatar | Обновить аватар профиля (MAX)
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationBotsWebAppInit**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationbotswebappinit) | **POST** /profiles/{profileId}/integrations/{integration}/bots/web-app/init | Инициализировать MAX bot web app
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationCallsByPeer**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcallsbypeer) | **POST** /profiles/{profileId}/integrations/{integration}/calls/by-peer | Получить group call Telegram по чату
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationCallsGet**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcallsget) | **POST** /profiles/{profileId}/integrations/{integration}/calls/get | Получить состояние Telegram group call
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationCallsJoin**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcallsjoin) | **POST** /profiles/{profileId}/integrations/{integration}/calls/join | Присоединиться к Telegram group call
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationCallsLeave**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcallsleave) | **POST** /profiles/{profileId}/integrations/{integration}/calls/leave | Покинуть Telegram group call
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsAdd**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactsadd) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/add | Добавить контакт в MAX
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsByIds**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactsbyids) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/by-ids | Получить контакты по ID (MAX)
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsCheck**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactscheck) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/check | Проверить, существует ли контакт
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsLastOnline**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactslastonline) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/last-online | Получить время последней активности контактов (MAX)
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationContactsSearch**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationcontactssearch) | **POST** /profiles/{profileId}/integrations/{integration}/contacts/search | Найти контакт по телефону или username
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationForumsToggle**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationforumstoggle) | **POST** /profiles/{profileId}/integrations/{integration}/forums/toggle | Изменить режим форума в Telegram
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationReboot**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationreboot) | **POST** /profiles/{profileId}/integrations/{integration}/reboot | Перезапустить профиль (MAX)
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationStories**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationstories) | **POST** /profiles/{profileId}/integrations/{integration}/stories | Получить активные Telegram stories
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationStoriesPeer**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationstoriespeer) | **POST** /profiles/{profileId}/integrations/{integration}/stories/peer | Получить stories конкретного Telegram peer
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationStoriesReaction**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationstoriesreaction) | **POST** /profiles/{profileId}/integrations/{integration}/stories/reaction | Поставить реакцию на Telegram story
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationStoriesRead**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationstoriesread) | **POST** /profiles/{profileId}/integrations/{integration}/stories/read | Отметить Telegram stories как просмотренные
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationStoriesSend**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationstoriessend) | **POST** /profiles/{profileId}/integrations/{integration}/stories/send | Опубликовать Telegram story
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationTopics**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationtopics) | **POST** /profiles/{profileId}/integrations/{integration}/topics | Получить список Telegram forum topics
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationTopicsCreate**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationtopicscreate) | **POST** /profiles/{profileId}/integrations/{integration}/topics/create | Создать Telegram forum topic
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationTopicsDelete**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationtopicsdelete) | **POST** /profiles/{profileId}/integrations/{integration}/topics/delete | Удалить историю Telegram forum topic
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationTopicsEdit**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationtopicsedit) | **POST** /profiles/{profileId}/integrations/{integration}/topics/edit | Изменить Telegram forum topic
*ProfilesApi* | [**postProfilesProfileIdIntegrationsIntegrationTopicsReorder**](docs/Api/ProfilesApi.md#postprofilesprofileidintegrationsintegrationtopicsreorder) | **POST** /profiles/{profileId}/integrations/{integration}/topics/reorder | Переупорядочить закрепленные Telegram forum topics
*ProfilesApi* | [**postProfilesProfileIdRenew**](docs/Api/ProfilesApi.md#postprofilesprofileidrenew) | **POST** /profiles/{profileId}/renew | Продлить профиль
*ProfilesApi* | [**postProfilesProfileIdScenariosAiDraft**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosaidraft) | **POST** /profiles/{profileId}/scenarios/ai-draft | AI-черновик сценария
*ProfilesApi* | [**postProfilesProfileIdScenariosScenarioIdPublish**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosscenarioidpublish) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/publish | Опубликовать черновик сценария
*ProfilesApi* | [**postProfilesProfileIdScenariosScenarioIdRollback**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosscenarioidrollback) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/rollback | Откатить черновик к published
*ProfilesApi* | [**postProfilesProfileIdScenariosScenarioIdRunsTraceIdEvents**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosscenarioidrunstraceidevents) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/runs/{traceId}/events | Возобновить ожидающий сценарий
*ProfilesApi* | [**postProfilesProfileIdScenariosScenarioIdWebhook**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosscenarioidwebhook) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/webhook | Запустить сценарий вебхуком
*ProfilesApi* | [**postProfilesProfileIdScenariosScenarioIdWebhookSecret**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariosscenarioidwebhooksecret) | **POST** /profiles/{profileId}/scenarios/{scenarioId}/webhook-secret | Выпустить public webhook secret
*ProfilesApi* | [**postProfilesProfileIdScenariosSimulate**](docs/Api/ProfilesApi.md#postprofilesprofileidscenariossimulate) | **POST** /profiles/{profileId}/scenarios/simulate | Симулировать сценарий
*ProfilesApi* | [**postProfilesViews**](docs/Api/ProfilesApi.md#postprofilesviews) | **POST** /profiles/views | Создать вид списка профилей
*ProfilesApi* | [**putProfilesProfileIdAutoRenew**](docs/Api/ProfilesApi.md#putprofilesprofileidautorenew) | **PUT** /profiles/{profileId}/auto-renew | Обновить автопродление профиля
*ProfilesApi* | [**putProfilesProfileIdScenarios**](docs/Api/ProfilesApi.md#putprofilesprofileidscenarios) | **PUT** /profiles/{profileId}/scenarios | Создать или обновить сценарий профиля
*ProfilesApi* | [**putProfilesProfileIdScenariosScenarioIdPresence**](docs/Api/ProfilesApi.md#putprofilesprofileidscenariosscenarioidpresence) | **PUT** /profiles/{profileId}/scenarios/{scenarioId}/presence | Присутствие в редакторе
*SessionsApi* | [**deleteProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#deleteprofilesprofileidintegrationsintegrationsession) | **DELETE** /profiles/{profileId}/integrations/{integration}/session | Очистить текущую сессию
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationDevices**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationdevices) | **GET** /profiles/{profileId}/integrations/{integration}/devices | Получить активные устройства (MAX)
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsession) | **GET** /profiles/{profileId}/integrations/{integration}/session | Получить данные текущей сессии
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSessionChats**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsessionchats) | **GET** /profiles/{profileId}/integrations/{integration}/session/chats | Получить чаты текущей сессии
*SessionsApi* | [**getProfilesProfileIdIntegrationsIntegrationSessions**](docs/Api/SessionsApi.md#getprofilesprofileidintegrationsintegrationsessions) | **GET** /profiles/{profileId}/integrations/{integration}/sessions | Получить активные сессии (MAX)
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionEvents**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionevents) | **POST** /profiles/{profileId}/integrations/{integration}/session/events | Получить события текущей сессии
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStart**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionstart) | **POST** /profiles/{profileId}/integrations/{integration}/session/start | Запустить интеграционную сессию
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionStop**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionstop) | **POST** /profiles/{profileId}/integrations/{integration}/session/stop | Остановить интеграционную сессию
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSessionsClose**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsessionsclose) | **POST** /profiles/{profileId}/integrations/{integration}/sessions/close | Завершить остальные MAX-сессии
*SessionsApi* | [**postProfilesProfileIdIntegrationsIntegrationSync**](docs/Api/SessionsApi.md#postprofilesprofileidintegrationsintegrationsync) | **POST** /profiles/{profileId}/integrations/{integration}/sync | Синхронизировать профиль с интеграцией
*SessionsApi* | [**putProfilesProfileIdIntegrationsIntegrationSession**](docs/Api/SessionsApi.md#putprofilesprofileidintegrationsintegrationsession) | **PUT** /profiles/{profileId}/integrations/{integration}/session | Сохранить данные текущей сессии
*SettingsApi* | [**getProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/SettingsApi.md#getprofilesprofileidintegrationsintegrationsettingsuser) | **GET** /profiles/{profileId}/integrations/{integration}/settings/user | Получить настройки аккаунта (MAX)
*SettingsApi* | [**patchProfilesProfileIdIntegrationsIntegrationSettingsUser**](docs/Api/SettingsApi.md#patchprofilesprofileidintegrationsintegrationsettingsuser) | **PATCH** /profiles/{profileId}/integrations/{integration}/settings/user | Обновить настройки аккаунта (MAX)
*WebhooksApi* | [**deleteProfilesProfileIdIntegrationsIntegrationWebhook**](docs/Api/WebhooksApi.md#deleteprofilesprofileidintegrationsintegrationwebhook) | **DELETE** /profiles/{profileId}/integrations/{integration}/webhook | Отключить входящий webhook интеграции
*WebhooksApi* | [**deleteProfilesProfileIdIntegrationsIntegrationWebhooksId**](docs/Api/WebhooksApi.md#deleteprofilesprofileidintegrationsintegrationwebhooksid) | **DELETE** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Удалить вебхук
*WebhooksApi* | [**getProfilesProfileIdIntegrationsIntegrationWebhook**](docs/Api/WebhooksApi.md#getprofilesprofileidintegrationsintegrationwebhook) | **GET** /profiles/{profileId}/integrations/{integration}/webhook | Получить входящий webhook интеграции
*WebhooksApi* | [**getProfilesProfileIdIntegrationsIntegrationWebhooks**](docs/Api/WebhooksApi.md#getprofilesprofileidintegrationsintegrationwebhooks) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks | Получить список вебхуков
*WebhooksApi* | [**getProfilesProfileIdIntegrationsIntegrationWebhooksDlq**](docs/Api/WebhooksApi.md#getprofilesprofileidintegrationsintegrationwebhooksdlq) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/dlq | Получить сообщения DLQ вебхуков
*WebhooksApi* | [**getProfilesProfileIdIntegrationsIntegrationWebhooksEvents**](docs/Api/WebhooksApi.md#getprofilesprofileidintegrationsintegrationwebhooksevents) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/events | Получить каталог событий вебхуков
*WebhooksApi* | [**getProfilesProfileIdIntegrationsIntegrationWebhooksId**](docs/Api/WebhooksApi.md#getprofilesprofileidintegrationsintegrationwebhooksid) | **GET** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Получить вебхук
*WebhooksApi* | [**patchProfilesProfileIdIntegrationsIntegrationWebhooksId**](docs/Api/WebhooksApi.md#patchprofilesprofileidintegrationsintegrationwebhooksid) | **PATCH** /profiles/{profileId}/integrations/{integration}/webhooks/{id} | Обновить вебхук
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhookSubscribe**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhooksubscribe) | **POST** /profiles/{profileId}/integrations/{integration}/webhook/subscribe | Подписать входящий webhook интеграции
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhookUnsubscribe**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhookunsubscribe) | **POST** /profiles/{profileId}/integrations/{integration}/webhook/unsubscribe | Отключить входящий webhook интеграции
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhooks**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhooks) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks | Создать вебхук
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhooksCheck**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhookscheck) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/check | Проверить адрес вебхука
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhooksDlqRedrive**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhooksdlqredrive) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/dlq/redrive | Повторно отправить сообщения из DLQ
*WebhooksApi* | [**postProfilesProfileIdIntegrationsIntegrationWebhooksIdTest**](docs/Api/WebhooksApi.md#postprofilesprofileidintegrationsintegrationwebhooksidtest) | **POST** /profiles/{profileId}/integrations/{integration}/webhooks/{id}/test | Отправить тестовый вебхук

## Models

- [AppliedPromotionSummary](docs/Model/AppliedPromotionSummary.md)
- [AuthorizationResultData](docs/Model/AuthorizationResultData.md)
- [BillingInvoiceItem](docs/Model/BillingInvoiceItem.md)
- [BotTokenInputBody](docs/Model/BotTokenInputBody.md)
- [BotTokenResponseBody](docs/Model/BotTokenResponseBody.md)
- [BotTokenSetResponseBody](docs/Model/BotTokenSetResponseBody.md)
- [ChatHistoryInputBody](docs/Model/ChatHistoryInputBody.md)
- [Company](docs/Model/Company.md)
- [CompanyLookupOutputBody](docs/Model/CompanyLookupOutputBody.md)
- [ContactCheckInputBody](docs/Model/ContactCheckInputBody.md)
- [ContactCheckResponseBody](docs/Model/ContactCheckResponseBody.md)
- [ContactsListHumaBody](docs/Model/ContactsListHumaBody.md)
- [ConversationActionInputBody](docs/Model/ConversationActionInputBody.md)
- [ConversationActionResponseBody](docs/Model/ConversationActionResponseBody.md)
- [ConversationAvatarInputBody](docs/Model/ConversationAvatarInputBody.md)
- [ConversationAvatarMeta](docs/Model/ConversationAvatarMeta.md)
- [ConversationAvatarResponseBody](docs/Model/ConversationAvatarResponseBody.md)
- [ConversationMeta](docs/Model/ConversationMeta.md)
- [CreateAuthShareBody](docs/Model/CreateAuthShareBody.md)
- [CreateAuthShareResponse](docs/Model/CreateAuthShareResponse.md)
- [CreateBillingInvoiceInputBody](docs/Model/CreateBillingInvoiceInputBody.md)
- [CreateProfileInputBody](docs/Model/CreateProfileInputBody.md)
- [DeleteMessageBody](docs/Model/DeleteMessageBody.md)
- [DeleteMessageInputBody](docs/Model/DeleteMessageInputBody.md)
- [DeleteProfilesProfileIdAuthShareResponse](docs/Model/DeleteProfilesProfileIdAuthShareResponse.md)
- [EditMessageInputBody](docs/Model/EditMessageInputBody.md)
- [EmailSMTPConfigResponseBody](docs/Model/EmailSMTPConfigResponseBody.md)
- [EmailSMTPSetInputBody](docs/Model/EmailSMTPSetInputBody.md)
- [EmailSMTPSetResponseBody](docs/Model/EmailSMTPSetResponseBody.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [ForwardMessageInputBody](docs/Model/ForwardMessageInputBody.md)
- [InboxConversationItem](docs/Model/InboxConversationItem.md)
- [InboxConversationsListResponseBody](docs/Model/InboxConversationsListResponseBody.md)
- [InboxMessageItem](docs/Model/InboxMessageItem.md)
- [InboxMessagesListResponseBody](docs/Model/InboxMessagesListResponseBody.md)
- [InboxReadInputBody](docs/Model/InboxReadInputBody.md)
- [InboxReadResponseBody](docs/Model/InboxReadResponseBody.md)
- [Item](docs/Model/Item.md)
- [LegalProfileBody](docs/Model/LegalProfileBody.md)
- [ListBillingInvoicesOutputBody](docs/Model/ListBillingInvoicesOutputBody.md)
- [LogoutBody](docs/Model/LogoutBody.md)
- [MaxBlockedContactsResponseBody](docs/Model/MaxBlockedContactsResponseBody.md)
- [MaxChannelInviteInputBody](docs/Model/MaxChannelInviteInputBody.md)
- [MaxChannelInviteResponseBody](docs/Model/MaxChannelInviteResponseBody.md)
- [MaxChatMembersInputBody](docs/Model/MaxChatMembersInputBody.md)
- [MaxChatMembersResponseBody](docs/Model/MaxChatMembersResponseBody.md)
- [MaxChatSubscriptionInputBody](docs/Model/MaxChatSubscriptionInputBody.md)
- [MaxChatSubscriptionResponseBody](docs/Model/MaxChatSubscriptionResponseBody.md)
- [MaxChatUpdateInputBody](docs/Model/MaxChatUpdateInputBody.md)
- [MaxChatUpdateResponseBody](docs/Model/MaxChatUpdateResponseBody.md)
- [MaxChatsByIDsInputBody](docs/Model/MaxChatsByIDsInputBody.md)
- [MaxChatsByIDsResponseBody](docs/Model/MaxChatsByIDsResponseBody.md)
- [MaxChatsListInputBody](docs/Model/MaxChatsListInputBody.md)
- [MaxChatsListResponseBody](docs/Model/MaxChatsListResponseBody.md)
- [MaxCloseSessionsResponseBody](docs/Model/MaxCloseSessionsResponseBody.md)
- [MaxContact](docs/Model/MaxContact.md)
- [MaxContactAddInputBody](docs/Model/MaxContactAddInputBody.md)
- [MaxContactAddResponseBody](docs/Model/MaxContactAddResponseBody.md)
- [MaxContactName](docs/Model/MaxContactName.md)
- [MaxContactsByIDsInputBody](docs/Model/MaxContactsByIDsInputBody.md)
- [MaxContactsByIDsResponseBody](docs/Model/MaxContactsByIDsResponseBody.md)
- [MaxContactsLastOnlineInputBody](docs/Model/MaxContactsLastOnlineInputBody.md)
- [MaxContactsLastOnlineResponseBody](docs/Model/MaxContactsLastOnlineResponseBody.md)
- [MaxCreateFolderInputBody](docs/Model/MaxCreateFolderInputBody.md)
- [MaxFileResolveInputBody](docs/Model/MaxFileResolveInputBody.md)
- [MaxFileResolveResponseBody](docs/Model/MaxFileResolveResponseBody.md)
- [MaxFolder](docs/Model/MaxFolder.md)
- [MaxFoldersResponseBody](docs/Model/MaxFoldersResponseBody.md)
- [MaxGenericActionResponseBody](docs/Model/MaxGenericActionResponseBody.md)
- [MaxLinkInfoInputBody](docs/Model/MaxLinkInfoInputBody.md)
- [MaxLinkInfoResponseBody](docs/Model/MaxLinkInfoResponseBody.md)
- [MaxMessageTranscriptionInputBody](docs/Model/MaxMessageTranscriptionInputBody.md)
- [MaxMessageTranscriptionResponseBody](docs/Model/MaxMessageTranscriptionResponseBody.md)
- [MaxPollCloseInputBody](docs/Model/MaxPollCloseInputBody.md)
- [MaxPollUpdateInputBody](docs/Model/MaxPollUpdateInputBody.md)
- [MaxPollVoteInputBody](docs/Model/MaxPollVoteInputBody.md)
- [MaxProfile](docs/Model/MaxProfile.md)
- [MaxReorderFoldersInputBody](docs/Model/MaxReorderFoldersInputBody.md)
- [MaxResolveChatByPhoneInputBody](docs/Model/MaxResolveChatByPhoneInputBody.md)
- [MaxResolveChatByPhoneResponseBody](docs/Model/MaxResolveChatByPhoneResponseBody.md)
- [MaxSession](docs/Model/MaxSession.md)
- [MaxSessionsResponseBody](docs/Model/MaxSessionsResponseBody.md)
- [MaxSetProfileInputBody](docs/Model/MaxSetProfileInputBody.md)
- [MaxSetProfileResponseBody](docs/Model/MaxSetProfileResponseBody.md)
- [MaxSetUserSettingsInputBody](docs/Model/MaxSetUserSettingsInputBody.md)
- [MaxUploadURLInputBody](docs/Model/MaxUploadURLInputBody.md)
- [MaxUploadURLResponseBody](docs/Model/MaxUploadURLResponseBody.md)
- [MaxUserSettingsPatch](docs/Model/MaxUserSettingsPatch.md)
- [MaxUserSettingsResponseBody](docs/Model/MaxUserSettingsResponseBody.md)
- [MaxUserSettingsState](docs/Model/MaxUserSettingsState.md)
- [MaxVideoResolveInputBody](docs/Model/MaxVideoResolveInputBody.md)
- [MaxVideoResolveResponseBody](docs/Model/MaxVideoResolveResponseBody.md)
- [MaxWebAppInitInputBody](docs/Model/MaxWebAppInitInputBody.md)
- [MaxWebAppInitResponseBody](docs/Model/MaxWebAppInitResponseBody.md)
- [MessageResponseBody](docs/Model/MessageResponseBody.md)
- [Password2FAInputBody](docs/Model/Password2FAInputBody.md)
- [PhoneAuthCodeInputBody](docs/Model/PhoneAuthCodeInputBody.md)
- [PhoneAuthCodeResponseBody](docs/Model/PhoneAuthCodeResponseBody.md)
- [PhoneAuthConfirmInputBody](docs/Model/PhoneAuthConfirmInputBody.md)
- [PhoneAuthConfirmResponseBody](docs/Model/PhoneAuthConfirmResponseBody.md)
- [PhoneAuthPasswordInputBody](docs/Model/PhoneAuthPasswordInputBody.md)
- [PhoneAuthPasswordResponseBody](docs/Model/PhoneAuthPasswordResponseBody.md)
- [PhoneAuthStartInputBody](docs/Model/PhoneAuthStartInputBody.md)
- [PhoneAuthStartResponseBody](docs/Model/PhoneAuthStartResponseBody.md)
- [Poll](docs/Model/Poll.md)
- [PollAuthorizationBody](docs/Model/PollAuthorizationBody.md)
- [PollAuthorizationInputBody](docs/Model/PollAuthorizationInputBody.md)
- [ProfileActionItem](docs/Model/ProfileActionItem.md)
- [ProfileActionsListResponseBody](docs/Model/ProfileActionsListResponseBody.md)
- [ProfileListViewBody](docs/Model/ProfileListViewBody.md)
- [ProfileListViewCreateInputBody](docs/Model/ProfileListViewCreateInputBody.md)
- [ProfileListViewDeleteResponseBody](docs/Model/ProfileListViewDeleteResponseBody.md)
- [ProfileListViewsResponseBody](docs/Model/ProfileListViewsResponseBody.md)
- [ProfileOverviewBody](docs/Model/ProfileOverviewBody.md)
- [ProfileReadinessBody](docs/Model/ProfileReadinessBody.md)
- [ProfileReadinessChecksBody](docs/Model/ProfileReadinessChecksBody.md)
- [ProfileRenewOutputBody](docs/Model/ProfileRenewOutputBody.md)
- [ProfileResponse](docs/Model/ProfileResponse.md)
- [ProfilesBulkInputBody](docs/Model/ProfilesBulkInputBody.md)
- [ProfilesBulkItemError](docs/Model/ProfilesBulkItemError.md)
- [ProfilesBulkItemResult](docs/Model/ProfilesBulkItemResult.md)
- [ProfilesBulkMatchFilter](docs/Model/ProfilesBulkMatchFilter.md)
- [ProfilesBulkOutputBody](docs/Model/ProfilesBulkOutputBody.md)
- [ProfilesIDsResponseBody](docs/Model/ProfilesIDsResponseBody.md)
- [ProfilesListResponseBody](docs/Model/ProfilesListResponseBody.md)
- [ProfilesListSummaryBody](docs/Model/ProfilesListSummaryBody.md)
- [ProfilesListSummaryBodyExpiringWithinDaysStruct](docs/Model/ProfilesListSummaryBodyExpiringWithinDaysStruct.md)
- [ProfilesListSummaryBodyOwnershipStruct](docs/Model/ProfilesListSummaryBodyOwnershipStruct.md)
- [ProfilesListSummaryBodyReadinessStruct](docs/Model/ProfilesListSummaryBodyReadinessStruct.md)
- [ProfilesListSummaryBodySubscriptionStruct](docs/Model/ProfilesListSummaryBodySubscriptionStruct.md)
- [QRStatusResponseBody](docs/Model/QRStatusResponseBody.md)
- [QuotaResponse](docs/Model/QuotaResponse.md)
- [QuotasListResponseBody](docs/Model/QuotasListResponseBody.md)
- [ReactionRef](docs/Model/ReactionRef.md)
- [ReactionStruct](docs/Model/ReactionStruct.md)
- [ReadChatBody](docs/Model/ReadChatBody.md)
- [ReadChatHumaInputBody](docs/Model/ReadChatHumaInputBody.md)
- [RebootProfileBody](docs/Model/RebootProfileBody.md)
- [RefreshBillingInvoiceOutputBody](docs/Model/RefreshBillingInvoiceOutputBody.md)
- [RemoveReactionBody](docs/Model/RemoveReactionBody.md)
- [RemoveReactionHumaInputBody](docs/Model/RemoveReactionHumaInputBody.md)
- [RenewProfileInputBody](docs/Model/RenewProfileInputBody.md)
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
- [SessionSetResponseBody](docs/Model/SessionSetResponseBody.md)
- [SessionStartInputBody](docs/Model/SessionStartInputBody.md)
- [SessionStartResponseBody](docs/Model/SessionStartResponseBody.md)
- [SessionStopResponseBody](docs/Model/SessionStopResponseBody.md)
- [StartAuthorizationBody](docs/Model/StartAuthorizationBody.md)
- [StartAuthorizationInputBody](docs/Model/StartAuthorizationInputBody.md)
- [StateProfileBody](docs/Model/StateProfileBody.md)
- [SyncProfileInputBody](docs/Model/SyncProfileInputBody.md)
- [SyncProfileResponseBody](docs/Model/SyncProfileResponseBody.md)
- [TopUpInputBody](docs/Model/TopUpInputBody.md)
- [TopUpResponseBody](docs/Model/TopUpResponseBody.md)
- [TopUpStatusResponseBody](docs/Model/TopUpStatusResponseBody.md)
- [TopUpStatusResponseItem](docs/Model/TopUpStatusResponseItem.md)
- [TopUpsListResponseBody](docs/Model/TopUpsListResponseBody.md)
- [TransactionItem](docs/Model/TransactionItem.md)
- [TransactionsListResponseBody](docs/Model/TransactionsListResponseBody.md)
- [UpdateProfileAutoRenewInputBody](docs/Model/UpdateProfileAutoRenewInputBody.md)
- [UpdateProfileInputBody](docs/Model/UpdateProfileInputBody.md)
- [WABAMessageTemplateItem](docs/Model/WABAMessageTemplateItem.md)
- [WABAMessageTemplatesResponseBody](docs/Model/WABAMessageTemplatesResponseBody.md)

## Authorization

Authentication schemes defined for the API:
### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Profile-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `devel`
    - Generator version: `7.20.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
