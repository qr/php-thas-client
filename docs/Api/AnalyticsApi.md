# Thas\AnalyticsApi

All URIs are relative to *http://api.analytics.localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**learningAnalyticsCourseCoursePost**](AnalyticsApi.md#learningAnalyticsCourseCoursePost) | **POST** /learningAnalytics/course/{course} | 



## learningAnalyticsCourseCoursePost

> learningAnalyticsCourseCoursePost($course, $one_of_view_event_grade_event_assignable_event_adaptive_event_session_event_navigation_event_tool_use_event_media_event)



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
$course = 'course_example'; // string | the course
$one_of_view_event_grade_event_assignable_event_adaptive_event_session_event_navigation_event_tool_use_event_media_event = array(new \Thas\Model\array()); // OneOfViewEventGradeEventAssignableEventAdaptiveEventSessionEventNavigationEventToolUseEventMediaEvent[] | 

try {
    $apiInstance->learningAnalyticsCourseCoursePost($course, $one_of_view_event_grade_event_assignable_event_adaptive_event_session_event_navigation_event_tool_use_event_media_event);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->learningAnalyticsCourseCoursePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course** | **string**| the course |
 **one_of_view_event_grade_event_assignable_event_adaptive_event_session_event_navigation_event_tool_use_event_media_event** | [**OneOfViewEventGradeEventAssignableEventAdaptiveEventSessionEventNavigationEventToolUseEventMediaEvent[]**](../Model/array.md)|  | [optional]

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

