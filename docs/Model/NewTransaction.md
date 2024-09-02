# NewTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**import_id** | **string** | If specified, a new transaction will be assigned this &#x60;import_id&#x60; and considered \&quot;imported\&quot;.  We will also attempt to match this imported transaction to an existing \&quot;user-entered\&quot; transaction on the same account, with the same amount, and with a date +/-10 days from the imported transaction date.&lt;br&gt;&lt;br&gt;Transactions imported through File Based Import or Direct Import (not through the API) are assigned an import_id in the format: &#x27;YNAB:[milliunit_amount]:[iso_date]:[occurrence]&#x27;. For example, a transaction dated 2015-12-30 in the amount of -$294.23 USD would have an import_id of &#x27;YNAB:-294230:2015-12-30:1&#x27;.  If a second transaction on the same account was imported and had the same date and same amount, its import_id would be &#x27;YNAB:-294230:2015-12-30:2&#x27;.  Using a consistent format will prevent duplicates through Direct Import and File Based Import.&lt;br&gt;&lt;br&gt;If import_id is omitted or specified as null, the transaction will be treated as a \&quot;user-entered\&quot; transaction. As such, it will be eligible to be matched against transactions later being imported (via DI, FBI, or API). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

