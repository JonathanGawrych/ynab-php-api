# YNAB\TransactionsApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTransaction**](TransactionsApi.md#createtransaction) | **POST** /budgets/{budget_id}/transactions | Create a single transaction or multiple transactions
[**deleteTransaction**](TransactionsApi.md#deletetransaction) | **DELETE** /budgets/{budget_id}/transactions/{transaction_id} | Deletes an existing transaction
[**getTransactionById**](TransactionsApi.md#gettransactionbyid) | **GET** /budgets/{budget_id}/transactions/{transaction_id} | Single transaction
[**getTransactions**](TransactionsApi.md#gettransactions) | **GET** /budgets/{budget_id}/transactions | List transactions
[**getTransactionsByAccount**](TransactionsApi.md#gettransactionsbyaccount) | **GET** /budgets/{budget_id}/accounts/{account_id}/transactions | List account transactions
[**getTransactionsByCategory**](TransactionsApi.md#gettransactionsbycategory) | **GET** /budgets/{budget_id}/categories/{category_id}/transactions | List category transactions, excluding any pending transactions
[**getTransactionsByMonth**](TransactionsApi.md#gettransactionsbymonth) | **GET** /budgets/{budget_id}/months/{month}/transactions | List transactions in month, excluding any pending transactions
[**getTransactionsByPayee**](TransactionsApi.md#gettransactionsbypayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/transactions | List payee transactions, excluding any pending transactions
[**importTransactions**](TransactionsApi.md#importtransactions) | **POST** /budgets/{budget_id}/transactions/import | Import transactions
[**updateTransaction**](TransactionsApi.md#updatetransaction) | **PUT** /budgets/{budget_id}/transactions/{transaction_id} | Updates an existing transaction
[**updateTransactions**](TransactionsApi.md#updatetransactions) | **PATCH** /budgets/{budget_id}/transactions | Update multiple transactions

# **createTransaction**
> \YNAB\Model\SaveTransactionsResponse createTransaction($body, $budget_id)

Create a single transaction or multiple transactions

Creates a single transaction or multiple transactions.  If you provide a body containing a `transaction` object, a single transaction will be created and if you provide a body containing a `transactions` array, multiple transactions will be created.  Scheduled transactions (transactions with a future date) cannot be created on this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \YNAB\Model\PostTransactionsWrapper(); // \YNAB\Model\PostTransactionsWrapper | The transaction or transactions to create.  To create a single transaction you can specify a value for the `transaction` object and to create multiple transactions you can specify an array of `transactions`.  It is expected that you will only provide a value for one of these objects.
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->createTransaction($body, $budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YNAB\Model\PostTransactionsWrapper**](../Model/PostTransactionsWrapper.md)| The transaction or transactions to create.  To create a single transaction you can specify a value for the &#x60;transaction&#x60; object and to create multiple transactions you can specify an array of &#x60;transactions&#x60;.  It is expected that you will only provide a value for one of these objects. |
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\SaveTransactionsResponse**](../Model/SaveTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransaction**
> \YNAB\Model\TransactionResponse deleteTransaction($budget_id, $transaction_id)

Deletes an existing transaction

Deletes a transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$transaction_id = "transaction_id_example"; // string | The id of the transaction

try {
    $result = $apiInstance->deleteTransaction($budget_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **transaction_id** | **string**| The id of the transaction |

### Return type

[**\YNAB\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionById**
> \YNAB\Model\TransactionResponse getTransactionById($budget_id, $transaction_id)

Single transaction

Returns a single transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$transaction_id = "transaction_id_example"; // string | The id of the transaction

try {
    $result = $apiInstance->getTransactionById($budget_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **transaction_id** | **string**| The id of the transaction |

### Return type

[**\YNAB\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \YNAB\Model\TransactionsResponse getTransactions($budget_id, $since_date, $type, $last_knowledge_of_server)

List transactions

Returns budget transactions, excluding any pending transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$since_date = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactions($budget_id, $since_date, $type, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **since_date** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByAccount**
> \YNAB\Model\TransactionsResponse getTransactionsByAccount($budget_id, $account_id, $since_date, $type, $last_knowledge_of_server)

List account transactions

Returns all transactions for a specified account, excluding any pending transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$account_id = "account_id_example"; // string | The id of the account
$since_date = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByAccount($budget_id, $account_id, $since_date, $type, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **account_id** | **string**| The id of the account |
 **since_date** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\TransactionsResponse**](../Model/TransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByCategory**
> \YNAB\Model\HybridTransactionsResponse getTransactionsByCategory($budget_id, $category_id, $since_date, $type, $last_knowledge_of_server)

List category transactions, excluding any pending transactions

Returns all transactions for a specified category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$category_id = "category_id_example"; // string | The id of the category
$since_date = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByCategory($budget_id, $category_id, $since_date, $type, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **category_id** | **string**| The id of the category |
 **since_date** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByMonth**
> \YNAB\Model\HybridTransactionsResponse getTransactionsByMonth($budget_id, $month, $since_date, $type, $last_knowledge_of_server)

List transactions in month, excluding any pending transactions

Returns all transactions for a specified month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$month = "month_example"; // string | The budget month in ISO format (e.g. 2016-12-01) (\"current\" can also be used to specify the current calendar month (UTC))
$since_date = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByMonth($budget_id, $month, $since_date, $type, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByMonth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **month** | **string**| The budget month in ISO format (e.g. 2016-12-01) (\&quot;current\&quot; can also be used to specify the current calendar month (UTC)) |
 **since_date** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsByPayee**
> \YNAB\Model\HybridTransactionsResponse getTransactionsByPayee($budget_id, $payee_id, $since_date, $type, $last_knowledge_of_server)

List payee transactions, excluding any pending transactions

Returns all transactions for a specified payee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$payee_id = "payee_id_example"; // string | The id of the payee
$since_date = new \DateTime("2013-10-20"); // \DateTime | If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30).
$type = "type_example"; // string | If specified, only transactions of the specified type will be included. \"uncategorized\" and \"unapproved\" are currently supported.
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getTransactionsByPayee($budget_id, $payee_id, $since_date, $type, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsByPayee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **payee_id** | **string**| The id of the payee |
 **since_date** | **\DateTime**| If specified, only transactions on or after this date will be included.  The date should be ISO formatted (e.g. 2016-12-30). | [optional]
 **type** | **string**| If specified, only transactions of the specified type will be included. \&quot;uncategorized\&quot; and \&quot;unapproved\&quot; are currently supported. | [optional]
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\HybridTransactionsResponse**](../Model/HybridTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importTransactions**
> \YNAB\Model\TransactionsImportResponse importTransactions($budget_id)

Import transactions

Imports available transactions on all linked accounts for the given budget.  Linked accounts allow transactions to be imported directly from a specified financial institution and this endpoint initiates that import.  Sending a request to this endpoint is the equivalent of clicking \"Import\" on each account in the web application or tapping the \"New Transactions\" banner in the mobile applications.  The response for this endpoint contains the transaction ids that have been imported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->importTransactions($budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->importTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\TransactionsImportResponse**](../Model/TransactionsImportResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \YNAB\Model\TransactionResponse updateTransaction($body, $budget_id, $transaction_id)

Updates an existing transaction

Updates a single transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \YNAB\Model\PutTransactionWrapper(); // \YNAB\Model\PutTransactionWrapper | The transaction to update
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$transaction_id = "transaction_id_example"; // string | The id of the transaction

try {
    $result = $apiInstance->updateTransaction($body, $budget_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YNAB\Model\PutTransactionWrapper**](../Model/PutTransactionWrapper.md)| The transaction to update |
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **transaction_id** | **string**| The id of the transaction |

### Return type

[**\YNAB\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransactions**
> \YNAB\Model\SaveTransactionsResponse updateTransactions($body, $budget_id)

Update multiple transactions

Updates multiple transactions, by `id` or `import_id`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \YNAB\Model\PatchTransactionsWrapper(); // \YNAB\Model\PatchTransactionsWrapper | The transactions to update. Each transaction must have either an `id` or `import_id` specified. If `id` is specified as null an `import_id` value can be provided which will allow transaction(s) to be updated by its `import_id`. If an `id` is specified, it will always be used for lookup.  You should not specify both `id` and `import_id`.  Updating an `import_id` on an existing transaction is not allowed; if an `import_id` is specified, it will only be used to lookup the transaction.
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->updateTransactions($body, $budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YNAB\Model\PatchTransactionsWrapper**](../Model/PatchTransactionsWrapper.md)| The transactions to update. Each transaction must have either an &#x60;id&#x60; or &#x60;import_id&#x60; specified. If &#x60;id&#x60; is specified as null an &#x60;import_id&#x60; value can be provided which will allow transaction(s) to be updated by its &#x60;import_id&#x60;. If an &#x60;id&#x60; is specified, it will always be used for lookup.  You should not specify both &#x60;id&#x60; and &#x60;import_id&#x60;.  Updating an &#x60;import_id&#x60; on an existing transaction is not allowed; if an &#x60;import_id&#x60; is specified, it will only be used to lookup the transaction. |
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\SaveTransactionsResponse**](../Model/SaveTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

