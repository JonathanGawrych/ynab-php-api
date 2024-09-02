# YNAB\BudgetsApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBudgetById**](BudgetsApi.md#getbudgetbyid) | **GET** /budgets/{budget_id} | Single budget
[**getBudgetSettingsById**](BudgetsApi.md#getbudgetsettingsbyid) | **GET** /budgets/{budget_id}/settings | Budget Settings
[**getBudgets**](BudgetsApi.md#getbudgets) | **GET** /budgets | List budgets

# **getBudgetById**
> \YNAB\Model\BudgetDetailResponse getBudgetById($budget_id, $last_knowledge_of_server)

Single budget

Returns a single budget with all related entities.  This resource is effectively a full budget export.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getBudgetById($budget_id, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->getBudgetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\BudgetDetailResponse**](../Model/BudgetDetailResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBudgetSettingsById**
> \YNAB\Model\BudgetSettingsResponse getBudgetSettingsById($budget_id)

Budget Settings

Returns settings for a budget

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->getBudgetSettingsById($budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->getBudgetSettingsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\BudgetSettingsResponse**](../Model/BudgetSettingsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBudgets**
> \YNAB\Model\BudgetSummaryResponse getBudgets($include_accounts)

List budgets

Returns budgets list with summary information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\BudgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_accounts = true; // bool | Whether to include the list of budget accounts

try {
    $result = $apiInstance->getBudgets($include_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BudgetsApi->getBudgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_accounts** | **bool**| Whether to include the list of budget accounts | [optional]

### Return type

[**\YNAB\Model\BudgetSummaryResponse**](../Model/BudgetSummaryResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

