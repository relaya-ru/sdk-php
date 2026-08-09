# # MaxUserSettingsResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**hash** | **string** | Хэш или ревизия набора настроек. | [optional]
**result** | **array<string,mixed>** | Сырой результат интеграции или дополнительный payload от внешнего API. | [optional]
**seq** | **int** | Последовательный номер команды или события MAX/WebSocket. |
**user** | [**\Relaya\Sdk\Model\MaxUserSettingsState**](MaxUserSettingsState.md) | Данные пользователя или учетной записи. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
