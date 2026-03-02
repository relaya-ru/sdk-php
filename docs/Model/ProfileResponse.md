# # ProfileResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schema** | **string** | A URL to the JSON Schema for this object. | [optional] [readonly]
**auto_renew** | **bool** | Whether auto-renewal is enabled |
**balance_after** | **int** | Balance after transaction (only for create/renew) | [optional]
**created** | **\DateTime** | Creation time |
**device_id** | **string** | Device identifier |
**integration_type** | **string** | Integration type |
**is_active** | **bool** | Whether the profile is active |
**is_authorized** | **bool** | Whether the profile is authorized in the third-party service |
**name** | **string** | Profile name |
**paid_until** | **\DateTime** | Paid until time |
**plan_tier** | **string** | Plan tier (paid, free) |
**price_cents** | **int** | Renewal price in cents |
**profile_id** | **string** | Unique profile identifier |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
