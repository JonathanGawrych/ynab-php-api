# HybridTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Whether the hybrid transaction represents a regular transaction or a subtransaction | 
**parent_transaction_id** | **string** | For subtransaction types, this is the id of the parent transaction.  For transaction types, this id will be always be null. | [optional] 
**account_name** | **string** |  | 
**payee_name** | **string** |  | [optional] 
**category_name** | **string** | The name of the category.  If a split transaction, this will be &#x27;Split&#x27;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

