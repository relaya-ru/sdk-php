# # BillingInvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | Ссылка на JSON Schema этой модели. | [optional] [readonly]
**act_available** | **bool** | Признак &#x60;actAvailable&#x60; (true/false). |
**amount_cents** | **int** | Сумма в копейках или минимальных единицах валюты. |
**created_at** | **\DateTime** | Время создания сущности в UTC. |
**credited_at** | **\DateTime** | Время в UTC. | [optional]
**currency** | **string** | Код валюты в формате ISO 4217. |
**due_date** | **\DateTime** | Значение поля &#x60;dueDate&#x60;. | [optional]
**error_message** | **string** | Текст ошибки от внешнего провайдера или внутреннего обработчика. | [optional]
**incoming_invoice_url** | **string** | Ссылка на внешний ресурс. | [optional]
**invoice_date** | **\DateTime** | Значение поля &#x60;invoiceDate&#x60;. | [optional]
**invoice_id** | **string** | Идентификатор записи или внешнего ресурса. |
**invoice_number** | **string** | Значение поля &#x60;invoiceNumber&#x60;. |
**paid_at** | **\DateTime** | Время в UTC. | [optional]
**pdf_url** | **string** | Ссылка на внешний ресурс. | [optional]
**provider_invoice_id** | **string** | Идентификатор записи или внешнего ресурса. | [optional]
**status** | **string** | Текущий статус сущности. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
