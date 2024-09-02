# YNAB\UserApi

All URIs are relative to *https://api.ynab.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser**](UserApi.md#getuser) | **GET** /user | User info

# **getUser**
> \YNAB\Model\UserResponse getUser()

User info

Returns authenticated user information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = YNAB\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YNAB\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\YNAB\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

