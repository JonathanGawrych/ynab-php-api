# YNAB\PayeeLocationsApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayeeLocationById**](PayeeLocationsApi.md#getpayeelocationbyid) | **GET** /budgets/{budget_id}/payee_locations/{payee_location_id} | Single payee location
[**getPayeeLocations**](PayeeLocationsApi.md#getpayeelocations) | **GET** /budgets/{budget_id}/payee_locations | List payee locations
[**getPayeeLocationsByPayee**](PayeeLocationsApi.md#getpayeelocationsbypayee) | **GET** /budgets/{budget_id}/payees/{payee_id}/payee_locations | List locations for a payee

# **getPayeeLocationById**
> \YNAB\Model\PayeeLocationResponse getPayeeLocationById($budget_id, $payee_location_id)

Single payee location

Returns a single payee location

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeeLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$payee_location_id = "payee_location_id_example"; // string | id of payee location

try {
    $result = $apiInstance->getPayeeLocationById($budget_id, $payee_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeLocationsApi->getPayeeLocationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **payee_location_id** | **string**| id of payee location |

### Return type

[**\YNAB\Model\PayeeLocationResponse**](../Model/PayeeLocationResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayeeLocations**
> \YNAB\Model\PayeeLocationsResponse getPayeeLocations($budget_id)

List payee locations

Returns all payee locations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeeLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).

try {
    $result = $apiInstance->getPayeeLocations($budget_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeLocationsApi->getPayeeLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |

### Return type

[**\YNAB\Model\PayeeLocationsResponse**](../Model/PayeeLocationsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayeeLocationsByPayee**
> \YNAB\Model\PayeeLocationsResponse getPayeeLocationsByPayee($budget_id, $payee_id)

List locations for a payee

Returns all payee locations for a specified payee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\PayeeLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$budget_id = "budget_id_example"; // string | The id of the budget. \"last-used\" can be used to specify the last used budget and \"default\" can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget).
$payee_id = "payee_id_example"; // string | id of payee

try {
    $result = $apiInstance->getPayeeLocationsByPayee($budget_id, $payee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayeeLocationsApi->getPayeeLocationsByPayee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **budget_id** | **string**| The id of the budget. \&quot;last-used\&quot; can be used to specify the last used budget and \&quot;default\&quot; can be used if default budget selection is enabled (see: https://api.ynab.com/#oauth-default-budget). |
 **payee_id** | **string**| id of payee |

### Return type

[**\YNAB\Model\PayeeLocationsResponse**](../Model/PayeeLocationsResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

