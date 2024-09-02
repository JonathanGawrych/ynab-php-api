# SaveTransactionWithOptionalFields

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The transaction date in ISO format (e.g. 2016-12-01).  Future dates (scheduled transactions) are not permitted.  Split transaction dates cannot be changed and if a different date is supplied it will be ignored. | [optional] 
**amount** | **int** | The transaction amount in milliunits format.  Split transaction amounts cannot be changed and if a different amount is supplied it will be ignored. | [optional] 
**payee_id** | **string** | The payee for the transaction.  To create a transfer between two accounts, use the account transfer payee pointing to the target account.  Account transfer payees are specified as &#x60;transfer_payee_id&#x60; on the account resource. | [optional] 
**payee_name** | **string** | The payee name.  If a &#x60;payee_name&#x60; value is provided and &#x60;payee_id&#x60; has a null value, the &#x60;payee_name&#x60; value will be used to resolve the payee by either (1) a matching payee rename rule (only if &#x60;import_id&#x60; is also specified) or (2) a payee with the same name or (3) creation of a new payee. | [optional] 
**category_id** | **string** | The category for the transaction.  To configure a split transaction, you can specify null for &#x60;category_id&#x60; and provide a &#x60;subtransactions&#x60; array as part of the transaction object.  If an existing transaction is a split, the &#x60;category_id&#x60; cannot be changed.  Credit Card Payment categories are not permitted and will be ignored if supplied. | [optional] 
**memo** | **string** |  | [optional] 
**cleared** | [**\YNAB\Model\TransactionClearedStatus**](TransactionClearedStatus.md) |  | [optional] 
**approved** | **bool** | Whether or not the transaction is approved.  If not supplied, transaction will be unapproved by default. | [optional] 
**flag_color** | [**\YNAB\Model\TransactionFlagColor**](TransactionFlagColor.md) |  | [optional] 
**subtransactions** | [**\YNAB\Model\SaveSubTransaction[]**](SaveSubTransaction.md) | An array of subtransactions to configure a transaction as a split. Updating &#x60;subtransactions&#x60; on an existing split transaction is not supported. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

