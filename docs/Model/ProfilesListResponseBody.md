# # ProfilesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**activity** | **string** | Значение поля &#x60;activity&#x60;. | [optional]
**can_manage** | **string** | Значение поля &#x60;canManage&#x60;. | [optional]
**connection** | **string** | Значение поля &#x60;connection&#x60;. | [optional]
**cursor** | **string** | Курсор пагинации для следующей страницы. | [optional]
**expiring_within_days** | **int** | Значение поля &#x60;expiringWithinDays&#x60;. | [optional]
**integration** | **string** | Код интеграции профиля. | [optional]
**integrations** | **string[]** | Список значений этого поля. | [optional]
**items** | [**\Relaya\Sdk\Model\ProfileResponse[]**](ProfileResponse.md) | Список элементов текущего ответа. |
**limit** | **int** | Максимальное количество элементов в ответе. |
**order** | **string** | Направление сортировки. | [optional]
**ownership** | **string** | Значение поля &#x60;ownership&#x60;. | [optional]
**query** | **string** | Поисковая строка, которая была использована для фильтрации. | [optional]
**readiness** | **string** | Значение поля &#x60;readiness&#x60;. | [optional]
**sort** | **string** | Значение поля &#x60;sort&#x60;. | [optional]
**subscription** | **string** | Значение поля &#x60;subscription&#x60;. | [optional]
**summary** | [**\Relaya\Sdk\Model\ProfilesListSummaryBody**](ProfilesListSummaryBody.md) | Значение поля &#x60;summary&#x60;. | [optional]
**total** | **int** | Общее количество элементов без учета пагинации. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
