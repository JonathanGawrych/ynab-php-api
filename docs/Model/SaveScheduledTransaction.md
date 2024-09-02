# SaveScheduledTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | 
**date** | [**\DateTime**](\DateTime.md) | The scheduled transaction date in ISO format (e.g. 2016-12-01).  This should be a future date no more than 5 years into the future. | 
**amount** | **int** | The scheduled transaction amount in milliunits format. | [optional] 
**payee_id** | **string** | The payee for the scheduled transaction.  To create a transfer between two accounts, use the account transfer payee pointing to the target account.  Account transfer payees are specified as &#x60;transfer_payee_id&#x60; on the account resource. | [optional] 
**payee_name** | **string** | The payee name for the the scheduled transaction.  If a &#x60;payee_name&#x60; value is provided and &#x60;payee_id&#x60; has a null value, the &#x60;payee_name&#x60; value will be used to resolve the payee by either (1) a payee with the same name or (2) creation of a new payee. | [optional] 
**category_id** | **string** | The category for the scheduled transaction. Credit Card Payment categories are not permitted. Creating a split scheduled transaction is not currently supported. | [optional] 
**memo** | **string** |  | [optional] 
**flag_color** | [**\YNAB\Model\TransactionFlagColor**](TransactionFlagColor.md) |  | [optional] 
**frequency** | [**\YNAB\Model\ScheduledTransactionFrequency**](ScheduledTransactionFrequency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

