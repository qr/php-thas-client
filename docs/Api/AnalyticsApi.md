# Thas\AnalyticsApi

All URIs are relative to *http://thas.thiememeulenhoff.x-ip.nl/api/v1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learningAnalytics**](AnalyticsApi.md#learningAnalytics) | **POST** /learning_analytics | 
[**learningAnalyticsGet**](AnalyticsApi.md#learningAnalyticsGet) | **GET** /learning_analytics | 



## learningAnalytics

> learningAnalytics($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assesment_item_event)



This call can be used to post one or more events for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Thas\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thas\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assesment_item_event = array(new \Thas\Model\array()); // OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssesmentItemEvent[] | 

try {
    $apiInstance->learningAnalytics($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assesment_item_event);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->learningAnalytics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assesment_item_event** | [**OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssesmentItemEvent[]**](../Model/array.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## learningAnalyticsGet

> learningAnalyticsGet($course, $start_date, $end_date)



This call can be used to get events from a certain application. You can filter on streamcode (course) and set a limit on the daterange. The daterange cannot span over more than 31 days. **Please note:** Events that have not yet been completely processed by the application will not be part of the output.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWT
$config = Thas\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Thas\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course = 'course_example'; // string | The course you want to fetch data for
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621

try {
    $apiInstance->learningAnalyticsGet($course, $start_date, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->learningAnalyticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**| The course you want to fetch data for | [optional]
 **start_date** | **\DateTime**| The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 | [optional]
 **end_date** | **\DateTime**| The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 | [optional]

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

