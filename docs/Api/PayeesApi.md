# YNAB\PayeesApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayeeById**](PayeesApi.md#getpayeebyid) | **GET** /budgets/{budget_id}/payees/{payee_id} | Single payee
[**getPayees**](PayeesApi.md#getpayees) | **GET** /budgets/{budget_id}/payees | List payees
[**updatePayee**](PayeesApi.md#updatepayee) | **PATCH** /budgets/{budget_id}/payees/{payee_id} | Update a payee

# **getPayeeById**
> \YNAB\Model\PayeeResponse getPayeeById($budget_id, $payee_id)

Single payee

Returns a single payee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$payee_id = "payee_id_example"; // string | The id of the payee

try {
    $result = $apiInstance->getPayeeById($budget_id, $payee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeesApi->getPayeeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **payee_id** | **string**| The id of the payee |

### Return type

[**\YNAB\Model\PayeeResponse**](../Model/PayeeResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayees**
> \YNAB\Model\PayeesResponse getPayees($budget_id, $last_knowledge_of_server)

List payees

Returns all payees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$last_knowledge_of_server = 789; // int | The starting server knowledge.  If provided, only entities that have changed since `last_knowledge_of_server` will be included.

try {
    $result = $apiInstance->getPayees($budget_id, $last_knowledge_of_server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeesApi->getPayees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **last_knowledge_of_server** | **int**| The starting server knowledge.  If provided, only entities that have changed since &#x60;last_knowledge_of_server&#x60; will be included. | [optional]

### Return type

[**\YNAB\Model\PayeesResponse**](../Model/PayeesResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePayee**
> \YNAB\Model\SavePayeeResponse updatePayee($body, $budget_id, $payee_id)

Update a payee

Update a payee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \YNAB\Model\PatchPayeeWrapper(); // \YNAB\Model\PatchPayeeWrapper | The payee to update
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$payee_id = "payee_id_example"; // string | The id of the payee

try {
    $result = $apiInstance->updatePayee($body, $budget_id, $payee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeesApi->updatePayee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\YNAB\Model\PatchPayeeWrapper**](../Model/PatchPayeeWrapper.md)| The payee to update |
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **payee_id** | **string**| The id of the payee |

### Return type

[**\YNAB\Model\SavePayeeResponse**](../Model/SavePayeeResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

