# ThasClient

First setup of an API to exchange Learning Analytics. This API is based on events (inspired by Caliper Analytics® Specification, version 1.1) that are send to the api. We use a number of events.  The view event is used to register page views for theory.  The grade event is used to register results of doing assignments. Such a result is modelled as a score.  The assesment event is used to register the completion of an assignment. This information is transfered as an attempt.  Both theory and assignments are considered digital resources. An assignment is an assignable digital resource.  A student is seen as an actor.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 0.4.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/qr/php-thas-client.git"
    }
  ],
  "require": {
    "qr/php-thas-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/ThasClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://api.analytics.localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnalyticsApi* | [**learningAnalyticsCourseCoursePost**](docs/Api/AnalyticsApi.md#learninganalyticscoursecoursepost) | **POST** /learningAnalytics/course/{course} | 


## Documentation For Models

 - [AdaptiveEvent](docs/Model/AdaptiveEvent.md)
 - [AssignableEvent](docs/Model/AssignableEvent.md)
 - [Attempt](docs/Model/Attempt.md)
 - [Event](docs/Model/Event.md)
 - [GradeEvent](docs/Model/GradeEvent.md)
 - [MediaEvent](docs/Model/MediaEvent.md)
 - [NavigationEvent](docs/Model/NavigationEvent.md)
 - [Score](docs/Model/Score.md)
 - [SessionEvent](docs/Model/SessionEvent.md)
 - [ToolUseEvent](docs/Model/ToolUseEvent.md)
 - [ViewEvent](docs/Model/ViewEvent.md)


## Documentation For Authorization



## JWT


- **Type**: Bearer authentication (JWT)


## Author



