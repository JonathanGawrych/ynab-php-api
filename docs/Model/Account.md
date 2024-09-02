# Account

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** |  | 
**type** | [**\YNAB\Model\AccountType**](AccountType.md) |  | 
**on_budget** | **bool** | Whether this account is on budget or not | 
**closed** | **bool** | Whether this account is closed or not | 
**note** | **string** |  | [optional] 
**balance** | **int** | The current balance of the account in milliunits format | 
**cleared_balance** | **int** | The current cleared balance of the account in milliunits format | 
**uncleared_balance** | **int** | The current uncleared balance of the account in milliunits format | 
**transfer_payee_id** | **string** | The payee id which should be used when transferring to this account | 
**direct_import_linked** | **bool** | Whether or not the account is linked to a financial institution for automatic transaction import. | [optional] 
**direct_import_in_error** | **bool** | If an account linked to a financial institution (direct_import_linked&#x3D;true) and the linked connection is not in a healthy state, this will be true. | [optional] 
**last_reconciled_at** | [**\DateTime**](\DateTime.md) | A date/time specifying when the account was last reconciled. | [optional] 
**debt_original_balance** | **int** | The original debt/loan account balance, specified in milliunits format. | [optional] 
**debt_interest_rates** | [**\YNAB\Model\LoanAccountPeriodicValue**](LoanAccountPeriodicValue.md) |  | [optional] 
**debt_minimum_payments** | [**\YNAB\Model\LoanAccountPeriodicValue**](LoanAccountPeriodicValue.md) |  | [optional] 
**debt_escrow_amounts** | [**\YNAB\Model\LoanAccountPeriodicValue**](LoanAccountPeriodicValue.md) |  | [optional] 
**deleted** | **bool** | Whether or not the account has been deleted.  Deleted accounts will only be included in delta requests. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

