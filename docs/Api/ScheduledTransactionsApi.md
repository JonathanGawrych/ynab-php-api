# YNAB\ScheduledTransactionsApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduledTransaction**](ScheduledTransactionsApi.md#createscheduledtransaction) | **POST** /budgets/{budget_id}/scheduled_transactions | Create a single scheduled transaction
[**getScheduledTransactionById**](ScheduledTransactionsApi.md#getscheduledtransactionbyid) | **GET** /budgets/{budget_id}/scheduled_transactions/{scheduled_transaction_id} | Single scheduled transaction
[**getScheduledTransactions**](ScheduledTransactionsApi.md#getscheduledtransactions) | **GET** /budgets/{budget_id}/scheduled_transactions | List scheduled transactions

# **createScheduledTransaction**
> \YNAB\Model\ScheduledTransactionResponse createScheduledTransaction($body, $budget_id)

Create a single scheduled transaction

Creates a single scheduled transaction (a transaction with a future date).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\ScheduledTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \YNAB\Model\PostScheduledTransactionWrapper(); // \YNAB\Model\PostScheduledTransactionWrapper | The scheduled transaction to create
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->createScheduledTransaction($body, $budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTransactionsApi->createScheduledTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YNAB\Model\PostScheduledTransactionWrapper**](../Model/PostScheduledTransactionWrapper.md)| The scheduled transaction to create |
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\ScheduledTransactionResponse**](../Model/ScheduledTransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTransactionById**
> \YNAB\Model\ScheduledTransactionResponse getScheduledTransactionById($budget_id, $scheduled_transaction_id)

Single scheduled transaction

Returns a single scheduled transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\ScheduledTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$scheduled_transaction_id = "scheduled_transaction_id_example"; // string | The id of the scheduled transaction

try {
    $result = $apiInstance->getScheduledTransactionById($budget_id, $scheduled_transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTransactionsApi->getScheduledTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **scheduled_transaction_id** | **string**| The id of the scheduled transaction |

### Return type

[**\YNAB\Model\ScheduledTransactionResponse**](../Model/ScheduledTransactionResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTransactions**
> \YNAB\Model\ScheduledTransactionsResponse getScheduledTransactions($budget_id, $last_knowledge_of_server)

List scheduled transactions

Returns all scheduled transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\ScheduledTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getScheduledTransactions($budget_id, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTransactionsApi->getScheduledTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\ScheduledTransactionsResponse**](../Model/ScheduledTransactionsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

