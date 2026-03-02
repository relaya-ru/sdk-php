# # UserMeResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | A URL to the JSON Schema for this object. | [optional] [readonly]
**balance** | **int** | Баланс в копейках |
**created** | **\DateTime** | Время создания аккаунта |
**email** | **string** | Email пользователя |
**email_verified_at** | **\DateTime** | Время подтверждения email | [optional]
**free_profile_eligible** | **bool** | Можно ли создавать бесплатные профили |
**max_free_profiles_per_account** | **int** | Лимит бесплатных профилей на аккаунт |
**phone_verified_at** | **\DateTime** | Время подтверждения телефона | [optional]
**telegram_verification_status** | **string** | Статус Telegram-верификации телефона |
**user_id** | **int** | ID пользователя |
**verified_phone_e164** | **string** | Подтвержденный телефон в формате E.164 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
